<?php
include("models/announcements.php");
include("services/components.php");

$id = $_GET['id'];
$data = $announcement->get('single', $id);
?>

<script>
    function edit(id) {
        window.location.href = '?page=announcementupdate&id=' + id
    }

    function returnToList() {
        window.location.href = '?page=announcements'
    }

    function returnHome() {
        window.location.href = '.'
    }
</script>