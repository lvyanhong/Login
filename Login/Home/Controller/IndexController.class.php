<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('index');//渲染模板
    }


   // 验证码
    public function Verify(){
    	$verify  = new  \Think\Verify();
    	$verify -> entry();
    }

    // 登录方法
    public function Login(){
    	header("Content-type: text/html; charset=utf-8");//防止输出乱码
    	$User = M('User');//实例化模板
    	$udata['name'] = $_POST['username'];
    	$udata['password'] = $_POST['password'];
    	$code = $_POST['verify'];
        
        //比对验证码
        $ver = new \Think\Verify();
        $verify=$ver->check($code);
        if(!$verify){//判断验证码是否正确
         $this->error('验证码错误! 请右键刷新页面重试!');
        }

        if(!isset($udata)){ 

    	$it=$User->where($udata)->select();//数据库比对
    	 if($it){//判断是否登录成功
    	 	$this->success('恭喜登录成功!');
    	 	//成功后跳转
    	 	
    	 }
         }else{
            $this->error('用户名或密码不能为空!');
         }


    }

 
}