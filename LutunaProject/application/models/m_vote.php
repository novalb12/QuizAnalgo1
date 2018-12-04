<?php
class m_vote extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get($id_vote = null){
        if($id_vote != null){
            $query = $this->db->get_where('tb_vote',['id_vote' => $id_vote]);
            return $query->result_array();
        }

        $query = $this->db->get('tb_vote');
        return $query->result_array();
    }
}
?>