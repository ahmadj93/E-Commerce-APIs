<?php
header('Access-Controll-Allow-Origin:*'); //ayya domain bye2dar yeb3at la hon req.
include "connection.php";

$data = file_get_contents("php://input");

$json_data = json_decode($data);
$product_id = $json_data->id;
$seller_id = $json_data->sellerid;
$product_name = $json_data->productname;
$product_price = $json_data->productprice;

$query = $mysqli->prepare('INSERT INTO `product` (`product_id`, `user_id`, `product_name`, `product_price`) VALUES (?,?,?,?);');
$query->bind_param("iisi", $product_id, $seller_id, $product_name, $product_price);
$query->execute();

echo json_encode(['success' => true]);
