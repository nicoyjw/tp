<?php
/**
 * Created by nick-packagist.
 * User: Nick.Wu
 * Date: 2018/3/17
 * Time: 16:17
 */

namespace Nick\BiboxApi\Facades;
use Illuminate\Support\Facades\Facade;


class BiboxClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'biboxclient';
    }
}