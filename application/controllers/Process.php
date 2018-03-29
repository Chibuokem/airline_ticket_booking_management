<?php session_start();
class Process extends CI_Controller { 
public $db;
 



   public function login(){
	   //this function is responsible for login for admin
	    $this->load->helper('url');
         $this->load->helper(array('form'));
		 $email=$this->input->post('email');
		$password = $this->input->post('password');
		require_once('connection.php');
			 
			  $this->load->model('login');
		$check = new Login(); 
		
		
		$result = $check->check($email,$password,$this->db);
		if($result == true){
		die(true);
			
		}
		else{
		die(false);	
		}
		
			
	   
   }
   //booking confirmation function
      public function confirm(){
		  //url helper
		    $this->load->helper('url');
			//form helper
		    $this->load->helper(array('form'));
			//connect to database
			require_once('connection.php');
			//get id 
			$id=$this->input->post('id');
			//load airline model
			$this->load->model('airlines');
			//instantiate airline class
			$airlines_class= new Airlines();
			//get confirmation response
			$status=1;
			 $response=$airlines_class->update_status($id,$status,$this->db);
			 if($response==true){
				 
				 //send email
				$booking_details=$airlines_class->get_user_booking($id,$this->db);
				if($airline_details!=false){
					$email=$booking_details['email'];
					
							$this->load->library('email');
					  // $config['protocol'] = 'smtp';
					//	$config['mailpath'] = '/usr/sbin/sendmail';
						$config['charset'] = 'iso-8859-1';
						$config['wordwrap'] = false;
						  $config['smtp_host'] = " mail.primeinvestment.com.ng"; 
						 $config['smtp_user'] = "primeinv"; 
						 $config['smtp_pass'] = "A09jv4l7bF";
                       $this->email->initialize($config);
					  $this->email->from(' mail.primeinvestment.com.ng', 'Airline Booking');
					  $this->email->to($email);
					 
					  
						$this->email->subject('Confirmation Alert');
						$this->email->message('Your reservation has been confirmed and your seat number is '.$booking_details['seat_number']." ");
				   			if ( ! $this->email->send())
{
                                // Generate error
								//die("Error occured while sending email");
                              }
							  else{
								  //die(true); 
							  }
					
				}
				die(true); 
			 }
			 else{
				die("error occured during confirmation"); 
			 }
		  
	  }

            //booking function
             public function book(){
	            $this->load->helper('url');
		    $this->load->helper(array('form'));
			require_once('connection.php');
			$id=$this->input->post('id');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$country=$this->input->post('country');
			$phone=$this->input->post('phone');
			$state=$this->input->post('state');
			$address=$this->input->post('address');
			$sex=$this->input->post('sex');
			$marital_status=$this->input->post('marital_status');
			$price=$this->input->post('price');
			$seat_number=$this->input->post('seat_number');
			if(empty($id)){
			  	die("bookings failed");
			
			}
			else if(empty($name)){
				die("name is empty");
			}
			else{
				
				$this->load->model('airlines');
			  $airlines_class= new Airlines();
			      $response=$airlines_class->get_data_from_id($id,$this->db);
				  if($response==false){
					die('Error occured while getting airline information');
					 
				  }
				  else{
					  //take seat number
					$seat_number=$response['number_booked']+1;
					if($seat_number > $response['capacity']){
					die("Sorry the plane is already fully booked. booking failed");	
					}
					  $update_flight=$airlines_class->update_flight($id,$seat_number,$this->db);
					  if($update_flight==false){
						die("Error occured while updating flight info");   
					  }
					//update number booked so far 
					  
				  }
			  
			 // $this->db = new MySQLi('localhost','root','','papa');
			  $result_book = $airlines_class->book($id,$name,$email,$country,$phone,$state,$address,$sex,$marital_status,$price,$seat_number,$this->db);
			  if($result_book == true){
			    die(true);
			  }
			  else{
				  die("Error occured during booking");
				//die(false);  
			  }
			  	
			}
		 
	 }
	 
	 

	 
	    public function upload(){
		   $this->load->helper('url');
         $this->load->helper(array('form'));
		 //print_r($_FILES);
		 if (isset($_FILES['files']) && !empty($_FILES['files'])) {
			 
		 $_FILES['file']['name'] = $_FILES['files']['name'][0];
                $_FILES['file']['type'] = $_FILES['files']['type'][0];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][0];
                $_FILES['file']['error'] = $_FILES['files']['error'][0];
                $_FILES['file']['size'] = $_FILES['files']['size'][0];
			 
			   $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            =2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);
				//if ( ! $this->upload->do_upload('picture'))
				//$pic=$_FILES["files"]["name"][$i];
				if ( ! $this->upload->do_upload('file'))
                {
                        //$error = array('error' => $this->upload->display_errors());
						
						echo $this->upload->display_errors();
						//echo $error;
						
						die();		
							
						
           }
		  // $picture = $this->upload->data('full_path');
		  $picture = $this->upload->data('file_name');
		  $path = './uploads/'.$picture;
		  $picture_new = 'thumb_'.$picture;
		  //image processing class called here 
		     $config['image_library'] = 'gd2';
			$config['source_image'] = $path;
			$config['create_thumb'] = FALSE;
			$config['new_image'] = $picture_new;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 1600;
			$config['height']       = 800;
           $this->load->library('image_lib', $config);
		            if ( ! $this->image_lib->resize())
             {
                  echo $this->image_lib->display_errors();
				  die();
             }
			 
		   
		     $this->load->model('airlines');
		   $airlines_class = new Airlines();
		   require_once('connection.php');
		   
		   
		
			   $name=$this->input->post('name');
			   $location_from=$this->input->post('location_from');
			   $location_to=$this->input->post('location_to');
			   $class=$this->input->post('class');
			   $trip_type=$this->input->post('trip_type');
		    $date_take_off=$this->input->post('date_take_off');
			$date_landing=$this->input->post('date_landing');
			$first_class_price=$this->input->post('first_class_price');
			$economy_class_price=$this->input->post('economy_class_price');
			$business_class_price=$this->input->post('business_class_price');
			$capacity=$this->input->post('capacity');
		    $response_upload = $airlines_class->upload($name,$location_from,$location_to,$first_class_price,$trip_type, $date_take_off,$date_landing,$picture_new,$picture,$business_class_price,$economy_class_price,$capacity,$this->db);
			if( $response_upload==true){
			   die(true);	
			}
			else{
			die("error occured");	
			}
		    
		   
		 }
		 else{
			die("Please select a picture"); 
		 }
	 }


  public function delete_picture(){
	    $this->load->helper('url');
		    $this->load->helper(array('form'));
			$id=$this->input->post('id');
			$image=$this->input->post('image');
			if(empty($id)){
			  	die("deleting failed");
			
			}
			elseif(empty($image)){
				die("deleting failed..image id not found!");
			}
	     else{
			 $this->load->model('pictures');
		   $pictures_classs = new Pictures();
		   require_once('connection.php');
		   $response = $pictures_classs->delete($id,$image,$this->db);
		   if($response==true){
			die(true);  
		   }
		   else{
			die(false);   
		   }
		   
		 }
  }

}
?>