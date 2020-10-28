<?php
include_once 'db.php';
include_once 'user.php';
session_start();

$con = new DBConnector();
$pdo = $con->connectTODB();

$user = new User();
$user ->logout($pdo);




?>