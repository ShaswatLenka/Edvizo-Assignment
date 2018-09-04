<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model {

	function insert_brand($data){
		$qry = $this->db->insert('brand',$data);
		return $qry;
	}

	function get_brand(){
		$qry = $this->db->select('brand_name')->get('brand');
		return $qry->result();
	}

	function get_item(){
		$qry = $this->db->select('*')->get('items');
		return $qry->result();
	}

	function add_item($data){
		$qry = $this->db->insert('items', $data);
		return $qry;
	}

	function color_filter($black,$blue){
		if($black != "false" && $blue == "false"){
			$this->db->where('items.color',$black);
		}
		if($blue != "false" && $black == "false"){
			$this->db->where('items.color',$blue);
		}
		if($black != "false" && $blue != "false"){
			$this->db->select();
		}
		if($black == "false" && $blue == "false"){
			$this->db->select();
		}
		$qry = $this->db->get('items');
		return $qry->result();
	}

}