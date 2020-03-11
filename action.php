<?php

switch ($_POST['save']) {
    case 'event':
        include("models/events.php");

        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['eventname'];
        $attendance = $_POST['attendance'];
        $handler = $_POST['facilitator'];
        $venue = $_POST['venue'];
        $club = $_POST['club'];
        $startdate = $_POST['startdate'] . " " . $_POST['starttime'];
        $enddate = $_POST['enddate'] . " " . $_POST['endtime'];
        $regstartdate = $_POST['regstartdate'];
        $regenddate = $_POST['regenddate'];
        $shortdesc = $_POST['shortdesc'];
        $desc = $_POST['eventdesc'];

        $event->event_header($id, $code, $name, $attendance,  $startdate, $enddate, $regstartdate, $regenddate);
        $event->event_detail($id, $handler, $shortdesc, $desc, $venue, $club);

        header("location: .?page=details&code=" . $code);
        break;

    case 'register':
        include("models/attendance.php");

        $id = $_POST['id'];
        $event_header = $_POST['event_header'];
        $refnum = $_POST['refnum'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $institution = $_POST['institution'];
        $profession = $_POST['profession'];

        $preview_id = $attendance->attendance($id, $event_header, $refnum, $fname, $lname, $email, $institution, $profession);
        header("location: .?page=register-preview&refnum=" . $refnum);
        break;

    case 'venues':
        include("models/venues.php");

        $id = $_POST['id'];
        $name = $_POST['venuename'];

        $venue->venue($id, $name);
        header("location: .?page=venues");
        break;
}

switch ($_POST['inactive']) {
    case 'event':
        include("models/events.php");

        $id = $_POST['id'];

        $event->status_header($id, '0');
        $event->status_detail($id, '0');
        header("location: .?page=events");
        break;

    case 'announcement':
        include("models/announcements.php");

        $id = $_POST['id'];

        $announcement->status($id, '0', 'I');
        header("location: .?page=announcements");
        break;
}

switch ($_POST['active']) {
    case 'event':
        include("models/events.php");

        $id = $_POST['id'];

        $event->status_header($id, '1');
        $event->status_detail($id, '1');
        header("location: .?page=events");
        break;

    case 'announcement':
        include("models/announcements.php");

        $id = $_POST['id'];

        $announcement->status($id, '1', 'A');
        header("location: .?page=announcements");
        break;
}
