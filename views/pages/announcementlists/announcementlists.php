<?php
include("announcementlists.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-sm table-striped table-borderless table-responsive-md">
                <button type="button" onclick="add()" class="btn btn-primary float-right mb-1"><strong>+</strong> Add</button>

                <thead class="thead-dark">
                    <tr>
                        <th width="5%"></th>
                        <th>Name</th>
                        <th>Created</th>
                    </tr>
                </thead>

                <tbody style="cursor:pointer">
                    <?php foreach ($announcementlists as $item) {
                        $count++; ?>

                        <tr onclick="preview(<?php echo $item->Id ?>)">
                            <td><?php echo $count ?></td>
                            <td><?php echo $item->announcementHeader ?></td>
                            <td><?php echo $component->dateFormat($item->created) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>