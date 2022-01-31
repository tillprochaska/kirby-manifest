<?php

it('generates CSS URL based on manifest', function () {
    $tag = '<link href="https://example.org/assets/main.f66c065b.css" rel="stylesheet">';
    expect(css('main.css'))->toEqual($tag);
});

it('ignores absolute CSS URLs', function () {
    $tag = '<link href="https://example.org/third-party.css" rel="stylesheet">';
    expect(css('https://example.org/third-party.css'))->toEqual($tag);
});

it('generates JS URL based on manifest', function () {
    $tag = '<script src="https://example.org/assets/main.cf9d219e.js"></script>';
    expect(js('main.js'))->toEqual($tag);
});

it('ignores absolute JS URLs', function () {
    $tag = '<script src="https://example.org/third-party.js"></script>';
    expect(js('https://example.org/third-party.js'))->toEqual($tag);
});
