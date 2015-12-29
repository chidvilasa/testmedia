<?php

namespace MediaFoundry\Api\Entities;

/**
 * POPO wrapper for MediaFoundry API's Episode object.
 *
 * @package    MediaFoundry
 * @subpackage Api\Entities
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class Episode extends Entity
{
    /**
     * Get the episode thumbnail.
     *
     * @return string|null
     */
    public function thumbnail()
    {
        return isset($this->entity->video_details->thumbnail)
            ? $this->entity->video_details->thumbnail
            : null;
    }


    /**
     * Get the episode manifest URL.
     *
     * @return string|null
     */
    public function manifest()
    {
        return isset($this->entity->video_details->manifest->{'_links'}->self->href)
            ? $this->entity->video_details->manifest->{'_links'}->self->href
            : null;
    }


    /**
     * Get the episode series instance.
     *
     * @return \MediaFoundry\Api\Entities\Series
     */
    public function series()
    {
        return new Series($this->entity->series);
    }


    /**
     * Get the series season instance.
     *
     * @return \MediaFoundry\Api\Entities\Season
     */
    public function season()
    {
        return new Season($this->entity->season);
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
