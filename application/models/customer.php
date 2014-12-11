<?php  

    date_default_timezone_set('America/Los_Angeles');

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
		$info_query = "INSERT INTO customer_informations (customer_id, first_name, last_name, billing_address, city, state, zip_code, updated_at) VALUES (?,?,?,?,?,?,?,?)";
		$values = array($customer_info['customer_id'],$customer_info['first_name'], $customer_info['last_name'], 
						$customer_info['billing_address'], $customer_info['city'], $customer_info['state'], $customer_info['zip_code'], date("Y-m-d, H:i:s"));
		$results = $this->db->query($info_query, $values);

		return $results;
	}

	function addNewOrder($new_order)
	{
		$query = "INSERT INTO orders (status, total_price, shipping_address, ordered_on, shipped_on, customer_id, shipping_method_id) VALUES (?,?,?,?,?,?,?)";
		$values = array($new_order['status'], $new_order['total_price'], $new_order['shipping_address'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $new_order['customer_id'], $new_order['shipping_method_id']);
		$results = $this->db->query($query, $values);

		return $this->db->insert_id();

	}

	function getShippingCost($shipping_method_id)
	{
		$query = $this->db->query("SELECT * FROM shipping_methods WHERE id= ?", $shipping_method_id)->row_array();

		return $query['price'];
	}

	function updateItemsInventory($cart_item, $order_id)
	{
		$query = "INSERT INTO orders_has_items (order_id, item_id, item_quantity) VALUES (?,?,?)";
		$values = array($order_id, $cart_item['id'], $cart_item['quantity']);
		$results = $this->db->query($query, $values);
		$insert_id = $this->db->insert_id();

		// Update Inventory quantities - get Items Inventory Count and Total Sold
		$this->load->model("item");
		$item = $this->item->getitem_by_id($cart_item['id']);
	
		$new_inventory_count = intval($item[0]['inventory_count']) - intval($cart_item['quantity']);
		$new_total_sold = intval($item[0]['total_sold']) + intval($cart_item['quantity']);

		$this->db->set('inventory_count', $new_inventory_count );
		$this->db->set('total_sold', $new_total_sold);
		$this->db->where('id', $cart_item['id']);
		$this->db->update('items');

		return $insert_id;

	}

}