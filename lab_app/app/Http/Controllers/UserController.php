<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  // public function index() {
       // return 'Hello from UserController';
  //  }

   // public function goto(){
      //  return view('welcome');
  //  }

  public function show($id){
    $data = array(
        "id" =>$id,
        "name" => "Keanu",
        "age" => 20,
        "email" => "cdb4619@gmail.com"
    );
    
    return view('Users',['$data'=>$data]);
  }
}
