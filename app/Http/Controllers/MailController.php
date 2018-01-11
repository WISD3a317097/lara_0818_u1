<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function getSend()
    {
        $content='hi~你好';
        $data = ['name' => '123', 'content'=> $content, ];
        Mail::send('email.test', $data, function($message){
            $message->subject('Laravel 5 Mail');
            $message->to('123456@gmail.com', '123');
            $message->from('123456@gmail.com', 'admin');
        });
    }
}