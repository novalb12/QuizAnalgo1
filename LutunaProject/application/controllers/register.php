<?php 
 
class Register extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_register');
 
	}
 
	function index(){
		$this->load->view('v_register');
	}
	function data(){
		if(isset($_POST['register'])){
		echo $_POST['ID'];
			$data=array(
					'id_user'=>'4',
					'userid'=>$_POST['ID'],
					'password'=>base64_encode($_POST['psw'])
			);
			$this->m_register->inputdata($data);
		}

	}
}
