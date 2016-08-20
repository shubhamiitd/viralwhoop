
<?php
class Get_posts extends CI_Controller {
    function __construct()
        {
            parent::__construct();
        }

    function addtoearning()
        {
            $this->load->model('earning_model');
            $data = array(
                'post_id'  => $this->input->post('postid'),
                'user_id'  => $this->input->post('userid')

            );
            $this->earning_model->create_post_user($data);
        }

}
?>
