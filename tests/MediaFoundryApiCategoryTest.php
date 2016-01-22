<?php

namespace MediaFoundryTest;

use PHPUnit_Framework_TestCase;

class MediaFoundryApiCategoryTest extends PHPUnit_Framework_TestCase
{
    use FixtureHelper, GuzzleHelper;

    /**
     * @test
     * @group core
     */
    public function it_loads_a_category_from_the_api_categories_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('categories');

        $categories = $client->categories();

        $this->assertInternalType('array', $categories);
        $this->assertCount(19, $categories);
        $this->assertContainsOnlyInstancesOf('\MediaFoundry\Api\Entities\Category', $categories);

        // Test the data of the first Category instance in the response
        $category = $categories[0];
        $this->assertSame(61, $category->id);
        $this->assertEquals('Santos Tour Down Under', $category->label);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/categories/61', $category->self);
        $this->assertEquals('Santos Tour Down Under', $category->name);
        $this->assertFalse($category->parent);
    }


    /**
     * @test
     * @group core
     */
    public function it_loads_a_single_category_from_the_api_categories_endpoint()
    {
        $client = $this->mockMediaFoundryApiClient('categories_61');

        $category = $client->categories($this->endpointUri('categories/61'));

        // Check the main category instance
        $this->assertInstanceOf('MediaFoundry\Api\Entities\Category', $category);
        $this->assertEquals(61, $category->id);
        $this->assertEquals('1b3ad51c-c4c4-4751-889d-eb8314354a5a', $category->uuid);
        $this->assertEquals('Santos Tour Down Under', $category->label);
        $this->assertEquals('http://admin-latest.pp.mediafoundry.com.au/api/v1.0/categories/61', $category->self);
        $this->assertEquals('Santos Tour Down Under', $category->name);
        $this->assertInternalType('array', $category->children);
        $this->assertCount(0, $category->children);

        // Check the first child category's properties (check __get overload)
        $this->assertEmpty($category->children);
    }
}
