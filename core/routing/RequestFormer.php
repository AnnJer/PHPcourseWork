<?php

namespace core;


class RequestFormer
{
    public static function getRequest(): Request {
        $request = new Request();
        if(!empty($_SERVER['REQUEST_URI'])){
            $uri = str_replace(ROOT_DIR, '', urldecode($_SERVER['REQUEST_URI']));
            $uri = trim($uri, '/');

            $request->uri = $uri;
        }

        $request->method = $_SERVER['REQUEST_METHOD'];

        return $request;
    }
}