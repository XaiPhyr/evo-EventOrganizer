<?php foreach ($lists as $item) {
    $date = $component->dateFormat($item->startDate, 'date');
    $preregistrationdate = $component->dateFormat($item->startDate, 'preregistration');
    $current_attendance = $event->get('attendance', $item->event_header, 'current');
    if ($current_date >= $preregistrationdate && $current_date <= $date) { ?>

        <div style="cursor:pointer" class="col-12 col-lg-6 mb-3" onclick="preview(<?php echo '\'' . $item->eventCode . '\'' ?>)" title="<?php echo $item->eventName ?>">
            <div class="card border-0">
                <div class="row">
                    <div class="col-3 bg-success text-white border-radius-left" align="center">
                        <div class="card-body my-3">
                            <div class="h1 font-weight-bold"><?php echo $component->dateFormat($item->startDate, 'day') ?></div>
                            <p style="font-size: .875rem"><?php echo $component->dateFormat($item->startDate, 'dashboard') ?></p>
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
                            <p><?php echo $item->eventShortDesc ?></p>

                            <div class="float-right" style="padding-bottom: 20px">
                                <a class="btn btn-sm btn-outline-primary" style="text-decoration: none" href="?page=details&code=<?php echo $item->eventCode ?>">
                                    Read more...
                                </a>
                                <?php if ($current_attendance < $item->maxAttendance) { ?>
                                    <a class="btn btn-sm btn-info" style="text-decoration:none" href="?page=register&event=<?php echo $item->eventName ?>">
                                        Register
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
<?php } ?>