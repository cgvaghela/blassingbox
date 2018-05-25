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
			Praise Report Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Praise Report Management</li>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Praise Report Management</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<!-- Notification File Start -->
					<?php include_once('include/notification.php');?>
			<!-- Notification File End -->
              <table id="example1" class="listCat table table-bordered table-striped">
                <thead>
								 <tr>
											<th>ID</th>
											<th>First/Last/Email</th>
											<th>Prayer Request</th>
											<th># Prayers</th>
											<th>-</th>
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
$('.listCat').DataTable({    
	"ajax" : {
		"url" : "model/praiseList.php",
		"type" : "POST",
		"data" : {
			"list" : "list"
		}
	},
	"columns" : [{
		"data" : "id"
	},{
		"data" : "info"
	},{
		"data" : "request"
	},{
		"data" : "prayes"
	},{
		"data" : "action"
	}],	
});

// Archived Request
$(document).on("click", ".to_status", function(e) {
	var id = $(this).attr("id");
	var a_delete = "praise_status";
	var status1 = $(this).attr("status");
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	if (confirm('Are you sure you want to change this praise status?')) {
		$.ajax({
			type : "POST",
			url : "model/activeManage.php",
			cache : false,
			data : {
				type : a_delete, mid : id , status : status_1
			},
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},
			success : function(result) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	} else {
		return false;
	}
	return false;
});
</script>
</body>
</html>
