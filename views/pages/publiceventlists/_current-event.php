<legend class="h3 mb-3" align="center">Ongoing Event</legend>
<?php foreach ($lists as $item) {
    $current_attendance = $event->get('attendance', $item->event_header, 'current');
    $date = $component->dateFormat($item->startDate, 'date');
    $preregistrationdate = $component->dateFormat($item->startDate, 'preregistration');
    if ($current_date >= $preregistrationdate && $current_date <= $date) { ?>
        <div style="cursor:pointer" onclick="preview(<?php echo '\'' . $item->eventCode . '\'' ?>)" title="<?php echo $item->eventName ?>">
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
                            <div class="h4">
                                <?php if ($current_attendance == $item->maxAttendance) { ?>
                                    <div class="float-right text-danger">FULL!</div>
                                <?php } ?>
                                <?php echo $item->eventName ?>
                            </div>
                            <p>
                                <img style="width: 20px; height: 20px;" src="assets/icons/feathericons/clock.svg" alt="">
                                <?php echo $component->dateFormat($item->startDate, 'time') ?>
                            </p>
                            <p><?php echo $item->eventShortDesc ?></p>

                            <?php if ($current_attendance < $item->maxAttendance) { ?>
                                <div class="float-right" style="padding-bottom: 20px">
                                    <a class="btn btn-sm btn-info" style="text-decoration:none" href="?page=register&event=<?php echo $item->eventName ?>">
                                        Register
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>