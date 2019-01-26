<?php
namespace App\Common;

use PhalApi\Response\JsonResponse ;

class MyResponse extends JsonResponse {

    public function getResult() {
        //返回添加了时间
        $rs = parent::getResult();
        $rs['time'] = date('Y-m-d H:i:s',time());
        return $rs;
    }
}