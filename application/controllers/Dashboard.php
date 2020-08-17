<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!$this->session->userdata("login")) {
     redirect(base_url());
    }
  }

  public function index()
  {
    $title="Principal";
    $head = array('title' => $title,'active'=>"active" );
    $this->load->view('Layouts/head',$head);
    $this->load->view('Dashboard/principal');
    $this->load->view('Layouts/footer');
  }

}
