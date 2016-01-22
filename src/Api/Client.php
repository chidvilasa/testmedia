<?php

namespace MediaFoundry\Api;

use GuzzleHttp\Client as GuzzleClient;
use MediaFoundry\Api\Contracts\ApiClient;
use MediaFoundry\Api\Entities\Category;
use MediaFoundry\Api\Entities\Episode;
use MediaFoundry\Api\Entities\Event;
use MediaFoundry\Api\Entities\Genre;
use MediaFoundry\Api\Entities\Season;
use MediaFoundry\Api\Entities\Series;
use MediaFoundry\Api\Entities\Video;

/**
 * MediaFoundry API Client wrapper.
 *
 * @package    MediaFoundry
 * @subpackage Api
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class Client implements ApiClient
{
    use CollectsEntities;

    /**
     * @var  GuzzleClient
     */
    private $client;

    /**
     * @var  string
     */
    private $base_uri;

    /**
     * @var  \GuzzleHttp\Promise\PromiseInterface
     */
    private $response;


    /**
     * Client constructor.
     *
     * @param  string             $base_uri
     * @param  \GuzzleHttp\Client $client
     */
    public function __construct($base_uri, GuzzleClient $client)
    {
        $this->client   = $client;
        $this->base_uri = $base_uri;
    }


    /**
     * Return the Guzzle HTTP response stream.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * Get the API response body as an object.
     *
     * @return mixed
     */
    protected function getResponseBody()
    {
        return json_decode($this->getResponse()->getBody());
    }


    /**
     * Generate a URL to the given API endpoint.
     *
     * @param  string $endpoint
     *
     * @return string
     */
    protected function url($endpoint)
    {
        return sprintf('%s/%s', $this->base_uri, $endpoint);
    }

    /**
     * Return an array of Category entities from the categories endpoint,
     * or the specific category if the $entity_id is provided.
     *
     * @inheritdoc
     */
    public function categories($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getCategory($entity_id);
        }

        $this->get($this->url('categories'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Category::class);
    }


    /**
     * Return an array of Episode entities from the episodes endpoint,
     * or the specific category if the $entity_id is provided.
     *
     * @inheritdoc
     */
    public function episodes($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getEpisode($entity_id);
        }

        $this->get($this->url('episodes'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Episode::class);
    }


    /**
     * Return an array of Event entities from the events endpoint,
     * or the specific event if the $entity_id is provided.
     *
     * @inheritdoc
     */
    public function events($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getEvent($entity_id);
        }

        $this->get($this->url('events'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Event::class);
    }


    /**
     * Return an array of Genre entities from the gendes endpoint,
     * or the specific genre if the $entity_id is provided.
     *
     * @inheritdoc
     */
    public function genres($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getGenre($entity_id);
        }

        $this->get($this->url('genre'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Genre::class);
    }


    /**
     * Return an array of Season entities from the seasons endpoint,
     * or the specific season if the $entity_id is provided.
     *
     * @inheritdoc
     */
    public function seasons($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getSeason($entity_id);
        }

        $this->get($this->url('seasons'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Season::class);
    }


    /**
     * Search the API.
     *
     * @inheritdoc
     */
    public function series($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getSeries($entity_id);
        }

        $this->get($this->url('series'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Series::class);
    }


    /**
     * Return an array of Video entities from the videos endpoint,
     * or the specific video if the $entity_id is provided. If
     * $filter is supplied, the return will be filtered videos.
     *
     * @inheritdoc
     */
    public function videos($entity_id = null, array $filter = [], array $sort = [])
    {
        if (! is_null($entity_id)) {
            return $this->getVideo($entity_id);
        }

        $this->get($this->url('videos'), $this->buildQueryOption($filter, $sort));

        return $this->arrayOfEntitiesFromResponse(Video::class);
    }


    /**
     * Return the specific category available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Category
     */
    private function getCategory($entity_id)
    {
        $this->get($this->url('categories/' . $entity_id));

        return new Category($this->getResponseBody()->data[0]);
    }


    /**
     * Return the specific episode available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Episode
     */
    private function getEpisode($entity_id)
    {
        $this->get($this->url('episodes/' . $entity_id));

        return new Episode($this->getResponseBody()->data[0]);
    }


    /**
     * Return the specific event available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Event
     */
    private function getEvent($entity_id)
    {
        $this->get($this->url('events/' . $entity_id));

        return new Event($this->getResponseBody()->data[0]);
    }


    /**
     * Return the specific genre available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Genre
     */
    private function getGenre($entity_id)
    {
        $this->get($this->url('genre/' . $entity_id));

        return new Genre($this->getResponseBody()->data[0]);
    }


    /**
     * Return the specific season available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Season
     */
    private function getSeason($entity_id)
    {
        $this->get($this->url('seasons/' . $entity_id));

        return new Season($this->getResponseBody()->data[0]);
    }


    /**
     * Return the specific series available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Series
     */
    private function getSeries($entity_id)
    {
        $this->get($this->url('series/' . $entity_id));

        return new Series($this->getResponseBody()->data[0]);
    }


    /**
     * Return the specific video available at $uri.
     *
     * @param  int  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Video
     */
    private function getVideo($entity_id)
    {
        $this->get($this->url('videos/' . $entity_id));

        return new Video($this->getResponseBody()->data[0]);
    }


    /**
     * Search the API.
     *
     * @inheritdoc
     */
    public function search()
    {
        // TODO: Implement search() method.
    }


    /**
     * Get the next link, if set.
     *
     * @inheritdoc
     */
    public function next()
    {
        return isset($this->getResponseBody()->next) ? $this->getResponseBody()->next->href : false;
    }


    /**
     * Get the previous link, if set.
     *
     * @inheritdoc
     */
    public function previous()
    {
        return isset($this->getResponseBody()->previous) ? $this->getResponseBody()->previous->href : false;
    }


    /**
     * Perform a HTTP GET request to the given endpoint.
     *
     * @param  string $path
     * @param  array  $options
     *
     * @return mixed
     */
    public function get($path, array $options = [])
    {
        return $this->http('GET', $path, $options);
    }


    /**
     * Perform a HTTP request.
     *
     * @param  string  $method
     * @param  string  $path
     * @param  array   $options
     *
     * @return mixed
     */
    private function http($method, $path, array $options = [ ])
    {
        $this->response = $this->client->request($method, $path, $options);

        return $this->getResponseBody();
    }


    /**
     * Return an array of entities from the last response's data property.
     *
     * @param  string  $entityName
     *
     * @return array
     */
    private function arrayOfEntitiesFromResponse($entityName)
    {
        return $this->collectEntitiesFromArray($this->getResponseBody()->data, $entityName);
    }


    /**
     * Build the query option array to be passed to the HTTP client.
     *
     * @param  array $filter
     * @param  array $sort
     *
     * @return array
     */
    private function buildQueryOption(array $filter = [], array $sort = [])
    {
        return [ 'query' => array_merge($filter, [ 'sort' => join(',', array_map('trim', $sort)), ]), ];
    }
}
