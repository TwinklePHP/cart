<?php


namespace App\Controller;


use Grpc\HiUser;

class HiController
{
    public function sayHello(HiUser $user)
    {
        $message = new HiUser();
        $message->setMessage("Hello World");
        $message->setUser($user);
        return $message;
    }
}