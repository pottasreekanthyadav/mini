<?php

class Admin extends CI_Controller {

	
	public function index()
	{


		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','user name','required|alpha|min_length[3]',array('required'=>'name is required','alpha'=>'only alpha allow','max_lenght'=>'maximuumlength is 20'));
		$this->form_validation->set_rules('password','password','required|min_length[5]',array('required'=>'password is required','min_length'=>'min length is 5',));
$this->form_validation->set_error_delimiters('<span style="color:red;">', '</span>');
		if($this->form_validation->run()){
extract($_POST);
echo "hi";
echo $name;
echo "<br>";
echo $password;

		}
		else{
			$this->load->view("admin/login");
		}
	}
}
