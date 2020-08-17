<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!$this->session->userdata("login")) {
     redirect(base_url());

    }
    $this->load->model(array('User_model'));
  }

  function index()
  {
    $datos = array('title' =>"Usuarios",);
    $this->load->view('Layouts/head',$datos);
    $this->load->view('User/index');
    $this->load->view('Layouts/footer');

  }

  public function userslist()
  {
    $datos = array('title' =>"Lista de Usuarios" , );
    //Mandamos a llamar los datos desde data. y inicializamos el modelo.
    $data = array(
      'users' =>$this->User_model->GetUsers() ,
      'roles'=>$this->User_model->GetRoles(),);
    $this->load->view('Layouts/head',$datos);
    $this->load->view('User/list',$data);
    $this->load->view('Layouts/footer');

  }

  public function create()
  {
    $FullName=$this->input->post('FullName');
    $Title=$this->input->post('Title');
    $Email=$this->input->post('Email');
    $Login=$this->input->post('Email');
    $Password=$this->input->post('Password');
    $RolId=$this->input->post('RolId');
    $Status=$this->input->post('Status');

    $datos = array(
      'FullName' =>$FullName ,
      'Title'=>$Title,
      'Email'=>$Email,
      'Login'=>$Login,
      'Password'=>$Password,
      'Status'=>$Status
    );

    $this->User_model->CreateUser($datos);
    $currentUser=$this->User_model->GetUser($Email);
    $data = array(
      'UserId' =>$currentUser->Id ,
      'RolId'=>$RolId);

    $this->User_model->AddRoles($data);

    redirect(base_url().'User/userslist');
  }
  public function details($id)
  {
    $datos = array('title' =>"Detalle de Usuario" , );
    $data = array('user' =>$this->User_model->GetUserId($id) , );

    $this->load->view('Layouts/head', $datos);
    $this->load->view('User/details', $data);
    $this->load->view('Layouts/footer');
  }

}
