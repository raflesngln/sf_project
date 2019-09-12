<style type="text/css">
	.modal .modal-content {
    border: 0;
    border-radius: 0;
    border-radius: 4px;
    width: 140%;
    left: -19%;
}

span.select2-container {
    z-index:10050 !important;
}

</style>
<link href="<?php echo base_url();?>assets/metronic/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/metronic/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/pnotify/pnotify.custom.min.js"></script>
<link href="<?php echo base_url();?>assets/plugins/pnotify/pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/plugins/pnotify/animate.css" media="all" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var tbl_status;
 $(document).ready(function() {    
    
          tbl_status = $('#tbl_status').DataTable({ 
            "processing": true, //Feature control the processing indicator.
			"bInfo": true,
			"bFilter":false,
			"lengthChange": false,
			//"order":[[4,"desc"],[3,"desc"],[1,"asc"]],
 "lengthMenu": [[10, 60, 100, -1], [10, 60, 100, "All"]],
            "serverSide": true, //Feature control DataTables' server-side processing mode
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('administrator/list_accounts')?>",
                "type": "POST",
            },
            "columns": [
            { "data": "no","orderable":false,"visible":true },
			{ "data": "pid"},
			{ "data": "username"},
            { "data": "email"},
            { "data": "is_active"},
            { "data": "nm_company"},	
			{ "data": "GroupName"},	
			{ "data": "action","orderable":false,"visible":true}

            ]
          });  
  
$('#tbl_status tbody').on('click', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = tbl_status.row(tr);
		   var id=row.data().pid;
		   // edit_data(id);
    //Redirect if click
    //window.location.href = "<?php echo base_url();?>hawb/Awb/awb_detail/"+row.data().Hawb;
	//sidebarNonAktif();
     });
});

//reload/refresh table list
function reload_tbl_status()
    {
      tbl_status.ajax.reload(null,false); //reload datatable ajax 
    }

  </script>


<!-- ============================================================ -->
<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
											<h3 class="m--font-brand">&nbsp;Manage Role Access </h3>
									</div>
									
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<!-- <li class="m-portlet__nav-item" style="display: block;">
											<a href="#" onclick="modal_add_accounts()" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="m-menu__link-icon flaticon-user-add"></i>
													<span>accounts Baru</span>
												</span>
											</a>
										</li> -->
									</ul>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
												<label for="pwd" style="margin-top: 5px"><strong>Group Name</strong></label>
												<select class="custom-select form-control" id="group_name" onchange="get_menu_active()">
												<option value="">Select Group</option>
													<!-- <?php
													foreach($group_name as $row){
													?>
													<option value="<?php echo $row->pid ;?>"><?php echo $row->GroupName ;?></option>
														<?php } ?> -->
												</select>
										</div>
									</div>
									<div class="col-md-3" style="visibility:visible;">
										<div class="form-group">
											<p for="pwd">&nbsp;</p>
												<button class="btn btn m-btn--pill btn-primary" onclick="add_group()"><i class="flaticon-plus"></i>&nbsp; Add Group Name</button>
										</div>
									</div>
									<div class="col-md-3" style="visibility:hidden">
										<div class="form-group">
											<label for="pwd">&nbsp;</label>
												<select class="custom-select form-control">
													<option selected="">Start with</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
										</div>
									</div>
									


								</div>
							</div>

							<div class="col-md-12" style="padding-bottom:50px;padding-top:50px">
								<div class="row">
									<div class="col-md-6" id="box1">
											<table class="table m-table m-table--head-bg-primary" id="tbl1">
												<thead>
													
													<tr>
														<th>#</th>
														<th>All Menu</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<!-- contents all -->
												</tbody>
											</table>
									</div>
									<div class="col-md-6" id="box2">
											<table class="table m-table m-table--head-bg-danger" id="tbl2">
												<thead>
													
													<tr>
														<th>#</th>
														<th>Active Menu</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<!-- contents -->
												</tbody>
											</table>
									</div>
								</div>
							</div>
							
							
						</div>
			<!-- ===============================MODAL=========================== -->
			<div class="modal fade" id="modal_group" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-xs" role="document">
					<div class="modal-content">
						<form action="javascript:void(0)" method="post" onsubmit="simpan_group()" id="form_group">
						<div class="modal-header">
							<h5 class="modal-title" id="labelmodal">Tambah Group</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="group_name">Group Name</label>
										<input type="text" class="form-control" id="txt_group_name" name="txt_group_name" required="required">
										<input type="hidden" readonly="readonly" id="pid_group" name="pid_group">
									</div>
								</div>
								<div class="col-md-9">
									<div class="form-group">
										<label for="remarks">Remarks</label>
										<textarea name="remarks" id="remarks" columns="5" style="min-height:100px" class="custom-select form-control" placeholder="Type Search"></textarea>
									</div>
									
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" id="btnsave">Save accounts</button>
						</div>
						</form>
					</div>

				</div>
			</div>

