<?php
include("publiceventlists.module.php");
?>

<div class="container col-10">
    <legend class="h3 mb-3" align="center">Events</legend>
    <div class="row">
        <div class="col-12 col-lg-3">
            <?php include("_current-event.php"); ?>
        </div>

        <div class="col-12 col-lg-9">
            <div class="row">
                <?php include("_other-events.php"); ?>
            </div>
        </div>
    </div>
</div>