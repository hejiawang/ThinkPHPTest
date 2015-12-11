<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends BaseController {
	
	public function _before_index(){
		if( !$this->logined ){
			$this->redirect('/login/login/');
		}
	}
	
	public function index() {
		$this->show ( 'user controller index </br>' );
		$this->display();
	}
}
?>
