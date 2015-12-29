# MediaFoundry API Client v1.0

## Introduction

This API client leverages the [GuzzleHttp](https://github.com/guzzle/guzzle) client and serves as a wrapper for the MediaFoundry API.

It provides a consistent interface to the API data, hiding some of its structure, and making interacting with the data simpler.

## Installation

Require the client in your project's `composer.json` file:

```javascript
{
	"repositories": [
		{
			"type": "vcs",
			"url": "git@hwkpcode.hostworks.com.au:MediaFoundry/MediaFoundry-API-Client.git"
		}
	],
	"require": {
		"mediafoundry/api-client": "~1.0"
	}
}
```

Then execute `composer install`.

### Basic Client

```php
<?php

require dirname(__FILE__) . '/vendor/autoload.php');

use MediaFoundry\Api\Client;
use GuzzleHttp\Client as GuzzleClient;

$client = new Client('http://admin-latest.pp.mediafoundry.com.au/api/v1.0', new GuzzleClient);
```

### Using the client with Laravel

This package also includes a Laravel [Service Provider](http://laravel.com/docs/providers), making using it within any Laravel project simple.

```php
<?php

// config/app.php

providers => [

    // ...
    \MediaFoundry\Api\MediaFoundryApiClientServiceProvider::class,

];
```

Ensure that the environment variable `MEDIAFOUNDRY_API_BASE_URI` is configured and points to the versioned endpoint base url. This value should *not* have a trailing slash.

```bash
# .env
MEDIAFOUNDRY_API_BASE_URI=http://admin-latest.pp.mediafoundry.com.au/api/v1.0

```

The API client can now be resolved out of the [Service Container](http://laravel.com/docs/container).

```php
<?php

namespace App\Http\Controllers;

use MediaFoundry\Api\Contracts\ApiClient;

class PageController extends Controller
{
    // Via method injection
    public function index(ApiClient $client)
    {
        $videos = $client->videos();

        return view('home', compact('videos'));
    }

    public function showVideo($video_id, ApiClient $client)
    {
		// Get the video identified by $video_id
        $video = $client->videos($video_id);

        return view('video.show', compact('video'));
    }
}
```

## Available methods

<table>
<thead>
<tr>
	<th>Method</th>
	<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
	<td><code>categories($entity_id = null)</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific category identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all categories configured in the API.
    </td>

</tr>
<tr>
    <td><code>episodes($entity_id = null</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific episode identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all episodes configured in the API.
    </td>

</tr>
<tr>
	<td><code>events($entity_id = null)</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific event identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all events configured in the API.
    </td>

</tr>
<tr>
    <td><code>genres($entity_id = null)</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific genre identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all genres configured in the API.
    </td>

</tr>
<tr>
    <td><code>seasons($entity_id = null)</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific season identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all seasons configured in the API.
    </td>

</tr>
<tr>
    <td><code>series($entity_id = null)</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific series identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all series configured in the API.
    </td>
</tr>
<tr>
    <td><code>videos($entity_id = null, $filter = [])</code></td>
    <td>
        If <code>$entity_id</code> is supplied, return a specific video identified by <code>$entity_id</code>.<br />
        If <code>$entity_id</code> is null, return all videos configured in the API.
        If <code>$filter</code> is a non-empty array, the returned videos will be filtered based on filter data.
    </td>
</tr>
</tbody>
</table>

## Returned entities

Each of the available methods will return either an array of, or a single instance of, their corresponding entity. Each of the entities extend the base `MediaFoundry\Api\Entities\Entity` class, providing access to generic methods.
 
<table>
<thead>
<tr>
	<th>Generic Entity Method</th>
	<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
	<td><code>id</code></td>
	<td>Get the entity's identifier</td>
</tr>
<tr>
	<td><code>self</code></td>
	<td>Get the URL to the entity</td>
</tr>
<tr>
	<td><code>created</code></td>
	<td>Get the entity created datetime</td>
</tr>
<tr>
	<td><code>changed</code></td>
	<td>Get the entity changed datetime</td>
</tr>
</tbody>
</table>

The `Entity` class also provides a `__get` implementation, allowing you to access properties on the underlying entity directly.

Each child class may also present its own public methods, to handle properties specific to itself.

**Note:** The `self` method provided on the base `Entity` class works for the majority of child entities, however, the underlying API is not consistent in how to access this property.

Where stated in parentheses, the method returns an entity. For example, `series (Series)` indicates that the `series` method will return an instance of `MediaFoundry\Api\Entities\Series`.

<table>
<thead>
<tr>
    <th>API Method</th>
    <th>Entity</th>
    <th>Entity-Specific Methods</th>
</tr>
</thead>
<tbody>
<tr>
    <td><code>categories()</code></td>
    <td><code>MediaFoundry\Api\Entities\Category</code></td>
    <td>&ndash;</td>
</tr>
<tr>
    <td><code>episodes()</code></td>
    <td><code>MediaFoundry\Api\Entities\Episode</code></td>
    <td><code>thumbnail</code>, <code>manifest</code>, <code>series (Series)</code>, <code>season (Season)</code></td>
</tr>
<tr>
    <td><code>events()</code></td>
    <td><code>MediaFoundry\Api\Entities\Event</code></td>
    <td><code>scheduled</code>, <code>schedule (EventSchedule|null)</code>, <code>image</code>, <code>manifest</code>, <code>ad</code></td>
</tr>
<tr>
    <td><code>genres()</code></td>
    <td><code>MediaFoundry\Api\Entities\Genre</code></td>
    <td>&ndash;</td>
</tr>
<tr>
    <td><code>seasons()</code></td>
    <td><code>MediaFoundry\Api\Entities\Season</code></td>
    <td><code>icon</code>, <code>series (Series)</code>, <code>episodes</code>
</tr>
<tr>
    <td><code>series()</code></td>
    <td><code>MediaFoundry\Api\Entities\Series</code></td>
    <td><code>icon</code>, <code>genres</code>, <code>season (Season)</code></td>
</tr>
<tr>
    <td><code>videos()</code></td>
    <td><code>MediaFoundry\Api\Entities\Video</code></td>
    <td><code>image</code>, <code>manifest</code>, <code>embed</code>, <code>release_date</code>, <code>ogTitle</code>, <code>ogType</code>, <code>ogAuthor</code>, <code>ogPublisher</code>, <code>ogImage</code>, <code>ogDescription</code>
</tr>
</tbody>
</table>

### OpenGraphable

The `Video` entity implements the `OpenGraphable` interface, and provides methods to access information with which to generate Open Graph meta tags.

### EventSchedule

The `EventSchedule` object exposes two methods, `start` and `end`. Each returns an instance of `DateTime`.

## Testing

The API interactions, and handling of response data is covered by PHPUnit tests. This will perform queries against the API identified by the `API_BASE_URI` environment variable.

This is `http://admin-latest.pp.mediafoundry.com.au/api/v1.0` by default, but can be changed on the command line, in order to run tests against a customer-specific deployment of the API.

```bash
$ export API_BASE_URI="http://admin-tdu.pp.mediafoundry.com.au/api/v1.0"
$ ./vendor/bin/phpunit
// this will execute tests against the TDU deployment of the API, rather than the default pre-production instance.
```

It is worth nothing that all of the unit tests, with exception to `MediaFoundryApiTest.php` are executed against response fixtures. This means that for testing that a customer-specific API deployment is functioning correctly, you  may wish to run a single set of tests, rather than the entire test suite. In this instance:

```bash
$ export API_BASE_URI="http://admin-tdu.pp.mediafoundry.com.au/api/v1.0"
$ ./vendor/bin/phpunit --group core
```
