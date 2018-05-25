<?php
namespace core;

class View
{
    protected $view;
    protected $params;

    public function __construct(string $view, array $params = null)
    {
        $this->view = $view;
        $this->params = $params;
    }

    public function show() {
        $params = $this->params;

        require_once ROOT . '/views/' . $this->view . '.php';
    }
}


function view(string $view, array $params = null){
    return new View($view,$params);
}