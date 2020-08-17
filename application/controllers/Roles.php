<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data = array('title' =>"Roles" , );
    $this->load->view('Layouts/head', $data);
    $this->load->view('Roles/index');
    $this->load->view('Layouts/footer');
  }

}
