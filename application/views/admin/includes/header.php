      <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-grey topbar mb-4 static-top shadow">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php
                  $admin_nm = $this->session->userdata("admin_nm");
                  if(!empty($admin_nm))
                  {
                    echo "<b><font size='4'>"."Welcome " . $admin_nm."</font></b>";
                  }
                  ?> 
                </span>
              </a>              
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">