<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include 'database.php';
include 'note.php';

$databse = Databse::getobj();

$db = $databse->connect();

$note = new Note($db);

$data = json_decode(file_get_contents("php://input"));

$note->topic = $data->topic;
$note->description = $data->description;
$note->user_id = $data->user_id;
$note->priority = $data->priority;

if ($note->update()) {

    echo json_encode(

        array('massage' => 'note upadated')
    );
} else {
    echo json_encode(

        array('massage' => 'Note Not upadated')
    );
}
