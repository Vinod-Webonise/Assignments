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

$categories->category_name= $data->category_name;

if ($categories->delete()){
    echo json_encode(
        array('massage' => 'Post Deleted')
    );
    
}
else {
    echo json_encode(
        array('massage' => 'Post Not Deleted')
    );
}