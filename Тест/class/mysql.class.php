<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 02.01.2018
 * Time: 18:51
 */

class MySQL {
    private $connection;

    function __construct($access) {
        $this->connection = mysqli_connect($access['host'], $access['user'], $access['pwd'], $access['db']);
    }

    public function query($query) {
        return (is_string($query)) ? mysqli_query($this->connection, $query) : FALSE;
    }
}