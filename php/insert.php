<?php
require_once '../includes/dbconnect.php';

$data = $_POST;

/*
 * Insert POST data in DB
 */
$countries = R::dispense('country');
$countries->country_name = $data['country_name'];
$countries->country_capital = $data['country_capital'];
R::store($countries);

/*
 * Success message & redirect to index.html
 */
echo 'Your country is added in the database! Redirect 3s...';
header("refresh: 3; url=../index.html");

?>
