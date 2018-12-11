<?php 
 
class Register extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_register');
 
	}
 
	function index(){
		$this->load->view('v_register');
	}
	function  
}
