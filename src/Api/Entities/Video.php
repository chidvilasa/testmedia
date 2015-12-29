<?php

namespace MediaFoundry\Api\Entities;

use MediaFoundry\Api\Contracts\OpenGraphable;

/**
 * POPO wrapper for MediaFoundry API's Video object.
 *
 * @package    MediaFoundry
 * @subpackage Api\Entities
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class Video extends Entity implements OpenGraphable
{
    /**
     * Get the video image URL.
     *
     * @return string
     */
    public function image()
    {
        return isset($this->entity->video_details->image)
            ? $this->entity->video_details->image
            : null;
    }


    /**
     * Get the video manifest URL.
     *
     * @return string
     */
    public function manifest()
    {
        return isset($this->entity->video_details->manifest)
            ? $this->entity->video_details->manifest
            : null;
    }


    /**
     * Get the video embed URL.
     *
     * @return string
     */
    public function embed()
    {
        return isset($this->entity->embed->{'_links'}->self->href)
            ? $this->entity->embed->{'_links'}->self->href
            : null;
    }


    /**
     * Get the video OpenGraph title value.
     *
     * @return string
     */
    public function ogTitle()
    {
        return $this->label;
    }


    /**
     * Get the video OpenGraph type value.
     *
     * @return string
     */
    public function ogType()
    {
        return 'video.movie';
    }


    /**
     * Get the video OpenGraph author value.
     *
     * @return void
     */
    public function ogAuthor()
    {
        // TODO: Implement ogAuthor() method.
    }


    /**
     * Get the video OpenGraph publisher value.
     *
     * @return void
     */
    public function ogPublisher()
    {
        // TODO: Implement ogPublisher() method.
    }


    /**
     * Get the video OpenGraph image URL value.
     *
     * @return string
     */
    public function ogImage()
    {
        return $this->image;
    }


    /**
     * Get the video OpenGraph description value.
     *
     * @return string
     */
    public function ogDescription()
    {
        return $this->body;
    }
}
