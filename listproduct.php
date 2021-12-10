<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');

include 'database.php';
include 'products.php';

$databse = databse::getobj();
$db = $databse->connect();

$product = new products($db);

$result = $product->read();

$num = $result->rowCount();

if ($num > 0) {

    $posts_arr = array();
    $posts_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        $post_item = array(
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'discount' => $discount,
            'cat_id' => $cat_id
        );

        array_push($posts_arr['data'], $post_item);
    }
    echo json_encode($posts_arr);
} else {
    echo json_encode(
        array('massage' => 'No posts found')
    );
}
