<?php
  class dbModel extends CI_Model
  {
  	function __construct()
  	{
  		//$this->load->database();
  	}
    function checkEmail($checkEmail)
    {
      $r = $this->db->get_where("carworld_userdetails", $checkEmail);
      $row  = $r->num_rows();
      if($row)
      {
        $data = $r->row_array();
        return $data;
      }
      else
      {
        return false;
      }      
    }
    function addUser($array)
    {
  		$q = $this->db->insert("carworld_userdetails", $array);
  		if($q)
  		{
        $this->session->set_flashdata('registration',"Yay!! You have been registered successfully");
        redirect("carworld_userdetails");
      }
      else
      {        
      }
  	}
    function checkUser($info)
    {
      $q    = $this->db->get_where("carworld_userdetails", $info);
      $row  = $q->num_rows();
      if($row)
      {
        $data = $q->row_array();
        $this->session->set_userdata("userNm",$data["first_name"]);
        $this->session->set_userdata("userId",$data["id"]);
        redirect("user_profile");
      }
      else
      {
        redirect("login");
      }
    }
    function edit_user_profile($userprofile)
    {
      $q = $this->db->get("carworld_userdetails",$userprofile);
      $row = $q->num_rows();
      if($row)
      {
        $userdata = $q->row_array();
        return $userdata;
      }
    }
    function update_data($set,$where)
    {
      $this->db->update("carworld_userdetails",$set,$where);
      redirect("user_profile");
    }
  }
?>
