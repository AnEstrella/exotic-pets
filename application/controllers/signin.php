<?php
/**
 * 		Ecommerce Webiste Project 
 * 
 *		Admin Signin Controller
 */

defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class SignIn extends CI_Controller {

<<<<HEAD
	public function index()
	{
		$this->load->view('signin');
	}
=======
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
=======
class SignIn extends CI_Controller
{
>>>>>>> 91273fafa2c6eb8419097d0110826e2c9dfc5359
	public function index()
	{
		$this->load->view('shop_cart');
	}
}
