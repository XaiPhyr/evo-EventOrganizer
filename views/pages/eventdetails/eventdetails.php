<?php
include("eventdetails.module.php");
?>

<div class="container">
    <div class="row mb-2">
        <div class="col-12">
            <form action="action.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data->event_header ?>">
                <?php if ($login->status == 'Admin') { ?>
                    <div class="float-right btn-group">
                        <?php echo $component->preview_buttons('edit', $data->eventCode); ?>
                        <?php echo $component->preview_buttons($data->flag, 'event'); ?>
                        <?php echo $component->preview_buttons('close', ''); ?>
                    </div>
                <?php } else { ?>
                    <form action="" method="post">
                        <div class="float-right ml-3">
                            <?php if ($current_date >= $component->dateFormat($data->startDate, 'preregistration') && $current_date <= $component->dateFormat($data->startDate, 'date') && $current_attendance < $data->maxAttendance) { ?>
                                <a style="text-decoration:none" href="?page=register&event=<?php echo $data->eventName ?>">
                                    <button type="button" class="btn btn-sm btn-primary">Register</button>
                                </a>
                            <?php } ?>
                            <button type="button" onclick="returnHome()" class="btn btn-sm btn-secondary">Back</button>
                        </div>
                    </form>
                <?php } ?>
            </form>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <div class=""><?php echo $time ?></div>
            <h3><?php echo $data->eventName ?></h3>
            <p><?php echo $data->eventDesc ?></p>
        </div>
    </div>

    <?php if ($login->status == 'Admin') include("_attendances.php"); ?>
</div>