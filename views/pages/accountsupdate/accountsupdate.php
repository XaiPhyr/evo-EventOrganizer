<?php
include("accountsupdate.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="form-group col-12 col-lg-6">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>

                    <div class="form-group col-12 col-lg-6">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-lg-6">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" class="form-control">
                    </div>

                    <div class="form-group col-12 col-lg-6">
                        <label for="">Status</label>
                        <select name="status" id="" class="custom-select">
                            <option value="Admin">Administrator</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>

                <div class="float-right">
                    <input type="hidden" name="id" value="<?php echo $data->Id ?>">
                    <button name="save" value="accounts" class="btn btn-primary">Save</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>