<?php

class Edit_details extends CI_Controller {
  public	function __construct()
    {
      parent::__construct();

      $this->load->helper("form");
      $this->load->helper("url");
      $this->load->model("edit_detail");
    }



public function set_details(){

      $value= $this->input->post('bank_acc_no');
      $value1=$this->input->post('bank_profile_name');
      $value2=$this->input->post('bank_ifsc_code');
      $value3=$this->input->post('pan_no');
      $value4=$this->input->post('user_id');
      $this->edit_detail->edit_detail($value,$value1,$value2,$value3,$value4);
      redirect("dashboard/details");

}

}


?>
