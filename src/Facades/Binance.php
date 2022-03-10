<?php

namespace myfender\Laravel\Binance\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * @method static \myfender\Laravel\Binance\BinanceSpot spot($key = null, $secret = null)
 * @method static \myfender\Laravel\Binance\BinanceFuture future($key = null, $secret = null)
 */
class Binance extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'binance';
    }
}
