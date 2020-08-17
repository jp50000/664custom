<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetSupplier()
  {
    return $this->db->get('Suppliers')->result();
  }

  public function AddSupplier($data)
  {
    return $this->db->insert('Suppliers', $data);
  }

  public function GetSupplierId($id)
  {
    $this->db->where('Id', $id);
    return $this->db->get('Suppliers')->row();
  }

  public function UpdateSupplier($id,$datos)
  {
    $this->db->where('Id', $id);
    return $this->db->update('Suppliers', $datos);
  }

  public function Delete($id)
  {
    $this->db->where('Id', $id);
    return  $this->db->delete('Suppliers');
  }
}
