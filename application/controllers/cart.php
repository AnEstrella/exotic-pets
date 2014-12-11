<?php
/**
 * 		ePets ECommerce Webiste Project 
 *  
 *		Shopping Cart Controller 
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function index()
	{
		// $this->output->enable_profiler(TRUE);
		$this->load->view('shop_cart');
	}

	public function newitem()
	{
		$this->input->post(NULL,TRUE)	;
		$numitems = $this->input->post("quantity");

		if ($numitems != 0) 
			$this->addToCart($this->session->userdata('item'), $numitems);

		redirect('/shop_cart');
	}

	public function addToCart($item, $numitems)
	{
		$newitem = array('id' => $item['id'],
						'name' => $item['name'],
						'price' => $item['price'],
						'quantity' => $numitems,
						'total' => $item['price'] * intval($numitems));
		
		$shopping_cart = $this->session->userdata('cart');

		if (!($shopping_cart))
			$shopping_cart[] = $newitem;
		else
			array_push($shopping_cart,$newitem);

		$data["cart"] = $shopping_cart;
		$total_items = $this->session->userdata("total_items");
		$this->session->set_userdata("total_items",$total_items + $numitems);
		$total_price = $this->session->userdata("total_price");
		$this->session->set_userdata("total_price",$total_price + $newitem['total']);

		$this->session->set_userdata($data);

		return TRUE;
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
		$this->form_validation->set_rules("ShippingAddress2", "Shipping Address2", 'trim');
		$this->form_validation->set_rules("ShippingCity", "Shipping City", 'required');
		$this->form_validation->set_rules("ShippingState", "Shipping State", 'required');
		$this->form_validation->set_rules("ShippingZipcode", "Shipping Address", 'numeric|required');

		$this->form_validation->set_rules("BillingFirstName", "Billing First Name", 'trim|required');
		$this->form_validation->set_rules("BillingLastName", "Billing Last Name", 'trim|required');
		$this->form_validation->set_rules("BillingAddress", "Billing Address", 'required');
		$this->form_validation->set_rules("BillingAddress2", "Billing Address2", 'trim');
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

		// Simulate running credit card....

		// Add new purchase to database

		$this->load->model("customer");

		$new_customer = array(
							"email" => $this->input->post('Email'),
							"password" => $this->input->post('Password') 
						);

		$new_customer_id =  $this->customer->add_customer($new_customer);

		$customer_info = array(
							"customer_id" => $new_customer_id,
							"first_name" => $this->input->post('BillingFirstName'),
							"last_name" => $this->input->post('BillingLastName'),
							"billing_address" => $this->input->post('BillingAddress'),
							"city" => $this->input->post('BillingCity'),
							"state" => $this->input->post('BillingState'),
							"zip_code" => $this->input->post('BillingZipcode')
							);
	
		$add_customer_info = $this->customer->add_customer_info($customer_info);
		

		// Update Orders

		$shipping_address = $this->input->post('ShippingAddress') . " " . $this->input->post('ShippingCity') . "," . 
							$this->input->post('ShippingState') . "  " . $this->input->post('ShippingZipcode');

		$shipping_method = $this->input->post('shipping_method');
		$shipping_cost = $this->customer->getShippingCost($shipping_method);
		$new_order = array(
						"status" => "Shipped",
						"total_price" => intval($this->session->userdata("total_price")) + intval($shipping_cost),
						"shipping_address" => $shipping_address,
						"customer_id" => $new_customer_id,
						"shipping_method_id" => $shipping_method
					);
		
		$new_order_id = $this->customer->addNewOrder($new_order);

		//  Update Items inventory

		$cart = $this->session->userdata("cart");

		foreach ($cart as $item)
			$this->customer->updateItemsInventory($item, $new_order_id);

		// Zero cart - FIXME (Add a flashdata confirmation message that order approved/shipped)

		$this->session->set_userdata('total_items',0);
        $this->session->set_userdata('total_price',0);
  		$this->session->unset_userdata('cart');

		redirect('/');
		
	}

}
