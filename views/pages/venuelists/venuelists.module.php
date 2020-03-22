<?php
include("models/venues.php");
include("services/components.php");
$venuelists = $venue->get('', '', '');
?>

<script type="text/javascript">
    function add() {
        window.location.href = '?page=venueupdate'
    }

    function preview(id) {
        window.location.href = '?page=venuedetails&id=' + id
    }
</script>