<script type="text/javascript">
$(document).ready(function(){
	load_all_menu();
	load_group_menu();
});

function add_group(){
	$("#modal_group").modal({backdrop: 'static',keyboard: false});
	$("#form_group").attr('onsubmit','simpan_group()');
	$("#form_group")[0].reset();
	$("#labelmodal").html("New Group");
	$("#btnsave").html("Simpan Group");
}

function get_menu_active(){
	processing();
	var id_menu=$("#group_name").val();
		  $.ajax({ 
			  type: "POST",  
			  url: "<?php echo site_url('Administrator/load_menu_active')?>",  
			  data: {'id_menu':id_menu},  
			  dataType:"json",
			  success: function(data) {
			  	stop_processing();
					console.log(data.list);
					var list=data.list;
					var text='';
					var no=0;
					for(var i=0; i < list.length;i++){
						no++;
						text +='<tr>'
							+'<th scope="row">'+no+'</th>'
							+'<td>'+list[i].title+'</td>'
							+'<td><a href="#" onclick="delete_menu_role('+list[i].id_menu+')"><i class="flaticon-circle fa-2x"></i></a></td>'
							+'</tr>';
					}
					$("#tbl2 tbody").html(text);
			  }
		  });
}
function load_all_menu(){
	var id_group=$("#group_name").val();
		processing();
		var idmenu='0';
		  $.ajax({ 
			  type: "POST",  
			  url: "<?php echo site_url('Administrator/load_menu_role')?>",  
			  data: {'id_group':id_group},  
			  dataType:"json",
			  success: function(data) {
					stop_processing();
					var list=data.list;
					var text='';
					var no=0;
					for(var i=0; i < list.length;i++){
						no++;
						text +='<tr>'
							+'<th scope="row">'+no+'</th>'
							+'<td>'+list[i].title+'</td>'
							+'<td><a href="#" onclick="add_menu('+list[i].id_menu+')"><i class="flaticon-plus fa-2x"></i></a></td>'
							+'</tr>';
					}
					$("#tbl1 tbody").html(text);

			  }
		  });
}
function load_group_menu(){
	var id_group='';
		processing();
		  $.ajax({ 
			  type: "POST",  
			  url: "<?php echo site_url('Administrator/load_group_menu')?>",  
			  data: {'id_group':id_group},  
			  dataType:"json",
			  success: function(data) {
			  	var text='';
			  	$("#group_name").empty();
			  	$("#group_name").append('<option value="">Select Group</option>');
					stop_processing();
					for(var i=0; i < data.length;i++){
						text +='<option value="'+data[i].id+'">'+data[i].text+'</option>';
					}
					$("#group_name").append(text);
					

			  }
		  });
}

