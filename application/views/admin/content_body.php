
                  <div class="title">FLIGHT BOOKINGS</div>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                    <?php 
					
					if($bookings!=""){
					$num=count($bookings['id']);
					 for($i=0; $i<$num; $i++){
					?>
                  
                      <tr>
                        <th style="width:40%;">S/N</th>
                        <th style="width:40%;">Name</th>
                        <th class="number">Airline</th>
                        <th class="number">Seat Number</th>
                        <th style="width:20%;">Trip Type</th>
                        <th style="width:20%;">Class</th>
                        <th style="width:20%;">Take off point</th>
                        <th style="width:20%;">Destination</th>
                        <th style="width:20%;">Amount</th>
                        <th style="width:20%;">Flight Date</th>
                        <th style="width:20%;"> Date booked</th>
                        <th style="width:5%;" class="actions">Confirm</th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        
                        <td class="text-success"><?php echo $bookings['id'][$i]?></td>
                        <td class="text-success"><?php echo $bookings['name'][$i]?></td>
                        <td class="text-success"><?php echo $flight_detail[$i]['name'];?></td>
                        <td class="text-success"><?php echo $bookings['seat_number'][$i];?></td>
                         <td class="text-success"><?php echo $flight_detail[$i]['trip_type'];?></td>
                        <td class="text-success">
                        
                        <?php
						if($bookings['price'][$i]==$flight_detail[$i]['first_class_price']){
						echo "First Class";	
						}
						else if($bookings['price'][$i]==$flight_detail[$i]['business_class_price']){
						echo "Business Class";	
						}
						else if($bookings['price'][$i]==$flight_detail[$i]['economy_class_price']){
						echo "Economy Class";	
						}
						?>
                        
                        </td>
                       
                        <td class="text-success"><?php echo $flight_detail[$i]['location_from'];?></td>
                        <td class="text-success"><?php echo $flight_detail[$i]['location_to'];?></td>
                        <td class="text-success"><?php echo $bookings['price'][$i];?></td>
                        <td class="text-success"><?php echo $flight_detail[$i]['date_take_off'];?></td>
                        <td class="text-success"><?php echo $bookings['timee'][$i];?></td>
                        <td>
                        <?php if($bookings['status'][$i]==0){ ?>
                        <button class="btn btn-success" onClick="confirmuser(<?php echo $bookings['id'][$i]; ?>,'b_btn<?php echo $i;?>')" id="b_btn<?php echo $i;?>">Confirm</button>
                        <?php } else{ echo "Confirmed";}?>
                        
                        </td>
                        <td class="actions"><a href="#" class="icon"><i class="mdi mdi-plus-circle-o"></i></a></td>
                      </tr>
                     <?php }}?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <script>
          function confirmuser(id,b){
	var conf = confirm("Are you sure you want to confirm this booking? with id:"+id);
	var btn_id=b;
	if(conf==true){
		$.post("<?php echo base_url();?>process/confirm", {id: id,} ,{})
			.done(function(data){
				       if(data==true){
						$("#"+btn_id+"").html("Confirmed")
					   }
					   else{
						alert(data);  
					  }
				
			});
	}
}
</script>