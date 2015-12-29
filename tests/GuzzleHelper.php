<?php
/**
 * Created by PhpStorm.
 * User: michaeld
 * Date: 8/12/2015
 * Time: 3:58 PM
 */

namespace MediaFoundryTest;

use Mockery as m;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Handler\MockHandler;

trait GuzzleHelper
{

    /**
     * Generate a URI for the given endpoint, based on environment variables.
     *
     * @param  string  $endpoint
     *
     * @return string
     */
    public function endpointUri($endpoint)
    {
        return sprintf('%s/%s', getenv('API_BASE_URI'), $endpoint);
    }


    /**
     * Return a mock instance of the Guzzle client,
     * using the given fixture for the response.
     *
     * @param  string  $fixture
     *
     * @return \Mockery\Mock
     */
    protected function mockMediaFoundryApiClient($fixture)
    {
        $fixture = $this->loadFixture($fixture);

        $mock = new MockHandler([
            new Response(200, [], $fixture),
        ]);
        $handler = HandlerStack::create($mock);
        $guzzle  = new Client([ 'handler' => $handler, ]);
        $client  = m::mock('MediaFoundry\Api\Client', [ getenv('API_BASE_URI'), $guzzle, ])->makePartial();

        $client->shouldReceive('getRequestBody')->once()->andReturn($fixture);

        return $client;
    }
}
