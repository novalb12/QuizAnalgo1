<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function index(){
        $id_vote = $this->input->get('id_vote');
        $this->load->model('m_vote');
        $data['id_vote'] = $this->m_vote->get($id_vote);
		$this->load->library('session');
		$this->session->set_userdata($data);
        $this->load->view('v_homepage',$data);  
    }
    public function login(){
        $id_user = $this->input->get('id_user');
        $this->load->model('m_user');
        $data['id_user'] = $this->m_user->get($id_user);
        $this->load->view('v_login',$data);  
    }
    public function profile(){
        $this->load->view('v_profile');  
    }
    public function register(){
        $this->load->view('v_register');  
    }
    public function vote(){
        $id_vote = $this->input->get('id_vote');
        $this->load->model('m_vote');
        $data['id_vote'] = $this->m_vote->get($id_vote);
        $this->load->view('v_vote',$data);  
    }
}
?>
