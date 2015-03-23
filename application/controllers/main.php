<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}

	public function index()
	{

        $this->load->view('splashpage.php');

	}
	public function edit(/*$id*/)
	{
		$this->load->view('edit_product');

	}
}

//end of main controller