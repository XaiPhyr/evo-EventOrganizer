<legend class="h3 mb-3" align="center">Ongoing Event</legend>
<?php foreach ($lists as $item) {
    $date = $component->dateFormat($item->startDate, 'date');
    if ($current_date == $date) { ?>
        <div style="cursor:pointer" onclick="preview(<?php echo $item->event_header ?>)" title="<?php echo $item->eventName ?>">
            <div class="card border-0 mb-3">
                <div class="row">
                    <div class="col-3 bg-success text-white border-radius-left p-0" align="center">
                        <div class="card-body">
                            <div class="h2 font-weight-bold"><?php echo $component->dateFormat($item->startDate, 'day') ?></div>
                            <div class=""><?php echo $component->dateFormat($item->startDate, 'month-year') ?></div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="card-body">
                            <div class="h4"><?php echo $item->eventName ?></div>
                            <p>
                                <img style="width: 20px; height: 20px;" src="assets/icons/feathericons/clock.svg" alt="">
                                <?php echo $component->dateFormat($item->startDate, 'time') ?>
                            </p>
                            <p><?php echo $item->eventShortDesc ?></p>

                            <div class="float-right" style="padding-bottom: 20px">
                                <a class="btn btn-sm btn-info" style="text-decoration:none" href="?page=register&event=<?php echo $item->eventName ?>">
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>