<?php
class DB
{
    protected $link;

    public function __construct()
    {
        $this->connect();
    }

    protected function connect() : DB
    {
        $this->link = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
            DB_USER,
            DB_PASSWORD,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]
        );
        return $this;
    }

    protected function execute(string $sql) : PDOStatement
    {
        $sth = $this->link->prepare($sql);
        $sth->execute();
        return $sth;
    }

    public function query(string $sql) : array
    {
        $exe = $this->execute($sql);
        $res = $exe->fetchAll((PDO::FETCH_ASSOC));
        return $res ? $res : [];
    }

}
