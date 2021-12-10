<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include 'database.php';
include 'cart.php';

$databse = databse::getobj();

$db = $databse->connect();

$cart = new Cart($db);

$data = json_decode(file_get_contents("php://input"));

$cart->cart_id = $data->cart_id;
$cart->product_id = $data->product_id;

if ($cart->addProductInCart()) {

    echo json_encode(
        array('massage' => 'Product Added')
    );
} else {

    echo json_encode(
        array('massage' => 'Product not Added')
    );
}
