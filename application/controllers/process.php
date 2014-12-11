<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		if (FALSE == $this->session->userdata('total_items'))
		{
            $this->session->set_userdata('total_items',0);
            $this->session->set_userdata('total_price',0);
        }
		$items = $this->Item->get_all_items(); 
		$item_count = $this->Item->item_count();
		$this->load->model('Category');
		$categories = $this->Category->get_all_categories();
		$this->load->view('shop_products', array('items'=>$items, 'categories'=>$categories, 'item_count'=>$item_count));
	}
	public function shop_products($category_id)
	{
		$items = $this->Item->get_items_by_categoryid($category_id); 


		//$items_per_page = $this->Item->items_per_page();

		$item_count = $this->Item->item_count();
		$this->load->model('Category');
		$categories = $this->Category->get_all_categories();
		$this->load->view('shop_products', array('items'=>$items, 'categories'=>$categories, 'item_count'=>$item_count));
	}
	public function searchitem()
	{
		$item_count = $this->Item->item_count();
		$items = $this->Item->searchitem($this->input->get('q'));
		$this->load->model('Category');
		$categories = $this->Category->get_all_categories();
		$this->load->view('shop_products', array('items'=>$items, 'categories'=>$categories, 'item_count'=>$item_count));
	}
	public function pagination()
	{
		$this->load->library('pagination');
		$config['base_url'] = 'http://example.com/index.php/test/page/';
		$config['total_rows'] = 200;
		$config['per_page'] = 15; 

		$this->pagination->initialize($config); 

		echo $this->pagination->create_links();
	}
	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email Address", 'trim|required|is_unique[customers.email]|valid_email');
		$this->form_validation->set_rules("first_name", "First Name", 'trim|required');
		$this->form_validation->set_rules("last_name", "Last Name", 'trim|required');
		$this->form_validation->set_rules("password", "Password", 'trim|required|min_length[8]|matches[confirm_password]|md5');
		$this->form_validation->set_rules("confirm_password", "Confirm Password", 'required');
		$this->form_validation->set_rules("billing_address", "Billing Address", 'required');
		$this->form_validation->set_rules("city", "City", 'required');
		$this->form_validation->set_rules("state", "State", 'required');
		$this->form_validation->set_rules("zip_code", "Zip Code", 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata("registration_error", validation_errors());
			redirect('/');
		}
		else
		{
			$this->load->model("customer");
			$customer_email = array(
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
			"confirm_password" => $this->input->post('confirm_password')
			);
			$add_customer = $this->customer->add_customer($customer_email);
			$customer_info = array(
			"customer_id" => $add_customer,
			"first_name" => $this->input->post('first_name'),
			"last_name" => $this->input->post('last_name'),
			"billing_address" => $this->input->post('billing_address'),
			);
			$add_customer_info = $this->customer->add_customer_info($customer_info);
					redirect('/');
		}
	}
	public function shop_showitem($item_id, $cat_id)
	{
		$items = $this->Item->getitem_by_id($item_id); 
		$similar_items = $this->Item->get_items_by_categoryid($cat_id);
		$this->load->view('shop_showitem', array('items'=>$items, 'similar_items'=>$similar_items, 'cat_id'=>$cat_id));
	}
	// public function sort_items()
	// {
	// 	$items = $this->input->post('sort_by_dropdown');
	// 	$this->load->model('Item');
	// 	$data['items'] = $this->Item->sort_item($items);
	// 	echo json_encode($data);
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */