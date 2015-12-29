<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiSeriesTest extends PHPUnit_Framework_TestCase
{
    use FixtureHelper, GuzzleHelper;

    /** @test */
    public function it_loads_series_from_the_api_series_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('series');

        $series = $client->series();

        $this->assertInternalType('array', $series);
        $this->assertCount(1, $series);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Series', $series);

        // Test the data of the first Series instance in the response
        $series = $series[0];
        $this->assertSame(63, $series->id);
        $this->assertEquals('House of Cards', $series->label);
        $this->assertEquals('b63d0435-c0ae-4024-b39f-14de358f5cbb', $series->uuid);
    }


    /** @test */
    public function it_loads_a_single_series_from_the_api_series_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('series_63');

        $series = $client->series($this->endpointUri('series/63'));

        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Series', $series);
        $this->assertSame(63, $series->id);
        $this->assertEquals('House of Cards', $series->label);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/series/63', $series->self);
        $this->assertStringStartsWith('House of Cards is an American political drama television series', $series->body);
        $this->assertInstanceOf('\DateTime', $series->created);
        $this->assertSame(1447207189, $series->created->getTimestamp());
        $this->assertInstanceOf('\DateTime', $series->changed);
        $this->assertSame(1447207680, $series->changed->getTimestamp());
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/sites/default/files/House_of_Cards_title_card_0.png', $series->icon);
        $this->assertInternalType('array', $series->genres);
        $this->assertCount(2, $series->genres);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Genre', $series->genres);
        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Season', $series->season);
    }
}
