<?php
include 'includes/sidebar.php';
include 'includes/header.php';
?>
    <form method="post" action="<?php echo site_url()?>admin/add_car/car_info" enctype="multipart/form-data">
      <div class="row">    
        <div class="col-sm-6">    
          <h4>CAR DETAILS</h4>      
          <div class="form-group">
            <label for="compName">Company Name</label>
            <input type="text" class="form-control" id="compName" aria-describedby="emailHelp" placeholder="Company Name" name="txtCmpName">
          </div>
          <div class="form-group">
            <label for="modelNum">Model Number</label>
            <input type="text" class="form-control" id="modelNum" aria-describedby="emailHelp" placeholder="Model Number" name="txtModelNum">            
          </div>
          <div class="form-group">
            <label for="vehicleType">Vehicle Type</label>
            <select class="form-control" name="selVehType" id="vehicleType">
              <option>Select Type</option>
              <option value="Mini-2500/day">Mini (Rs 2500 per day)</option>
              <option value="Sedan-5000/day">Sedan (Rs 5000 per day)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="city">Vehicle Image</label>
            <input type="file" class="form-control" id="city" name="VehImg">
          </div>
          <div class="form-group">
            <label for="plateNo">Plate Number</label>
            <input type="text" class="form-control" id="plateNo" placeholder="Plate Number" name="txtPlateNo">
          </div>
        </div>
        <div class="col-sm-6">
            <h4>PERSONAL DETAILS</h4>
            <div class="form-group">
              <label for="ownerName">Owner's Name</label>
              <input type="text" class="form-control" id="ownerName" aria-describedby="emailHelp" placeholder="Owner's Name" name="txtOwnerName">
            </div>
             <div class="form-group">
              <label for="mobNo">Mobile Number</label>
              <input type="number" class="form-control" id="mobNo" aria-describedby="emailHelp" placeholder="Mobile Number" name="txtMobNo">              
            </div>
            <div class="form-group">
              <label for="licenceImg">Licence Image</label>
              <input type="file" class="form-control" id="licenceImg"  name="licImg">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" placeholder="City" name="txtCity">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Address" name="txtAdd">
            </div>
        </div>
        <input type="submit" name="btnAddCarInfo" value="ADD INFO" class="btn btn-primary" style="margin: 0px auto;" >
      </div>
    </form>
  </div>

<?php
include 'includes/footer.php';
?>