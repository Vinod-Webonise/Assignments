<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include 'database.php';
include 'cart.php';

$databse = databse::getobj();

$db = $databse->connect();

$cart = new Cart($db);

$data = json_decode(file_get_contents("php://input"));

$cart->cart_id = $data->cart_id;

if ($cart->delete_cart()) {

    echo json_encode(
        array('massage' => 'Cart Deleted')
    );
} else {
    echo json_encode(
        array('massage' => 'Cart Not Deleted')
    );
}
