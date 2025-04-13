<?php
  class AdminModel extends CI_Model
  {
   function __construct()
   {
      //$this->load->database();
   }
   function count_all_users(){
        $this->db->select('id');
        $this->db->from('carworld_userdetails');
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all_bookings(){
        $this->db->select('car_sts_id');
        $this->db->from(' carworld_book_car_details');
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all_cars(){
        $this->db->select('id');
        $this->db->from(' carworld_cardetails');
        $query = $this->db->get();
        return $query->num_rows();
    }
   function adminData($adminInfo)
   {
     $q   = $this->db->get("carworld_admin",$adminInfo);
     $row = $q->num_rows();
     if($row)
     {
      $adminData = $q->row_array();
      return $adminData;
     }
   }
   function checkAdmin($info)
    {
      $q    = $this->db->get_where("carworld_admin", $info);
      $row  = $q->num_rows();
      if($row)
      {
        $data = $q->row_array();
        $this->session->set_userdata("admin_nm",$data["first_name"]);
        $this->session->set_userdata("adminId",$data["admin_id"]);
        redirect("admin/admin_dashboard");
      }
      else
      {
        redirect("admin/admin_login");
      }
    }
    function addCarInfo($car_info)
    {
      $q = $this->db->insert("carworld_cardetails",$car_info);
      if($q)
      {
        $this->session->set_userdata("carId",$data["id"]);
        $this->session->set_flashdata('msg',"Yay!!Car Addded Successfully");
        redirect("admin/add_car");
      }
    }
    function showCars()
    {
      $this->db->select("*");
      $this->db->from("carworld_cardetails");
      $this->db->join("carworld_book_car_details", "carworld_cardetails.id = carworld_book_car_details.car_id", "LEFT");
      $this->db->order_by("id","DESC");
      $q = $this->db->get();
      $data = $q->result_array();
      return $data;
    }
    function checkCar($search_car)
    {
      $this->db->like('companyName', $search_car);
      $this->db->or_like('modelNo', $search_car);
      $this->db->or_like('vehicleType', $search_car);
      $this->db->from("carworld_cardetails");      
      $query = $this->db->get();
      $sdata = $query->result_array();
      return $sdata;
    }

    function delCar($delId)
    {
      $q = $this->db->delete('carworld_cardetails',array("id" => $delId));
      if($q)
      {
        $this->session->set_flashdata("delMsg","The Record Have Been Successfully Deleted");
        redirect("admin/manage_car/show_car_details");
      }
    }
    function editCar($editId)
    {
      $q = $this->db->get_where("carworld_cardetails",array("id"=> $editId));
      $data = $q->row_array();
      return $data;
    }
    function updateCarInfo($set,$where)
    {
      $this->db->update("carworld_cardetails",$set,$where);
      redirect("admin/manage_car/show_car_details");
    }
    function bookCar($bookCar)
    {
      $q = $this->db->insert("carworld_book_car_details",$bookCar);
      if($q)
      {
        $this->session->set_flashdata('bookmsg',"Yay!!Car booked Successfully");
        redirect("user_profile");
      }
    }
  }
?>
