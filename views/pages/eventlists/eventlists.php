<?php
include("eventlists.module.php");
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
                        <th>Schedule</th>
                        <th>Room</th>
                    </tr>
                </thead>

                <tbody style="cursor:pointer">
                    <?php foreach ($eventlists as $item) {
                        $count++;
                        $date = $component->dateFormat($item->startDate, 'date'); ?>

                        <tr onclick="preview(<?php echo '\'' . $item->eventCode . '\'' ?>)">
                            <td><?php echo $count ?></td>
                            <td style="color: <?php if ($current_date == $date) echo "green" ?>"><?php echo $item->eventName ?></td>
                            <td style="color:green"><?php echo $component->dateFormat($item->startDate) ?></td>
                            <td><?php echo $item->eventVenue ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>