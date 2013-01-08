<?php
class Find extends CI_Controller {

	function index() {
	
	$this->load->view('search_view');
	}
	
	//this is the search function which searches the database
	//this searches for teh first name , last name , department and the job title of the employees
	//
	//	
	function findemp () {
	
	$this->load->model('find_model');
	
	$firstname = $this->input->get('firstname');
	$lastname = $this->input->get('lastname');
	$department = $this->input->get('department');
	$title = $this->input->get('title');
	
	$results= $this->find_model->search($firstname,$lastname,$department,$title);
	
	// json
	
	$data['count'] = count($results['rows']);
	$data['results'] = $results['rows']; 
	
	echo json_encode($data);
	
	
	}

}

