<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showdata extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('showdata/index');
		$this->load->view('template/footer');
	}



}