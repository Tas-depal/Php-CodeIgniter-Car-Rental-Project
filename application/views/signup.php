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
          <a class="nav-link" href="<?php echo site_url()?>home">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url()?>signup">Signup <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>login">Login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>  
  <div class="container mt-4">
    <form method="post" action="<?php echo site_url()?>signup/addUser">
      <div class="row">
          <?php
          $registration = $this->session->flashdata("registration");
          $pass         = $this->session->flashdata("passmsg");
          $email        = $this->session->flashdata("emailmsg");
          if(!empty($registration))
          {
          ?>
            <div style="width: 100%;" class="alert alert-primary fade in alert-dismissible show">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
              <?php echo $registration;?>
            </div>
          <?php
          }
          else if(!empty($email))
          {
          ?>
            <div style="width: 100%;" class="alert alert-danger fade in alert-dismissible show">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
              <?php echo $email;?>
            </div>
          <?php
          }
          ?>
      </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h4 class="mt-3">SIGNUP</h4>
          <div class="form-group">
            <label for="name">First Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="name" name="txtFirstNm" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <label for="name">Last Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="name" name="txtLastNm" placeholder="Last Name" required>
          </div>
          <div class="form-group">
            <label for="email">Email address <span style="color:red">*</span></label>
            <input type="email" class="form-control" id="email" name="txtEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="pass">Password <span style="color:red">*</span></label>
            <input type="password" class="form-control" id="pass" name="txtPass" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
            <small id="emailHelp" class="form-text text-muted">
            The password must satisfy following conditions:-<br>
            (i)at least one number, one lowercase and one uppercase letter<br>
            (ii)at least six characters that are letters, numbers or the underscore</small>
          </div>
          <div class="form-group">
            <label for="cnfrmPass">Confirm Password <span style="color:red">*</span></label>
            <input type="password" class="form-control" id="cnfrmPass" name="txtCnfrmPass" placeholder="Confirm Password" required>
          </div>
          <div class="form-group">
            <label for="city">City <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="city" name="txtCity" placeholder="City" required>
          </div>
          <div class="form-group">
            <label for="cno">Contact Number <span style="color:red">*</span></label>
            <input type="number" class="form-control" id="cno" name="txtCno" placeholder="Contact Number" required>
          </div>
          <div class="form-group">
            <label for="add">Address <span style="color:red">*</span></label>
            <textarea class="form-control" id="add" name="txtAdd" rows="3" required></textarea>
          </div>
          <div class="form-group d-flex justify-content-center">
          <input type="submit" class="btn btn-dark mt-3"value="Submit" onclick="return checkPass()">
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </form>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5 justify-content-center">
    <a class="navbar-brand" href="#">CAR WORLD</a>
  </nav>
<script>
    function checkPass(str)
    {
      var pass      =document.getElementById("pass").value;
      var cnfrmPass =document.getElementById("cnfrmPass").value;
        if(pass==cnfrmPass)
        {
          return true;
        }
        else
        {
          alert("Please check your password");
          return false;
        }
    }
  </script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/bootstrap.4.3.min.js"></script>
</body>
</html>