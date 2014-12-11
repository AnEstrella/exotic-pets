<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {

     function get_all_items()
     {
        return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id GROUP BY items.name ORDER BY items.name ASC")->result_array();
     }
     function getitem_by_id($id)
     {
        return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE items.id = {$id}")->result_array();
     }
     function get_items_by_categoryid($id)
     {
        return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id} ORDER BY name ASC")->result_array();
     }
     function searchitem($keyword)
     {
          return $this->db->query("SELECT * FROM items WHERE name LIKE '%$keyword%'")->result_array();
     }
     function item_count()
     {
        return $this->db->query("SELECT COUNT(*) as total FROM items")->result_array();
     }
     function category_item_count($id)
     {
        return $this->db->query("SELECT COUNT(*) as total_percategory FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id}")->result_array();
     }
     function items_per_page($startArticle)
     {
        return $this->db->query("SELECT * FROM items LIMIT {$startArticle},15")->results_array();
     }
     // function sortitems_by_price()
     // {
     //      return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id} ORDER BY price ASC")->result_array();
     // }
     // function sortitems_by_popularity()
     // {
     //      return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = {$id} ORDER BY total_sold ASC")->result_array();
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

