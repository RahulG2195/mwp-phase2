<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class VendorModel extends CI_Model
{
  public $table = 'admin';
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function GetList($cond = array())
  {

    if (!empty($cond)) {
      $this->db->where($cond);
    }

    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  function GetData($cond = array())
  {
    if (!empty($cond)) {
      $this->db->where($cond);
      $this->db->select('*');
      $this->db->from($this->table);
      $query = $this->db->get();
      $result = $query->result_array();
      if (!empty($result)) {
        $result = $result[0];
      }
      return $result;
    }
  }

  // fetch all vendor of all cat in admin panel
  function Vendor_Data()
  {
          $this->select('
        default_vendor_inp.*, 
        bridal_jewellery.*, 
        bridal_wear.*, 
        catering.*, 
        decorator.*, 
        gift.*, 
        groom_wear.*, 
        inivitations.*, 
        make_up.*, 
        mehendi.*, 
        photography.*, 
        venue.*, 
        master_category.category_id, master_category.name, master_category.is_deleted,
        master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_sub_category.is_deleted
        ');
        $this->db->from('default_vendor_inp');
        $this->db->join('');
        $query = $this->db->get();
        return $query->result_array();
      
  }

function Get_Bridal_Data() {
  $this->db->select('bridal_wear.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('bridal_wear');
  $this->db->join('default_vendor_inp', 'bridal_wear.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}

function Get_Jewellery() {
  $this->db->select('bridal_jewellery.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('bridal_jewellery');
  $this->db->join('default_vendor_inp', 'bridal_jewellery.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Catering() {
  $this->db->select('catering.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('catering');
  $this->db->join('default_vendor_inp', 'catering.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Decoration() {
  $this->db->select('decorator.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('decorator');
  $this->db->join('default_vendor_inp', 'decorator.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Gift() {
  $this->db->select('gift.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('gift');
  $this->db->join('default_vendor_inp', 'gift.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Groom_wear() {
  $this->db->select('groom_wear.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('groom_wear');
  $this->db->join('default_vendor_inp', 'groom_wear.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Inivitation() {
  $this->db->select('inivitations.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('inivitations');
  $this->db->join('default_vendor_inp', 'inivitations.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_MakeUp() {
  $this->db->select('make_up.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('make_up');
  $this->db->join('default_vendor_inp', 'make_up.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Mehendi() {
  $this->db->select('mehendi.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('mehendi');
  $this->db->join('default_vendor_inp', 'mehendi.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Photography() {
  $this->db->select('photography.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('photography');
  $this->db->join('default_vendor_inp', 'photography.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}
function Get_Venue() {
  $this->db->select('venue.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('venue');
  $this->db->join('default_vendor_inp', 'venue.vin_id = default_vendor_inp.dv_id', 'left');
  $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
  $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
  $query = $this->db->get();
  return $query->result_array();
}

function Fetch_single_data($tab, $id) {
  if($tab == 'bw'){
    $this->db->select('bridal_wear.*, default_vendor_inp.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('bridal_wear');
    $this->db->join('default_vendor_inp', 'bridal_wear.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'bj'){

  $this->db->select('bridal_jewellery.*, default_vendor_inp.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('bridal_jewellery');
  $this->db->join('default_vendor_inp', 'bridal_jewellery.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'ct'){

  $this->db->select('catering.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('catering');
  $this->db->join('default_vendor_inp', 'catering.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'dc'){

  $this->db->select('decorator.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('decorator');
  $this->db->join('default_vendor_inp', 'decorator.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'gf'){

  $this->db->select('gift.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('gift');
  $this->db->join('default_vendor_inp', 'gift.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'gw'){
  
  $this->db->select('groom_wear.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('groom_wear');
  $this->db->join('default_vendor_inp', 'groom_wear.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'in'){

  $this->db->select('inivitations.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('inivitations');
  $this->db->join('default_vendor_inp', 'inivitations.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'mu'){

  $this->db->select('make_up.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('make_up');
  $this->db->join('default_vendor_inp', 'make_up.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'me'){

  $this->db->select('mehendi.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('mehendi');
  $this->db->join('default_vendor_inp', 'mehendi.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 'ph'){

  $this->db->select('photography.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('photography');
  $this->db->join('default_vendor_inp', 'photography.vin_id = default_vendor_inp.dv_id', 'left');

}elseif($tab == 've'){

  $this->db->select('venue.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
  $this->db->from('venue');
  $this->db->join('default_vendor_inp', 'venue.vin_id = default_vendor_inp.dv_id', 'left');

}

$this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
$this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
$this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
$this->db->where('dv_id', $id);
$query = $this->db->get();
// echo $this->db->last_query();
return $query->result_array();
  
}
  function InserData($data)
  {
    $this->db->insert($this->table, $data);
    $id = $this->db->insert_id();
    return $id;
  }

  function UpdateData($cond = array(), $data)
  {
    $this->db->where($cond);
    $this->db->update($this->table, $data);
    $id = $this->db->affected_rows();
    return $id;
  }

  function DeleteData($cond = array(), $data)
  {
    if (!empty($cond)) {
      $this->db->where($cond);
    }
    $this->db->update($this->table, $data);
    $affected = $this->db->affected_rows();
    return $affected;
  }

  public function Get_vendor_detail($id) {
    $this->db->select('category');
    $this->db->from('default_vendor_inp');
    $this->db->where('dv_id', $id);
    return $this->db->get()->row_array();
  }
}
