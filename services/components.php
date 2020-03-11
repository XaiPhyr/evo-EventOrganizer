<?php

class Components
{
    public function dateFormat($date, $format = 'datetime')
    {
        $formated_date = new DateTime($date, new DateTimeZone('Asia/Hong_Kong'));

        switch ($format) {
            default:
                return $formated_date->format('M Y h:i A');
                break;

            case 'day':
                return $formated_date->format('d');
                break;

            case 'time':
                return $formated_date->format('h:i A');
                break;

            case 'date':
                return $formated_date->format('m/d/yy');
                break;

            case 'month':
                return $formated_date->format('m');
                break;

            case 'preview-date':
                return $formated_date->format('yy-m-d');
                break;

            case 'preview-time':
                return $formated_date->format('H:i');
                break;

            case 'month-year':
                return $formated_date->format('M Y');
        }
    }

    public function preview_buttons($flag, $value)
    {
        switch ($flag) {
            default:
                return '<button type="button" onclick="edit(\'' . $value . '\')" class="btn btn-sm btn-info" title="Edit">
                            <img style="width: 24px; height: 20px" src="assets/icons/feathericons/edit.svg" alt="">
                        </button>';
                break;

            case 'editWithId':
                return '<button type="button" onclick="edit(' . $value . ')" class="btn btn-sm btn-info" title="Edit">
                            <img style="width: 24px; height: 20px" src="assets/icons/feathericons/edit.svg" alt="">
                        </button>';
                break;

            case 'close':
                return '<button type="button" onclick="returnToList()" class="btn btn-sm btn-secondary" title="Close">
                            <img style="width: 24px; height: 20px" src="assets/icons/feathericons/x-circle.svg" alt="">
                        </button>';
                break;

            case '1':
                return '<button type="submit" name="inactive" value="' . $value . '" class="btn btn-sm btn-danger" title="Delete">
                            <img style="width: 24px; height: 20px" src="assets/icons/feathericons/trash-2.svg" alt="">
                        </button>';
                break;

            case '0':
                return '<button type="submit" name="active" value="' . $value . '" class="btn btn-sm btn-success" title="Activate">
                            <img style="width: 24px; height: 20px" src="assets/icons/feathericons/check-circle.svg" alt="">
                        </button>';
                break;
        }
    }

    function generateRefNum($key, $count)
    {
        return $key . "-" . rand(10000000, 99999999) . "-" . sprintf("%'.03d\n", $count);
    }

    function flag($value)
    {
        return "<div " . $value = $value ? "class='text-success'> Vacant" : "class='text-danger'> Occupied" . "</div>";
    }
}

$component = new Components;
