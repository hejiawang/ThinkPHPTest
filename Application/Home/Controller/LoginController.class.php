<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends BaseController {
	public function login() {
		if (IS_POST) {
			$this->add_cookie('1', 'name', 13);
			$this->redirect('/user/');
		} else {
			$this->display ();
		}
	}
}
?>