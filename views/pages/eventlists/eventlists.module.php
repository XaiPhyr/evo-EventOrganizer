<?php
include("models/events.php");
include("services/components.php");

$eventlists = $event->get('', '', '');
$current_date = $component->dateFormat('now', 'date');

if (@$_GET['flag'] == 'inactive') {
    $eventlists = $event->get('inactive');
}
$count = 0;
?>

<script type="text/javascript">
    function add() {
        window.location.href = '?page=update'
    }

    function preview(code) {
        window.location.href = '?page=details&code=' + code
    }
</script>