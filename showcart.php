<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');

include 'database.php';
include 'cart.php';

$databse = databse::getobj();
$db = $databse->connect();


$cart = new Cart($db);
$data = json_decode(file_get_contents("php://input"));

$cart->cart_id = $data->cart_id;

$result = $cart->showCartname();


$num = $result->rowCount();

if ($num > 0) {

    $posts_arr = array();
    $posts_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $post_item = array(

            'cart_name' => $cart_name

        );

        array_push($posts_arr['data'], $post_item);
    }
    echo json_encode($posts_arr);
} else {
    echo json_encode(
        array('massage' => 'No posts found')
    );
}

$result2 = $cart->showProduct();
$num2 = $result2->rowCount();
if ($num2 > 0) {

    $posts_arr = array();
    $posts_arr['data'] = array();
    while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $post_item = array(

            'product_name' => $name

        );

        array_push($posts_arr['data'], $post_item);
    }
    echo json_encode($posts_arr);
} else {
    echo json_encode(
        array('massage' => 'No posts found')
    );
}
