<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {

     function get_all_categories()
     {
        return $this->db->query("SELECT * FROM categories ORDER BY type DESC")->result_array();
     }
}