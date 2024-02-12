<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminloginModel');
        
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if($this->form_validation->run() == TRUE)
        {
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $result = $this->AdminloginModel->getuser($username,$password);
            if(!empty($result))
            {    
                $this->session->set_userdata('user_name', $result->name);
                redirect('admin/Admindashboard');
            }
            else{
                $this->session->set_flashdata('err_msg', 'Invalid Credentials');
                $this->load->view('admin/admin-login');
            }

        }
        else
        {
            $this->load->view('admin/admin-login');
        }

        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/AdminLogin');
    }
 
    public function forgotpassword()
    {

        $this->form_validation->set_rules('emailid', 'email id ', 'required|trim');

        if($this->form_validation->run() == TRUE)
        {
            $email = $this->input->post('emailid');
            $findemail = $this->AdminloginModel->ForgotPassword($email); 
            
            if(!empty($findemail))
            {
                $this->AdminloginModel->sendpassword($findemail);        
            }
            else
            {
                $this->session->set_flashdata('err_msg',' Email not found!');
                redirect(base_url().'admin/AdminLogin/forgotpassword','refresh');
            }
            
        }
        else
        {
            $this->load->view('admin/forgot-password');
        }




        


        
    }



}
