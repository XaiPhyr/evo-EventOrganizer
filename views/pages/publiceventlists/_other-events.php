<?php foreach ($lists as $items) { ?>
    <div class="col-12 col-lg-4 col-md-6">
        <div style="cursor:pointer" onclick="preview(<?php echo '\'' . $items->eventCode . '\'' ?>)" title="<?php echo $items->eventName ?>">
            <div class="card border-0 mb-3">
                <div class="row">
                    <div class="col-3 bg-info text-white border-radius-left p-0" align="center">
                        <div class="card-body my-5">
                            <div class="h2 font-weight-bold"><?php echo $component->dateFormat($items->startDate, 'day') ?></div>
                            <div style="font-size: .875rem" class=""><?php echo $component->dateFormat($items->startDate, 'month-year') ?></div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="card-body">
                            <div class="h4"><?php echo $items->eventName ?></div>
                            <p>
                                <img style="width: 20px; height: 20px;" src="assets/icons/feathericons/clock.svg" alt="">
                                <span><?php echo $component->dateFormat($items->startDate, 'time') ?></span>
                            </p>
                            <p><?php echo $items->eventShortDesc ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>