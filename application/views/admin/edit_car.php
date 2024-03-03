<?php
include 'includes/sidebar.php';
include 'includes/header.php';
?>

    <form method="post" action="<?php echo site_url()?>admin/manage_car/updateCarInfo" enctype="multipart/form-data">
      <div class="row">    
        <div class="col-sm-6">    
          <h4>CAR DETAILS</h4>      
          <div class="form-group">
            <label for="compName">Company Name</label>
            <input type="hidden" name="txtId" value="<?php echo $editCarData['id']?>">
            <input type="text" class="form-control" id="compName" aria-describedby="emailHelp" placeholder="Company Name" name="txtCmpName" value="<?php echo $editCarData['companyName']?>">
          </div>
          <div class="form-group">
            <label for="modelNum">Model Number</label>
            <input type="text" class="form-control" id="modelNum" aria-describedby="emailHelp" placeholder="Model Number" name="txtModelNum" value="<?php echo $editCarData['modelNo']?>">            
          </div>
          <div class="form-group">
            <label for="vehicleType">Vehicle Type</label>
            <select class="form-control" name="selVehType" id="vehicleType">
              <option value="Mini-2500/day"<?php echo ($editCarData['vehicleType']=='Mini-2500/day') ? 'selected' :''?>>Mini (Rs 2500 per day)</option>
              <option value="Sedan-5000/day"<?php echo ($editCarData['vehicleType']=='Sedan-5000/day') ? 'selected' :''?>>Sedan (Rs 5000 per day)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="city">Vehicle Image</label>
            <div><img class='img-thumbnail' src="<?php echo base_url()?>images/<?php echo $editCarData['car_pic']?>"></div>
            <input type="file" class="form-control" id="city" name="VehImg">
          </div>
          <div class="form-group">
            <label for="plateNo">Plate Number</label>
            <input type="text" class="form-control" id="plateNo" placeholder="Plate Number" name="txtPlateNo" value="<?php echo $editCarData['plateNo']?>">
          </div>
        </div>
        <div class="col-sm-6">
            <h4>PERSONAL DETAILS</h4>
            <div class="form-group">
              <label for="ownerName">Owner's Name</label>
              <input type="text" class="form-control" id="ownerName" aria-describedby="emailHelp" placeholder="Owner's Name" name="txtOwnerName" value="<?php echo $editCarData['ownerName']?>">
            </div>
             <div class="form-group">
              <label for="mobNo">Mobile Number</label>
              <input type="number" class="form-control" id="mobNo" aria-describedby="emailHelp" placeholder="Mobile Number" name="txtMobNo" value="<?php echo $editCarData['mobNo']?>">              
            </div>
            <div class="form-group">
              <label for="licenceImg">Licence Image</label>
              <div><img class='img-thumbnail' src="<?php echo base_url()?>images/<?php echo $editCarData['licImg']?>"></div>
              <input type="file" class="form-control" id="licenceImg"  name="licImg">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="city" placeholder="City" name="txtCity" value="<?php echo $editCarData['city']?>">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Address" name="txtAdd" value="<?php echo $editCarData['address']?>">
            </div>
            <div class="form-group">
              <label for="address">Car Status</label>
              <select name="selStatus" class="form-control">
                <option value="Available" <?php echo ($editCarData['car_status'] == "Available") ? "selected" : "";?>>Available</option>
                <option value="Unavailable" <?php echo ($editCarData['car_status'] == "Unavailable") ? "selected" : "";?>>Unavailable</option>
              </select>
            </div>
        </div>
        <input type="submit" name="btnAddCarInfo" value="UPDATE INFO" class="btn btn-primary" style="margin: 0px auto;" >
      </div>
    </form>
  </div>

<?php
include 'includes/footer.php';
?>