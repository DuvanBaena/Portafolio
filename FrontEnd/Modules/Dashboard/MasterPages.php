<?php
include __DIR__ . '../../../Pages/Session.php';
sleep(5);
?>
  <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
              class="icon_menu"></i></div>
        </div>      
      <a href="#" class="logo">Hello<span class="lite"> <?php echo $_SESSION['i_rol'];?></span>
        <div class="top-nav notification-row">
          <ul class="nav pull-right top-menu">
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#hello">
                <span class="profile-ava">
                  <img alt="" src="../Resources/img/avatar1_small.jpg">
                </span>
                <span class="username"><?php echo $_SESSION['i_nombre'];?></span>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li class="eborder-top">
                  <a href="Logout.php"><i class="icofont-key"></i>Log Out</a>
                </li>
                <li>
                  <a href="#"><i class="icofont-law-document"></i> Documentationt</a>
                </li>
              </ul>
            </li>         
          </ul>       
        </div>      
  </header>  

  <aside>
        <div id="sidebar" class="nav-collapse ">        
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="Dashboard.php">
                <i class="icon_house_alt"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Summary</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a href="Summary.php">Sumary Detail</a></li>                    
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Book's</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a href="#">Menu Book</a></li>                             
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Version</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a href="Version.php">Version Detail</a></li> 
              </ul>
            </li>
          </ul>       
        </div>
  </aside>


   <!-- ======= Footer ======= -->

  

   <!-- End  Footer -->