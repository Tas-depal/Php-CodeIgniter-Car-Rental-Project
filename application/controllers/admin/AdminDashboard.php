<?php
  class AdminDashboard extends CI_Controller
  {
    function __construct()
    {
      parent:: __construct();
      $this->load->model("AdminModel");
    }
    function index()
    {
      $total_users    = $this->AdminModel->count_all_users();
      $total_bookings = $this->AdminModel->count_all_bookings();
      $total_cars     = $this->AdminModel->count_all_cars();
      $this->load->view("admin/admin_dashboard",array('total_users' => $total_users,'total_bookings' => $total_bookings,'total_cars'=>$total_cars));
    }
  }
?>