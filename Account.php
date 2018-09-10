<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('accountModel');
    }

	public function index()
	{
		$this->layout->set_titre('Projet - Compte');

		$this->layout->ajouter_js('register');

		$this->layout->ajouter_css('account');

		$this->layout->views('account_view')
				->view('account_view');
   	}

	//Fonction de connexion
	public function login()
	{
  		$user_login=array(
  			'pseudo'=>$this->input->post('user_pseudo'),
  			'password'=>$this->input->post('user_password')
 		);

    	$data=$this->accountModel->login_user($user_login['pseudo'],$user_login['password']);

      	if($data)
      	{
			$this->session->set_userdata($data);
        	redirect('/info');
		}
      	else
	  	{
        	$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        	redirect('/account');
		}
	}

	//Fonction d'enregistrement
	public function register()
	{
		$user=array(
      		'pseudo'=>$this->input->post('user_pseudo'),
      		'email'=>$this->input->post('user_email'),
      		'password'=>password_hash($this->input->post('user_password'), PASSWORD_DEFAULT),
			'date_inscription'=>date("Y-m-d")
        );

  		$this->accountModel->register_user($user);
  		$this->session->set_flashdata('success_msg', 'Registered successfully.');
  		redirect('/');
	}

	//Fonction de deconnexion
	public function logout()
	{
 		$this->session->sess_destroy();
  		redirect('/', 'refresh');
	}
}
