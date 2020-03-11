<?php

class Database
{
    public $db_username;
    public $db_password;
    public $db_hostname;
    public $dbname;

    function __construct()
    {
        $this->db_username = 'root';
        $this->db_password = 'normandy';
        $this->db_hostname = 'localhost';
        $this->dbname = 'evo_app';
    }

    public function db_connect()
    {
        return $conn = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->dbname);
    }
}
