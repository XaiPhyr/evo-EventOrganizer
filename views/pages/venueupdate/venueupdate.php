<?php
include("venueupdate.module.php");
?>

<div class="container">
    <div class="card col-lg-6 col-12 mx-auto">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <input type="text" name="venuename" value="<?php if ($id) echo $data->venuename ?>" id="" class="form-control">
                    </div>
                </div>

                <br>
                <div class="float-right">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" name="save" value="venues" class="btn btn-primary btn-sm">Save</button>
                    <button type="button" onclick="returnToList()" class="btn btn-secondary btn-sm">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>