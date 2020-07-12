<?php


namespace App\Service;


class PriceHelper
{
    private static $buy = null;
    private static $sell = null;

    static function init()
    {
        $valuka='EUR/USD_LEVERAGE';

        $url = 'https://api-adapter.backend.currency.com/api/v1/depth?symbol='.$valuka;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); // set url to post to
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
        curl_setopt($ch, CURLOPT_USERAGENT, 'User-Agent: Mozilla/4.0 (compatible; PHP Binance API)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT,30); // times out after 4s
        $tick_min = curl_exec($ch); // run the whole process
        curl_close($ch);

        $data_min = json_decode($tick_min, TRUE);


        if (isset($data_min['asks'][0][0]) && isset($data_min['bids'][0][0])) {
            self::setBuy($data_min['asks'][0][0]);
            self::setSell($data_min['bids'][0][0]);
        }
    }

    public static function getBuy(): ?int
    {
        return self::$buy;
    }

    private static function setBuy(?int $buy): void
    {
        self::$buy = $buy;
    }

    public static function getSell(): ?int
    {
        return self::$sell;
    }

    private static function setSell(?int $sell): void
    {
        self::$sell = $sell;
    }
}