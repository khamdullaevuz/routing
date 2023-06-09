<?php

namespace Framework;

class Router
{
    private static array $routes = [];

    public static function get($request, $method): void
    {
        self::$routes[$request] = $method;
    }

    public static function routes(): array
    {
        return self::$routes;
    }
}