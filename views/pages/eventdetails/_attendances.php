<?php if ($attendances) { ?>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-hover table-borderless table-striped table-responsive-md">
                <form action="" method="post">
                    <div class="float-right mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" value="<?php echo $data->eventCode ?>-">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="submit">
                                    <img style="width: 20px; height: 20px" src="assets/icons/feathericons/search.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

                <thead class="thead-dark">
                    <tr>
                        <th>Reference No.</th>
                        <th>Name</th>
                        <th>Institution</th>
                        <th>Profession</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($attendances as $item) { ?>
                        <tr>
                            <td><?php echo $item->refnum ?></td>
                            <td><?php echo $item->firstname . " " . $item->lastname ?></td>
                            <td><?php echo $item->institution ?></td>
                            <td><?php echo $item->profession ?></td>
                        </tr>
                    <?php } ?>
                    <tr align="right">
                        <td colspan="4"><strong>Total</strong>: <?php echo $current_attendance . " / " . $data->maxAttendance ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php } ?>