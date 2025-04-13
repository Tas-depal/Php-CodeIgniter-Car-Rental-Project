<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap4.3.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CAR WORLD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url()?>home">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>Signup">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>login">Login</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo site_url()?>home">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" name="txtSearchCar">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>

    <div class="row mt-3">
    <?php 
    if (isset($search_data)):
    foreach($search_data as $searchdata)
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
                <a href="<?php echo site_url()?>login" class='btn btn-primary'>BOOK NOW</a>
                <?php 
                } 
                else
                { 
                ?>
                <a href="<?php echo site_url()?>login" class='disabled btn btn-primary'>BOOK NOW</a>

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
    else: 
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
                <a href="<?php echo site_url()?>login" class='btn btn-primary'>BOOK NOW</a>
                <?php 
                } 
                else
                { 
                ?>
                <a href="<?php echo site_url()?>login" class='disabled btn btn-primary'>BOOK NOW</a>
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
    endif;?>  
      </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5 justify-content-center">
    <a class="navbar-brand" href="#">CAR WORLD</a>
  </nav>

<script type="text/javascript" src="<?php echo base_url()?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/bootstrap.4.3.min.js"></script>
</body>
</html>