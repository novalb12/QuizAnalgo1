<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function index(){
        $id_vote = $this->input->get('id_vote');
        $this->load->model('m_vote');
        $data['response'] = $this->m_vote->get($id_vote);
        $this->load->view('homepage',$data);  
    }
    public function login(){
        $id_user = $this->input->get('id_user');
        $this->load->model('m_user');
        $data['response'] = $this->m_user->get($id_user);
        $this->load->view('login',$data);  
    }
    public function profile(){
        $this->load->view('profile');  
    }
    public function register(){
        $this->load->view('register');  
    }
    public function vote(){
        $id_vote = $this->input->get('id_vote');
        $this->load->model('m_vote');
        $data['response'] = $this->m_vote->get($id_vote);
        $this->load->view('vote');  
    }
}
?>