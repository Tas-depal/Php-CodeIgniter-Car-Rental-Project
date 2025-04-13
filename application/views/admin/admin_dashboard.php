<?php
include 'includes/sidebar.php';
include 'includes/header.php';
?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
<div class="row">
   <div class="col-sm-4" style="background-color: #FF6666 ; border:2px solid white;height:300px">  	
   <h1 style="padding: 5%;color:white;"> Total users:</h1>
   <?php echo "<center><p style='font-size:50px;color:white;'>".$total_users."</p></center>" ?>
   </div>

   <div class="col-sm-4" style="background-color: #99FF33 ; border:2px solid white;height:300px">  	
   <h1 style="padding: 5%;color:white;"> Total Bookings:</h1>
   <?php echo "<center><p style='font-size:50px;color:white;'>".$total_bookings."</p></center>" ?>
   </div>

   <div class="col-sm-4" style="background-color: #33FFFF ; border:2px solid white;height:300px">  	
   <h1 style="padding: 5%;color:white;"> Total Cars:</h1>
   <?php echo "<center><p style='font-size:50px;color:white;'>".$total_cars."</p></center>" ?>
   </div>
</div>
