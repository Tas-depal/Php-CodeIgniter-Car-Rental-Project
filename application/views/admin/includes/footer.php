  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-5 justify-content-center">
    <a class="navbar-brand" href="#">CAR WORLD</a>
  </nav>
<script type="text/javascript">
  function delData()
  {
    var msg = confirm("Are You Sure You Want To Delete The Data?")
    if(msg)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>

<script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/bootstrap.4.3.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
</body>
</html>