<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiVideoTest extends PHPUnit_Framework_TestCase
{
    use FixtureHelper, GuzzleHelper;

    /**
     * @test
     * @group core
     */
    public function it_loads_videos_from_the_api_videos_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('videos');

        $videos = $client->videos();

        $this->assertInternalType('array', $videos);
        $this->assertCount(9, $videos);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Video', $videos);

        // Test the data of the first Video instance in the response
        $video = $videos[0];
        $this->assertSame(23, $video->id);
        $this->assertEquals('Media Foundry promo', $video->label);
        $this->assertEquals('795e4802-3666-4965-8e18-4b0ff80b15d1', $video->uuid);
    }


    /**
     * @test
     * @group core
     */
    public function it_loads_a_single_video_from_the_api_videos_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('video_23');

        $video = $client->videos($this->endpointUri('videos/23'));

        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Video', $video);
        $this->assertEquals('Media Foundry promo', $video->label);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/videos/23', $video->self);
        $this->assertEquals('test&lt;a href=&quot;#&quot;&gt;Here is a link&lt;/a&gt;', $video->body);
        $this->assertInstanceOf('\DateTime', $video->created);
        $this->assertSame(1433200953, $video->created->getTimestamp());
        $this->assertInstanceOf('\DateTime', $video->changed);
        $this->assertSame(1435664649, $video->changed->getTimestamp());
        $this->assertEquals([ 9, ], $video->categories);
        $this->assertNull($video->tags);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/sites/default/files/videos/thumbnails/15/thumbnail-15_0001.jpg', $video->image);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/sites/default/files/manifest/manifest_15.m3u8', $video->manifest);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/embed/556ce939b1654', $video->embed);
        $this->assertNull($video->ad->{'_links'}->self->href);
        $this->assertNull($video->comments);
        $this->assertFalse($video->homepage_promote);
    }


    /**
     * @test
     * @group core
     */
    public function it_loads_videos_filtered_by_category_from_the_videos_api_endpoint()
    {
    	$client = $this->mockMediaFoundryApiClient('video_filter_category_9');

        $videos = $client->videos(null, [ 'filter' => [ 'categories' => 9, ], ]);

        $this->assertInternalType('array', $videos);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Video', $videos);
        $this->assertCount(3, $videos);

        // Check the first returned Video instance
        $video = $videos[0];
        $this->assertSame(23, $video->id);
        $this->assertEquals('Media Foundry promo', $video->label);
    }


    /** @test */
    public function it_loads_videos_sorted_by_created_descending()
    {
        $client = $this->mockMediaFoundryApiClient('categories_sorted_created_desc');
        $videos = $client->videos(null, [ ], [ '-created', ]);
        $video  = array_shift($videos);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Video', $video);
        $this->assertEquals('VOD Motoring 38', $video->label);
    }


    /** @test */
    public function it_loads_videos_sorted_by_created_ascending()
    {
        $client = $this->mockMediaFoundryApiClient('categories_sorted_created_asc');
        $videos = $client->videos(null, [ ], [ 'created', ]);
        $video  = array_shift($videos);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Video', $video);
        $this->assertEquals('Media Foundry promo', $video->label);
    }


    /** @test */
    public function it_loads_videos_sorted_by_homepage_promote_descending()
    {
        $client = $this->mockMediaFoundryApiClient('categories_sorted_homepage_promote_desc');

        $videos = $client->videos(null, [ ], [ '-homepage_promote', ]);
        $video  = array_shift($videos);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Video', $video);
        $this->assertEquals('VOD Motoring 38', $video->label);
    }


    /** @test */
    public function it_loads_videos_sorted_by_homepage_promote_ascending()
    {
        $client = $this->mockMediaFoundryApiClient('categories_sorted_homepage_promote_asc');

        $videos = $client->videos(null, [ ], [ 'homepage_promote', ]);
        $video  = array_shift($videos);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Video', $video);
        $this->assertEquals('VOD Motoring 30', $video->label);
    }
}
