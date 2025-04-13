<?php
class EditProfile extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model("DbModel");
  }
  function index()
  {
    $id = $this->session->userdata("id");
    $user_info["userData"] = $this->DbModel->edit_user_profile($id);
    $this->load->view("edit_profile", $user_info);
  }
  function update_user_data()
  {
    $id          = $this->input->post("txtId");
    $first_name  = $this->input->post('txtFirstNm');
    $last_name   = $this->input->post('txtLastNm');
    $email       = $this->input->post('txtEmail');
    $pass        = $this->input->post('txtPass');
    $city        = $this->input->post('txtCity');
    $contact_no  = $this->input->post('txtCno');
    $address     = $this->input->post('txtAdd');

    $set_arr = array("first_name"=>$first_name, "last_name"=>$last_name, "email"=>$email, "password"=>$pass, "city"=>$city, "contact_no"=>$contact_no, "address"=>$address);
    $where_arr = array("id"=>$id);
    $this->DbModel->update_data($set_arr,$where_arr);
  }
}
?>