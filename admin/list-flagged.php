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
      Flagged Prayer Requests
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Flagged Prayer Requests</li>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content">
		<div class="box">
            <div class="box-header">
              <h3 class="box-title">Flagged Prayer Requests </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<!-- Notification File Start -->
					<?php include_once('include/notification.php');?>
			<!-- Notification File End -->
              <table id="example1" class="listCat table table-bordered table-striped">
                <thead>
										<th>ID</th>
											<th>First/Last/Email</th>
											<th>Title</th>
											<th>Body</th>
											<th>IP</th>
											<th>Date Posted</th>
											<th># Times Flagged</th>
											<th>-</th>
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

<script>
  $(function () {
    $('#example1').DataTable()
    
  })
</script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
$('.listCat').DataTable({    
	"ajax" : {
		"url" : "model/flaggedList.php",
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
		"data" : "title"
	},{
		"data" : "body"
	},{
		"data" : "ip"
	},{
		"data" : "date"
	},{
		"data" : "flagged"
	},{
		"data" : "action"
	}],	
});

// delete request
$(document).on("click", ".to_delete", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this remove request?')) {
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

// Flags Request
$(document).on("click", ".to_flags", function(e) {
	var id = $(this).attr("id");
	var a_delete = "flagdelete";
	if (confirm('Are you sure you want to close this flags?')) {
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

// Banned Request
$(document).on("click", ".to_banned", function(e) {
	var id = $(this).attr("id");
	var a_delete = "banned";
	if (confirm('Are you sure you want to banned this request?')) {
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
</script>
</body>
</html>
