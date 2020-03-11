<?php
include("register.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="form-group col-12 col-lg-6">
                        <label for="">Reference No.</label>
                        <input type="text" name="refnum" id="" class="form-control" value="<?php echo $refnum ?>" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-lg-4">
                        <label for="">Firstname</label>
                        <input type="text" name="firstname" id="" class="form-control">
                    </div>

                    <div class="form-group col-12 col-lg-4">
                        <label for="">Lastname</label>
                        <input type="text" name="lastname" id="" class="form-control">
                    </div>

                    <div class="form-group col-12 col-lg-4">
                        <label for="">Email</label>
                        <input type="text" name="email" id="" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-lg-6">
                        <label for="">Institution</label>
                        <input type="text" name="institution" id="" class="form-control">
                    </div>

                    <div class="form-group col-12 col-lg-6">
                        <label for="">Profession</label>
                        <input type="text" name="profession" id="" class="form-control">
                    </div>
                </div>

                <div class="float-right">
                    <input type="hidden" name="event_header" value="<?php echo $data->event_header ?>">
                    <button type="submit" name="save" value="register" class="btn btn-primary">Save</button>
                    <button type="button" onclick="returnToPreview(<?php echo '\'' . $data->eventCode . '\'' ?>)" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>