 <ul class="sidebar-menu" data-widget="tree">
		<li class="<?php if($currentPageName=="dashboard.php"){echo 'active open';}?>">
          <a href="dashboard.php">
            <i class="fa fa-circle-o"></i> <span>Dashboard</span>
		  </a>
        </li>
        <li class="<?php if($currentPageName=="list-active.php" || $currentPageName=="request.php"){echo 'active open';}?>">
          <a href="list-active.php">
            <i class="fa fa-check"></i> <span>Active Request List</span>
          </a>
        </li>
        <li class="<?php if($currentPageName=="list-flagged.php"){echo 'active open';}?>">
          <a href="list-flagged.php">
            <i class="fa fa-send-o"></i> <span>Flagged Requests</span>
          </a>
        </li>
		<li class="<?php if($currentPageName=="list-closed.php"){echo 'active open';}?>">
         <a href="list-closed.php">
            <i class="fa fa-remove"></i> <span>Closed Request List</span>
         </a>
        </li>
		<!--<li class="<?php if($currentPageName=="list-archived.php"){echo 'active open';}?>">
          <a href="list-archived.php">
            <i class="fa fa-send-o"></i> <span>Archived Request List</span>
          </a>
        </li>-->
		<li class="<?php if($currentPageName=="list-praise.php"){echo 'active open';}?>">
          <a href="list-praise.php">
            <i class="fa fa-clock-o"></i> <span>Praise Reports</span>
          </a>
        </li>
	   <li class="<?php if($currentPageName=="banned-ips.php"){echo 'active open';}?>">
          <a href="banned-ips.php">
            <i class="fa fa-question-circle"></i> <span>Banned IPs</span>
         </a>
        </li>
		<li class="<?php if($currentPageName=="change-password.php"){echo 'active open';}?>">
          <a href="change-password.php">
            <i class="fa fa-key"></i> <span>Change Credentials</span>
          </a>
        </li>
	     <li class="treeview <?php if($currentPageName=="slider.php" || $currentPageName=="slider_list.php"){echo 'active open';}?>">
          <a href="#">
            <i class="fa fa-picture-o"></i>
            <span>Manage Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="slider.php"><i class="fa fa-pencil-square-o"></i> Slider Add</a></li>
            <li><a href="slider_list.php"><i class="fa fa-retweet"></i> Sliders List</a></li>
            
          </ul>
        </li>
		<li>
          <a href="logout.php">
            <i class="fa fa-line-chart"></i> <span>Log Out</span>
           
          </a>
        </li>
      </ul>