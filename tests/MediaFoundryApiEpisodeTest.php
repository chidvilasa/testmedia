<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiEpisodeTest extends PHPUnit_Framework_TestCase
{
    use FixtureHelper, GuzzleHelper;

    /** @test */
    public function it_loads_episodes_from_the_api_episodes_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('episodes');

        $episodes = $client->episodes();

        $this->assertInternalType('array', $episodes);
        $this->assertCount(2, $episodes);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Episode', $episodes);

        // Test the data of the first Episode instance in the response
        $episode = $episodes[0];
        $this->assertSame(73, $episode->id);
        $this->assertEquals('Chapter 1', $episode->label);
        $this->assertEquals('153e85b3-b76b-4b6b-9d5a-6cb73d76e6c3', $episode->uuid);
    }


    /** @test */
    public function it_loads_a_single_episode_from_the_api_episodes_endpoint()
    {
    	$client = $this->mockMediaFoundryApiClient('episodes_73');

        $episode = $client->episodes($this->endpointUri('episodes/73'));

        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Episode', $episode);
        $this->assertSame(73, $episode->id);
        $this->assertEquals('Chapter 1', $episode->label);
        $this->assertEquals('153e85b3-b76b-4b6b-9d5a-6cb73d76e6c3', $episode->uuid);
        $this->assertStringStartsNotWith('"Chapter 1" (sometimes "Episode 101") is not the pilot episode', $episode->body);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/', $episode->thumbnail);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/sites/default/files/manifest/manifest_271.m3u8', $episode->manifest);
        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Series', $episode->series);
        $this->assertSame(63, $episode->series->id);
        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Season', $episode->season);
        $this->assertSame(65, $episode->season->id);
        $this->assertInstanceOf('\DateTime', $episode->created);
        $this->assertSame(1447210169, $episode->created->getTimestamp());
        $this->assertInstanceOf('\DateTime', $episode->changed);
        $this->assertSame(1447210235, $episode->changed->getTimestamp());
    }
}
