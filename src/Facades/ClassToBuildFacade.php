<?php

namespace SOS\LaravelPackageTemplate\Facades;

use Illuminate\Support\Facades\Facade;
use SOS\LaravelPackageTemplate\Classes\ClassToBuild;

/**
 * @method ClassToBuild setExample(string $param)
 */
class ClassToBuildFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ClassToBuildFacade';
    }
}
