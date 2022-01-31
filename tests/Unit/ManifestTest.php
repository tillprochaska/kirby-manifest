<?php

use TillProchaska\KirbyManifest\Manifest;

beforeEach(function () {
    $this->manifest = new Manifest(__DIR__.'/../support/manifest.json');
});

it('loads entries', function () {
    expect($this->manifest->entries())->toEqual([
        'main.css' => 'main.f66c065b.css',
        'main.js' => 'main.cf9d219e.js',
    ]);
});

it('throws if manifest file does not exist', function () {
    $manifest = new Manifest(__DIR__.'/../support/does-not-exist.json');
    $manifest->entries();
})->throws(\Exception::class);

it('returns path from manifest', function () {
    expect($this->manifest->get('main.css'))->toEqual('main.f66c065b.css');
});

it('returns asset URL', function () {
    expect($this->manifest->url('main.css'))->toEqual('https://example.org/assets/main.f66c065b.css');
});
