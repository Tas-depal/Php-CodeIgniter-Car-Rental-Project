<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap4.3.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CAR WORLD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url()?>user_profile">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url()?>edit_profile">Edit Profile</a>
      </li>
    </ul>
    <a class="mr-2" href="#" style="color: white;">
        <?php
          $userNm = $this->session->userdata("userNm");
          $userId = $this->session->userdata("userId");
          if(!empty($userNm))
          {
            echo "Welcome " . $userNm;
          }
        ?>
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>login/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container mt-5">
  <div class="row">
      <?php
      $msg = $this->session->flashdata("bookmsg");
      if(!empty($msg))
      {
      ?>
        <div style="width: 100%;" class="alert alert-primary fade in alert-dismissible show">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
          <?php echo $msg;?>
        </div>
      <?php
      }
      ?>
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo site_url()?>user_profile">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" name="txtSearchCar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>

  <?php 
    if (isset($sdata)):
  ?>

<form method="post" action="user_profile/book_car" class="mt-4">
    <div class="row">
      <?php
      foreach($sdata as $searchdata)
      {
      ?>
      <div class="col-sm-4">
        <div class="card mb-3">
          <h3 class="card-header"><?php echo $searchdata['companyName']?></h3>
          <div class="card-body">
            <h5 class="card-title"><?php echo $searchdata['vehicleType']?></h5>
            <h6 class="card-subtitle text-muted"><?php echo $searchdata['modelNo']?></h6>
          </div>
          <img style="height: 200px; width: 100%; display: block;" src="<?php echo base_url()?>/images/<?php echo $searchdata['car_pic']?>" alt="Car image">
          <div class="card-body">
            <p class="card-text"><?php echo $searchdata['plateNo']?></p>
            <p class="card-text">
              <?php 
              if($searchdata['car_status'] == "Available") 
              { 
              ?>
              <a href="#" class="float-right" style="color: #6B8E23;font-weight: 500;font-size:20px"><?php echo $searchdata['car_status']?></a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookCar" >BOOK CAR</button>  

                <div class="modal fade" id="bookCar" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">BOOK CAR</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="pickup" readonly class="col-form-label">Date of pickup</label>
                            <input type="text" value="<?php date_default_timezone_set('Asia/Kolkata');echo date('Y-m-d H:i:s');?>" name="pickupDate" class="form-control" >
                            <input type="hidden" name="txtUserId" value="<?php echo $userId?>">
                            <input type="hidden" name="txtCarId" value="<?php echo $searchdata['id']?>">
                          </div>
                          <div class="form-group">
                            <label for="dropup" class="col-form-label">Date of dropup</label>
                            <input type="text" readonly class="form-control" id="dropup" name="dropupDate" value="<?php
                             date_default_timezone_set('Asia/Kolkata');
                             $date = date('Y-m-d H:i:s');
                             echo date('Y-m-d H:i:s', strtotime($date. ' + 1 days'));?>">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" value="BOOK CAR" class="btn btn-primary" id="btnSubmit">
                      </div>
                    </div>
                  </div>
                </div>

              <?php 
              } 
              else
              { 
              ?>
              <button type="button" class="btn btn-primary" disabled data-toggle="modal" data-target="#bookCar">BOOK CAR</button>

              <a href="#" class="float-right" style="color: red;font-weight: 500;font-size:20px"><?php echo $searchdata['car_status']?></a>
              <?php 
              }
              ?>
            </p>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
    </div>
</form>

<?php else: ?>
<form method="post" action="user_profile/book_car" class="mt-4">
    <div class="row">
      <?php
      foreach($data as $carsdata)
      {
      ?>
      <div class="col-sm-4">
        <div class="card mb-3">
          <h3 class="card-header"><?php echo $carsdata['companyName']?></h3>
          <div class="card-body">
            <h5 class="card-title"><?php echo $carsdata['vehicleType']?></h5>
            <h6 class="card-subtitle text-muted"><?php echo $carsdata['modelNo']?></h6>
          </div>
          <img style="height: 200px; width: 100%; display: block;" src="<?php echo base_url()?>/images/<?php echo $carsdata['car_pic']?>" alt="Car image">
          <div class="card-body">
            <p class="card-text"><?php echo $carsdata['plateNo']?></p>
            <p class="card-text">
              <?php 
              if($carsdata['car_status'] == "Available") 
              { 
              ?>
              <a href="#" class="float-right" style="color: #6B8E23;font-weight: 500;font-size:20px"><?php echo $carsdata['car_status']?></a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookCar" >BOOK CAR</button>  

                <div class="modal fade" id="bookCar" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">BOOK CAR</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="pickup" readonly class="col-form-label">Date of pickup</label>
                            <input type="text" value="<?php date_default_timezone_set('Asia/Kolkata');echo date('Y-m-d H:i:s');?>" name="pickupDate" class="form-control" >
                            <input type="hidden" name="txtUserId" value="<?php echo $userId?>">
                            <input type="hidden" name="txtCarId" value="<?php echo $carsdata['id']?>">
                          </div>
                          <div class="form-group">
                            <label for="dropup" class="col-form-label">Date of dropup</label>
                            <input type="text" readonly class="form-control" id="dropup" name="dropupDate" value="<?php
                             date_default_timezone_set('Asia/Kolkata');
                             $date = date('Y-m-d H:i:s');
                             echo date('Y-m-d H:i:s', strtotime($date. ' + 1 days'));?>">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" value="BOOK CAR" class="btn btn-primary" id="btnSubmit">
                      </div>
                    </div>
                  </div>
                </div>

              <?php 
              } 
              else
              { 
              ?>
              <button type="button" class="btn btn-primary" disabled data-toggle="modal" data-target="#bookCar" >BOOK CAR</button>

              <a href="#" class="float-right" style="color: red;font-weight: 500;font-size:20px"><?php echo $carsdata['car_status']?></a>
              <?php 
              }
              ?>
            </p>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
    </div>
  </form>  <?php endif;?>

          
  </div> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5 justify-content-center">
    <a class="navbar-brand" href="#">CAR WORLD</a>
  </nav>


<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.4.3.min.js"></script>

</body>
</html>