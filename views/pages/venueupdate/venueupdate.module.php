<?php
include("models/venues.php");

@$id = $_GET['id'];
$data = $venue->get('single', $id, '');
?>

<script>
    function returnToList() {
        window.location.href = '.?page=venues'
    }
</script>