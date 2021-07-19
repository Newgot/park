<?php


class DB
{
    protected $link;

    public function __construct()
    {
        $this->connect();
    }

    protected function connect()
    {
        $this->link = new PDO(
            'mysql:'.DB_HOST.';dbname='.DB_NAME,
            DB_USER,
            DB_PASSWORD
        );

        return $this;
    }

    public function execute($sql)
    {

    }

    public function query($sql)
    {

    }
}