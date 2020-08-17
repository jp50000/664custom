<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!$this->session->userdata("login")) {
     redirect(base_url());

    }
  }

  function index()
  {
    $datos = array('title' =>"Reportes" , );
    $this->load->view('Layouts/head',$datos);
    $this->load->view('Reportes/index');
    $this->load->view('Layouts/footer');
  }

}
