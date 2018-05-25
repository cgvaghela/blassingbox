// Page Insert Validation
$("#iconPageBtn").click(function() {
	if(!$("#iconPageForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconPageForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/pageManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				if (data == 1) { 
					location.reload();
				}else {
					location.reload();
				}
			}
		});
	}
	return false;
});

// Setting Validation
$("#iconSettingBtn").click(function() {
	if(!$("#iconSettingForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconSettingForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/changePassword.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});	

// Slider Validation
$("#iconSliderBtn").click(function() {
	if(!$("#iconSliderForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconSliderForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/sliderManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// News Validation
$("#iconNewsBtn").click(function() {
	if(!$("#iconNewsForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconNewsForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/newsManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// Client Validation
$("#iconClientBtn").click(function() {
	if(!$("#iconClientForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconClientForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/clientManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// Product Validation
$("#iconProductBtn").click(function() {
	if(!$("#iconProductForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconProductForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/productManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// Product Validation
$("#iconProductNewBtn").click(function() {
	if(!$("#iconProductNewForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconProductNewForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/productNewManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// Banner Validation
$("#iconBannerBtn").click(function() {
	if(!$("#iconBannerForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconBannerForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/bannerManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// Category Validation
$("#iconCategoryBtn").click(function() {
	if(!$("#iconCategoryForm").valid()){
		return false;	
	}else{
		var form = document.getElementById("iconCategoryForm");
		formdata2 = new FormData(form);
		$.ajax({
			url : "model/categoryManage.php",
			type : "POST",
			contentType : false,
			processData : false,
			data : formdata2,
			beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},	
			success : function(data) {
				$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
				location.reload();
			}
		});
	}
	return false;
});

// change password form
$("#iconChangePasswordBtn").click(function() {
    if(!$("#iconChangePasswordForm").valid()) {
        return false;
    } else {
        var form = document.getElementById("iconChangePasswordForm");
        formdata2 = new FormData(form);
        $.ajax({
            url: "model/changePassword.php",
            type: "POST",
            contentType: false,
            processData: false,
            data: formdata2,
            beforeSend: function() {
				$(".loading-div").removeClass('no-display');
				$(".loading-div").addClass('display');
			},
            success: function(data) {
            	$(".loading-div").removeClass('display');
				$(".loading-div").addClass('no-display');
	            location.reload();
            }
        });
    }
});

// delete for slider
$(document).on("click", ".to_deleteSlider", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this slider?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/sliderManage.php",
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

// delete for Product New
$(document).on("click", ".to_deleteProductNew", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this Product New?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/productNewManage.php",
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

// delete for Category
$(document).on("click", ".to_deleteCategory", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this category?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/categoryManage.php",
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

// delete for News
$(document).on("click", ".to_deleteNews", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this news?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/newsManage.php",
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

// delete for Client
$(document).on("click", ".to_deleteClient", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this client?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/clientManage.php",
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

// delete for banner
$(document).on("click", ".to_deleteBanner", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this banner?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/bannerManage.php",
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

// delete for Product
$(document).on("click", ".to_deleteProduct", function(e) {
	var id = $(this).attr("id");
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this product?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/productManage.php",
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

// Change Slider Status Active Deactive Code
$(document).on("click", ".to_statusSlider", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/sliderManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Change Category Status Active Deactive Code
$(document).on("click", ".to_statusCategory", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/categoryManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Change News Status Active Deactive Code
$(document).on("click", ".to_statusNews", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/newsManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Change Client Status Active Deactive Code
$(document).on("click", ".to_statusClient", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/clientManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Change Banner Status Active Deactive Code
$(document).on("click", ".to_statusBanner", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/bannerManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Change Product Status Active Deactive Code
$(document).on("click", ".to_statusProduct", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/productManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Change Product New Status Active Deactive Code
$(document).on("click", ".to_statusProductNew", function(e) {
	var id = $(this).attr("id");
	var status1 = $(this).attr("status");
	var a_status = "status";
	if(status1==1)
		status_1 = 0;
	else
		status_1 = 1;
	
	if (confirm('Are you sure you want to change status?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/productNewManage.php",
			cache : false,
			data : {
				type : a_status, mid : id , status : status_1
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

// Product New Single Delete
$(document).on("click", ".single-deleteProductNew", function(e) {
	if (confirm('Are you sure you want to delete this?')){
		var id = $(this).attr("id");
		var currentThis = $(this);
		var type = "single_delete";
		$.ajax({
		  url : "model/productNewManage.php",
		  data : 'mid='+id+'&type='+type,
		  type : 'post',
		  beforeSend : function(){
		},
		  success : function(data) {
			  if(data == 1){
				$(currentThis).parent().html("");
			  }else{
				alert("Delete in Problem...");  
			  }
		  },
		});
	}else {
		return false;
	}
});

// Delete Pages Code
$(document).on("click", ".to_deletePage", function(e) {
	var id = $(this).attr("id");	
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this page?')) 
	{
		$.ajax({
			type : "POST",
			url : "model/pageManage.php",
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
				if (result == 0) {
					location.reload();
				} else {
					location.reload();
				}
			}
		});
	} else {
		return false;
	}
	return false;
});

// Delete Enquiry
$(document).on("click", ".to_deleteEnquiry", function(e) {
	var id = $(this).attr("id");	
	var a_delete = "delete";
	if (confirm('Are you sure you want to delete this Enquiry?')) {
		$.ajax({
			type : "POST",
			url : "model/enquiryManage.php",
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
