<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VendorPanel/LoginModel');
        
    }

    public function index()
    {
        if ($this->session->userdata('dv_id')) {
            redirect('VendorPanel/Vendor_Dashboard');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('Username', 'Username', 'required|trim');
            $this->form_validation->set_rules('Password', 'Password', 'required|trim');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post("Username");
                $password = md5($this->input->post("Password"));

                $data["password"] = $this->LoginModel->getpassword($username);
                // pr($data["password"], '');exit;

                if ($data["password"][0]["password"] == $password) {

                    $result["user"] = $this->LoginModel->getlogindata($username, $password);

                    if (!empty($result)) {

                        $this->session->set_userdata('user_name', $result["user"]["user_name"]);
                        $this->session->set_userdata('dv_id', $result["user"]["dv_id"]);
                        // $this->session->set_userdata('role', $result["user"]["role"]);

                        redirect('VendorPanel/Vendor_Dashboard');
                    } else {

                        $this->session->set_flashdata('err_msg', 'Invalid Credentials');

                        $this->load->view('VendorPanel/login');
                    }
                }else{
                    $this->session->set_flashdata('err_msg', 'Please Enter Valid Password');
                    $this->load->view('VendorPanel/login');
                }
            } else {
                $this->session->set_flashdata('err_msg', 'Someting Went wrong');
                $this->load->view('VendorPanel/login');
            }
        } else {
            $this->load->view('VendorPanel/login');
        }
        // $this->load->view('admin/login');
    }

    public function update_password_page(){
        $this->load->view('VendorPanel/resetpassword');
    }

    public function ResetPwd(){

        $id = $this->input->post('ven_id');
        $Password = $this->input->post('Password');
        $cPassword = $this->input->post('cPassword');
        // if id is avail then only it will reset 
        if(isset($id) && $id !== ''){
            // match password and cpassword 
            if($Password === $cPassword){

                $data = array('password' => md5($Password));

                $pwd_update = $this->LoginModel->ResetPassword($id, $data);
                // echo $pwd_update;exit;
                if($pwd_update){

                    $this->session->set_flashdata('success_msg', 'Password has been Reset. Please login again.');
                    $this->session->unset_userdata('dv_id');
                    redirect('VendorPanel/Login');

                }else{

                    $this->session->set_flashdata('err_msg', 'Something went wrong');
                    redirect('VendorPanel/Login/update_password_page');

                }
            }else{

                $this->session->set_flashdata('err_msg', 'Password doest Match');
                redirect('VendorPanel/Login/update_password_page');

            }

        }else{

            $this->session->set_flashdata('err_msg', 'There was an issue! You may have logout, please login again to reset password');
            $this->load->view('VendorPanel/login');

        }

    }
    public function logout()
    {
        // echo 1;exit;
        $this->session->sess_destroy();

        redirect('VendorPanel/Login');
    }
}
