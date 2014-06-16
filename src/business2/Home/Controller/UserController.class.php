<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function test(){
        $Data = M('User'); // 实例化Data数据模型
        $this->data = $Data->select();
//        $users = var_dump($this->data);
//        $this->show($users,'utf-8');
        var_dump($this->data);

    }
}