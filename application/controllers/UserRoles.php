<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserRoles extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data = array('title' =>"Roles Por Usuarios" , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('UserRoles/index');
    $this->load->view('Layouts/footer');
  }

}
