<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetServices()
  {
    $this->db->select('s.*,sp.Id SupplierId,sp.Name Supplier');
    $this->db->from('Services s');
    $this->db->join('Suppliers sp', 's.SupplierId = sp.Id');
    return $this->db->get()->result();
  }

  public function AddServices($data)
  {
    return $this->db->insert('Services', $data);
  }
  public function GetServicebyId($id)
  {

    $this->db->select('s.*,sp.Name Supplier');
    $this->db->join('Suppliers sp', 's.SupplierId = sp.Id', 'inner');
    $this->db->where('s.Id', $id);
    $this->db->from('Services s');
    return $this->db->get()->row();

  }

  public function UpdateServices($id,$data)
  {
    $this->db->where('Id', $id);
    return $this->db->update('Services', $data);
  }

  public function Delete($id)
  {
      $this->db->where('Id', $id);
      return $this->db->delete('Services');
  }
}
