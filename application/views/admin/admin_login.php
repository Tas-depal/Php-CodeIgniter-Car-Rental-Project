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
          <a class="nav-link" href="<?php echo site_url()?>home">Home</a>
        </li>
      </ul>     
    </div>
  </nav>
  <div class="container mt-5" >
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form method="post" action="<?php echo site_url()?>admin/admin_login/checkAdmin">  
          <h4 class="mt-3">LOGIN</h4>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="txtEmail" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="txtPass" placeholder="Password">
              </div>
              <center><button type="submit" class="btn btn-dark mt-3">Submit</button></center>
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  
<?php
include 'includes/footer.php';
?>