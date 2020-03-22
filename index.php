<?php
// include("controllers/pages.php");

switch ($_GET['page']) {
    default:
        include("controllers/pages.php");
        return $page->dashboard();
        break;

    case 'login':
        $page->login();
        break;

    case 'logout':
        session_start();
        session_destroy();
        header("location: .?page=login");
        break;

    case 'eventlists':
        include("controllers/pages.php");
        $page->publiceventlists();
        break;

    case 'register':
        include("controllers/pages.php");
        $page->register();
        break;

    case 'register-preview':
        include("controllers/pages.php");
        $page->register('register-preview');
        break;

    case 'events':
        include("controllers/pages.php");
        $page->events();
        break;

    case 'details':
        include("controllers/pages.php");
        $page->events('details');
        break;

    case 'update':
        include("controllers/pages.php");
        $page->events('update');
        break;

    case 'venues':
        include("controllers/pages.php");
        $page->venues();
        break;

    case 'venuedetails':
        include("controllers/pages.php");
        $page->venues('details');
        break;

    case 'venueupdate':
        include("controllers/pages.php");
        $page->venues('update');
        break;

    case 'announcements':
        include("controllers/pages.php");
        $page->announcements();
        break;

    case 'announcementdetails':
        include("controllers/pages.php");
        $page->announcements('details');
        break;

    case 'announcementupdate':
        include("controllers/pages.php");
        $page->announcements('update');
        break;

    case 'accounts':
        include("controllers/pages.php");
        $page->accounts();
        break;

    case 'accountdetails':
        include("controllers/pages.php");
        $page->accounts('accountdetails');
        break;

    case 'accountupdate':
        include("controllers/pages.php");
        $page->accounts('accountupdate');
        break;
}
