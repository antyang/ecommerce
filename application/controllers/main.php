<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('storefront');
		//$this->output->enable_profiler();
	}
	public function index()
	{
        $this->load->view('splashpage.php');
	}

	public function edit($id)
	{
		$this->load->model('storefront');
		$product = $this->storefront->get_product($id);
		$categories = $this->storefront->all_category();
		$this->load->view('edit_product', array('categories' => $categories, 'id' => $id, 'product' => $product));
	}
	public function add()
	{
		$this->load->model('storefront');
		$categories = $this->storefront->all_category();
		$this->load->view('add_product', array('categories' => $categories));
	}

	public function cart()
	{
		$this->load->view('cart');
	}

	public function login()
	{
		$this->load->view('login');
	}
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
		$products = $this->storefront->all_products();
        $this->load->view('admin_products', array('products' => $products));
	}
    public function products()
    {
    	$this->load->model('storefront');
    	$data = $this->storefront->all_products();
        $this->load->view('products.php', array('data' => $data));
    }

    public function products_admin()
    {
        $garbage = $this->storefront->all_products();
        var_dump($garbage);
        die();
        $this->load->view('admin/products', array('garbage' => $garbage));
    }


    public function product_show()
    {
    	$this->load->view('product_show.php');
    }

    public function show($id)
    {
        $this->load->model("storefront");
        $product = $this->storefront->show_product($id);
//        var_dump($product);
//        die();
        $this->load->view('product_page', array('product' => $product));

    }
//    -------------Login/Logoff-----------

    public function dashboard()
    {
        $this->load->view('dashboard.php');
    }
    
    public function logoff()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function finishPayment()
    {
        $this->session->sess_destroy();
        $this->load->view('splashpage.php');
    }
    public function admin_login()
    {
    	$this->load->model('storefront');
    	$data = $this->storefront->login_admin($this->input->post());
    	if($data==null)
    	{
    		$this->session->set_flashdata('error', 'Invalid Username/Password');
    		redirect('/login');
    	}
    	else
    	{
    		$new_data = array($data->id, $data->first_name);
    		$this->session->set_userdata('user', $new_data);
    		if($data->userlevel == 1)
    		{
    			redirect('admin/products');
    			$this->load->products_admin;
    		}
    		else
    		{
    			redirect('products');
    		}
    	}
    }

    function session_modal($id){
        var_dump($id);
        echo "shit";
        die();
        $this->session->set_userdata("lol_id", $id );
    }
//    -------- Delete Product ---------

    public function delete_product($id)
    {
        $this->load->model('storefront');
        $this->storefront->delete_product($id);
        $this->load->view('admin_products');

    }

    public function removeFromCart($id)
    {
        $this->load->model('storefront');
        $this->storefront->removeFromCart($id);
        var_dump($this->storefront->removeFromCart($id));
        $this->load->view('', $data);
    }

    public function updateCart()
    {
        $new_qty = $this->input->post();
        $this->storefront->update($new_qty);
        $this->session->set_flashdata('data', $this->storefront->all_products());
        redirect('cart');
    }

    public function store_session($id)
    {
        $this->session->set_userdata('id', $id);
    }
}

//end of main controller
