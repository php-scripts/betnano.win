<?php

$hostname = "";
$username = "";
$password = "";
$db = "";

$dbconnect = mysqli_connect($hostname, $username, $password, $db);

if ($dbconnect->connect_error) die("Database connection failed: $dbconnect->connect_error");

$query = mysqli_query($dbconnect, "SELECT * FROM rai_prizepool_daily") or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) echo "{$row['prizepool']} Nano";