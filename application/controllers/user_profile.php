<?php
  class user_profile extends CI_controller
  {
    function __construct()
    {
      parent:: __construct();
      $this->load->model('adminModel');      
    }
    function index()
    {
      if(!empty($this->input->post("txtSearchCar")))
      {      
        $searchCar  = $this->input->post("txtSearchCar");

        $searchdata['sdata'] = $this->adminModel->checkCar($searchCar);
        $this->load->view("user_profile", $searchdata);
      }
      else
      {
        $carsdata['data'] = $this->adminModel->showCars();
        $this->load->view("user_profile", $carsdata);      
      }    
    }
    
    function book_car()
    {
      $userid     = $this->input->post("txtUserId");
      $carid      = $this->input->post("txtCarId");
      $pickupDate = $this->input->post("pickupDate");
      $dropupDate = $this->input->post("dropupDate");
      $carStatus  = $this->input->post("txtCarStatus");

      $book_car = array('user_id'=> $userid, 'car_id'=> $carid, 'pickupDate'=> $pickupDate, 'dropupDate'=> $dropupDate);
      $this->adminModel->bookCar($book_car);             
    }
  }
?>
