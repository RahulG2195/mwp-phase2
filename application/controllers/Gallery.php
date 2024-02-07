<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('VendorModel');
    }
    public function index()
    {
        $data['trusted_vendor'] = $this->VendorModel->Trusted_Vendor();
        $this->load->view('front/pages/gallery', $data);
    }

    function Gallery_detail() {
        $this->load->view('front/pages/gallery_detail');
    }

}
