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

$cart->cart_name = $data->cart_name;

if ($cart->create_cart()) {

    echo json_encode(
        array('massage' => 'Cart Created')
    );
} else {

    echo json_encode(
        array('massage' => 'Cart not Created')
    );
}
