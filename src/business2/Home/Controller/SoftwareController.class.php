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
}