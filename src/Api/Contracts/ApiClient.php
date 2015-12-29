<?php

namespace MediaFoundry\Api\Contracts;

/**
 * MediaFoundry API Client interface
 *
 * @package    MediaFoundry
 * @subpackage Api\Contracts
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
interface ApiClient
{
    /**
     * Return the Guzzle HTTP response stream.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResponse();

    /**
     * Return an array of Category entities from the categories endpoint,
     * or the specific category if the $entity_id is provided.
     *
     * @param  int|null  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Category|array
     */
    public function categories($entity_id = null);

    /**
     * Return an array of Episode entities from the episodes endpoint,
     * or the specific category if the $entity_id is provided.
     *
     * @param  int|null  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Episode|array
     */
    public function episodes($entity_id = null);

    /**
     * Return an array of Event entities from the events endpoint,
     * or the specific event if the $entity_id is provided.
     *
     * @param  int|null  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Event|array
     */
    public function events($entity_id = null);

    /**
     * Return an array of Genre entities from the gendes endpoint,
     * or the specific genre if the $entity_id is provided.
     *
     * @param  int|null  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Genre|array
     */
    public function genres($entity_id = null);

    /**
     * Return an array of Season entities from the seasons endpoint,
     * or the specific season if the $entity_id is provided.
     *
     * @param  int|null  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Season|array
     */
    public function seasons($entity_id = null);


    /**
     * Search the API.
     *
     * @return mixed
     */
    public function search();

    /**
     * Return an array of Season entities from the seasons endpoint,
     * or the specific season if the $entity_id is provided.
     *
     * @param  int|null  $entity_id
     *
     * @return \MediaFoundry\Api\Entities\Season|array
     */
    public function series($entity_id = null);

    /**
     * Return an array of Video entities from the videos endpoint,
     * or the specific video if the $entity_id is provided. If
     * $filter is supplied, the return will be filtered videos.
     *
     * @param  int|null  $entity_id
     * @param  array     $filter
     *
     * @return \MediaFoundry\Api\Entities\Video|array
     */
    public function videos($entity_id = null, array $filter = []);

    /**
     * Get the next link, if set.
     *
     * @return string|bool
     */
    public function next();

    /**
     * Get the previous link, if set.
     *
     * @return string|bool
     */
    public function previous();
}
