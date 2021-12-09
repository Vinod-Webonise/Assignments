<?php
header('Access-Control-Allow-Origin: *');
header('Content-tyoe: application/json');

include 'database.php';
include 'note.php';

$databse = Databse::getobj();
$db = $databse->connect();


$note = new Note($db);

$data = json_decode(file_get_contents("php://input"));

$note->user_id=$data->user_id;

$result = $note->readall();

$num = $result->rowCount();

if ($num > 0){

    $posts_arr =array();
    $posts_arr['data'] =array();
    
    while($row = $result->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $post_item = array(
            
            'topic'=>$topic,
            'description'=>$description,
            'priority'=>$priority
        );

        array_push($posts_arr['data'], $post_item);
    }
    echo json_encode($posts_arr);
}
else {
    echo json_encode(
        array ('massage' => 'No posts found')
    );
}