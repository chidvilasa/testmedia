<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiEventTest extends PHPUnit_Framework_TestCase
{

    use FixtureHelper, GuzzleHelper;


    /**
     * @test
     * @group core
     */
    public function it_loads_events_from_the_api_events_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('events');

        $events = $client->events();

        $this->assertInternalType('array', $events);
        $this->assertCount(4, $events);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Event', $events);

        // Test the data of the first Event instance in the response
        $event = $events[0];
        $this->assertSame(27, $event->id);
        $this->assertEquals('Latest event', $event->label);
        $this->assertEquals('411109f6-23b1-493b-922e-b5ce0d4d947c', $event->uuid);
    }


    /**
     * @test
     * @group core
     */
    public function it_loads_a_single_unscheduled_event_from_the_api_events_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('events_27');

        $event = $client->events($this->endpointUri('events/27'));

        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Event', $event);
        $this->assertSame(27, $event->id);
        $this->assertEquals('Latest event', $event->label);
        $this->assertEquals('411109f6-23b1-493b-922e-b5ce0d4d947c', $event->uuid);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/events/27', $event->self);
        $this->assertEmpty($event->body);
        $this->assertEquals('Ongoing event', $event->event_type);
        $this->assertEquals('Video', $event->media_type);
        $this->assertFalse($event->scheduled);
        $this->assertNull($event->schedule);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/sites/default/files/styles/thumbnail/public/0/images.jpg?itok=BaQ_pW4R', $event->image);
        $this->assertEquals('http://sanjeev.mf.com/sites/default/files/manifest/manifest_178.m3u8', $event->manifest);
        $this->assertEquals([ 9, 0, 11, ], $event->categories);
        $this->assertCount(1, $event->tags);
        $this->assertNull($event->embed);
        $this->assertNull($event->ad);
    }


    /**
     * @test
     * @group core
     */
    public function it_loads_a_single_scheduled_event_from_the_api_events_endpoint()
    {
    	 $client = $this->mockMediaFoundryApiClient('events_29');

        $event = $client->events('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/events/29');

        // Assert only items relevant to the schedule, seeing as we've already tested the event itself
        $this->assertInstanceOf('\MediaFoundry\Api\Entities\Event', $event);
        $this->assertEquals('Time Bounded', $event->event_type);
        $this->assertTrue($event->scheduled);
        $this->assertInstanceOf('\MediaFoundry\Api\EventSchedule', $event->schedule);
        $this->assertInstanceOf('\DateTime', $event->schedule->start());
        $this->assertSame(1448301120, $event->schedule->start()->getTimestamp());
        $this->assertInstanceOf('\DateTime', $event->schedule->end());
        $this->assertSame(1448488080, $event->schedule->end()->getTimestamp());
    }
}
