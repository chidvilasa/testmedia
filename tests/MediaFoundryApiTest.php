<?php

namespace MediaFoundryTest;

use GuzzleHttp\Client as GuzzleClient;
use MediaFoundry\Api\Client;
use PHPUnit_Framework_TestCase;

class MediaFoundryApiTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var GuzzleClient
     */
    protected $client;


    /**
     * @test
     * @group core
     */
    public function it_fetches_videos_from_the_api_and_returns_an_array_of_video_entities()
    {
        $videos = $this->client->videos();

        $this->assertInternalType('array', $videos);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Video', $videos);
    }


    /**
     * @test
     * @group core
     */
    public function it_fetches_categories_from_the_api_and_returns_an_array_of_category_entities()
    {
        $categories = $this->client->categories();

        $this->assertInternalType('array', $categories);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Category', $categories);
    }


    /** @test */
    public function it_fetches_genres_from_the_api_and_returns_an_array_of_genre_entities()
    {
        $genres = $this->client->genres();

        $this->assertInternalType('array', $genres);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Genre', $genres);
    }


    /** @test */
    public function it_fetches_series_from_the_api_and_returns_an_array_of_series_entities()
    {
        $series = $this->client->series();

        $this->assertInternalType('array', $series);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Series', $series);
    }


    /** @test */
    public function it_fetches_events_from_the_api_and_returns_an_array_of_event_entities()
    {
        $events = $this->client->events();

        $this->assertInternalType('array', $events);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Event', $events);
    }


    /** @test */
    public function it_fetches_episodes_from_the_api_and_returns_an_array_of_episode_entities()
    {
        $episodes = $this->client->episodes();

        $this->assertInternalType('array', $episodes);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Episode', $episodes);
    }


    /** @test */
    public function it_fetches_seasons_from_the_api_and_returns_an_array_of_season_entities()
    {
        $seasons = $this->client->seasons();

        $this->assertInternalType('array', $seasons);
        $this->assertContainsOnlyInstancesOf('MediaFoundry\Api\Entities\Season', $seasons);
    }


    /**
     * @test
     * @group core
     */
    public function it_fetches_a_single_video_from_the_api_and_returns_a_video_entity()
    {
        $video = $this->client->videos($this->client->videos()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Video', $video);
    }


    /**
     * @test
     * @group core
     */
    public function it_fetches_a_single_category_from_the_api_and_returns_a_category_entity()
    {
        $category = $this->client->categories($this->client->categories()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Category', $category);
    }


    /** @test */
    public function it_fetches_a_single_genre_from_the_api_and_returns_a_genre_entity()
    {
        $genre  = $this->client->genres($this->client->genres()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Genre', $genre);
    }


    /** @test */
    public function it_fetches_a_single_series_from_the_api_and_returns_a_series_entity()
    {
        $series = $this->client->series($this->client->series()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Series', $series);
    }


    /**
     * @test
     */
    public function it_fetches_a_single_event_from_the_api_and_returns_an_event_entity()
    {
        $event = $this->client->events($this->client->events()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Event', $event);
    }


    /** @test */
    public function it_fetches_a_single_episode_from_the_api_and_returns_an_episode_entity()
    {
        $episode  = $this->client->episodes($this->client->episodes()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Episode', $episode);
    }


    /** @test */
    public function it_fetches_a_single_season_from_the_api_and_returns_a_season_entity()
    {
        $season  = $this->client->seasons($this->client->seasons()[0]->id);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Season', $season);
    }


    /** @test */
    public function it_fetches_videos_from_the_api_sorted_by_homepage_promote_descending()
    {
        $videos = $this->client->videos(null, [ ], [ '-homepage_promote', ]);

        $video = array_shift($videos);

        $this->assertInstanceOf('MediaFoundry\Api\Entities\Video', $video);
        $this->assertTrue($video->homepage_promote);
    }


    protected function setUp()
    {
        parent::setUp();

        $this->client = new Client(
            sprintf('%s%s', getenv('API_BASE_URI'), getenv('API_VERSION')),
            new GuzzleClient()
        );
    }
}
