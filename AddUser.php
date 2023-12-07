<?php
header('Access-Controll-Allow-Origin:*'); //ayya domain bye2dar yeb3at la hon req.
include "connection.php";
$query = $mysqli->prepare("select* from user where type='client' ");
$query->execute();

$array = $query->get_result();

$resultArray = array();

while ($row = $array->fetch_assoc()) {
    $resultArray[] = $row;
}

echo json_encode($resultArray);
