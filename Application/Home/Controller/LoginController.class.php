<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends BaseController {
	public function login() {
		if (IS_POST) {
			
			$user_name = trim(I("post.user_name"));
			$user_pwd = trim(I("post.user_pwd"));
			
			if(empty($user_name)) E("用户名不能为空");
			if(empty($user_pwd)) E("密码不能为空");
			
			$map["user_name"] = $user_name;
			$map["user_pwd"] = $user_pwd;
			
			$user = M("User")->where($map)->find(); 
			if( empty($user) ){
				E("用户不存在或密码错误");
			}
			
			$this->add_cookie('1', 'name', 13);
			$this->redirect('/user/');
		} else {
			$this->display ();
		}
	}
	
	public function logout(){
		cookie('user_id', null);
		$this->redirect("/");
	}
}
?>