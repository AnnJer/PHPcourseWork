<?php
namespace core;


class Route
{
    protected $uri;
    protected $controller;
    protected $function;
    protected $action;
    protected $method;

    public function __construct(string $uri, string $action, string $method = null)
    {
        $this->uri = $uri;

        $temp = explode('/', $action);
        $this->controller = array_shift($temp);
        $this->function = array_shift($temp);
        $this->method = $method;

        $this->action = implode('/', $temp);
    }




    public function getController(): string
    {
        return $this->controller;
    }




    public function getFunction(): string
    {
        return $this->function;
    }




    public function getUriPattern(): string
    {
        return $this->uri;
    }




    public function getMethod(): string
    {
        return $this->method;
    }




    protected function checkMethod(string $method): bool
    {
        if($this->method === null) {
            return true;
        }

        return strtolower($this->method) === strtolower($method);
    }




    public function checkURI($uri): bool
    {
        return preg_match("~^$this->uri$~", $uri);
    }




    public function checkRequest(Request $request): bool
    {
        if(!$this->checkMethod($request->method)){
            return false;
        }

        if(!$this->checkURI($request->uri)) {
            return false;
        }

        return true;
    }




    public function getUriParams($uri): array
    {
        $temp = preg_replace("~^$this->uri$~", $this->action, $uri);
        return explode('/', $temp);
    }

}



function route(string $uri, string $action, string $method = null) {
    return new Route($uri, $action, $method);
}