<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>登录页面</title>
<link rel="stylesheet" href="../../Public/css/style.default.css" type="text/css" />
<script type="text/javascript" src="../../Public/js/plugins/jquery-1.7.min.js"></script>

<body class="loginpage">
	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	<h1 class="logo">城买城卖.<span>登录</span></h1>
				<span class="slogan">后台管理系统</span>
            </div><!--logo-->

            <div class="nopassword">
				<div class="loginmsg">密码不正确.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="./Public/images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            
            <form id="login" action="Login" method="post">
            	
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" Value="请输入用户名" name="username" id="username" />
                    </div>
                </div>
                
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password"  name="password" id="password" />
                    </div>
                </div>

                <!-- 验证码 -->
                <div class="verify">
                    <div >
                    <input type="text" name="verify" value="请输入验证码"  >
                    <img src="http://localhost:8081/Login/Home/Index/verify" width="50%" />
                       
                    </div>
                </div>
                
                <button>登录</button>                
                <div class="keep"><input type="checkbox" /> 记住密码</div>
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>
</html>