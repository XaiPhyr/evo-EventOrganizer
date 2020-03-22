<?php
include("models/accounts.php");
include("services/components.php");

$user = $_GET['user'];
$data = $account->get('single', $user, '');
