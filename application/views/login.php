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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>signup">Signup</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url()?>login">Login<span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-4"></div>
    <div class="col-sm-4 mt-3">
      <form method="post" action="<?php echo site_url()?>login/checkUser">
        <h4 class="mt-3">LOGIN</h4>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="txtEmail" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="txtPass" placeholder="Password">
          </div>
          <center><button type="submit" class="btn btn-dark mt-3 mb-3">Submit</button></center>
      </form>
    </div>
    <div class="col-sm-4"></div>
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