<?php
  class Login extends CI_Controller
  {
  	function __construct()
  	{
  		parent:: __construct();
  		$this->load->model("DbModel");
  	}
    function index()
    {
    	$this->load->view("login");
    }
    function checkUser()
    {
      $email      = $this->input->post("txtEmail");
      $password   = $this->input->post("txtPass");

      $arr = array("email"=>$email, "password"=>$password);
      $this->DbModel->checkUser($arr);
    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect("Login");
    }
  }
?>