<?php
include("venuelists.module.php");
?>

<div class="container col-lg-6">
    <div class="card">
        <div class="card-body">
            <table class="table table-sm table-hover table-borderless">
                <button type="button" onclick="add()" class="btn btn-primary float-right mb-1"><strong>+</strong> Add</button>

                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Flag</th>
                    </tr>
                </thead>

                <tbody style="cursor:pointer">
                    <?php foreach ($venuelists as $item) {
                        @$count++ ?>
                        <tr onclick="preview(<?php echo $item->Id ?>)">
                            <th><?php echo $count ?></th>
                            <td><?php echo $item->venuename ?></td>
                            <td><?php echo $component->dateFormat($item->created) ?></td>
                            <td><?php echo $component->flag($item->flag) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>