<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('item');
	}

	function index(){
		$this->load->helper('url');
		$this->load->view('admin/admin_page');
	}

	function insert_brand(){
		$brand = $this->input->post('brand_name');
		$data = array(
			'brand_name' => $brand
		);
		$result = $this->item->insert_brand($data);
		if($result){
			echo "success";
		}else{
			echo "not success";
		}
	}

	function get_brand(){
		$result = $this->item->get_brand();
		if($result){
			echo "<pre>";print_r($result);
		}else{
			echo "get error";
		}
	}

	function add_item(){
		echo "item added successfully";
	}

	function insert_item(){
		 		$config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 3000000;
               
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('item_img'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);die;

                }
                else
                {
                	$file_name = $this->upload->data();
                	$data['item_name'] = $this->input->post('item_name');
                	$data['img'] = $file_name['file_name'];
                	$data['price'] = $this->input->post('item_price');
                	$data['cat_id'] = $this->input->post('item_cat');
                	$data['color'] = $this->input->post('item_color');
                	$data['size'] = $this->input->post('item_size');
                	$data['brand_id'] = $this->input->post('item_brand');
                }
                $result = $this->item->add_item($data);
                if($result){
                	return $this->add_item();
                }else{
                	echo "query error";
                	die;
                }

	}
	
}