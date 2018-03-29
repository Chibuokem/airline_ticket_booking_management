<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Admin extends CI_Controller {

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
	public function index(){
		$location=base_url();
		if(!isset($_SESSION['id'])){
		redirect($location);	
		}
		//connec to database 
		require_once('connection.php');
		//load airline mdel
	    $this->load->model('airlines');
		//instanitate airline class 
		$airlines_class = new Airlines();
		//get bookings
		  $bookings=$airlines_class->get_bookings($this->db);
		   if($bookings!==false){
			   
			   $num=count($bookings['id']);
			   for($i=0; $i<$num; $i++){
				  $data['flight_detail'][$i]=$airlines_class->get_data_from_id($bookings['flight_id'][$i],$this->db);
			   }
			$data['bookings']=$bookings;
			
			   
		   }
		   else{
			 $data['bookings']="";  
		   }
		
		
	    $this->load->view('admin/head');
		$this->load->view('admin/content_body',$data);
		$this->load->view('admin/ending');
	}
	
	public function upload(){
		
	 $this->load->view('admin/head');
		$this->load->view('admin/content_upload');
		$this->load->view('admin/ending');
		
	}
	
	public function login(){
		

		$this->load->view('pages/log_in');
		
		
	}
	
	 public function enter(){
		
	   //this function is responsible for login 
	    $this->load->helper('url');
         $this->load->helper(array('form'));
		 $email=$this->input->post('email');
		$password = $this->input->post('password');
		require_once('connection.php');
			  
	    $this->load->model('airlines');
		$check = new Airlines(); 
		
		
		$result = $check->check($email,$password,$this->db);
		if($result == true){
			
		die(true);
			
		}
		else{
		die("Invalid email or password");	
		
		}
		
		//primeinv_airlines
		//papamama12@
		//user is primeinv_airline	
	   
   }
}
