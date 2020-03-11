<?php
include("models/announcements.php");
include("services/components.php");

$id = $_GET['id'];
$data = $announcement->get('single', $id);