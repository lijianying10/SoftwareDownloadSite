<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function test(){
        $this->show('test','utf-8');
    }
}