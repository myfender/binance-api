<?php

namespace myfender\Laravel\Binance\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * @method static \myfender\Laravel\Binance\BinanceSpot  keySecret($key, $secret)
 * @method static array state()
 * @method static array accounts()
 * @method static array transfer($amount, $type = 'MAIN_UMFUTURE', $asset = 'USDT')
 * @method static array orderPlace($data = [])
 * @method static array orderCancel($symbol, $orderId)
 * @method static array orderCancelAll($symbol)
 * @method static array orderSearch($symbol, $orderId)
 * @method static array orderHistory(array $data = [])
 */
class BinanceSpot extends LaravelFacade
{
    protected static function getFacadeAccessor()
    {
        return 'binance.spot';
    }
}
