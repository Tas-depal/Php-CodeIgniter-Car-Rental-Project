<?php
  class car_booking extends CI_Controller
  {
    function __construct()
    {
      parent:: __construct();
    }
    function index()
    {
      $this->load->view("admin/car_booking");
    }
  }
?>