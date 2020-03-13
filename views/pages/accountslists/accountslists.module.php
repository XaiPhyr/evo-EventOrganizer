<?php
include("models/accounts.php");
include("services/components.php");
$accountlists = $account->get();
?>

<script type="text/javascript">
    function add() {
        window.location.href = '?page=accountupdate'
    }

    function preview(username) {
        window.location.href = '?page=accountdetails&user=' + username
    }
</script>