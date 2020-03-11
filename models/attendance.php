<?php
include("query.php");

class AttendanceModel extends QueryGetter
{
    /**
     * 
     */
    function get($flag = 'all', $refnum)
    {
        $get = "SELECT * FROM 
        attendance AS a, 
        event_header AS eh, 
        event_detail AS ed 
        WHERE a.refnum = '$refnum' 
        AND a.event_header = eh.Id 
        AND eh.Id = ed.event_header";

        return $this->crud($get, 'single');
    }

    /**
     * 
     */
    function attendance($id, $event_header, $refnum, $fname, $lname, $email, $institution, $profession)
    {
        if (empty($id)) {
            $post = "INSERT INTO attendance SET 
            event_header = '" . $event_header . "', 
            refnum = '" . $refnum . "', 
            firstname = '" . $fname . "', 
            lastname = '" . $lname . "', 
            email = '" . $email . "', 
            institution = '" . $institution . "', 
            profession = '" . $profession . "',
            registrationDate = now()";

            return $this->crud($post, '', 'c');
        }
    }
}

$attendance = new AttendanceModel;
