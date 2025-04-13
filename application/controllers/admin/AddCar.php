<?php
class AddCar extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model("AdminModel");
        }
        function index()
        {
                $this->load->view("admin/add_car");
	}
	function car_info()
	{
		$companyName  = $this->input->post("txtCmpName");   
		$modelNo      = $this->input->post("txtModelNum");
                $vehicleType  = $this->input->post("selVehType");
                $plateNo      = $this->input->post("txtPlateNo");
		$ownerNm      = $this->input->post("txtOwnerName");
                $mobNo        = $this->input->post("txtMobNo");
        	$city         = $this->input->post("txtCity");
        	$address      = $this->input->post("txtAdd");

/*................................upload car image........................................... */

                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000000;
                $config['max_width']            = 5000000;
                $config['max_height']           = 5000000;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('VehImg'))
                {
                        $error = $this->upload->display_errors();
                        //echo "<pre>";
                        //print_r($error);      
                }
                else
                {
                        $vehImg = $this->upload->data('file_name');
                        //echo "<pre>";
                        //print_r($data);
                }
/*.......................................upload licence image........................................*/

                if(!$this->upload->do_upload('licImg')) 
                {
                        $error = $this->upload->display_errors();
                }
                else
                {
                        $licImg = $this->upload->data("file_name");
                }


        	$car_info = array('companyName'=>$companyName, 'modelNo'=>$modelNo, 'vehicleType'=>$vehicleType, 'car_pic'=>$vehImg,'plateNo'=>$plateNo, 'ownerName'=>$ownerNm, 'mobNo'=>$mobNo, 'licImg'=>$licImg, 'city'=>$city, 'address'=>$address, 'car_status'=>"Available");
        	$this->AdminModel->addCarInfo($car_info);
        }
}
?>