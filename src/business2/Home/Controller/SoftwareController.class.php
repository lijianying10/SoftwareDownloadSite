<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

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
        $name = I('post.name','');
        if($name == '')
        {
            $Data = M('software');
            $this->data = $Data->select();
            $this->ajaxReturn($this->data);
        }
        else{
            $Data = M('software');
            $map['s_Title'] = 't';
            $getdata =  $Data->where("s_Title LIKE '%$name%'")->select();
            $this->ajaxReturn($getdata);
        }

    }

    public function show_form()
    {
        $index = I('get.index');
        $RowIndex =  I('get.RowIndex');
        $Data = M('software');
        $map['s_id']=$RowIndex;
        $map = $Data->where($map)->select();
        $map[0]['index']=$index;
        $this->assign($map[0]);
        $this->display();
    }
    public function save()
    {
//        echo 'this is save';
//
//        var_dump(I('get.'));
//        echo '===================post=================';
//        var_dump(I('post.'));
        try{
            $Data = M('software');
            $insertdata['s_Title']=I('post.s_Title');
            $insertdata['s_size']=0;
            $insertdata['s_language']=I('post.s_language');
            $insertdata['s_download_times']=0;
            $insertdata['s_comment_times']=0;
            $insertdata['s_uploadtime_date']=date('Y-m-d H:i:s',time());
            $insertdata['s_offical_site']=I('post.s_offical_site');
            $insertdata['s_plateform']=I('post.s_plateform');
            $insertdata['s_URL_baidu']=I('post.s_URL_baidu');
            $insertdata['s_URL_offical']=I('post.s_URL_offical');
            $insertdata['s_Introduction']=I('post.s_Introduction');
            $insertdata['s_Comment']='{}';
            $insertdata['s_other']='{}';
//            var_dump($insertdata);
            $Data->add($insertdata);
            $Data->save();
            echo '1';
        }catch (Exception $e){
            echo $e;
        }

    }
    public function update()
    {
        try{
            $index = I('get.id');
            $Data = M('software');
            $map['s_id']=$index;
            $map = $Data->where($map)->select();//query

            //changevalue
            $map[0]['s_Title']=I('post.s_Title');
            $map[0]['s_language']=I('post.s_language');
            $map[0]['s_offical_site']=I('post.s_offical_site');
            $map[0]['s_plateform']=I('post.s_plateform');
            $map[0]['s_URL_baidu']=I('post.s_URL_baidu');
            $map[0]['s_URL_offical']=I('post.s_URL_offical');
            $map[0]['s_Introduction']=I('post.s_Introduction');
            $Data->save($map[0]);
            echo '1';
        }
        catch(Exception $e)
        {
            echo '0';
        }
    }
    public function delete(){
        try{
            $Data = M('software');
            $Data->where('s_id='.I('post.id'))->delete();
            echo '1';
        }catch (Exception $e)
        {
            echo $e;
        }
    }
    public function getUseful()
    {
        $Data = M('systemsetting');
        $map['u_UID']=1;
        $setting = $Data->where($map)->select();

        $inputtt=I('post.data','');
        if($inputtt == '')
        {echo $setting[0]['list_useful'];}else{
            try{
                $setting[0]['list_useful'] = $inputtt; //修改
                $Data->save($setting[0]);
                echo '修改成功!';
            }catch (Exception $e){
                echo $e;
            }
        }

    }
    public function getRecommand()
    {
        $Data = M('systemsetting');
        $map['u_UID']=1;
        $setting = $Data->where($map)->select();

        $inputtt=I('post.data','');
        if($inputtt == '')
        {echo $setting[0]['list_Recommand'];}else{
            try{
                $setting[0]['list_Recommand'] = $inputtt; //修改
                $Data->save($setting[0]);
                echo '修改成功!';
            }catch (Exception $e){
                echo $e;
            }
        }
    }
    public function getInstall()
    {
        $Data = M('systemsetting');
        $map['u_UID']=1;
        $setting = $Data->where($map)->select();

        $inputtt=I('post.data','');
        if($inputtt == '')
        {echo $setting[0]['list_SoftWare_rank'];}else{
            try{
                $setting[0]['list_SoftWare_rank'] = $inputtt; //修改
                $Data->save($setting[0]);
                echo '修改成功!';
            }catch (Exception $e){
                echo $e;
            }
        }
    }
    public function indexdetail()
    {
        $Data = M('systemsetting');
        $map['u_UID']=1;
        $setting = $Data->where($map)->select();
//        var_dump($setting);
        //recommand
        $current_list = explode(',',$setting[0]['list_Recommand']);
        $result['recommand'][]=$this->getSingleSoftwareByID($current_list[0]);
        $result['recommand'][]=$this->getSingleSoftwareByID($current_list[1]);
        $result['recommand'][]=$this->getSingleSoftwareByID($current_list[2]);
        $current_list = explode(',',$setting[0]['list_SoftWare_rank']);
        $result['top'][]=$this->getSingleSoftwareByID($current_list[0]);
        $result['top'][]=$this->getSingleSoftwareByID($current_list[1]);
        $result['top'][]=$this->getSingleSoftwareByID($current_list[2]);
        $current_list = explode(',',$setting[0]['list_useful']);
        $result['must'][]=$this->getSingleSoftwareByID($current_list[0]);
        $result['must'][]=$this->getSingleSoftwareByID($current_list[1]);
        $result['must'][]=$this->getSingleSoftwareByID($current_list[2]);
        $this->ajaxreturn($result);

//        var_dump($result);
    }

    function getSingleSoftwareByID($id)
    {
        $Data2 = M('software');
        $res =  $Data2->where('s_id='.$id)->select();
        return $res;
    }

    function  view_detail()
    {
        $index = I('get.index');
        $Data = M('software');
        $map['s_id']=$index;
        $map = $Data->where($map)->select();
//        var_dump($map);
        $this->assign($map[0]);
        $this->display();
    }

}