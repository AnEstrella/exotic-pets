<?php  

class Customer extends CI_Model
{
	function add_customer($customer_email)
	{
		$query = "INSERT INTO customers (email, password, created_at, updated_at) VALUES (?,?,?,?)";
		$values = array($customer_email['email'], $customer_email['password'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		$results = $this->db->query($query, $values);
		return $this->db->insert_id();
	}
	function add_customer_info($customer_info)
	{
		$info_query = "INSERT INTO customer_informations (customer_id, first_name, last_name, billing_address) VALUES (?,?,?,?)";
		$values = array($customer_info['customer_id'],$customer_info['first_name'], $customer_info['last_name'], $customer_info['billing_address']);
		$results = $this->db->query($info_query, $values);
		return $results;
	}
}