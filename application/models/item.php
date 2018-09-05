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
	function size_filter($S,$M,$L){
		if($S != "false" && $M == "false" && $L == "false"){
			$this->db->where('items.size',$S);
		}
		if($M != "false" && $S == "false" && $L == "false"){
			$this->db->where('items.size',$M);
		}
		if($L != "false" && $S == "false" && $M == "false"){
			$this->db->where('items.size',$L);
		}
		if($S != "false" && $M != "false" && $L == "false"){
			$sizes = array("S","M");
			$this->db->where_in('items.size',$sizes);
		}
		if($S != "false" && $L != "false" && $M == "false"){
			$sizes = array("S","L");
			$this->db->where_in('items.size',$sizes);
		}
		if($M != "false" && $L != "false" && $S == "false"){
			$sizes = array("M","L");
			$this->db->where_in('items.size',$sizes);
		}
		if($S != "false" && $M != "false" && $L != "false"){
			$sizes = array("S","M","L");
			$this->db->where_in('items.size',$sizes);
		}
		$qry = $this->db->get('items');
		return $qry->result();
	}

}