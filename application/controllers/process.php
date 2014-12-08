<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function index()
	{
		$this->load->view('register_view');
	}
	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email Address", 'trim|required|is_unique[customers.email]|valid_email');
		$this->form_validation->set_rules("first_name", "First Name", 'trim|required');
		$this->form_validation->set_rules("last_name", "Last Name", 'trim|required');
		$this->form_validation->set_rules("password", "Password", 'trim|required|min_length[8]|matches[confirm_password]|md5');
		$this->form_validation->set_rules("confirm_password", "Confirm Password", 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->view_data['errors'] = validation_errors();
			$this->session->set_flashdata("registration_error", validation_errors());
			redirect('/');
		}
		else
		{
			$this->load->model("customer");
			$student_details = array(
			"first_name" => $this->input->post('first_name'),
			"last_name" => $this->input->post('last_name'),
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
			"confirm_password" => $this->input->post('confirm_password')
			);
			$add_student = $this->student_model->add_student($student_details);
				if($add_student === TRUE)
					redirect('/');
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */