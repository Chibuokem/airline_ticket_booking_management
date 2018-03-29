 <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Flight Upload<span class="panel-subtitle"></span></div>
                <div class="panel-body">
                <div id="success" style="font-weight:bold; color:green;"></div>
                 <div id="regerrors" style="font-weight:bold; color:red;"></div>
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed" id="upload-form">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Avaliable Airline</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="name" id="name">
                          <option value="0" selected="selected">Choose</option>
                          <option value="Airik">Airik Airline</option>
                          <option value="Emirate">Emirate Airline</option>
                          <option value="Airpeace">Airpeace Airline</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">From Location</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="location_from" id="location_from" placeholder="From">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">To Location</label>
                      <div class="col-sm-6">
                        <input type="text" placeholder="To" class="form-control" name="location_to" id="location_to">
                      </div>
                    </div>
                    
                     <div class="form-group">
                      <label class="col-sm-3 control-label">First Class Price</label>
                      <div class="col-sm-6">
           <input type="text" placeholder="First Class Price" class="form-control" name="first_class_price" id="first_class_price">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label" for="business_class_price">Business Class Price</label>
                      <div class="col-sm-6">
           <input type="text" placeholder="Business Class Price" class="form-control" name="business_class_price" id="business_class_price">
                      </div>
                    </div>
                    
                     <div class="form-group">
                      <label class="col-sm-3 control-label" for="economy_class_price">Economy Class Price</label>
                      <div class="col-sm-6">
           <input type="text" placeholder="Economy Class Price" class="form-control" name="economy_class_price" id="economy_class_price">
                      </div>
                    </div>
                    
                     <div class="form-group">
                      <label class="col-sm-3 control-label" for="capacity">Plane Capacity</label>
                      <div class="col-sm-6">
           <input type="text" placeholder="Plane Capacity" class="form-control" name="capacity" id="capacity">
                      </div>
                    </div>
                    
                   
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Trip Type</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="trip_type" id="trip_type">
                        <option value="0" selected="selected">choose</option>
                          <option value="One way">One way</option>
                          <option value="1 stop">1 stop</option>
                          <option value="Multi city">Multi city</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label"> Take off Date & time</label>
                      <div class="col-md-4">
                       <input type="text" class="form-control" name="date_take_off" placeholder="Flight Date" id="datepicker1"  required/><br/>
          <!--<input type="text" name="date_take_off" id="date_take_off" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" class="form-control datetimerange">-->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Landing Date & time</label>
                      <div class="col-md-4">
                      <input type="text" class="form-control" name="date_landing" placeholder="Landing date" id="datepicker2"  required/><br/>
                       <!-- <input type="text" name="date_landing" id="date_landing" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" class="form-control ">-->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Airline image upload</label>
                      <div class="col-sm-6">
                     
                      <input type="file" name="files" id="multiFiles" data-multiple-caption="{count} files selected" multiple class="inputfile">
                     <label for="multiFiles" class="btn-primary"> <i class="mdi mdi-upload"></i><span>Upload Picture</span></label>
                      </div>
                    </div>
                    <div class="form-group">
                     <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-6">
                 <button class="btn btn-rounded btn-space btn-primary" id="upload"><i class="icon icon-left mdi mdi-cloud-done"></i> Upload</button>
                    <button type="reset" class="btn btn-rounded btn-space btn-primary"><i class="icon icon-left mdi mdi-cloud-done"></i> Reset</button>
                  </form>
                </div>
              </div>
            </div>
         <script>
$( document ).ready(function(){
	
	//alert('hi');
	 $("#upload").click(function(q){	
	 q.preventDefault();
	
	//create and initialize form data
		var form_data = new FormData();
	   //variables from the form. values are gotten from them 
		var name=$("#name").val();
		var location_from=$("#location_from").val();
		var location_to=$("#location_to").val();
		var trip_type=$("#trip_type").val();
		<!--var date_take_off=$("#date_take_off").val();-->
		
		var date_take_off=$("#datepicker1").val();
		<!--var date_landing=$("#date_landing").val();-->
		var date_landing=$("#datepicker2").val();
		var business_class_price=$("#business_class_price").val();
		var economy_class_price=$("#economy_class_price").val();
		var first_class_price=$("#economy_class_price").val();
		var capacity=$("#capacity").val();
		if( name=="0"){
			
			 $("#regerrors").html("Choose your Airline name");
		}
		
		else if( location_from==""){
			
			 $("#regerrors").html("Enter  location from ");
		}
		
		else if( capacity==""){
			
			 $("#regerrors").html("Enter plane capacity ");
		}
		
		else if( location_to==""){
			
			 $("#regerrors").html("Enter  location to ");
		}
		
		
		else if(trip_type=="0"){
			
			 $("#regerrors").html("Choose trip type ");
		}
		
		else if(date_take_off==""){
			
			 $("#regerrors").html("Enter take off date ");
		}
		
		else if(date_landing==""){
			
			 $("#regerrors").html("Enter landing date ");
		}
		
		else if(first_class_price==""){
			
			 $("#regerrors").html("Enter first class price ");
		}
		
		else if(business_class_price==""){
			
			 $("#regerrors").html("Enter business class price ");
		}
		
		else if(economy_class_price==""){
			
			 $("#regerrors").html("Enter economy class price ");
		}
		else{
          
          var ins = document.getElementById('multiFiles').files.length;
            for (var x = 0; x < ins; x++) {
         form_data.append("files[]", document.getElementById('multiFiles').files[x]);
                }
				
			
		  form_data.append("name",name);
		  form_data.append("location_from",location_from);
		  form_data.append("location_to",location_to);
		  form_data.append("trip_type",trip_type);
		  form_data.append("date_take_off",date_take_off);
		   form_data.append("date_landing",date_landing);
		   form_data.append("first_class_price",first_class_price);
		   form_data.append("business_class_price",business_class_price);
		   form_data.append("economy_class_price",economy_class_price);
		   form_data.append("capacity",capacity);
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>process/upload",
		   dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
		   //data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
				
			  $("#success").html("Upload successful");
			$("#upload").html('Uploaded');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 //new ajax call
			                                
			 //new ajax call ends here 
			}
			else    {
				//alert(data);
			
			 $("#regerrors").html(data);
			 //alert(data);
			  $("#upload").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Upload failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#upload").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Uploading ...');
		   }
		  });
		  
		return false;
	}
		
		
		
		  
	});
	
	 
	
	});	
</script>  
 