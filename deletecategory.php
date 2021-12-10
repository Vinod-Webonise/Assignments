<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include 'database.php';
include 'categories.php';

$databse = databse::getobj();

$db = $databse->connect();

$categories = new categories($db);

$data = json_decode(file_get_contents("php://input"));

$categories->cat_id = $data->cat_id;

if ($categories->delete()) {
    echo json_encode(
        array('massage' => 'category Deleted')
    );
} else {
    echo json_encode(
        array('massage' => 'category Not Deleted')
    );
}
