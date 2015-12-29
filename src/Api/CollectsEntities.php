<?php

namespace MediaFoundry\Api;

/**
 * Entity collection trait.
 *
 * @package    MediaFoundry
 * @subpackage Api
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
trait CollectsEntities
{

    /**
     * For the given array, return a collection (array) of the named entity.
     *
     * @param  array   $array
     * @param  string  $entityName
     *
     * @return array
     */
    protected function collectEntitiesFromArray($array, $entityName)
    {
        return array_map(function ($item) use ($entityName) {
            return new $entityName($item);
        }, (array) $array);
    }
}
