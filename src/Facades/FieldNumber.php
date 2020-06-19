<?php

namespace Adaptcms\FieldNumber\Facades;

use Illuminate\Support\Facades\Facade;

class FieldNumber extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldNumber';
    }
}
