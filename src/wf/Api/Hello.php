<?php
namespace Wf\Api;

use PhalApi\Api;

/**
 * Wf下面Hello测试接口
 * @package Wf\Api
 */
class Hello extends Api {
    /**
     * 输出Hello World
     * @desc 这事测试输出Hello World
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
            'name' => 'wf'
        );
    }

    /**
     * ceshi 
     * @return array
     */
    public function wf(){
        return array(
            'time' => date("Y-m-d H:i:s",time()),
<<<<<<< HEAD
            'name' => 'wd'
=======
            'name' => 'sdasdasdasdsad'
>>>>>>> 5b8fd6dc3ec6218a747c906651da08b818634238
        );
    }
}
