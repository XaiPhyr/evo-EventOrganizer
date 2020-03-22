<?php
include("models/events.php");
include("services/components.php");
$lists = $event->get('', '', '');
$announcements = $event->get('announcements', '', '');

$current_date = $component->dateFormat('now', 'date');
$current_month = $component->dateFormat('now', 'month');
?>

<script>
    function preview(code) {
        window.location.href = '?page=details&code=' + code
    }
</script>

<style>
    .border-radius-left {
        border-bottom-left-radius: .25rem;
        border-top-left-radius: .25rem
    }
</style>