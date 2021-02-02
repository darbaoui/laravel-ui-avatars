<?php

namespace Darbaoui\Avatar\Facades;

use Illuminate\Support\Facades\Facade;


class Avatar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'avatar';
    }
}
