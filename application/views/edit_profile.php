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
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url()?>user_profile">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url()?>edit_profile">Edit Profile <span class="sr-only">(current)</span></a>
          </li>
      </ul>
          <a class="mr-2" href="#" style="color: white;">
            <?php
              $userNm = $this->session->userdata("userNm");
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
  <div class="container">
    <form method="post" action="<?php echo site_url()?>edit_profile/update_user_data">
      <h4 class="mt-3">EDIT PROFILE</h4>
        <div class="form-group">
          <label for="name">First Name</label>
          <input type="hidden" name="txtId" value="<?php echo $userData['id']?>">
          <input type="text" class="form-control" id="name" name="txtFirstNm" value="<?php echo $userData["first_name"]?>">
        </div>
        <div class="form-group">
          <label for="name">Last Name</label>
          <input type="text" class="form-control" id="name" name="txtLastNm" value="<?php echo $userData["last_name"]?>">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="txtEmail" value="<?php echo $userData["email"]?>">
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="text" class="form-control" id="pass" name="txtPass" value="<?php echo $userData["password"]?>">
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" name="txtCity" value="<?php echo $userData["city"]?>">
        </div>
        <div class="form-group">
          <label for="cno">Contact Number</label>
          <input type="number" class="form-control" id="cno" name="txtCno" value="<?php echo $userData["contact_no"]?>">
        </div>
          <label for="add">Address</label>
          <textarea class="form-control" id="add" name="txtAdd" rows="3"><?php echo $userData["address"]?></textarea>
        </div>
        <center><button type="submit" class="btn btn-dark mt-3">UPDATE</button></center>
    </form>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5 justify-content-center">
    <a class="navbar-brand" href="#">CAR WORLD</a>
  </nav>

<script type="text/javascript" src="<?php echo base_url()?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/bootstrap.4.3.min.js"></script>
</body>
</html>