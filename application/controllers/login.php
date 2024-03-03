<?php
  class login extends CI_Controller
  {
  	function __construct()
  	{
  		parent:: __construct();
  		$this->load->model("dbmodel");
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
      $this->dbmodel->checkUser($arr);
    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect("login");
    }
  }
?>