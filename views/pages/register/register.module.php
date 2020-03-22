<?php
include("models/events.php");
include("services/components.php");
$eventname = $_GET['event'];
$data = $event->get('event-register', '', $eventname);
$count = $event->get('count', $data->event_header, '');
$refnum = $component->generateRefNum($data->eventCode, $count);
?>

<script>
    function returnToPreview(code) {
        window.location.href = '?page=details&code=' + code
    }
</script>