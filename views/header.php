<?php
session_start();
$login = $_SESSION['login'];

// if (empty($login)) header("location: .");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="assets/scripts/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/scripts/popper.min.js"></script>
    <script type="text/javascript" src="assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/scripts/scripts.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>EvOApp | beta-0.01b</title>
</head>

<body>
    <div class="card border-0 mb-5">
        <div class="card-body p-1">
            <ul style="font-size: 14pt;" class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href=".">Home</a></li>
                <li class="nav-item"><a href="<?php if ($login->status == 'Admin') echo '?page=events';
                                                else echo '?page=eventlists' ?>" class="nav-link">Events</a></li>
                <?php if ($login->status == 'Admin') { ?>
                    <li class="nav-item"><a href="?page=venues" class="nav-link">Venues</a></li>
                    <li class="nav-item"><a href="?page=announcements" class="nav-link">Announcements</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Members</a></li>
                    <li class="nav-item"><a href="?page=accounts" class="nav-link">Accounts</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Orders</a></li>
                <?php } ?>
                <?php if ($login) { ?>
                    <li class="nav-item"><a href="?page=logout" class="nav-link">Logout</a></li>
                <?php } else { ?>
                    <li class="nav-item"><a href="?page=login" class="nav-link">Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>