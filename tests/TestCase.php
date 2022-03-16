<?php

namespace TillProchaska\KirbyManifest\Tests;

use Kirby\Cms\App;
use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * @internal
 * @coversNothing
 */
class TestCase extends BaseTestCase
{
    protected App $kirby;

    protected function setUp(): void
    {
        $this->kirby = new App([
            'roots' => [
                'index' => __DIR__.'..',
            ],
            'urls' => [
                'assets' => 'https://example.org/assets',
            ],
            'options' => [
                'tillprochaska.manifest.path' => __DIR__.'/support/manifest.json',
            ],
        ]);
    }
}
