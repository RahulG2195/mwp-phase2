<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getlogindata($username, $password)
    {
        $this->db->select('dv_id, vendor_uid, password, user_name');
        $this->db->from('default_vendor_inp');
        $this->db->where(array('user_name' => $username, 'password' => $password));

        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }else{
            return false;
        }

    }


    public function ResetPassword($id, $data){
        // echo $id;exit;
        // pr($data, '');exit;
        $this->db->where('dv_id', $id);
        $this->db->update('default_vendor_inp',$data);
        $ids = $this->db->affected_rows();
        // if($this->db->error()){
        //     return $this->db->error();
        // }
        // echo $this->db->last_query();exit;
        return $ids;
    }

    public function getpassword($username)
    {
      $this->db->where('user_name', $username);
      $this->db->from('default_vendor_inp');
      $query = $this->db->get();
    //   echo 1;
    //   echo $this->db->last_query();
      return $query->result_array();
    }

}
