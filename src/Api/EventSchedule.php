<?php

namespace MediaFoundry\Api;

use DateTime;

/**
 * EventSchedule value object.
 *
 * @package    MediaFoundry
 * @subpackage Api
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class EventSchedule
{

    /**
     * Store the schedule data.
     *
     * @var  object
     */
    protected $schedule;


    /**
     * EventSchedule constructor.
     *
     * @param  object $schedule
     */
    public function __construct($schedule)
    {
        $this->schedule = $schedule;
    }


    /**
     * Get the scheduled start datetime.
     *
     * @return DateTime
     */
    public function start()
    {
        return DateTime::createFromFormat('U', $this->schedule->schedule_from);
    }


    /**
     * Get the scheduled end datetime.
     *
     * @return \DateTime
     */
    public function end()
    {
        return DateTime::createFromFormat('U', $this->schedule->schedule_to);
    }
}
