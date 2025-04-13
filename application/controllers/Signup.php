<?php
  class signup extends CI_Controller
  {
  	function __construct()
  	{
  		parent:: __construct();
  		$this->load->model("DbModel");
  	}
  	function index()
  	{
      $this->load->view("signup");
    }
    function addUser()
    {
      $first_name   = $this->input->post('txtFirstNm');
      $last_name    = $this->input->post('txtLastNm');
      $email        = $this->input->post('txtEmail');
      $pass         = $this->input->post('txtPass');
      $city         = $this->input->post('txtCity');
      $contact_no   = $this->input->post('txtCno');
      $address      = $this->input->post('txtAdd');

      $checkEmail = array("email"=>$email);
      $y = $this->DbModel->checkEmail($checkEmail); 
      if($y)
      { 
      $this->load->view("signup",$this->session->set_flashdata('emailmsg',"This Email already exists"));             
      die();
      }
      else
      {
  		$arr = array("first_name"=>$first_name, "last_name"=>$last_name, "email"=>$email, "password"=>$pass, "city"=>$city, "contact_no"=>$contact_no, "address"=>$address);

  		$this->DbModel->addUser($arr); 
      }
  	}
  }
?>
