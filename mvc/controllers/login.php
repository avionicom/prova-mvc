<?php

class Login extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
// 		require 'models/login_model.php';
// 		$model = new Login_Model();
		$this->view->render('login/index');
	}
	
	function run(){
		$this->model->run();
	}
	
}