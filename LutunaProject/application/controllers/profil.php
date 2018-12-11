<?php
class User extends CI_Controller {
    function users() {
        parent::user();
    }
	function index($id = null) {
		if($id == null) {
		  redirect('/', 'refresh');      
		}
		else {
			$data['title']  = 'User Page';
			$data['result'] = $this->users_model->get_user_info();
			$data['id'] = $id; 
			$data['main_content'] = "main/profile_view" ;
			$this->load->view('home',$data);
		}
	}
}
?>
