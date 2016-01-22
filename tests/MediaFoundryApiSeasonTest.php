<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiSeasonTest extends PHPUnit_Framework_TestCase
{
    use FixtureHelper, GuzzleHelper;


    /** @test */
    public function it_loads_seasons_from_the_api_seasons_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('seasons');

        $seasons = $client->seasons();

        $this->assertInternalType('array', $seasons);
        $this->assertCount(3, $seasons);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Season', $seasons);

        // Test the data of the first Season instance in the response
        $season = $seasons[0];
        $this->assertSame(65, $season->id);
        $this->assertEquals('Season 1 (2013)', $season->label);
        $this->assertEquals('ba27c348-ea4e-4348-9d7f-2de2272fd1e0', $season->uuid);
    }


    /** @test */
    public function it_loads_a_single_season_from_the_api_seasons_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('seasons_65');

        $season = $client->seasons($this->endpointUri('seasons/65'));

        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Season', $season);
        $this->assertSame(65, $season->id);
        $this->assertEquals('Season 1 (2013)', $season->label);
        $this->assertEquals('ba27c348-ea4e-4348-9d7f-2de2272fd1e0', $season->uuid);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/seasons/65', $season->self);
        $this->assertStringStartsWith('The series opens with congressman Francis "Frank" Underwood', $season->body);
        $this->assertInstanceOf('\DateTime', $season->created);
        $this->assertSame(1447207283, $season->created->getTimestamp());
        $this->assertInstanceOf('\DateTime', $season->changed);
        $this->assertSame(1447207939, $season->changed->getTimestamp());
        $this->assertInstanceOf('\DateTime', $season->release_date);
        $this->assertSame(1447160400, $season->release_date->getTimestamp());
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/sites/default/files/Frank_Underwood_-_House_of_Cardss1.jpg', $season->icon);
        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Series', $season->series);
        $this->assertSame(63, $season->series->id);
        $this->assertInternalType('array', $season->episodes);
        $this->assertCount(3, $season->episodes);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Episode', $season->episodes);
        $this->assertSame(71, $season->episodes[0]->id);
    }
}
