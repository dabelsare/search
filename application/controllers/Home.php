<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('search_product');
		$this->load->view('partials/footer');
	}

	function search()
	{
		$data['query'] = $this->product_model->get_search();
		$this->load->view('partials/header');
		$this->load->view('search_product', $data);
		$this->load->view('partials/footer');
	}
}
