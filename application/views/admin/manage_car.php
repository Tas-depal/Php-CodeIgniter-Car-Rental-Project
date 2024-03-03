<?php
include 'includes/sidebar.php';
include 'includes/header.php';
?>

    <div class="row">
      <?php
        $deleteMsg = $this->session->flashdata("delMsg");
        if(!empty($deleteMsg))
        {
      ?>
        <div style="width: 100%;" class="alert alert-danger fade in alert-dismissible show">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <?php echo $deleteMsg;?>
          </div>
      <?php
        }
      ?>
    </div>
      <table class="table table-hover" id="example">
        <thead>
          <tr class="table-primary">
            <th>ID</th>
            <th>COMPANY NAME</th>
            <th>MODEL NUMBER</th>
            <th>VEHICLE TYPE</th>
            <th>PLATE NUMBER</th>
            <th>OWNER NAME</th>
            <th>CONTACT NUMBER</th>
            <th>CAR STATUS</th>
            <th>ACTION</th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          foreach($carData as $data)
          {
          ?>          
            <tr class="table-success">
                <th><?php echo ++$i?></th>
                <td>
                 <a href="#" data-toggle="popover" title="<?php echo $data['companyName']?>" data-content="<?php echo 'Pickup Date : '. $data['pickupDate'];?><?php echo  'Dropup Date : '. $data['dropupDate']?>"><?php echo $data['companyName']?></a>
                  </td>
                <td><?php echo $data['modelNo']?></td>
                <td><?php echo $data['vehicleType']?></td>
                <td><?php echo $data['plateNo']?></td>
                <td><?php echo $data['ownerName']?></td>
                <td><?php echo $data['mobNo']?></td>
                <td><?php echo $data['car_status']?></td>
                <td>
                  <a href="<?php echo site_url()?>admin/manage_car/editCar?editId=<?php echo $data['id']?>" class="badge badge-info">View & Edit</a>
                  <a href="<?php echo site_url()?>admin/manage_car/deleteCar?delId=<?php echo $data['id']?>" class="badge badge-danger" onclick=" return delData()">Delete</a>
                </td>
               
            </tr>
          <?php
          }
          ?>
          </tbody>
      </table>   


<?php
include 'includes/footer.php';
?>
