<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$items = $this->Item->get_all_items(); 
		$this->load->model('Category');
		$categories = $this->Category->get_all_categories();
		$this->load->view('shop_products', array('items'=>$items, 'categories'=>$categories));
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
	public function shop_products($category_id)
	{
		$items = $this->Item->get_items_by_categoryid($category_id); 
		$this->load->model('Category');
		$categories = $this->Category->get_all_categories();
		$this->load->view('shop_products', array('items'=>$items, 'categories'=>$categories));
	}
	public function shop_showitem($item_id)
	{
		$items = $this->Item->getitem_by_id($item_id); 
		$this->load->view('shop_showitem', array('items'=>$items));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */