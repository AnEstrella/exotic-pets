<?php  

class Admin_Model extends CI_Model
{
	function get_admin_by_email($email)
	{
		return $this->db->query("SELECT * FROM admins WHERE email = ?", array($email))->row_array();
	}
	function show_all_orders()
	{
		return $this->db->query('SELECT customer_informations.first_name, customer_informations.last_name, customer_informations.billing_address, customer_informations.city, customer_informations.state, customer_informations.zip_code, orders.id AS "order_id", orders.status, orders.ordered_on, customers.id AS "customer_id", orders.total_price FROM orders
								LEFT JOIN customers ON customers.id = orders.customer_id
								LEFT JOIN customer_informations ON customer_informations.customer_id = orders.customer_id
								')->result_array();
	}
	function get_order_by_id($order_id)
	{
		return $this->db->query('SELECT customer_informations.first_name, shipping_methods.price AS "shipping_price", items.name, items.price, orders_has_items.item_quantity AS "quantity", items.id, orders.shipping_address, shipping_methods.type AS "shipping_method_type", shipping_methods.id AS "shipping_method_id", items.name, customer_informations.last_name, customer_informations.billing_address, customer_informations.city, customer_informations.state, customer_informations.zip_code, orders.id AS "order_id", orders.status, orders.ordered_on, customers.id AS "customer_id", orders.total_price FROM orders
		LEFT JOIN customers ON customers.id = orders.customer_id
		LEFT JOIN customer_informations ON customer_informations.customer_id = orders.customer_id
		LEFT JOIN orders_has_items ON orders_has_items.order_id = orders.id
		LEFT JOIN items ON items.id = orders_has_items.item_id
		LEFT JOIN shipping_methods ON shipping_methods.id = orders.shipping_method_id
		WHERE orders.id = ?', array($order_id))->result_array();
	}
}
