<?php
namespace Home\Controller;
use Think\Controller;
class SoftwareController extends Controller {
    public function test(){
        $Data = M('software');
        $this->data = $Data->select();
//        $users = var_dump($this->data);
//        $this->show($users,'utf-8');
//        var_dump($Data->select());
        $softwares = $Data->select();
        echo $softwares[0]['s_language'];
//        $softwares[0]['s_language'] = 'chinese';  //下面两行就是修改了。
//        $Data->save($softwares[0]);
    }

    public function  getall()
    {
        $Data = M('software');
        $this->data = $Data->select();
        $this->ajaxReturn($this->data);
    }

    public function show_form()
    {

        $array['ak']    =    '47';
        $array['ab']   =    '48';
//
//        $temppage = T('Public/test');
//        $content = T('Public/test')->fetch($parameters);
//        $this->fetch($parameters);
////        $this->display($temppage);
////        $this->show($content,'utf-8');
//        var_dump($content);
        $this->assign($array);
        $this->display();
    }
}