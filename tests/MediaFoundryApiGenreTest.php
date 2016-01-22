<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiGenreTest extends PHPUnit_Framework_TestCase
{
    use FixtureHelper, GuzzleHelper;

    /** @test */
    public function it_loads_genres_from_the_api_genre_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('genre');

        $genres = $client->genres();

        $this->assertInternalType('array', $genres);
        $this->assertCount(33, $genres);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Genre', $genres);

        // Test the data of the first Genre instance in the response
        $genre = $genres[0];
        $this->assertSame(1, $genre->id);
        $this->assertEquals('Arts & Culture', $genre->label);
        $this->assertEquals('2dc887d0-16c7-4adb-919b-d67f532f7207', $genre->uuid);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/genre/1', $genre->self);
    }


    /** @test */
    public function it_loads_a_single_genre_from_the_api_genre_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('genre_71');

        $genre = $client->genres($this->endpointUri('genre/71'));

        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Genre', $genre);
        $this->assertSame(71, $genre->id);
        $this->assertEquals('Action', $genre->label);
        $this->assertEquals('25645a86-5443-46c8-8489-212d5f185f27', $genre->uuid);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/genre/71', $genre->self);
    }
}
