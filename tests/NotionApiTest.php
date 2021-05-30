<?php

namespace FiveamCode\LaravelNotionApi\Tests;

use Orchestra\Testbench\TestCase;
use FiveamCode\LaravelNotionApi\Notion;
use FiveamCode\LaravelNotionApi\NotionFacade;
use FiveamCode\LaravelNotionApi\Exceptions\HandlingException;

/**
 * Class EndpointPageTest
 *
 * The fake API responses are based on our test environment (since the current Notion examples do not match with the actual calls).
 * @see https://developers.notion.com/reference/get-page
 *
 * @package FiveamCode\LaravelNotionApi\Tests
 */
class NotionApiTest extends TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return ['FiveamCode\LaravelNotionApi\LaravelNotionApiServiceProvider'];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageAliases($app): array
    {
        return [
            'Notion' => NotionFacade::class
        ];
    }

    /** @test */
    public function it_asserts_true()
    {
        $this->assertTrue(true);
    }
}