<?php
include("dashboard.module.php");
?>

<div class="container col-11">
    <div class="row">
        <div class="col-12">
            <?php include("_announcements.php"); ?>
        </div>
    </div>


    <div class="row">
        <?php include("_current-event.php"); ?>
    </div>

    <br>
    <legend class="h3 mb-3" align="center">Other Events</legend>
    <div class="row">
        <?php include("_other-events.php"); ?>
    </div>

    <?php if ($count > 0) { ?>
        <div class="nav mx-auto mb-5">
            <a style="font-size: .875rem" href="?page=eventlists" class="text-decoration-none">Show more...</a>
        </div>
    <?php } ?>
</div>