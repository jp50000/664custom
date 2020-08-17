<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function login($email,$password)
  {


    $this->db->select('u.*,r.*');
    $this->db->from('Users u');
    $this->db->join('UserRoles ur', 'u.Id = ur.UserId');
    $this->db->join('Roles r', 'ur.RolId = r.Id');
    $this->db->where('u.Login', $email);
    $this->db->where('u.Password', $password);
    $result=$this->db->get();
    if ($result->num_rows()> 0) {
      return $result->row();
    }
    else {
      return false;
    }
  }

  public function GetUsers()
  {
    //Esta funcion llama los datos a la base de datos,
    //Contiene dos join y contiene una lista de o arreglo de datos
    //El asterisco dice que me voy a traer todos los datos.
    $this->db->select('u.*,r.RolName');
    $this->db->from('Users u');
    $this->db->join('UserRoles ur', 'u.Id = ur.UserId', 'inner');
    $this->db->join('Roles r', 'ur.RolId = r.Id', 'inner');
    return $this->db->get()->result();
  }

  public function GetRoles()
  {
    //vamos a traer los roles de la bd
    $this->db->select('r.*');
    return $this->db->get('Roles r')->result();
  }

  public function CreateUser($datos)
  {
    return $this->db->insert('Users', $datos);
  }
//Este user no tiene S el primero si
  public function GetUser($email)
  {
    $this->db->select('u.*');
    $this->db->from('Users u');
    $this->db->where('u.Email', $email);
    return $this->db->get()->row();
  }

  public function GetUserId($id)
  {
    $this->db->select('u.*');
    $this->db->from('Users u');
    $this->db->where('u.Id', $id);
    return $this->db->get()->row();
  }

  public function AddRoles($data)
  {
    return  $this->db->insert('UserRoles', $data);
  }
}
