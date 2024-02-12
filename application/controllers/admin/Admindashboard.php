<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admindashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
    public function index()
    {
        if (!$this->session->userdata('user_id')) {

            $loginuserdata["user"]=$this->LoginModel->getdashboarduserdata();
            //var_dump($loginuserdata);exit;
            $this->load->view("admin/admin-dashboard",$loginuserdata);
        }
        else{
            redirect('AdminLogin');
        }

        

    }

}