<?php
  class home extends CI_controller
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

        $searchdata['search_data'] = $this->adminModel->checkCar($searchCar);
        $this->load->view("home", $searchdata);
      }
      else
      {
        $carsdata['data'] = $this->adminModel->showCars();
        $this->load->view("home", $carsdata);      
      }  	}
    
    function book_car()
    {
       redirect("login");
    }
  }
?>