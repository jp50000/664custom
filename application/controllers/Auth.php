<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model(array('User_model'));

  }

  public function index()
  {

    if ($this->session->userdata("login")) {

      redirect(base_url().'Dashboard');

    }else{

      $this->load->view('Auth/index');
    }

  }

  public function login()
  {

      $username=$this->input->post('username');
      $password=$this->input->post('password');

      $data=$this->User_model->login($username,$password);

      if (!$data) {
        $this->session->set_flashdata("error","El Usuario o la Contraseña son incorrectos");
        redirect(base_url());
      }
      elseif($username=$data->Login) {
        $ress = array('id' =>$data->Id ,
        'username'=>$data->Login,
         'email'=>$data->Email,
        'FullName'=>$data->FullName,
        'title'=>$data->Title,
        'RolName'=>$data->RolName,
       'login'=>TRUE );
      $this->session->set_userdata($ress);
      redirect(base_url()."Dashboard");
      }


  }

  public function Logout()
  {
      $this->session->sess_destroy();
      redirect(base_url());
  }


}
