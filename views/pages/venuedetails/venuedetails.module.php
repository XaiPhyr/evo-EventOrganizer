<?php
include("models/venues.php");
include("services/components.php");

$id = $_GET['id'];
$data = $venue->get('single', $id);