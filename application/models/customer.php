<?php  

class Customer extends CI_Model
{
	function add_customer($customer)
	{
		$query = "INSERT INTO customers (first_name, last_name, email, password, created_at) VALUES (?,?,?,?,?)";
		$values = array($customer['first_name'], $customer['last_name'], $customer['email'], $customer['password'], date("Y-m-d, H:i:s"));
		$results = $this->db->query($query, $values);
		return $results;
	}
}