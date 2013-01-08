<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index($msg = NULL){
	
	$data ['title'] =  "login";
	
		$data['msg'] = $msg;
		
		//loads the login view
        $this->load->view('login_view', $data);
		
    }
	
	//login validation
	//if login validated, the admin page is loaded
    public function login_validate(){
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if(! $result){
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index();
        }else{
            redirect('admin');
        }        
    }
	//logout to the login page
	public function logout(){
			$this->session->sess_destroy();
			redirect('login');
			
		} 

}
?>