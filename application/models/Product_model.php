<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	function get_search()
	{
		$match = $this->input->post('search');
		$this->db->like('prod_name',$match);
		$this->db->or_like('prod_price',$match);
		$this->db->or_like('cat_name',$match);
		$this->db->or_like('',$match);
		$query = $this->db->get('products');
		return $query->result();
	}

}