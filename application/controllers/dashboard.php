<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
    $this->load->library('tank_auth');
    $this->load->model('user_data_model');
    $this->load->model('post_model');
		$q=$this->tank_auth->get_user_id();
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['user_details2']= $this->tank_auth->get_user_details2($q);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/admin/header', $data);

	}

	function index()
	{
  if ($this->tank_auth->is_logged_in())
				{

					$this->load->model('earning_model');
					$this->earning_model->update_clicks($this->tank_auth->get_user_id());
					$data['earning']=$this->earning_model->total_user_earning($this->tank_auth->get_user_id());

          $this->load->view('dashboard/income',$data);
				}
					else{redirect('/auth/login');}
	}

		function income(){

			if ($this->tank_auth->is_logged_in()){

								$this->load->model('earning_model');
								$this->earning_model->update_clicks($this->tank_auth->get_user_id());
								$data['earning']=$this->earning_model->total_user_earning($this->tank_auth->get_user_id());

							$this->load->view('dashboard/income',$data);}
							else{redirect('/auth/login');}

		}

		function payments(){

			$q=$this->tank_auth->get_user_id();

			$data['user_earlier_payments']= $this->tank_auth->get_user_earlier_payments($q);
		  if ($this->tank_auth->is_logged_in())
		          $this->load->view('dashboard/payments',$data);
							else{redirect('/auth/login');}
		}

		function details(){

					$this->load->helper(array('form', 'url'));
		  if ($this->tank_auth->is_logged_in()){

				$q=$this->tank_auth->get_user_id();
			$data['user_details2']= $this->tank_auth->get_user_details2($q);
			$data['user_details1']= $this->tank_auth->get_user_details1($q);
			$this->load->view('dashboard/details', $data);}
							else{redirect('/auth/login');}

		}

		function posts(){

			if ($this->tank_auth->is_logged_in()){

				$q=$this->tank_auth->get_user_id();

    	$data['view'] = 'dashboard/posts';
				$data['user_id']	= $this->tank_auth->get_user_id();
			$data['posts']= $this->post_model->get_all_posts();
							$this->load->view('dashboard/posts', $data);}
							else{redirect('/auth/login');}

		}

}?>
