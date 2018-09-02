<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function index(){
		//$this->load->helper('url');
		//$this->load->view('admin/login');
		$this->load->model('login_model');
		$this->login_model->admin_login();
	}
	
}