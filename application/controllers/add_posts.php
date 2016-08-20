<?php

class Add_posts extends CI_Controller {
  public	function __construct()
    {
      parent::__construct();

      $this->load->helper("form");
      $this->load->helper("url");
      $this->load->model("add_post");
    }



public function add_post(){

      $this->load->helper("post");
      $value3= $this->input->post('wpid');
      $value1=$this->input->post('post_link');
      $value2=$this->input->post('category');
      $value=scrapeURL($value1);
      print_r($value->title);
      $this->add_post->add_post1($value,$value1,$value2,$value3);
      redirect("admin/add_posts");

}

}


?>
