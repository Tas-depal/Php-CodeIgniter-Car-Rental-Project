
<?php
  class manage_car extends CI_Controller
  {
  	function __construct()
  	{
  		parent::__construct();
  		$this->load->model("adminModel");
  	}
  	function index()
  	{
    }
  	function show_car_details()
    {
      $result_data["carData"] = $this->adminModel->showCars();
      $this->load->view("admin/manage_car",$result_data);
    }
  	function deleteCar()
    {
      $id = $_GET["delId"];
      $this->adminModel->delCar($id);
    }
    function editCar()
    {
      $id = $_GET["editId"];
      $editData["editCarData"] = $this->adminModel->editCar($id);
      $this->load->view("admin/edit_car",$editData);
    }
    function updateCarInfo()
    {
      $id           = $this->input->post("txtId"); 
      $companyName  = $this->input->post("txtCmpName");   
      $modelNo      = $this->input->post("txtModelNum");
      $vehicleType  = $this->input->post("selVehType");
      $plateNo      = $this->input->post("txtPlateNo");
      $ownerNm      = $this->input->post("txtOwnerName");
      $mobNo        = $this->input->post("txtMobNo");
      $city         = $this->input->post("txtCity");
      $address      = $this->input->post("txtAdd");
      $car_status      = $this->input->post("selStatus");

  /*................................update car & licence image........................................... */

      $config['upload_path']          = './images/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 5000000;
      $config['max_width']            = 5000000;
      $config['max_height']           = 5000000;

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('VehImg'))
      {
        $vehImg = $this->upload->data('file_name');
      }
      if($this->upload->do_upload('licImg'))
      {
        $licImg = $this->upload->data("file_name");
      }
      $set_arr = array();
      if(!empty($vehImg) && !empty($licImg))
      {
        $set_arr = array('companyName'=>$companyName, 'modelNo'=>$modelNo, 'vehicleType'=>$vehicleType, 'car_pic'=>$vehImg,'plateNo'=>$plateNo, 'ownerName'=>$ownerNm, 'mobNo'=>$mobNo, 'licImg'=>$licImg, 'city'=>$city, 'address'=>$address, 'car_status'=>$car_status);
      }
    else
      {
        $set_arr = array('companyName'=>$companyName, 'modelNo'=>$modelNo, 'vehicleType'=>$vehicleType,'plateNo'=>$plateNo, 'ownerName'=>$ownerNm, 'mobNo'=>$mobNo, 'city'=>$city, 'address'=>$address, 'car_status'=>$car_status);
      }
      $where_arr = array("id"=> $id);
      $this->adminModel->updateCarInfo($set_arr,$where_arr);
    }
  }
  ?>