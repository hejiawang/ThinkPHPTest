<?php

namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller {
	
	protected $logined;
	protected $role;
	protected $user_id;
	
	public function _initialize() {
	
		$this->user_id = cookie ( 'user_id' );
		if (! empty ( $this->user_id )) { // 已经登录了
			$this->logined = true;
			
		} else { // 未登录
			$this->logined = false;
		}
	}
	
	protected function add_cookie( $user_id_cookie, $user_name_cookie, $user_age_cookie ){
		cookie('user_id',$user_id_cookie);
		cookie('user_name',$user_name_cookie);
		cookie('user_age',$user_age_cookie);
	}
}

?>