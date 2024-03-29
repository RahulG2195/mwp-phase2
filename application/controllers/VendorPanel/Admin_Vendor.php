<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Vendor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('VendorPanel/VendorModel');
    }

    public function index() {
        $this->list_data();
    }

    function Bridal_Wear() {
        $data['bridal_wear'] = $this->VendorModel->Get_Bridal_Data();
        $this->load->view('VendorPanel/vendor/bridal_wear', $data);
    }

    function Jewellery() {
        $data['Jewellery'] = $this->VendorModel->Get_Jewellery();
        $this->load->view('VendorPanel/vendor/jewellery', $data);
    }
    function Catering() {
        $data['Catering'] = $this->VendorModel->Get_Catering();
        $this->load->view('VendorPanel/vendor/catering', $data);
    }
    function Decoration() {
        $data['Decoration'] = $this->VendorModel->Get_Decoration();
        $this->load->view('VendorPanel/vendor/decoration', $data);
    }
    function Gift() {
        $data['Gift'] = $this->VendorModel->Get_Gift();
        $this->load->view('VendorPanel/vendor/gift', $data);
    }
    function Groom_wear() {
        $data['Groom_wear'] = $this->VendorModel->Get_Groom_wear();
        $this->load->view('VendorPanel/vendor/groom_wear', $data);
    }
    function Inivitation() {
        $data['Inivitation'] = $this->VendorModel->Get_Inivitation();
        $this->load->view('VendorPanel/vendor/inivitation', $data);
    }
    function MakeUp() {
        $data['MakeUp'] = $this->VendorModel->Get_MakeUp();
        $this->load->view('VendorPanel/vendor/makeUp', $data);
    }
    function Mehendi() {
        $data['Mehendi'] = $this->VendorModel->Get_Mehendi();
        $this->load->view('VendorPanel/vendor/mehendi', $data);
    }
    function Photography() {
        $data['Photography'] = $this->VendorModel->Get_Photography();
        $this->load->view('VendorPanel/vendor/photography', $data);
    }
    function Venue() {
        $data['Venue'] = $this->VendorModel->Get_Venue();
        $this->load->view('VendorPanel/vendor/venue', $data);
    }


    function Vendor_all_Data($tab, $id) {
        $data['vendor_data'] = $this->VendorModel->Fetch_single_data($tab, $id);
        $this->load->view('VendorPanel/vendor/view_all_data', $data);
    }

    function Status_update(){
        $link = $this->input->get('tab');
        $statusString = $this->input->get('status');
         $statusInt = (int)$statusString;

        $id = $this->input->get('vid');
        if ($statusInt == 0) {
			$this->session->set_flashdata('error', 'Vendor has been Deactivated');
		} else {
            
			$this->session->set_flashdata('success', 'Vendor has been Activated');
		}
        // echo $new_status;exit;
		$data = array('vendor_status' => $statusInt);
		$this->db->where('dv_id', $id);
		$this->db->update('default_vendor_inp', $data);
        
        if($link == 'bridal'){
            redirect('VendorPanel/Admin_Vendor/Bridal_Wear');
        }elseif($link == 'jewel'){
            redirect('VendorPanel/Admin_Vendor/Jewellery');
        }elseif($link == 'cater'){
            redirect('VendorPanel/Admin_Vendor/Catering');
        }elseif($link == 'decor'){
            redirect('VendorPanel/Admin_Vendor/Decoration');
        }elseif($link == 'gift'){
            redirect('VendorPanel/Admin_Vendor/Gift');
        }elseif($link == 'groom'){
            redirect('VendorPanel/Admin_Vendor/Groom_wear');
        }elseif($link == 'iniv'){
            redirect('VendorPanel/Admin_Vendor/Inivitation');
        }elseif($link == 'make'){
            redirect('VendorPanel/Admin_Vendor/MakeUp');
        }elseif($link == 'mehen'){
            redirect('VendorPanel/Admin_Vendor/Mehendi');
        }elseif($link == 'photo'){
            redirect('VendorPanel/Admin_Vendor/Photography');
        }elseif($link == 'venue'){
            redirect('VendorPanel/Admin_Vendor/Venue');
        }
        
    }
}
