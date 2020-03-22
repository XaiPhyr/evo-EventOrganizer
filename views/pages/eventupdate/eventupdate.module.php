<?php
include("models/events.php");
include("services/components.php");

@$code = $_GET['code'];
$data = $event->get('single', '', $code);
$venues = $event->get('venues', '', '');

$current_date = $component->dateFormat('now', 'preview-date');
$current_time = $component->dateFormat('now', 'preview-time');
?>

<script>
    function returnToPage(code) {
        if (code != "") window.location.href = '?page=details&code=' + code
        else window.location.href = '?page=events'
    }

    function getDate() {
        var x = document.getElementById('startdate').value;
        var y = document.getElementById('enddate').innerHTML = x;
        console.log(y);
    }
</script>