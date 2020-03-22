<?php

class PagesControllers
{
    /**
     * @param string $page name of the file
     * @return page|pages returns the page with header and footer
     */
    function webpage($page)
    {
        $page = include("views/header.php");
        $page .= include("views/pages/" . $page);
        $page .= include("views/footer.php");
        
        return $page;
    }

    /**
     * @param string $flag 'lists', 'details', 'update'
     */
    function events($flag = 'lists')
    {
        switch ($flag) {
            default:
                return $this->webpage('eventlists/eventlists.php');
                break;

            case 'details':
                return $this->webpage('eventdetails/eventdetails.php');
                break;

            case 'update':
                return $this->webpage('eventupdate/eventupdate.php');
                break;
        }
    }

    function dashboard($flag = 'lists')
    {
        switch ($flag) {
            default:
                return $this->webpage('dashboard/index.php');
                break;
        }
    }

    function register($flag = 'register')
    {
        switch ($flag) {
            default:
                return $this->webpage('register/register.php');
                break;

            case 'register-preview':
                return $this->webpage('registerdetails/registerdetails.php');
                break;
        }
    }

    function venues($flag = 'lists')
    {
        switch ($flag) {
            default:
                return $this->webpage('venuelists/venuelists.php');
                break;

            case 'details':
                return $this->webpage('venuedetails/venuedetails.php');
                break;

            case 'update':
                return $this->webpage('venueupdate/venueupdate.php');
                break;
        }
    }

    function announcements($flag = 'lists')
    {
        switch ($flag) {
            default:
                return $this->webpage('announcementlists/announcementlists.php');
                break;

            case 'details':
                return $this->webpage('announcementdetails/announcementdetails.php');
                break;

            case 'update':
                return $this->webpage('announcementupdate/announcementupdate.php');
                break;
        }
    }

    function publiceventlists($flag = 'lists')
    {
        switch ($flag) {
            default:
                return $this->webpage('publiceventlists/publiceventlists.php');
                break;
        }
    }

    function accounts($flag = 'lists')
    {
        switch ($flag) {
            default:
                return $this->webpage('accountslists/accountslists.php');
                break;

            case 'accountdetails':
                return $this->webpage('accountsdetails/accountsdetails.php');
                break;

            case 'accountupdate':
                return $this->webpage('accountsupdate/accountsupdate.php');
                break;
        }
    }

    function login()
    {
        return $this->webpage('login/index.php');
    }
}

$page = new PagesControllers;
