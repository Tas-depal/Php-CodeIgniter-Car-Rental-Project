<?php
  class Home extends CI_controller
  {
  	function __construct()
  	{
  		parent:: __construct();
      $this->load->model('AdminModel');
      
  	}
  	function index()
  	{
     if(!empty($this->input->post("txtSearchCar")))
      {      
        $searchCar  = $this->input->post("txtSearchCar");

        $searchdata['search_data'] = $this->AdminModel->checkCar($searchCar);
        $this->load->view("home", $searchdata);
      }
      else
      {
        $carsdata['data'] = $this->AdminModel->showCars();
        $this->load->view("home", $carsdata);      
      }  	}
    
    function book_car()
    {
       redirect("login");
    }
  }
?>