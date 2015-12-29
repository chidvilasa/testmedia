<?php

namespace MediaFoundry\Api\Entities;

use MediaFoundry\Api\CollectsEntities;

/**
 * POPO wrapper for MediaFoundry API's Series object.
 *
 * @package    MediaFoundry
 * @subpackage Api\Entities
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class Series extends Entity
{
    use CollectsEntities;

    /**
     * Get the series icon.
     *
     * @return mixed
     */
    public function icon()
    {
        return $this->entity->images->icon;
    }


    /**
     * Get the series genres.
     *
     * @return mixed
     */
    public function genres()
    {
        return $this->collectEntitiesFromArray($this->entity->genre, Genre::class);
    }


    /**
     * Get the series seasons.
     *
     * @return mixed
     */
    public function season()
    {
        return new Season($this->entity->seasons);
    }
}
