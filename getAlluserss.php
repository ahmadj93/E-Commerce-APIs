<?php
header('Access-Controll-Allow-Origin:*'); //ayya domain bye2dar yeb3at la hon req.
include "connection.php";
$query = $mysqli->prepare("select* from user where name='ahmad' ");
$query->execute();

$array = $query->get_result();

echo json_encode($array->fetch_assoc());
