<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//get search parameteres
		 $this->load->helper(array('form'));
		 $id=$this->input->get('id');
		 require_once('connection.php');
	    $this->load->model('airlines');
		$airlines_class = new Airlines();
		 $response=$airlines_class->get_data_from_id($id,$this->db);
		 if($response == false){
		$data['result']="";	
		}
		else{
		$data['result']=$response;	
		}
		$this->load->view('pages/book',$data);
	}
}
