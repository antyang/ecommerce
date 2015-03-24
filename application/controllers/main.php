<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('???');
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
	public function cart()
	{
		$this->load->view('cart');
	}
	public function dashboard()
	{
		$this->load->view('admin_dashboard');
	}
	public function admin_orders()
	{
		$this->load->view('admin_orders');
	}
		public function admin_products()
	{
		$this->load->view('admin_products');
	}
    public function products(){
        $this->load->view('products');
    }
}

//end of main controlle
