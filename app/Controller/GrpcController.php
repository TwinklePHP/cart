<?php


namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;

/**
 * Class GrpcController
 * @package App\Controller
 * @AutoController()
 */
class GrpcController extends BaseController
{
    public function hello()
    {
        $client = new \App\Grpc\HiClient('127.0.0.1:9503', [
            'credentials' => null,
        ]);

        $request = new \Grpc\HiUser();
        $request->setName('hyperf');
        $request->setSex(1);

        /**
         * @var \Grpc\HiReply $reply
         */
        list($reply, $status) = $client->sayHello($request);

        $message = $reply->getMessage();

        $client->close();

        return $message;
    }
}