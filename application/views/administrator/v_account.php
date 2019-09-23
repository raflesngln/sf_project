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
			{ "data": "is_active"},
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
											<h3 class="m--font-brand">&nbsp;List accounts ( Users )</h3>
									</div>
									
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item" style="display: block;">
											<a href="#" onclick="modal_add_accounts()" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="m-menu__link-icon flaticon-user-add"></i>
													<span>accounts Baru</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
												<label for="pwd" style="margin-top: 5px"><strong>accounts name</strong></label>
												<select class="custom-select form-control" id="filter_accounts">
													<option selected="all">all</option>
												</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="pwd">&nbsp;</label>
												<select class="custom-select form-control">
													<option selected="">Filter By</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
										</div>
									</div>
									<div class="col-md-3">
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
									<div class="col-md-3">
										<div class="form-group">
											
											<textarea class="custom-select form-control" onkeyup="seacrhinput()" id="txtsearch" name="txtsearch" placeholder="Type Search"></textarea>
										</div>
									</div>


								</div>
							</div>
							
							<div class="m-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="tbl_status">
									<thead>
										<tr>

											<th>no</th>
											<th>pid</th>
											<th>username</th>
											<th>email</th>
											<th>is_active</th>
											<th>nm_company</th>
											<th>GroupName</th>
											<th>Is Active</th>
											<th>action</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
			<!-- ===============================MODAL=========================== -->
			<div class="modal fade" id="modal_accounts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<form action="javascript:void(0)" method="post" onsubmit="simpan_data()" id="form_accounts">
						<div class="modal-header">
							<h5 class="modal-title" id="labelmodal">Tambah accounts</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="accounts_code">Email</label>
										<input type="email" class="form-control" id="username" name="username" required="required">
										<input type="hidden" readonly="readonly" id="pid" name="pid">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="accounts_code">password</label>
										<input type="text" class="form-control" id="password" name="password" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="accounts_code">email</label>
										<input type="email" class="form-control" id="email" name="email" required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">is_active</label>
										<select id="is_active" name="is_active" class="form-control m-input select2" required="required">
											<option value="0">No</option>
											<option value="1">Yes</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="company">company</label>
										<select id="company" name="company" class="form-control m-input select2" style="width: 100%" required="required">
											
										</select>
									</div>
								</div>	
								<div class="col-md-6">
									<div class="form-group">
										<label for="role_menu">Role Menu</label>
										<select id="role_menu" name="role_menu" class="form-control m-input select2" style="width: 100%" required="required">
											
										</select>
									</div>
								</div>		


								<div class="col-md-9">
									<div class="form-group">
										<label for="remarks">remarks</label>
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
	
	// $('#company').select2({
    //        minimumInputLength: 0,
    //        allowClear: true,
    //        placeholder: 'Select bank',
    //        ajax: {
    //           dataType: 'json',
    //           url: '<?php echo site_url('Administrator/load_company')?>',
    //           delay: 800,
    //           data: function(params) {
	// 			  console.log(params);
  	// 			return {
	//                 search: params.term,
    //             }
    //           },
    //           processResults: function (data, page) {
    //           return {
    //             results: data
    //           };
    //         },
    //       }
    //   });

	  $("#company").select2({
              dropdownParent: $("#modal_accounts")
      });

	  $("#company").select2({
			tags: true,
			dropdownParent: $("#modal_accounts")
		});

});

function load_company(){
		$('#company').select2({
			minimumInputLength: 0,
			allowClear: true,
			placeholder: 'Select company',
			ajax: {
				dataType: 'json',
				url: '<?php echo site_url('Administrator/load_company')?>',
				delay: 800,
				data: function(params) {
					console.log(params);
					return {
						search: params.term,
					}
				},
				processResults: function (data, page) {
				return {
					results: data
				};
				},
			},
			
		});
}
function load_role_menu(){
		$('#role_menu').select2({
			minimumInputLength: 0,
			allowClear: true,
			placeholder: 'Select company',
			ajax: {
				dataType: 'json',
				url: '<?php echo site_url('Administrator/load_role_menu')?>',
				delay: 800,
				data: function(params) {
					console.log(params);
					return {
						search: params.term,
					}
				},
				processResults: function (data, page) {
				return {
					results: data
				};
				},
			},
			
		});

}
function modal_add_accounts(){
	load_company();
	load_role_menu();
	$("#modal_accounts").modal({backdrop: 'static',keyboard: false});
	$("#form_accounts").attr('onsubmit','simpan_data()');
	$("#form_accounts")[0].reset();
	$("#labelmodal").html("accounts Baru");
	$("#password").val('12345');
	$("#btnsave").html("Simpan accounts");
	$('#password').attr('required','required');
	$('#password').removeAttr('placeholder');
}

