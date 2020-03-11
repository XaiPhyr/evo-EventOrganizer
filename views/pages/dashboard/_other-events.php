<?php foreach ($lists as $item) {
    $date = $component->dateFormat($item->startDate, 'date');
    $month = $component->dateFormat($item->startDate, 'month');
    if ($current_month == $month && $current_date != $date) {
        $count++; ?>

        <div style="cursor:pointer" class="col-12 col-lg-4 mb-3" onclick="preview(<?php echo '\'' . $item->eventCode . '\'' ?>)" title="<?php echo $item->eventName ?>">
            <div class="card border-0">
                <div class="row">
                    <div class="col-3 bg-info text-white border-radius-left" align="center">
                        <div class="card-body">
                            <div class="h2 font-weight-bold"><?php echo $component->dateFormat($item->startDate, 'day') ?></div>
                            <p><?php echo $component->dateFormat($item->startDate) ?></p>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="card-body">
                            <div class="h4"><?php echo $item->eventName ?></div>
                            <p><?php echo $item->eventShortDesc ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
<?php } ?>