<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Dashboard extends CI_Controller



{



    public function __construct()

    {

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/Login');
         }
    }



    public function index()

    {

        $this->load->view("admin/index");

    }



   

}