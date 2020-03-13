<?php
include("controllers/pages.php");

switch ($_GET['page']) {
    default:
        $page->dashboard();
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
        $page->publiceventlists();
        break;

    case 'register':
        $page->register();
        break;

    case 'register-preview':
        $page->register('register-preview');
        break;

    case 'events':
        $page->events();
        break;

    case 'details':
        $page->events('details');
        break;

    case 'update':
        $page->events('update');
        break;

    case 'venues':
        $page->venues();
        break;

    case 'venuedetails':
        $page->venues('details');
        break;

    case 'venueupdate':
        $page->venues('update');
        break;

    case 'announcements':
        $page->announcements();
        break;

    case 'announcementdetails':
        $page->announcements('details');
        break;

    case 'announcementupdate':
        $page->announcements('update');
        break;

    case 'accounts':
        $page->accounts();
        break;

    case 'accountdetails':
        $page->accounts('accountdetails');
        break;

    case 'accountupdate':
        $page->accounts('accountupdate');
        break;
}
