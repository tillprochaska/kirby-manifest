<?php

use TillProchaska\KirbyManifest\Manifest;

it('adds `manifest` site method', function () {
    expect(site()->manifest())
        ->toBeInstanceOf(Manifest::class)
        ->get('main.css')->toEqual('main.f66c065b.css');
});
