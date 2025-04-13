<?php
  class AdminLogin extends CI_Controller
  {
   function __construct()
   {
      parent:: __construct();
      $this->load->model("AdminModel");
   }
    function index()
    {
      $this->load->view("admin/admin_login");
    }
    function checkAdmin()
    {
      $email      = $this->input->post("txtEmail");
      $password   = $this->input->post("txtPass");

      $arr = array("email"=>$email, "password"=>$password);
      $this->AdminModel->checkAdmin($arr);      
    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect("admin/admin_login");
    }
  }
?>