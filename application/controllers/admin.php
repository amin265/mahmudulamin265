<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
		$this->load->helper('form');
    }
    
    public function index(){
              
		 $data ['title'] =  "admin";
		 
		 $this->load->view ('admin_view',$data);
    }
   
   //this is the function to add a new employee to the database
   
   
   public function add(){
     
	 $this->load->library('form_validation');
	 
	    $this->form_validation->set_rules('firstname', 'First Name', 'required');
	    $this->form_validation->set_rules('lastname', 'Last Name', 'required'); 
	    $this->form_validation->set_rules('gender', 'Gender', 'required');  
		$this->form_validation->set_rules('DOB', 'D.O.B.', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('salary', 'Salary', 'required');
	  
	  
	   if ($this->form_validation->run() == FALSE)
      {
         $this->add_employee();
      }
      else
      {
	   $firstname=$this->input->post('firstname');
	   $lastname= $this->input->post('lastname');
	   $gender= $this->input->post('gender');
	   $DOB= $this->input->post('DOB');
	   $department= $this->input->post('department');
	   $title= $this->input->post('title');
	   $salary= $this->input->post('salary');
	   
	   
		$this->load->model('find_model');
		$this->find_model->add_employee($firstname, $lastname, $gender, $DOB, $department, $title, $salary);
        $this->load->view('employeeadded_view');
      }
	  
    }
	
	public function add_employee(){
	
	 $data ['title'] =  "Add Employee";
	 $this->load->view('addemployee_view',$data);
	   
    }
	
	   //this is the function to delete anemployee from the database

	public function delete(){
     
	 $this->load->library('form_validation');
	 
	  $this->form_validation->set_rules('employeeno', 'Employee No', 'required');
	  
	  	   if ($this->form_validation->run() == FALSE)
      {
         $this->delete_employee();
      }
      else
      {
	   $employeeno=$this->input->post('employeeno');
	   
	   
	 $this->load->model('find_model');
		$this->find_model->delete_employee($employeeno);
        $this->load->view('employeedeleted_view');
	 
	}
	 
 }
	
	public function delete_employee(){
	
	 $data ['title'] =  "Delete Employee";
	 $this->load->view('delete_view',$data);
	    
    }

    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

	//logout button
	 public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 }
 
 ?>