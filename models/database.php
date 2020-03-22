<?php

class BASEURL
{
    public $db_username;
    public $db_password;
    public $db_hostname;
    public $dbname;

    public function online_account()
    {
        $this->db_username = 'b3a5d64627c7e7';
        $this->db_password = '855dd8dd';
        $this->db_hostname = 'us-cdbr-iron-east-05.cleardb.net';
        $this->dbname = 'heroku_a4f52a441c3d3ab';
    }

    public function static_account()
    {
        
    }
}

class Database extends BASEURL
{
    function __construct()
    {
        BASEURL::online_account();
        // BASEURL::static_account();
    }

    public function db_connect()
    {
        return $conn = mysqli_connect($this->db_hostname, $this->db_username, $this->db_password, $this->dbname);
    }
}
