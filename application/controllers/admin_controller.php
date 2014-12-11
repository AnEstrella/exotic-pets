<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('signin');
	}
	public function admin_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Admin_Model');
		$admin = $this->Admin_Model->get_admin_by_email($email);
		if($admin && $admin['password'] == $password)
		{
			$user = array(
				'admin_id' => $admin['id'],
				'admin_email' => $admin['email'],
				'is_logged_in'=> true
				);
			$this->session->set_userdata($user);
			$this->load->model('Admin_Model');
			$this->load->view('dashboard_orders', array('orders' => $this->Admin_Model->show_all_orders()));
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
			redirect('/signin');
		}
	}
	public function showProducts()
	{
		$this->load->model('Admin_Model');
		$this->load->view('dashboard_products', array('products' => $this->Admin_Model->showProducts()));
	}
	public function loadOrders()
	{
		$this->load->view('dashboard_orders');
	}
	public function viewOrder($order_id)
	{
		$this->load->model('Admin_Model');
		$this->load->view('dashboard_show', array('order' => $this->Admin_Model->get_order_by_id($order_id)));

	}
	public function searchOrders()
	{
		$order = $this->input->post('search_orders');
		$this->load->model('Admin_Model');
		$data['orders'] = $this->Admin_Model->searchOrders($order);
		echo json_encode($data);
	}
	public function searchProducts()
	{
		$product = $this->input->post('products_search');
		$this->load->model('Admin_Model');
		$data['products'] = $this->Admin_Model->searchProducts($product);
		echo json_encode($data);
	}
	public function sortOrders()
	{
		$orders = $this->input->post('order_dropdown');
		if($this->input->post('order_dropdown') == 'Show All')
		{
			$this->load->model('Admin_Model');
			$data['orders'] = $this->Admin_Model->show_all_orders();
			echo json_encode($data);	
		}
		else
		{
		$this->load->model('Admin_Model');
		$data['orders'] = $this->Admin_Model->sortOrders($orders);
		echo json_encode($data);
		}
	}
	public function deleteItem($id)
	{
		$this->load->model('Admin_Model');
		$delete_item = $this->Admin_Model->deleteItem($id);
		$this->load->view('dashboard_products', array('products' => $this->Admin_Model->showProducts()));

	}
	public function updateStatus($id)
	{
		$this->load->model('Admin_Model');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */