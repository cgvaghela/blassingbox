<?php include_once('include/comman_session.php');
include("include/header.php");
$totalActive = $db->numRow("SELECT * FROM `requests` WHERE `active`=?",array('1'));
$totalClose = $db->numRow("SELECT * FROM `requests` WHERE `active`=?",array('2'));
$totalArchived = $db->numRow("SELECT * FROM `requests` WHERE `active`=?",array('3'));
$totalFlagged = $db->numRow("SELECT * FROM `flags`",array());
$totalBanned = $db->numRow("SELECT * FROM `banned_ips`",array());
$totalPaires = $db->numRow("SELECT * FROM `praise_reports`",array());
?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <?php include("include/sidebar.php"); ?> 
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i>Adminitrator Manage</h3>
        </div>
        <div class="box-body">
			<div class="row">
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3><?php echo $totalActive ? $totalActive : 0;?> </h3>
					  <p>Active</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3><?php echo $totalArchived ? $totalArchived : 0;?> </h3>
					  <p>Archived</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3> <?php echo $totalFlagged ? $totalFlagged : 0;?> </h3>
					  <p>Flagged</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
			</div>
             <div class="row">
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3><?php echo $totalClose ? $totalClose : 0;?></h3>
					  <p>Close</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3><?php echo $totalPaires ? $totalPaires : 0;?> </h3>
					  <p>Paires</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
			
			</div>  
        </div>
        <!-- /.box-body -->
      </div>
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i>Setting Manage</h3>
        </div>
        <div class="box-body">
			<div class="row">
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3><?php echo $totalBanned ? $totalBanned : 0;?></h3>
					  <p>Banned IPs</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				<div class="col-lg-3 col-xs-6">
				  <!-- small box -->
				  <div class="small-box bg-aqua">
					<center><div class="inner">
					  <h3>-</h3>
					  <p>Change Password</p>
					</div></center>	
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				  </div>
				</div>
				
			</div>
             
        </div>
        <!-- /.box-body -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("include/footer.php"); ?>
</body>
</html>
