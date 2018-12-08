<?php
class m_user extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get($id_user = null){
        if($id_user != null){
            $query = $this->db->get_where('tb_user',['id_user' => $id_user]);
            return $query->result_array();
        }

        $query = $this->db->get('tb_user');
        return $query->result_array();
    }
}
?>