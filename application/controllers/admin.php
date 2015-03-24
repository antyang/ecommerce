<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
		//$this->output->enable_profiler();
	}
	public function edit(/*$id*/)
	{
		$this->load->view('edit_product');
	}
	public function dashboard()
	{
		$this->load->view('admin_dashboard');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function admin_orders()
	{
		$this->load->view('admin_orders');
	}
	public function admin_products()
	{
		$this->load->view('admin_products');
	}
    public function products()
    {
        $this->load->view('products');
    }
    public function admin_login()
    {
    	//$this->load->model('admin');
    	$data = $this->admin->login_admin($this->input->post());
    	if($data==null)
    	{
    		redirect('admin_login', array('error' => 'Invalid Username/Password'));
    	}
    	else
    	{
    		$this->load->view('admin_products');
    	}
    }
}

//end of main controlle
