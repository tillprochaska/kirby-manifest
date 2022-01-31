<?php

namespace TillProchaska\KirbyManifest;

use Kirby\Data\Data;
use Kirby\Filesystem\File;

class Manifest
{
    protected File $file;

    public function __construct(string $path)
    {
        $this->file = new File([
            'root' => $path,
        ]);
    }

    public function url(string $key): ?string
    {
        if (!$this->get($key)) {
            return null;
        }

        return kirby()->url('assets').'/'.$this->get($key);
    }

    public function get(string $key): ?string
    {
        return $this->entries()[$key] ?? $key;
    }

    public function entries(): array
    {
        if (!$this->file->exists()) {
            throw new \Exception('The manifest file does not exist.');
        }

        return Data::read($this->file->root(), 'json');
    }
}
