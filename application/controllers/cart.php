<?php
/**
 * 		Ecommerce Webiste Project 
 * 
 *		Shopping Cart Controller
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function index()
	{
		$this->load->view('shop_cart');
	}

	public function submitOrder()
	{
		$this->input->post(NULL, TRUE); // returns all POST items with XSS filter

		// Validate Shipping and Billing Information

		$this->load->helper(array('form', 'url'));
		$this->load->library("form_validation");
		$this->form_validation->set_rules("ShippingFirstName", "Shipping First Name", 'trim|required');
		$this->form_validation->set_rules("ShippingLastName", "Shipping Last Name", 'trim|required');
		$this->form_validation->set_rules("Email", "Email Address", 'trim|required|is_unique[customers.email]|valid_email');
		$this->form_validation->set_rules("EmailConfirm", "Email Address", 'trim|required|is_unique[customers.email]|valid_email');
		$this->form_validation->set_rules("Password", "Password", 'trim|required|min_length[5]|matches[PasswordConfirm]|md5');
		$this->form_validation->set_rules("PasswordConfirm", "Confirm Password", 'required');
		$this->form_validation->set_rules("ShippingAddress", "Shipping Address", 'required');
		$this->form_validation->set_rules("ShippingAddress2", "Shipping Address2", 'required');
		$this->form_validation->set_rules("ShippingCity", "Shipping City", 'required');
		$this->form_validation->set_rules("ShippingState", "Shipping State", 'required');
		$this->form_validation->set_rules("ShippingZipcode", "Shipping Address", 'numeric|required');

		$this->form_validation->set_rules("BillingFirstName", "Billing First Name", 'trim|required');
		$this->form_validation->set_rules("BillingLastName", "Billing Last Name", 'trim|required');
		$this->form_validation->set_rules("BillingAddress", "Billing Address", 'required');
		$this->form_validation->set_rules("BillingAddress2", "Billing Address2", 'required');
		$this->form_validation->set_rules("BillingCity", "Billing City", 'required');
		$this->form_validation->set_rules("BillingState", "Billing State", 'required');
		$this->form_validation->set_rules("BillingZipcode", "Billing Zip Code", 'required');
		$this->form_validation->set_rules("CreditCard", "Valid Credit Card", 'numeric|required');
		$this->form_validation->set_rules("SecurityCode", "Billing Address", 'numeric|required');
		$this->form_validation->set_rules("ExpirationMonth", "Expiration Month", 'numeric|exact_length[2]|required');
		$this->form_validation->set_rules("ExpirationYear", "Expiration Year", 'numeric|exact_length[4]|required');


		if($this->form_validation->run() == FALSE)
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata("registration_error", validation_errors());
			redirect('/');
		}
	
	}
}