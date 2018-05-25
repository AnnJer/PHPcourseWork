<?php
namespace database\sql;



class SQLResult
{
    private $data;
    private $query;
    private $error;


    public function __construct(array $data, string $query, array $error)
    {
        $this->data = $data;
        $this->query = $query;
        $this->error = $error;
    }


    public function getData()
    {
        return $this->data;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getError()
    {
        return $this->error;
    }



}