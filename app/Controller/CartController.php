<?php
/**
 * Created by PhpStorm.
 * User: xiehuanjin
 * Date: 2019/8/16
 * Time: 23:06
 */

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * Class CartController
 * @Controller()
 * @package App\Controller
 */
class CartController extends BaseController
{

    /**
     * 填加购物车
     *
     * @RequestMapping(path="add", methods="get")
     */
    public function add()
    {
        return 'add';
    }
}