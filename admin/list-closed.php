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
              <table id="example1" class="listCat table table-bordered table-striped">
                <thead>
						<tr>
									<th>ID</th>
									<th>First/Last/Email</th>
									<th>Prayer Request</th>
									<th>IP</th>
									<th>Posted</th>
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
		"url" : "model/closedList.php",
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
		"data" : "ip"
	},{
		"data" : "date"
	},{
		"data" : "prayes"
	},{
		"data" : "action"
	}],	
});

// delete request
$(document).on("click", ".to_delete", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this request?')) {
		$.ajax({
			type : "POST",
			url : "model/activeManage.php",
			cache : false,
			data : {
				type : a_delete, mid : id
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

// Reopen Request
$(document).on("click", ".to_reopen", function(e) {
	var id = $(this).attr("id");
	var a_delete = "reopen";
	if (confirm('Are you sure you want to reopen this request?')) {
		$.ajax({
			type : "POST",
			url : "model/activeManage.php",
			cache : false,
			data : {
				type : a_delete, mid : id
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

// Archived Request
/*$(document).on("click", ".to_archived", function(e) {
	var id = $(this).attr("id");
	var a_delete = "archived";
	if (confirm('Are you sure you want to Archived this request?')) {
		$.ajax({
			type : "POST",
			url : "model/activeManage.php",
			cache : false,
			data : {
				type : a_delete, mid : id
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
});*/
</script>
</body>
</html>
