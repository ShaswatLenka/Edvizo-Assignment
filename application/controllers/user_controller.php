<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('item');

	}
	function index(){
		$result = $this->item->get_item();
		//echo "<pre>"; print_r($result);
		$this->load->helper('url');
		$this->load->view('user/index', ['result'=> $result]);
	}
	
	function color_filter(){
		$this->load->helper('url');
		$color_black = $this->input->post('color0');
		$color_blue = $this->input->post('color1');
		$result = $this->item->color_filter($color_black, $color_blue);
		// print_r($result);
		$output = "";
		if($result){
			$output .= '<div class="features_items"><!--features_items-->
						<h2 class="title text-center">T-Shirts</h2>'; 
						foreach ($result as $item){ 
							$output .= '<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">';
									$output.= '<img src="'. base_url('assets/img/'.$item->img).'" />';
											$output.='<h2>'.'₹'.$item->price. '</h2>'
											.'<p>'.$item->item_name.'</p>'
									
										.'</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>'.'₹'.$item->price.'</h2>'
												.'<p>'.$item->item_name.'</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							</div>
						</div>';
					}
		}echo $output;
	}
}