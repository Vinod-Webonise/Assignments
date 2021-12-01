<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include 'database.php';
include 'products.php';

$databse = databse::getobj();

$db = $databse->connect();

$product = new products($db);

$data = json_decode(file_get_contents("php://input"));

$product->name= $data->name;
$product->description= $data->description;
$product->price= $data->price;
$product->discount= $data->discount;
$product->category= $data->category;

if ($product->update()){
    echo json_encode(
        array('massage' => 'Post upadated')
    );
}
else {
    echo json_encode(
        array('massage' => 'Post Not upadated')
    );
}
