<?php
include("announcementupdate.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="">Header</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control"><?php if ($id) echo $data->announcementHeader ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label for="">Body</label>
                        <textarea name="" id="" cols="30" rows="4" class="form-control"><?php if ($id) echo $data->announcementBody ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label for="">Footer</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control"><?php if ($id) echo $data->announcementFooter ?></textarea>
                    </div>
                </div>

                <div class="float-right">
                    <button class="btn btn-primary">Save</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>