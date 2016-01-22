<?php

namespace MediaFoundry\Api\Entities;

use DateTime;

/**
 * Abstract entity provides the basis for child entity classes.
 *
 * @package    MediaFoundry
 * @subpackage Api\Entities
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
abstract class Entity
{
    /**
     * The source entity object.
     *
     * @var  object
     */
    protected $entity;


    /**
     * Entity constructor.
     *
     * @param  object $entity
     */
    public function __construct($entity)
    {
        $this->entity = $entity;
    }


    /**
     * Get the entity's identifier.
     *
     * @return int
     */
    public function id()
    {
        return (int) $this->entity->id;
    }


    /**
     * Return the url to the entity.
     *
     * @return mixed
     */
    public function self()
    {
        return $this->entity->{'_links'}->self->href;
    }


    /**
     * Get the entity created datetime.
     *
     * @return \DateTime|null
     */
    public function created()
    {
        return isset($this->entity->created)
            ? DateTime::createFromFormat('U', $this->entity->created)
            : null;
    }


    /**
     * Get the entity changed datetime.
     *
     * @return \DateTime|null
     */
    public function changed()
    {
        return isset($this->entity->changed)
            ? DateTime::createFromFormat('U', $this->entity->changed)
            : null;
    }


    /**
     * Get the homepage_promote value as a boolean.
     *
     * @return bool
     */
    public function homepage_promote()
    {
        // Should probably be an ===, but who knows what the API will return day to day
        return $this->entity->homepage_promote == 1;
    }


    /**
     * Determine if the given key ie set.
     *
     * @param  string  $key
     *
     * @return bool
     */
    public function __isset($key)
    {
        return property_exists($this->entity, $key);
    }


    /**
     * Overload __get in order to provide property access to entity methods.
     * Fall back to the entity in the event the method doesn't exist, i.e.
     * should you want to access a nested key on the main entity object.
     *
     * @param  string  $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (method_exists($this, $key)) {
            return $this->{$key}();
        }

        if (property_exists($this->entity, $key)) {
            return $this->entity->{$key};
        }
    }
}
