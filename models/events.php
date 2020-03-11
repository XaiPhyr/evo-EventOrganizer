<?php
include("query.php");

class EventsModels extends QueryGetter
{
    public $last_id;

    /**
     * 
     */
    function get($flag = 'all', $id, $value)
    {
        switch ($flag) {
            default:
                $get = "SELECT * FROM 
                event_header AS eh, 
                event_detail AS ed 
                WHERE eh.Id = ed.event_header 
                AND eh.flag = 1 AND ed.flag = 1 
                ORDER BY eh.startDate ASC LIMIT 10";

                return $this->crud($get);
                break;

            case 'single':
                $get = "SELECT * FROM 
                event_header AS eh, 
                event_detail AS ed 
                WHERE eh.eventCode = '$value' 
                AND eh.Id = ed.event_header";

                return $this->crud($get, 'single');
                break;

            case 'attendance':
                switch ($value) {
                    default:
                        $get = "SELECT * FROM attendance WHERE event_header = '" . $id . "'";

                        return $this->crud($get);
                        break;

                    case 'current':
                        $get = "SELECT COUNT(*) AS current FROM attendance WHERE event_header = '" . $id . "'";

                        return $this->crud($get, 'single')->current;
                        break;
                }
                break;

            case 'inactive':
                $get = "SELECT * FROM 
                    event_header AS eh, 
                    event_detail AS ed 
                    WHERE eh.Id = ed.event_header 
                    AND eh.flag = 0 AND ed.flag = 0";

                return $this->crud($get);
                break;

            case 'search-attendance':
                $get = "SELECT * FROM attendance WHERE refnum LIKE '%" . $value . "%'";

                return $this->crud($get);
                break;

            case 'count':
                $get = "SELECT IFNULL(COUNT(*), 0) + 1 AS refNo FROM attendance WHERE event_header = $id";

                return $this->crud($get, 'single')->refNo;
                break;

            case 'announcements':
                $get = "SELECT * FROM announcements WHERE flag = 1 AND status = 'A'";

                return $this->crud($get);
                break;

            case 'event-register':
                $get = "SELECT * FROM 
                    event_header AS eh, 
                    event_detail AS ed 
                    WHERE eh.eventName = '" . $value . "' 
                    AND eh.Id = ed.event_header";

                return $this->crud($get, 'single');
                break;

            case 'venues':
                $get = "SELECT * FROM venues WHERE flag = 1";

                return $this->crud($get);
                break;

            case 'clubs':
                $get = "SELECT * FROM clubs WHERE flag = 1";

                return $this->crud($get);
                break;
        }
    }

    /* CREATE, UPDATE */
    function event_header($id, $code, $eventname, $attendances, $startdate, $enddate, $regstartdate, $regenddate)
    {
        if (empty($id)) {
            $post = "INSERT INTO event_header SET 
            eventCode = '" . $code . "', 
            eventName = '" . $eventname . "', 
            maxAttendance = '" . $attendances . "', 
            startDate = '" . $startdate . "', 
            endDate = '" . $enddate . "', 
            registrationStartDate = '" . $regstartdate . "', 
            registrationEndDate = '" . $regenddate . "', 
            created = now(), flag = 1";

            return $this->last_id = $this->crud($post, '', 'c');
        } else {
            $put = "UPDATE event_header SET 
            eventCode = '" . $code . "', 
            eventName = '" . $eventname . "', 
            maxAttendance = '" . $attendances . "', 
            startDate = '" . $startdate . "', 
            endDate = '" . $enddate . "', 
            registrationStartDate = '" . $regstartdate . "', 
            registrationEndDate = '" . $regenddate . "',  
            modified = now(), flag = 1 WHERE Id = '" . $id . "'";

            return $this->crud($put, '', 'u');
        }
    }

    function event_detail($id, $eventhandler, $eventshortdesc, $eventdesc, $eventvenue, $club)
    {
        if (empty($id)) {
            $post = "INSERT INTO event_detail SET 
            event_header = '" . $this->last_id . "', 
            eventHandler = '" . $eventhandler . "', 
            eventShortDesc = '" . $eventshortdesc . "', 
            eventDesc = '" . $eventdesc . "', 
            eventVenue = '" . $eventvenue . "', 
            club = '" . $club . "', 
            created = now(), flag = 1";

            return $this->crud($post, '', 'c');
        } else {
            $put = "UPDATE event_detail SET 
            eventHandler = '" . $eventhandler . "', 
            eventShortDesc = '" . $eventshortdesc . "', 
            eventDesc = '" . $eventdesc . "', 
            eventVenue = '" . $eventvenue . "', 
            club = '" . $club . "', 
            modified = now(), flag = 1 WHERE event_header = '" . $id . "'";

            return $this->crud($put, '', 'u');
        }
    }

    /* DELETE */
    function status_header($id, $status)
    {
        $put = "UPDATE event_header SET flag = '" . $status . "' WHERE Id = '" . $id . "'";

        return $this->crud($put, '', 'd');
    }

    function status_detail($id, $status)
    {
        $put = "UPDATE event_detail SET flag = '" . $status . "' WHERE event_header = '" . $id . "'";

        return $this->crud($put, '', 'd');
    }
}

$event = new EventsModels;
