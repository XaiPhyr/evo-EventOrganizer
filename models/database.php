<?php

class Database
{
    public $db_username;
    public $db_password;
    public $db_hostname;
    public $dbname;

    function __construct()
    {
        $this->db_username = 'id9150654_xaiphyr';
        $this->db_password = 'Spectre7';
        $this->db_hostname = 'localhost';
        $this->dbname = 'id9150654_my_database';
    }

    public function db_connect()
    {
        return $conn = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->dbname);
    }
}
