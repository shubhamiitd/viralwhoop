<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
    $this->load->helper('url');
    $this->load->library('tank_auth');
    $this->load->model('user_data_model');
		$q=$this->tank_auth->get_user_id();
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$data['user_details2']= $this->tank_auth->get_user_details2($q);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/admin/header', $data);

	}

	public function index()
	{
	$q=$this->tank_auth->get_user_id();
	$data['all_users']=$this->tank_auth->get_all_users();
	$data['user_details2']= $this->tank_auth->get_user_details2($q);
  if ($this->tank_auth->is_logged_in()  && $data['user_details2']['admin']==1 ){
          $this->load->view('dashboard/admin/users');}
					else{redirect('/auth/login');}
	}

		public function users()
		{
		$q=$this->tank_auth->get_user_id();
			$data['pendingusers']=$this->user_data_model->get_pending_users();
			$data['approvedusers']=$this->user_data_model->get_approved_users();
			$data['all_users']=$this->user_data_model->get_all_users();
			$data['user_details2']= $this->tank_auth->get_user_details2($q);
			if ($this->tank_auth->is_logged_in()  && $data['user_details2']['admin']==1)
							$this->load->view('dashboard/admin/users',$data);
							else{redirect('/auth/login');}

		}

		public function due_payments()
		{
		$q=$this->tank_auth->get_user_id();
		$data['user_details2']= $this->tank_auth->get_user_details2($q);

		  if ($this->tank_auth->is_logged_in() && $data['user_details2']['admin']==1 )
		          $this->load->view('dashboard/admin/due-payments');
							else{
						          redirect('/auth/login');
										}
		}

	public 	function add_posts()
	{
			$this->load->helper(array('form', 'url'));
	$q=$this->tank_auth->get_user_id();
	$data['user_details2']= $this->tank_auth->get_user_details2($q);

		  if ($this->tank_auth->is_logged_in()  && $data['user_details2']['admin']==1 )
		          $this->load->view('dashboard/admin/add_posts');
			else{
				redirect('/auth/login');
			}

		}

}?>
