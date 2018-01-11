<?php

class Autos_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

    public function get_autos($auto_id = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
			$this->db->limit($limit, $offset);
		}

		if($auto_id === FALSE){
			$this->db->join('chauffeur','chauffeur.chauffeur_id = auto.chauffeur_id');
			$query = $this->db->get('auto');
			return $query->result_array();
        }
		
		$this->db->join('chauffeur','chauffeur.chauffeur_id = auto.chauffeur_id');
		$query = $this->db->get_where('auto', array('auto_id' => $auto_id));
			return $query->row_array();
	}

	public function create_auto(){

		$data = array(
			'auto_id'		=> $this->input->post('auto_id'),
			'onderhoud'		=> $this->input->post('onderhoud'),
		    'keuring'		=> $this->input->post('keuring'),
		    'nummerplaat'	=> $this->input->post('nummerplaat'),
		    'chauffeur_id'	=> $this->input->post('chauffeur_id')
		);
		return $this->db->insert('auto', $data);
	}

	public function delete_auto(){
		  
		$this->db->where('auto_id', $this->input->post('auto_id'));
    	$this->db->delete('auto');
    	return true;
    }

    public function update_auto(){

    	$data = array(
			'auto_id'		=> $this->input->post('auto_id'),
			'onderhoud'		=> $this->input->post('onderhoud'),
		    'keuring'		=> $this->input->post('keuring'),
		    'nummerplaat'	=> $this->input->post('nummerplaat'),
		    'chauffeur_id'	=> $this->input->post('chauffeur_id')
		 );

    	$this->db->where('auto_id', $this->input->post('auto_id'));	
		return $this->db->update('auto', $data);
	}

	public function get_chauffeurs(){
		$this->db->order_by('naam');
		$query = $this->db->get('chauffeur');
		return $query->result_array();
	}

	public function get_posts_by_catagory($catagory_id){
   $this->db->order_by('posts.id', 'DESC');
   $this->db->join('catagories','catagories.id = posts.catagory_id');
			$query = $this->db->get_where('posts', array('catagory_id' => $catagory_id));
			return $query->result_array();
	}
}


?>