function add_menu(id){
	var id_menu=id;
	var id_group=$("#group_name").val();
		processing();
		var idmenu='0';
		  $.ajax({ 
			  type: "POST",  
			  url: "<?php echo site_url('Administrator/add_menu_group')?>",  
			  data: {'id_menu':id_menu,'id_group':id_group},  
			  dataType:"json",
			  success: function(data) {
			  	get_menu_active();
				load_all_menu();
				stop_processing();
				if(data.code=='1'){
					succes_notify(data.message);
				} else{
					error_notify(data.message);
				}

			  }
		  });

}
function delete_menu_role(id){
	var id_menu=id;
	var id_group=$("#group_name").val();
		processing();
		var idmenu='0';
		  $.ajax({ 
			  type: "POST",  
			  url: "<?php echo site_url('Administrator/delete_menu_group')?>",  
			  data: {'id_menu':id_menu,'id_group':id_group},  
			  dataType:"json",
			  success: function(data) {
			  	get_menu_active();
				load_all_menu();
				stop_processing();
				if(data.code=='1'){
					succes_notify(data.message);
				} else{
					error_notify(data.message);
				}

			  }
		  });

}



function simpan_group(){
	 	$("#modal_group").modal({backdrop: 'static',keyboard: false});
		processing_modal();
	  	var formData = new FormData($("#form_group")[0]);
	   $.ajax({
	   type: "POST",
		url : "<?php echo site_url('Administrator/save_group_name')?>",
		data: formData,
		dataType: "json",
		cache: false,
		processData: false,
		contentType: false,
		success: function(data){
			console.log(data);
			var kode=data.code;
			if(kode==1){
				load_group_menu();
				stop_processing_modal();
				succes_notify(data.message);
				$("#form_group")[0].reset();
				$("#modal_group").modal('hide');
			} else{
					 error_notify(data.message);
					 stop_processing_modal();
			}
			  // $("#form_group").modal('hide');
			}
	   }); 
}


function refresh_data(){
// alert('aa');
reload_tbl_status();
}

// Loading process and Toast
function warning_notify(message){
new PNotify({
	title: 'Non-Aktif',
	delay: 6000,
	text: message,
	type:'warning',
	animate: {
		animate: true,
		in_class: 'slideInDown',
		out_class: 'slideOutUp'
	}
});
}

function succes_notify(message){
new PNotify({
	title: 'Succes',
	delay: 6000,
	text: message,
	type:'success',
	animate: {
		animate: true,
		in_class: 'slideInDown',
		out_class: 'slideOutUp'
	}
});
}
function error_notify(message){
new PNotify({
	title: 'Error',
	delay: 3000,
	text: message,
	type:'error',
	animate: {
		animate: true,
		in_class: 'zoomInLeft',
		out_class: 'zoomOutRight'
	}
});
}

function processing_modal(){
mApp.block("#modal_accounts .modal-content", {
			overlayColor: "#000000",
			type: "loader",
			state: "primary",
			message: "Processing..."
		});
}

function stop_processing_modal(){
	setTimeout(function() {
			mApp.unblock("#modal_accounts .modal-content")
		}, 800)
}

function processing(){
	mApp.blockPage({
	overlayColor:"#000000",
	type:"loader",state:"primary",
	message:"Processing..."
  });
}

function stop_processing(){
	setTimeout(function(){
		mApp.unblockPage()
	},1000);
}

function seacrhinput(){
var nama=$("#txtsearch").val();
var date1='0';
var date2='0';
	//alert(txt_search);
if(nama==''){
	tbl_status.ajax.url('<?php echo site_url()?>master/master/list_accounts').load();
	// return false;
} else {
	
//var inputan=txt_search+"_"+tgl+"_"+column;
if(nama !=''){
		tbl_status.ajax.url('<?php echo site_url()?>master/master/list_accounts/'+nama+"/"+date1+"/"+date2).load();
} else {
		tbl_status.ajax.url('<?php echo site_url()?>master/master/list_accounts').load();		
}

}

}


	</script>