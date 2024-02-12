
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('admin/AdminModel');
        if (!$this->session->userdata('dv_id')) {
            redirect('VendorPanel/Login');
        }
    }

    public function index() {
        // echo Get_Vendor_detail();
        $this->load->view('VendorPanel/index');
    }
}
