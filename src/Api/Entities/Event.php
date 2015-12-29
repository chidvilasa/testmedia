<?php

namespace MediaFoundry\Api\Entities;

use MediaFoundry\Api\EventSchedule;

/**
 * POPO wrapper for MediaFoundry API's Entity object.
 *
 * @package    MediaFoundry
 * @subpackage Api\Entities
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class Event extends Entity
{
    /**
     * Is the event scheduled?
     *
     * @return bool
     */
    public function scheduled()
    {
        return ! is_null($this->entity->event_schedule);
    }


    /**
     * Return the event schedule.
     *
     * @return \MediaFoundry\Api\Entities\EventSchedule|null
     */
    public function schedule()
    {
        return $this->scheduled()
            ? new EventSchedule($this->entity->event_schedule)
            : null;
    }


    /**
     * Get the event image.
     *
     * @return string|null
     */
    public function image()
    {
        return isset($this->entity->image->{'_links'}->self->href)
            ? $this->entity->image->{'_links'}->self->href
            : null;
    }


    /**
     * Get the event manifest.
     *
     * @return string|null
     */
    public function manifest()
    {
        return isset($this->entity->stream->{'_links'}->self->href)
            ? $this->entity->stream->{'_links'}->self->href
            : null;
    }


    /**
     * Get the event ad.
     *
     * @return string|null
     */
    public function ad()
    {
        return isset($this->entity->ad->{'_links'}->self->href)
            ? $this->entity->ad->{'_links'}->self->href
            : null;
    }
}
