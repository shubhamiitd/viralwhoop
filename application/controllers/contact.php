<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }

    public function index()
    {

        $this->load->view('contact');
    }

}
