<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('item','product');

	}
	function index(){
		$result = $this->product->get_item();
		//echo "<pre>"; print_r($result);
		$this->load->helper('url');
		$this->load->view('user/index', ['result'=>$result]);
	}
	
}