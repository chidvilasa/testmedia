<?php

namespace MediaFoundry\Api\Entities;

use DateTime;
use MediaFoundry\Api\CollectsEntities;

/**
 * POPO wrapper for MediaFoundry API's Season object.
 *
 * @package    MediaFoundry
 * @subpackage Api\Entities
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class Season extends Entity
{
    use CollectsEntities;

    /**
     * Get the season icon.
     *
     * @return string|null
     */
    public function icon()
    {
        return isset($this->entity->images->icon)
            ? $this->entity->images->icon
            : null;
    }


    /**
     * Get the season's series.
     *
     * @return \MediaFoundry\Api\Entities\Series
     */
    public function series()
    {
        return new Series($this->entity->series);
    }


    /**
     * Get the season's episodes.
     *
     * @return array
     */
    public function episodes()
    {
        return $this->collectEntitiesFromArray($this->entity->episodes, Episode::class);
    }


    /**
     * Get the series release date.
     *
     * @return \DateTime|null
     */
    public function release_date()
    {
        return isset($this->entity->release_date)
            ? DateTime::createFromFormat('U', $this->entity->release_date)
            : null;
    }
}
