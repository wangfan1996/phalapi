<?php
namespace App\Api;

use PhalApi\Api;
use PhalApi\Exception\BadRequestException;
/**
 * Class Hello测试接口
 * @package App\Api
 * @return int time 当前时间戳
 */
class Hello extends Api {
    /**
     * 输出Hello World
     * @desc 这事测试输出Hello World
     * @return string title 标题
     */
    public function world() {
        return array('title' => 'Hello World!');
    }

    /**
     * 获取当前时间
     * @desc 这是测试输出前时间
     */
    public function test(){
        return array(
            'time' => date("Y-m-d H:i:s",time()),
            'name' => 'app'
        );
    }

    /**
     *签名失败
     * @throws BadRequestException
     * @exception 401 签名失败
     */
    public function fail() {
        throw new BadRequestException('签名失败', 1);
    }
}
