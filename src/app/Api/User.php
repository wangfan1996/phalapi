<?php
namespace App\Api;

use PhalApi\Api;

/**
 * 用户模块接口服务
 */
class User extends Api {
    public function getRules() {
        return array(
            '*' => array(
                'code' => array('name' => 'code', 'require' => true, 'min' => 4, 'max' => 4),
            ),
            'login' => array(
                'username' => array('name' => 'username', 'require' => true, 'min' => 1, 'max' => 50, 'desc' => '用户名'),
                'password' => array('name' => 'password', 'require' => true, 'min' => 6, 'max' => 20, 'desc' => '密码'),
            ),
            'test' => array(
              'test1' => array('name' => 'testvalue','require' => true),//testvalue url请求参数名称，test方法名称 ，test1类属性名称
              'test2' => array('name' => 'uids', 'type' => 'array', 'format' => 'explode', 'separator' => ',','default' => '默认为空数组'),
              'sex' => array('name' => 'sex', 'type' => 'enum', 'range' => array('female', 'male'))
            ),
        );
    }
    /**
     * 登录接口
     * @desc 根据账号和密码进行登录操作
     * @return boolean is_login 是否登录成功
     * @return int user_id 用户ID
     */
    public function login() {
        $username = $this->username;   // 账号参数
        $password = $this->password;   // 密码参数
        // 更多其他操作……
        return array(
            'is_login' => true,
            'user_id' => 8,
            'username' => $username,
            'password' => $password
        );
    }

    /**
     * 测试规则接口
     */
    public function test(){
        $test1 = $this->test1;
        $test2 = $this->test2;
        $sex = $this->sex;
        return array(
            'testvalue1' => $test1,
            'testvalue2' => $test2,
            'sex' => $sex
        );
    }
} 
