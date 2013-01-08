<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
	// model validates the login username and password
    public function validate(){
        
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
                
		//checks the admin table in database
        $query = $this->db->get('admin');
        
        if($query->num_rows == 1)
        {
            $row = $query->row();
            $data = array(
                'id' => $row->userid,
                'username' => $row->username,
                'validated' => true
				
			);
					
            $this->session->set_userdata($data);
			
            return true;
        }
        return false;
    }
}
?>