<?php include_once('include/comman_session.php');
include("include/header.php");
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
			Closed Prayer Requests
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Closed Prayer Requests</li>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Closed Prayer Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<!-- Notification File Start -->
					<?php include_once('include/notification.php');?>
			<!-- Notification File End -->
              <table id="example1" class="loadDataTable table table-bordered table-striped" width="100%">
                <thead>
						<tr>
											<th>#</th>
											<th>Name</th>
											<th>Link</th>
											<th>Image</th>
											<th>Status</th>
											<th>Action</th>
						</tr>
				</thead>  
           
              </table>
            </div>
            <!-- /.box-body -->
         </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
   <?php include("include/footer.php"); ?>
 
<!-- DataTables -->
<script src="plugin/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="plugin/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->

<script>
  $(function () {
    $('#example1').DataTable()
    
  })
</script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">

	//loadmaincattable();
	$('.loadDataTable').DataTable({    
		"ajax" : {
			"url" : "model/sliderList.php",
			"type" : "POST",
			"data" : {
				"list" : "list"
			}
		},
		"columns" : [{
			"data" : "id"
		},{
			"data" : "name"
		},{
			"data" : "link"
		},{
			"data" : "image"
		},{
			"data" : "status"
		},{
			"data" : "action"
		}],
		"scrollX" : true
	});

</script>
</body>
</html>
