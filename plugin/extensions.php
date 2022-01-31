<?php

use Kirby\Cms\App;
use Kirby\Http\Url;
use TillProchaska\KirbyManifest\Manifest;

return [
    'components' => [
        'css' => function (App $kirby, string $url, $options = null): string {
            if (Url::isAbsolute($url)) {
                return $url;
            }

            return (new Manifest(option('tillprochaska.manifest.path')))->url($url);
        },

        'js' => function (App $kirby, string $url, $options = null): string {
            if (Url::isAbsolute($url)) {
                return $url;
            }

            return (new Manifest(option('tillprochaska.manifest.path')))->url($url);
        },
    ],
];
