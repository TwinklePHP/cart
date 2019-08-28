<?php


namespace App\Controller;


use Grpc\HiReply;
use Grpc\HiUser;

class HiController
{
    public function sayHello(HiUser $user)
    {
        $message = new HiReply();
        $message->setMessage("success");
        $message->setUser($user);
        return $message;
    }
}