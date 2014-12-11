<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {

     function get_all_items()
     {
        return $this->db->query("SELECT * FROM items ORDER BY name ASC")->result_array();
     }
     function getitem_by_id($id)
     {
        return $this->db->query("SELECT * FROM items WHERE id = {$id}")->result_array();
     }
     function get_items_by_categoryid($id)
     {
        return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id} ORDER BY name ASC")->result_array();
     }
     function searchitem($keyword)
     {
          return $this->db->query("SELECT * FROM items WHERE name LIKE '%$keyword%'")->result_array();
     }
     function searchitem($keyword)
     {
          return $this->db->query("SELECT COUNT(*) as total FROM items;");
     }
     // function sortitems_by_price()
     // {
     //      return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id} ORDER BY price ASC")->result_array();
     // }
     // function sortitems_by_popularity()
     // {
     //      return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id} ORDER BY total_sold ASC")->result_array();
     // }
     // function pagination()
     // {
     //    return $this->db-query("SELECT COUNT(*) as total FROM items")->$;
     // }
     // function add_item($item)
     // {
     //    $query = "INSERT INTO Items (title, description, image, created_at) VALUES (?,?,?,?)";
     //    $values = array($item['title'], $item['description'], date("Y-m-d, H:i:s")); 
     //    return $this->db->query($query, $values);
     // }
     // function delete_item($item_id)
     // {
     //    $query = "DELETE FROM pets_schema.items WHERE id=?"; 
     //    $values = array($item_id);
     //    return $this->db->query($query, $values);
     // }
}

