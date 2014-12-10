<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {

     function get_all_items()
     {
        return $this->db->query("SELECT * FROM items")->result_array();
     }
     function get_item_by_id($id)
     {
        return $this->db->query("SELECT * FROM items JOIN categories_has_items ON categories_has_items.item_id = items.id JOIN categories ON categories.id = categories_has_items.category_id WHERE categories.id = ?", array($item_id))->row_array();
     }
     function get_items_by_categoryid($category_id)
     {
        return $this->db->query("SELECT * FROM items LEFT JOIN categories WHERE category_id = ?", array($item_id))->row_array();
     }
     // function get_category_count()
     // {

     //}
     // function pagination()
     // {
     //    return $this->db-query("SELECT COUNT(*) as total FROM items")->$;
     // }
     function add_item($item)
     {
        $query = "INSERT INTO Items (title, description, image, created_at) VALUES (?,?,?,?)";
        $values = array($item['title'], $item['description'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
     }
     function delete_item($item_id)
     {
        $query = "DELETE FROM pets_schema.items WHERE id=?"; 
        $values = array($item_id);
        return $this->db->query($query, $values);
     }
}

