<?php

namespace App;

use Illuminate\Foundation\Application as LaravelApplication;

class BaseApplication extends LaravelApplication
{
    protected $namespace = 'App\\';

    public function path($path = '')
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'src/App'.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
