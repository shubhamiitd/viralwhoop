<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {
  public	function __construct()
    {
      parent::__construct();
      $this->load->database();
          $this->posts = "posts";
    }
  
  function get_all_posts() {
    $this->db->select('*');
    $query = $this->db->get($this->posts);
    $result = $query->result_array();
    return $result;
  }

  function get_posts_by_category($type) {
    $this->db->select('*');
    if ($type=="all"){
  }
  else{
    $this->db->where("category", $type);
  }
    $query = $this->db->get($this->posts);
    $result = $query->result_array();
    return $result;
  }
}
?>
