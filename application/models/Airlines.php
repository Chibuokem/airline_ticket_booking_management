<?php
class 	Airlines extends CI_Model{
	
public $timee;
public $table;

  public function __construct(){
	
	$this->table = "flights";	
 date_default_timezone_set('Africa/Lagos');

}

  //function to register an airline ..inserting it into the database
	public function upload($name,$location_from,$location_to,$first_class_price,$trip_type, $date_take_off,$date_landing,$picture_new,$picture,$business_class_price,$economy_class_price,$capacity,$db){
		
	$this->table = "flights";
	    //time and date that it was inserted 
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(name,location_from,location_to,first_class_price,trip_type, date_take_off,date_landing,picture_new,picture,business_class_price,economy_class_price,capacity,timee ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("sssssssssssss",$name,$location_from,$location_to,$first_class_price,$trip_type,$date_take_off,$date_landing,$picture_new,$picture,$business_class_price,$economy_class_price,$capacity,$timee);
		
	 //$result = $db->query($query);
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		
		return false;
		
	 }
	               
		
	}
	
	
	//function to book  an airline ..inserting it into the database
	public function book($id,$name,$email,$country,$phone,$state,$address,$sex,$marital_status,$price,$seat_number,$db){
		
	     $this->table="booking";
	    //time and date that it was inserted 
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(flight_id,name,email,country,phone,state,address,sex,marital_status,price,seat_number,timee ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
		
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("ssssssssssss",$id,$name,$email,$country,$phone,$state,$address,$sex,$marital_status,$price,$seat_number,$timee);
		
	 
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		die($db->error);
		return false;
		
	 }
	               
		
	}
	

 //function to get all the airlines  from the database 
  public function get_airlines($db){
		/*if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}*/
		$this->table = "flights";
		$dataa=array();
		$i=0;
		
		$query = "SELECT * FROM ".$this->table." ORDER BY id DESC " ;
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	  while( $row = mysqli_fetch_array($result)){
		 $dataa['id'][$i] = $row['id'];
		 $dataa['name'][$i]= $row['name'];
		 $dataa['location_from'][$i] = $row['location_from'];
		 $dataa['location_to'][$i]= $row['location_to'];
		  $dataa['first_class_price'][$i]= $row['first_class_price'];
		  $dataa['business_class_price'][$i]= $row['business_class_price'];
		  $dataa['economy_class_price'][$i]= $row['economy_class_price'];
		  $dataa['capacity'][$i]= $row['capacity'];
		  $dataa['number_booked'][$i]= $row['number_booked'];
		  $dataa['status'][$i]= $row['status'];
	    $dataa['trip_type'][$i]= $row['trip_type'];
		 $dataa['date_take_off'][$i]= $row['date_take_off'];
		  $dataa['timee'][$i]= $row['timee'];
		   $dataa['date_landing'][$i]= $row['date_landing'];
		    $dataa['picture_new'][$i]= $row['picture_new'];
		
			$i++;
	  }
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }		
	
}

   
  //login model
  //login check
  public function check($email,$password,$db){
	
	  $this->table="admin";
		  $password_hash = md5($password);
		  $query = "SELECT * FROM ".$this->table." WHERE email=? AND password=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("ss",$email,$password_hash);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 $row = $result->fetch_assoc();
			
			// print_r($row);
			 $_SESSION['id'] = $row['id'];
			 $_SESSION['email'] = $row['email'];
				
				 return true;
				
		
		 }
		 else{
			
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

   
   
   //function to get all the airlines  from the database 
  public function get_bookings($db){
		/*if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}*/
		$this->table = "booking";
		$dataa=array();
		$i=0;
		
		$query = "SELECT * FROM ".$this->table." ORDER BY id DESC " ;
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	  while( $row = mysqli_fetch_array($result)){
		 $dataa['id'][$i] = $row['id'];
		 $dataa['name'][$i]= $row['name'];
		 $dataa['flight_id'][$i] = $row['flight_id'];
		 $dataa['email'][$i]= $row['email'];
		  $dataa['country'][$i]= $row['country'];
		  $dataa['phone'][$i]= $row['phone'];
		  $dataa['state'][$i]= $row['state'];
		  $dataa['address'][$i]= $row['address'];
		  $dataa['sex'][$i]= $row['sex'];
		  $dataa['marital_status'][$i]= $row['marital_status'];
	    $dataa['price'][$i]= $row['price'];
		 $dataa['seat_number'][$i]= $row['seat_number'];
		  $dataa['timee'][$i]= $row['timee'];
		   $dataa['status'][$i]= $row['status'];
		    
		
			$i++;
	  }
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }		
	
}


      //function to get just details of a particular airline
	public function get_data_from_id($id,$db){
		$this->table = "flights";
		 
		  $query = "SELECT * FROM ".$this->table." WHERE id=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$id);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  $row = $result->fetch_assoc();
			 
		 return $row;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }
	  
	  public function get_user_booking($id,$db){
		$this->table = "booking";
		 
		  $query = "SELECT * FROM ".$this->table." WHERE id=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$id);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  $row = $result->fetch_assoc();
			 
		 return $row;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }
	
	  //update availablility status of a particular  airline in the database status =1 when available. 0 when filled up 
	   public function update_status($id,$status,$db){
		   $this->table="booking";
	   $query="UPDATE ".$this->table." SET status=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$status,$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
   public function update_flight($id,$seat_number,$db){
	   $this->table="flights";
	   $query="UPDATE ".$this->table." SET number_booked=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$seat_number,$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
  
     //delete airline from the database
		 public function delete_property($id,$db){
	   $query="DELETE FROM ".$this->table." WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
  
	      //function to get just details of airlines searched
	public function get_search_result($location_from,$location_to,$db){
		  $dataa=array();
		   $i=0;
		  $query = "SELECT * FROM ".$this->table." WHERE  location_from=? AND location_to=? ";
		  $statement = $db->prepare($query);
		 
		  $statement->bind_param("ss",$location_from,$location_to);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  while ($row = $result->fetch_assoc()){
				  $dataa['id'][$i] = $row['id'];
					 $dataa['name'][$i]= $row['name'];
					 $dataa['location_from'][$i] = $row['location_from'];
					 $dataa['location_to'][$i]= $row['location_to'];
					  $dataa['first_class_price'][$i]= $row['first_class_price'];
					  $dataa['business_class_price'][$i]= $row['business_class_price'];
					  $dataa['economy_class_price'][$i]= $row['economy_class_price'];
					  $dataa['capacity'][$i]= $row['capacity'];
					  $dataa['number_booked'][$i]= $row['number_booked'];
					  $dataa['status'][$i]= $row['status'];
					$dataa['trip_type'][$i]= $row['trip_type'];
					 $dataa['date_take_off'][$i]= $row['date_take_off'];
					  $dataa['timee'][$i]= $row['timee'];
					   $dataa['date_landing'][$i]= $row['date_landing'];
						$dataa['picture_new'][$i]= $row['picture_new'];
				 $i++;
			  }
			 
		 return $dataa;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

		              
//airline class ends here 

}
?>