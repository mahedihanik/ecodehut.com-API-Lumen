<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactTableModel;

class ContactController extends Controller
{
    function onContactSend(Request $req){

         $name=$req->input('name');
         $email=$req->input('email');
         $subject=$req->input('subject');
         $message=$req->input('message');

         $result=ContactTableModel::insert(['name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message]);
         if($result==true){
             return 1;
         }else{
             return 0;
         }
    }
}
