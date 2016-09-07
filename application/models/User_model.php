
<?php
class User_model extends CI_Model {

    public function __construct(){
            $this->load->database();
    }

    public function get_user($id = FALSE){
        if ($id === FALSE){
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $query = $this->db->get_where('user', array('id' => $id));
		//print_r($query);exit;
        return $query->row_array();
	}

	public function set_user(){
		
	    $data = array(
	        'username' => $this->input->post('username'),
	        'full_name' => $this->input->post('full_name'),
	        'email' => $this->input->post('email')
	    );

	    return $this->db->insert('user', $data);
	}

    public function update_user(){
		$id=$this->uri->segment('3');
		//$id=$_REQUEST['id'];
	//	echo $this->uri->segment('3');exit;
        $data = array(
            'username' => $this->input->post('username'),
            'full_name' => $this->input->post('full_name'),
            'email' => $this->input->post('email')
        );

        $this->db->where('id', $id);
        return  $this->db->update('user', $data);
    }

    public function delete_user($id = FALSE){
        if ($id != FALSE){
            return $this->db->delete('user', array('id' => $id)); 
        }
    }

}