function simpan_data(){
 $("#modal_accounts").modal({backdrop: 'static',keyboard: false});
processing_modal();
  var formData = new FormData($("#form_accounts")[0]);
   $.ajax({
   type: "POST",
	url : "<?php echo site_url('Administrator/save_accounts')?>",
	data: formData,
	dataType: "json",
	cache: false,
	processData: false,
	contentType: false,
	success: function(data){
		console.log(data);
		var kode=data.code;
		if(kode==1){
			reload_tbl_status();
			stop_processing_modal();
			succes_notify(data.message);
			$("#form_accounts")[0].reset();
			$("#modal_accounts").modal('hide');
		} else{
				 error_notify(data.message);
				 stop_processing_modal();
		}
		  // $("#form_accounts").modal('hide');
		}
   }); 
}
function edit_data(pid){
	$("#form_accounts")[0].reset();
	$('#password').removeAttr('required');
	$('#password').attr('placeholder','Leave empty if not change password');
	load_company();
	load_role_menu();
 $("#modal_accounts").modal({backdrop: 'static',keyboard: false});
$("#labelmodal").html("Edit accounts");
$("#btnsave").html("Update accounts");
processing();
$("#form_accounts")[0].reset();
  $.ajax({ 
	  type: "POST",  
	  url: "<?php echo site_url('Administrator/detail_accounts')?>",  
	  data: {'pid':pid},  
	  dataType:"json",
	  success: function(data) {
			console.log(data.listdata);
			var list=data.listdata;
			var kode=data.code;
			if(kode==1){
					$("#modal_accounts").modal('show');
					stop_processing();
					$.each(list,function(i){
						console.log('hasil adalah '+list[i].pid);
						$("#username").val(list[i].username);
						$("#pid").val(list[i].pid);
						// $("#password").val(list[i].password);
						$("#email").val(list[i].email);
						$("#is_active").val(list[i].is_active);
						$("#remarks").val(list[i].remarks);
						$("#form_accounts").attr('onsubmit','update_data()');
					});
				   
			} else{
					stop_processing();
			}
	  }
  });      
}
function update_data(){
 $("#modal_accounts").modal({backdrop: 'static',keyboard: false});
processing_modal();
  var formData = new FormData($("#form_accounts")[0]);
   $.ajax({
   type: "POST",
	url : "<?php echo site_url('Administrator/update_accounts')?>",
	data: formData,
	dataType: "json",
	cache: false,
	processData: false,
	contentType: false,
	success: function(data){
		console.log(data);
		var kode=data.code;
		if(kode==1){
			reload_tbl_status();
			stop_processing_modal();
			succes_notify(data.message);
			$("#form_accounts")[0].reset();
			$("#modal_accounts").modal('hide');
		} else{
			 error_notify(data.message);
			 stop_processing_modal();
		} 
	 }
   });  
}


function nonactived_data(pid,is_active){
			processing();
			$.ajax({ 
				type: "POST",  
				url: "<?php echo site_url('Administrator/nonactive_user_account')?>",  
				data: {'pid':pid,'is_active':is_active},  
				dataType:"json",
				success: function(data) {
						console.log(data);
						var kode=data.code;
						if(kode==1){
								stop_processing();
								reload_tbl_status();
								warning_notify(data.message);
						} else{
								stop_processing();
						}
				}
			});

}

function nonactive_data(pid,is_active){
	swal({
		title:"Sure activation / Non-activation ini ?",
		text:"activation/non-activation data !",
		type:"warning",
		showCancelButton:!0,
		confirmButtonText:"Yes ! ",
		cancelButtonText:"No ",
		reverseButtons:!0}).then(function(e){
			e.value? nonactived_data(pid,is_active):
			"cancel"===e.dismiss&& $("#modal_accounts").modal('hide');
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