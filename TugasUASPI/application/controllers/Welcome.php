<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
	}
	
	public function index()
	{
		$this->load->view('home_view');
	}

	public function product()
	{
		$data["products"] = $this->product_model->getAll();
        $this->load->view("product.php", $data);
	}

}
