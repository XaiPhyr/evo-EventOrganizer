<?php
include("registerdetails.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="float-right">
                        <button type="button" onclick="returnToPage(<?php echo '\'' . $data->eventCode . '\'' ?>)" class="btn btn-secondary">Close</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="img-thumbnail" style="border: 1px solid black; width: 100%; height: 250px">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="h3">
                        <strong>Reference No.</strong>&nbsp;
                        <?php echo $data->refnum ?>
                    </div>

                    <div class="h4">
                        <?php echo $data->firstname . " " . $data->lastname ?>
                        <br>
                        <?php echo $data->email ?>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class=""><?php echo $component->dateFormat($data->startDate) ?></div>
                    <strong>Name</strong>:&nbsp;
                    <?php echo $data->eventName ?>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-12">
                    <strong>Description</strong>
                    <br>
                    <?php echo $data->eventDesc ?>
                </div>
            </div>
        </div>
    </div>
</div>