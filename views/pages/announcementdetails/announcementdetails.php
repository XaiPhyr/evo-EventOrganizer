<?php
include("announcementdetails.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-12">
                    <form action="action.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $data->Id ?>">
                        <div class="float-right btn-group">
                            <?php echo $component->preview_buttons('editWithId', $data->Id); ?>
                            <?php echo $component->preview_buttons($data->flag, 'announcement'); ?>
                            <?php echo $component->preview_buttons('close'); ?>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1><?php echo $data->announcementHeader ?></h1>
                    <p><?php echo $data->announcementBody ?></p>
                    <p><?php echo $data->announcementFooter ?></p>
                </div>
            </div>
        </div>
    </div>
</div>