<?php
include("models/announcements.php");
include("services/components.php");
$announcementlists = $announcement->get();
?>

<script type="text/javascript">
    function add() {
        window.location.href = '?page=announcementupdate'
    }

    function preview(id) {
        window.location.href = '?page=announcementdetails&id=' + id
    }
</script>