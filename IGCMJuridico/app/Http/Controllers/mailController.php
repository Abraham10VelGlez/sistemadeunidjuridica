<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
   
    
    public function send(){
        $data = array (['name' => 'kid']);
        Mail::send(['text' => 'emails.information'],['name' => 'kid'],function($message) use ($data)
        {
            $message->to('matatanquiles@gmail.com','ese kid')->subject('Test Email');
            $message->from('usbrifa@gmail.com','ese ll');
        });
    }
}
