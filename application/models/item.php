<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {

     function get_all_items()
     {
         return $this->db->query("SELECT * FROM items")->result_array();
     }
     // function get_item_by_id($item_id)
     // {
     //     return $this->db->query("SELECT * FROM items WHERE id = ?", array($item_id))->row_array();
     // }
     // function add_item($item)
     // {
     //     $query = "INSERT INTO Items (title, description, created_at) VALUES (?,?,?)";
     //     $values = array($item['title'], $item['description'], date("Y-m-d, H:i:s")); 
     //     return $this->db->query($query, $values);
     // }
     // function delete_item($item_id){
     //    $query = "DELETE FROM pets_schema.items WHERE id=?"; 
     //    $values = array($item_id);
     //    return $this->db->query($query, $values);
     // }
}

