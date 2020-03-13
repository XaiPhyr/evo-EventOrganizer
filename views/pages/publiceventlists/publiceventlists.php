<?php
include("publiceventlists.module.php");
?>

<div class="container col-11">
    <legend class="h3 mb-3" align="center">Events</legend>
    <div class="row p-0 m-0">
        <div class="col-12 col-lg-3">
            <?php include("_current-event.php"); ?>
        </div>

        <div class="col-12 col-lg-9 m-0 p-0">
            <div class="row m-0 p-0">
                <?php include("_other-events.php"); ?>
            </div>
        </div>
    </div>
</div>