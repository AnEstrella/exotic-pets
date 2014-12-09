<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	public function index()
	{
		$this->load->model('Admin_Model');
		$this->load->view('dashboard_orders', array('orders' => $this->Admin_Model->show_all_orders()));
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
			$this->load->view('dashboard_orders');
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
			redirect('/signin');
		}
	}
	public function loadProducts()
	{
		$this->load->view('dashboard_products');
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */