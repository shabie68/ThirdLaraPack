<?php

namespace MignonTech\ThirdLaraPack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MignonTech\ThirdLaraPack\ThirdLaraPack
 */
class ThirdLaraPack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'thirdlarapack';
    }
}
