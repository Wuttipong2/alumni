<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('register_model','register');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('bootstap');
	}

	

}
    