<?php
include("models/events.php");
include("services/components.php");
$code = $_GET['code'];
$data = $event->get('single', '', $code);
$count = $event->get('count', $data->event_header);
$attendances = $event->get('attendance', $data->event_header);
$current_attendance = $event->get('attendance', $data->event_header, 'current');
$current_date = $component->dateFormat('now', 'date');
$event_date = $component->dateFormat($data->startDate, 'date');
$refnum = $component->generateRefNum($data->eventCode, $count);

if ($component->dateFormat($data->startDate, 'date') == $component->dateFormat($data->endDate, 'date')) {
    $time = $component->dateFormat($data->startDate) . " - " . $component->dateFormat($data->endDate, 'time');
} else {
    $time = $component->dateFormat($data->startDate) . " - " . $component->dateFormat($data->endDate);
}

if ($_POST['keyword'] || $_POST['keyword'] != '') {
    $attendances = $event->get('search-attendance', '', $_POST['keyword']);
}
?>

<script>
    function edit(code) {
        window.location.href = '?page=update&code=' + code
    }

    function returnToList() {
        window.location.href = '?page=events'
    }

    function returnHome() {
        window.location.href = '.'
    }
</script>