<?php
include("models/accounts.php");
@$user = $_GET['user'];
$data = $account->get('single', $user, '');
