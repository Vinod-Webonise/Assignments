<?php
namespace App\Controllers;
use App\Models\UserModel;
use Config\Database;
class Contact_us extends BaseController
{
  public function contact()
  {
    echo view('insert');

    $userModel=new UserModel();

    if(isset($_POST['submit'])){

      $data= $this->request->getPost();

      $data=[

        'name'=>$data['name'],
        'email'=>$data['email'],
        'phone'=>$data['contact'],
        'query'=>$data['query']

      ];
      
      $db=Database::connect();

      $result=$userModel->insert($data);

      if($result!=0){

      echo "Response Submitted";

      }

      else {

        echo "Response Failed to Submitted";

      }

    }

  }

}