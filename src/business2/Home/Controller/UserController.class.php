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
    public function login()
    {
        $u_name = I('post.uname');
        $u_pwd = I('post.upwd');
        $Data = M('User');
        $map['u_Name']=$u_name;
        $this->data = $Data->where($map)->select();
        if($this->data == false)
        {
            $returndata['status'] = 'fail';
            $returndata['info'] = '没有这个用户';
            $this->ajaxReturn($returndata);
            return;
        }
        else
        {
            $user = $this->data;
//            var_dump($user[0]['u_PWD']);
//            var_dump($user->u_PWD);
//            var_dump($user);
            if($user[0]['u_PWD'] == $u_pwd)
            {
                $returndata['status'] = 'success';
                $returndata['info'] = $user[0]['u_Name'];
                $this->ajaxReturn($returndata);
            }
            else
            {
                $returndata['status'] = 'fail';
                $returndata['info'] = '密码错误';
                $this->ajaxReturn($returndata);
            }
        }
//        var_dump($this->data);
//        var_dump($u_name);
    }
}