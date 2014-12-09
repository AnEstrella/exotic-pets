<?php  

class Admin_Model extends CI_Model
{
	function get_admin_by_email($email)
	{
		return $this->db->query("SELECT * FROM admins WHERE email = ?", array($email))->row_array();
	}
}