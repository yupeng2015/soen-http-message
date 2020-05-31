<?php

namespace Soen\Http\Message\Factory;

use SoenHttp\Message\Cookie\Cookie;

/**
 * Class CookieFactory
 * @package Soen\Http\Message\Factory
 */
class CookieFactory
{

    /**
     * Create cookie
     * @param string $method
     * @param $uri
     * @return Cookie
     */
    public function createCookie(string $name, string $value = '', int $expire = 0): Cookie
    {
        return new Cookie($name, $value, $expire);
    }

}
