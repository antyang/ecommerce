<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('storefront');
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

	// public function dashboard()
	// {
	// 	$this->load->view('admin_dashboard');
	// }
	public function admin_dashboard()
	{
		$this->load->view('admin_login.php');
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
    	$this->load->model('storefront');
    	$data = $this->storefront->all_products();
    	// var_dump($data);
    	// die();
        $this->load->view('products.php', array('data' => $data));
        
    }


    public function product_show()
    {
    	$this->load->view('product_show.php');
    }
//    -------------Login/Logoff-----------

    public function dashboard()
    {
        // $this->load->model('model');
        $this->load->view('dashboard.php');
    }
    
    public function logoff()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
    public function admin_login()
    {
    	$this->load->model('admin');
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

//end of main controller
