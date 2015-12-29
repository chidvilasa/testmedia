<?php

namespace MediaFoundry\Api\Contracts;

/**
 * OpenGraph interface.
 *
 * @package    MediaFoundry
 * @subpackage Api\Contracts
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
interface OpenGraphable
{

    /**
     * Get the OpenGraph title value.
     *
     * @return mixed
     */
    public function ogTitle();


    /**
     * Get the OpenGraph type value.
     *
     * @return mixed
     */
    public function ogType();


    /**
     * Get the OpenGraph author value.
     *
     * @return mixed
     */
    public function ogAuthor();


    /**
     * Get the OpenGraph publisher value.
     *
     * @return mixed
     */
    public function ogPublisher();


    /**
     * Get the OpenGraph image value.
     *
     * @return mixed
     */
    public function ogImage();


    /**
     * Get the OpenGraph description value.
     *
     * @return mixed
     */
    public function ogDescription();
}
