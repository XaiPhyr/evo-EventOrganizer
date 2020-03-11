<?php
include("query.php");

class VenuesModels extends QueryGetter
{
    /**
     * GET
     * @param string $flag 'all', 'single'
     */
    function get($flag = 'all', $id, $value)
    {
        switch ($flag) {
            default:
                $get = "SELECT * FROM venues";

                return $this->crud($get);
                break;

            case 'single':
                $get = "SELECT * FROM venues WHERE Id = $id AND flag = 1";

                return $this->crud($get, 'single');
                break;
        }
    }

    function venue($id, $venuename)
    {
        if (empty($id)) {
            $post = "INSERT INTO venues SET
            venuename = '$venuename ',
            created = now(), flag = 1";

            return $this->crud($post, '', 'c');
        } else {
            $post = "INSERT INTO venues SET
            venuename = '$venuename ',
            modified = now(), flag = 1 WHERE Id = '$id'";

            return $this->crud($post, '', 'u');
        }
    }

    /* DELETE */
    function status($id, $status)
    {
        $put = "UPDATE venues SET flag = '" . $status . "' WHERE Id = '" . $id . "'";

        return $this->crud($put, '', 'd');
    }
}

$venue = new VenuesModels;
