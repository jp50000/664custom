<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function GetCar()
  {
    return $this->db->get('Car')->result();

  }
  public function GetCarbyiD($id)
  {
    $this->db->where('Id', $id);
    return $this->db->get('Car')->row();

  }

}
