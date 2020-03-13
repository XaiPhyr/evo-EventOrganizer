<?php
include("eventupdate.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-12 col-lg-3">
                                <strong>Code</strong>:
                                <input type="text" name="code" value="<?php if ($code) echo $data->eventCode ?>" id="" class="form-control" <?php if ($data->eventCode != null) echo "readonly" ?>>
                            </div>

                            <div class="form-group col-12 col-lg-6">
                                <strong>Name</strong>: <input type="text" name="eventname" value="<?php if ($code) echo $data->eventName ?>" id="" class="form-control">
                            </div>

                            <div class="form-group col-12 col-lg-3">
                                <strong>Attendance</strong>:
                                <input type="number" name="attendance" value="<?php if ($code) echo $data->maxAttendance;
                                                                                else echo 0 ?>" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-12 col-lg-4">
                                <strong>Facilitator</strong>: <input type="text" name="facilitator" value="<?php if ($code) echo $data->eventHandler ?>" id="" class="form-control">
                            </div>

                            <div class="form-group col-12 col-lg-4">
                                <strong>Venue</strong>:
                                <select name="venue" id="" class="form-control">
                                    <?php foreach ($venues as $venue) { ?>
                                        <option value="<?php echo $venue->venuename ?>" <?php if ($data->eventVenue == $venue->venuename) echo "selected" ?>><?php echo $venue->venuename ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group col-12 col-lg-4">
                                <strong>Club</strong>: <input type="text" name="club" value="<?php if ($code) echo $data->club ?>" id="" class="form-control">
                            </div>
                        </div>

                        <!-- <br>
                        <legend class="mb-0">Registration Schedule</legend>
                        <div class="row">
                            <div class="form-group col-6 col-lg-6">
                                <strong for="">Start</strong>:
                                <input type="date" name="regstartdate" id="" class="form-control" value="<?php if ($code) echo $component->dateFormat($data->registrationStartDate, 'preview-date');
                                                                                                            else echo $current_date ?>">
                            </div>

                            <div class="form-group col-6 col-lg-6">
                                <strong for="">End</strong>:
                                <input type="date" name="regenddate" id="" class="form-control" value="<?php if ($code) echo $component->dateFormat($data->registrationEndDate, 'preview-date');
                                                                                                        else echo $current_date ?>">
                            </div>
                        </div> -->

                        <br>
                        <legend class="mb-0">Event Schedule</legend>
                        <div class="row">
                            <div class="col-6">
                                <label class="mb-0">Start</label>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <strong>Date</strong>: <input onchange="getDate()" type="date" name="startdate" id="startdate" value="<?php if ($code) echo $component->dateFormat($data->startDate, 'preview-date');
                                                                                                                                                else echo $current_date ?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <strong>Time</strong>: <input type="time" name="starttime" id="" value="<?php if ($code) echo $component->dateFormat($data->startDate, 'preview-time');
                                                                                                                else echo $current_time ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="mb-0">End</label>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <strong>Date</strong>: <input type="date" name="enddate" id="enddate" value="<?php if ($code) echo $component->dateFormat($data->endDate, 'preview-date');
                                                                                                                else echo $current_date ?>" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <strong>Time</strong>: <input type="time" name="endtime" id="" value="<?php if ($code) echo $component->dateFormat($data->endDate, 'preview-time');
                                                                                                                else echo $current_time ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <div class="row">
                            <div class="form-group col-12">
                                <strong>Short Description</strong>:
                                <textarea name="shortdesc" id="" cols="30" rows="2" class="form-control"><?php if ($code) echo $data->eventShortDesc ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <strong>Description</strong>:
                                <textarea name="eventdesc" id="" cols="30" rows="5" class="form-control"><?php if ($code) echo $data->eventDesc ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="float-right">
                    <input type="hidden" name="id" value="<?php echo $data->event_header ?>">
                    <button type="submit" name="save" value="event" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" onclick="returnToPage(<?php echo '\'' . $data->eventCode . '\'' ?>)">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>