<?php
include("accountslists.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-sm table-striped table-borderless table-responsive-md text-center">
                <button type="button" onclick="add()" class="btn btn-primary float-right mb-1"><strong>+</strong> Add</button>

                <thead class="thead-dark">
                    <tr>
                        <th width="5%"></th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody style="cursor:pointer">
                    <?php foreach ($accountlists as $item) {
                        $count++; ?>

                        <tr onclick="preview(<?php echo '\'' . $item->username . '\'' ?>)">
                            <td><?php echo $count ?></td>
                            <td><?php echo $item->username ?></td>
                            <td><?php echo $component->status($item->status, 'accounts') ?></td>
                            <td><?php echo $component->dateFormat($item->created) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>