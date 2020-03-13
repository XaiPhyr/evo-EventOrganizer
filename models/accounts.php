<?php
include("query.php");

class AccountsModel extends QueryGetter
{
    /**
     * Get
     */
    function get($flag = 'all', $username, $password)
    {
        switch ($flag) {
            default:
                $get = "SELECT * FROM accounts WHERE flag = 1";

                return $this->crud($get);
                break;

            case 'single':
                $get = "SELECT * FROM accounts WHERE username = '$username'";

                return $this->crud($get, 'single');
                break;

            case 'login':
                $get = "SELECT * FROM accounts WHERE username = '$username' AND password = '" . hash('sha256', $password) . "'";

                session_start();
                return $_SESSION['login'] = $this->crud($get, 'single');
                break;
        }
    }

    /* CREATE, UPDATE */
    function accounts($id, $username, $password, $image, $email, $status)
    {
        if (empty($id)) {
            $post = "INSERT INTO accounts SET
            username = '$username',
            password = '" . hash('sha256', $password) . "',
            email = '$email',
            status = '$status',
            created = now(),
            flag = 1";

            return $this->crud($post, '', 'c');
        } else {
            $put = "UPDATE accounts SET
            username = '$username',
            password = '" . hash('sha256', $password) . "',
            email = '$email',
            status = '$status',
            created = now(),
            flag = 1
            Where Id = $id";

            return $this->crud($put, '', 'u');
        }
    }

    /* DELETE */
    function remove($id, $status)
    {
        $put = "UPDATE accounts SET flag = $status WHERE Id = $id";

        return $this->crud($put, 'u');
    }
}

$account = new AccountsModel;
