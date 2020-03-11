<?php
include("models/attendance.php");
include("services/components.php");

$refnum = $_GET['refnum'];
$data = $attendance->get('', $refnum);
?>

<script>
    function returnToPage(code) {
        window.location.href = '?page=details&code=' + code
    }
</script>