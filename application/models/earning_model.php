<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Earning_model extends CI_Model
{

  public	function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->main_table = "clicks";
  }

  public	function create_post_user($data){
    $this->db->select("post_id,user_id");
    $this->db->where("post_id", $data['post_id']);
    $this->db->where("user_id", $data['user_id']);
    $query = $this->db->get($this->main_table);
    $result = $query->result_array();
    if (!sizeof($result)) {
          $this->db->insert($this->main_table, array(
                  "post_id" => $data['post_id'],
                  "user_id" =>$data['user_id'] ,
                  "sessions" => '0',
                  "amount" => '0'
              ));}
              Return NULL;
  }
  public function update_clicks($userid){
    $this->load->helper('analytics');
    $this->db->select("post_id,user_id");
    $this->db->where("user_id", $userid);
    $query = $this->db->get($this->main_table);
    $result = $query->result_array();
    if (sizeof($result)) {
      $i=0;
      while($i<sizeof($result)){
        $postid=$result[$i]['post_id'];
        $analytics = getService("bakfeed@bakfeed-140517.iam.gserviceaccount.com", "bakfeed-d2a0e9238c68.p12");
      $profile = getFirstProfileId($analytics);
      $results = getResults($analytics, $profile,$postid,$userid);
      $sessions=$results['totalsForAllResults']['ga:sessions'];
      $amount=$sessions/130;
      $data = array(
         'sessions' => $sessions,
         'amount' => $amount

      );

      $this->db->where('user_id', $userid);
      $this->db->where('post_id', $postid);
      $this->db->update($this->main_table, $data);
      $i=$i+1;
    }
          Return NULL;
          }
      Return NULL;

  }

   public function total_user_earning($userid){

     $this->db->select("post_id,user_id,sessions,amount");
     $this->db->where("user_id", $userid);
     $query = $this->db->get($this->main_table);
     $result = $query->result_array();
       if (sizeof($result)){
     $i=0;
     $totalsessions=0;
     $totalamount=0;
     while($i<sizeof($result)){
       $totalsessions=$totalsessions+$result[$i]['sessions'];
      $totalamount=$totalamount+$result[$i]['amount'];

       $i=$i+1;
     }
     $data = array(
        'sessions' => $totalsessions,
        'amount' => $totalamount

     );
         return $data;
        }
        $data = array(
           'sessions' => 0,
           'amount' => 0

        );
        return $data;

   }

}
?>
