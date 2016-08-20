<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Edit_detail extends CI_Model
{

  public	function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->main_table = "users_data";
  }

  public function edit_detail($bank_acc_no,$bank_profile_name,$bank_ifsc,$pan_no,$id)
  {
            $data = array(
               'account_no' => $bank_acc_no,
               'account_holder_name' => $bank_profile_name,
               'bank_ifsc' => $bank_ifsc,
               'pancard_no' => $pan_no

            );

            $this->db->where('user_id', $id);
            $this->db->update($this->main_table, $data);

            Return NULL;


  }
}
?>
