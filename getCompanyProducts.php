<?php
header('Access-Controll-Allow-Origin:*'); //ayya domain bye2dar yeb3at la hon req.
include "connection.php";

$data = file_get_contents("php://input");

$json_data = json_decode($data);

$companyid = $json_data->companyId;
$query = $mysqli->prepare('select* from product where user_id=?');
$query->bind_param("i", $companyid);
$query->execute();

$array = $query->get_result();

$resultArray = array();

while ($row = $array->fetch_assoc()) {
    $resultArray[] = $row;
}

echo json_encode($resultArray);
