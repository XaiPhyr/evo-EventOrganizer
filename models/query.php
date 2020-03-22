<?php
include("database.php");

class QueryGetter extends Database
{
    /**
     * Create, Update, Delete
     * 
     * @param string $flag can be 'all' or 'single', DEFAULT 'all', if Creating, Updating or Deleting use ''
     * @param query|any $query SQL query GET, POST, PUT, DELETE
     * @param string $crud [OPTIONAL] default 'r'
     * 
     * 'c' -> Create, 'r' -> Read, 'u' -> Update, 'd' -> Delete
     * 
     * @return mixed
     * 
     */
    public function crud($query, $flag = "all", $crud = "r")
    {
        $connect = $this->db_connect();
        $qry = mysqli_query($connect, $query);

        if ($crud == "r") return $this->retrieve($flag, $qry);
        else {
            switch ($crud) {
                case 'c':
                    $qry;
                    return $connect->insert_id;
                    break;

                default:
                    $qry;
                    break;
            }
        };

        $connect->close();
    }

    function retrieve($s, $q)
    {
        if ($s == 'all') {
            while ($items = mysqli_fetch_object($q)) $lists[] = $items;
            return @$lists;
        } else return mysqli_fetch_object(@$q);
    }
}
