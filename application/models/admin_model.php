<?php  

class Admin_Model extends CI_Model
{
	function get_admin_by_email($email)
	{
		return $this->db->query("SELECT * FROM admins WHERE email = ?", array($email))->row_array();
	}
	function show_all_orders()
	{
		return $this->db->query('SELECT items.price * orders_has_items.item_quantity AS "price_before_shipping", items.price * orders_has_items.item_quantity + shipping_methods.price AS "price_after_shipping", SUM(items.price * orders_has_items.item_quantity + shipping_methods.price) AS "total_price", customer_informations.first_name, shipping_methods.price AS "shipping_price", items.name, items.price, orders_has_items.item_quantity AS "quantity", items.id, orders.shipping_address, shipping_methods.type AS "shipping_method_type", shipping_methods.id AS "shipping_method_id", items.name, customer_informations.last_name, customer_informations.billing_address, customer_informations.city, customer_informations.state, customer_informations.zip_code, orders.id AS "order_id", orders.status, orders.ordered_on, customers.id AS "customer_id" FROM orders
		LEFT JOIN customers ON customers.id = orders.customer_id
		LEFT JOIN customer_informations ON customer_informations.customer_id = orders.customer_id
		LEFT JOIN orders_has_items ON orders_has_items.order_id = orders.id
		LEFT JOIN items ON items.id = orders_has_items.item_id
		LEFT JOIN shipping_methods ON shipping_methods.id = orders.shipping_method_id
		GROUP BY orders.id')->result_array();
	}
	function get_order_by_id($order_id)
	{
		return $this->db->query('SELECT items.price * orders_has_items.item_quantity AS "price_before_shipping", items.price * orders_has_items.item_quantity + shipping_methods.price AS "price_after_shipping", customer_informations.first_name, shipping_methods.price AS "shipping_price", items.name, items.price, orders_has_items.item_quantity AS "quantity", items.id, orders.shipping_address, shipping_methods.type AS "shipping_method_type", shipping_methods.id AS "shipping_method_id", items.name, customer_informations.last_name, customer_informations.billing_address, customer_informations.city, customer_informations.state, customer_informations.zip_code, orders.id AS "order_id", orders.status, orders.ordered_on, customers.id AS "customer_id", orders.total_price FROM orders
		LEFT JOIN customers ON customers.id = orders.customer_id
		LEFT JOIN customer_informations ON customer_informations.customer_id = orders.customer_id
		LEFT JOIN orders_has_items ON orders_has_items.order_id = orders.id
		LEFT JOIN items ON items.id = orders_has_items.item_id
		LEFT JOIN shipping_methods ON shipping_methods.id = orders.shipping_method_id
		WHERE orders.id = ?', array($order_id))->result_array();
	}
	function searchOrders($str)
	{
		$query = "SELECT items.price * orders_has_items.item_quantity AS 'price_before_shipping', items.price * orders_has_items.item_quantity + shipping_methods.price AS 'price_after_shipping', SUM(items.price * orders_has_items.item_quantity + shipping_methods.price) AS 'total_price', customer_informations.first_name, shipping_methods.price AS 'shipping_price', items.name, items.price, orders_has_items.item_quantity AS 'quantity', items.id, orders.shipping_address, shipping_methods.type AS 'shipping_method_type', shipping_methods.id AS 'shipping_method_id', items.name, customer_informations.last_name, customer_informations.billing_address, customer_informations.city, customer_informations.state, customer_informations.zip_code, orders.id AS 'order_id', orders.status, orders.ordered_on, customers.id AS 'customer_id' FROM orders
		LEFT JOIN customers ON customers.id = orders.customer_id
		LEFT JOIN customer_informations ON customer_informations.customer_id = orders.customer_id
		LEFT JOIN orders_has_items ON orders_has_items.order_id = orders.id
		LEFT JOIN items ON items.id = orders_has_items.item_id
		LEFT JOIN shipping_methods ON shipping_methods.id = orders.shipping_method_id 
		WHERE customer_informations.first_name like '%{$str}%'
		OR customer_informations.last_name like '%{$str}%'
		OR orders.id like '%{$str}%'
		OR customer_informations.billing_address like '%{$str}%'
		OR total_price like '%{$str}%'
		GROUP BY orders.id";
		return $this->db->query($query)->result_array();
	}
	function showProducts()
	{
		return $this->db->query("SELECT * FROM items")->result_array();
	}
	function searchProducts($str)
	{
		$query = "SELECT * FROM items WHERE name like '%{$str}%'";
		return $this->db->query($query)->result_array();
	}
	function sortOrders($str)
	{
		$query = "SELECT items.price * orders_has_items.item_quantity AS 'price_before_shipping', items.price * orders_has_items.item_quantity + shipping_methods.price AS 'price_after_shipping', SUM(items.price * orders_has_items.item_quantity + shipping_methods.price) AS 'total_price', customer_informations.first_name, shipping_methods.price AS 'shipping_price', items.name, items.price, orders_has_items.item_quantity AS 'quantity', items.id, orders.shipping_address, shipping_methods.type AS 'shipping_method_type', shipping_methods.id AS 'shipping_method_id', items.name, customer_informations.last_name, customer_informations.billing_address, customer_informations.city, customer_informations.state, customer_informations.zip_code, orders.id AS 'order_id', orders.status, orders.ordered_on, customers.id AS 'customer_id' FROM orders
		LEFT JOIN customers ON customers.id = orders.customer_id
		LEFT JOIN customer_informations ON customer_informations.customer_id = orders.customer_id
		LEFT JOIN orders_has_items ON orders_has_items.order_id = orders.id
		LEFT JOIN items ON items.id = orders_has_items.item_id
		LEFT JOIN shipping_methods ON shipping_methods.id = orders.shipping_method_id
		WHERE status like '%{$str}%'
        GROUP BY orders.id";
		return $this->db->query($query)->result_array();
	}
}
