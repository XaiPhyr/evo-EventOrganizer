<?php
include("query.php");

class AnnouncementsModels extends QueryGetter
{
    function get($flag = 'all', $id)
    {
        switch ($flag) {
            default:
                $get = "SELECT * FROM announcements";

                return $this->crud($get);
                break;

            case 'single':
                $get = "SELECT * FROM announcements WHERE Id = $id";

                return $this->crud($get, 'single');
                break;
        }
    }

    function status($id, $flag, $status)
    {
        $put = "UPDATE announcements SET flag = $flag, status = '" . $status . "' WHERE Id = $id";

        return $this->crud($put, '', 'd');
    }
}

$announcement = new AnnouncementsModels;
