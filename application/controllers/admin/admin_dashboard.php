<?php
  class admin_dashboard extends CI_Controller
  {
    function __construct()
    {
      parent:: __construct();
      $this->load->model("adminModel");
    }
    function index()
    {
      $total_users    = $this->adminModel->count_all_users();
      $total_bookings = $this->adminModel->count_all_bookings();
      $total_cars     = $this->adminModel->count_all_cars();
      $this->load->view("admin/admin_dashboard",array('total_users' => $total_users,'total_bookings' => $total_bookings,'total_cars'=>$total_cars));
    }
  }
?>