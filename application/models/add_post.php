<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Add_post extends CI_Model
{

				public	function __construct()
					{
						parent::__construct();
						$this->load->database();
				    $this->main_table = "posts";
					}

          public function add_post1($meta,$link,$category,$postid){
            $this->db->insert($this->main_table, array(
                    "post_id" => $postid,
                    "category" => $category,
                    "title" => $meta->title,
                    "image-link" => $meta->image_url,
                    "post-link" => $link
                ));
                  Return NULL;


          }
}
?>
