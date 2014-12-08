<?php
/**
 * 		Ecommerce Webiste Project 
 * 
 *		Admin Signin Controller
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

	public function index()
	{
		$this->load->view('signin');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */