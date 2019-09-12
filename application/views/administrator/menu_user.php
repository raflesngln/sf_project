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
                "url": "<?php echo site_url('administrator/list_menu')?>",
                "type": "POST",
            },
            "columns": [
            { "data": "no","orderable":false,"visible":true },
			{ "data": "id_menu"},
			{ "data": "title"},
			{ "data": "url"},
            { "data": "icon"},
            { "data": "parent"},
            { "data": "has_child"},	
			{ "data": "is_parent"},
            { "data": "is_active"},	
			{ "data": "description"},	
			{ "data": "action","orderable":false,"visible":true}

            ]
          });  
  
$('#tbl_status tbody').on('click', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = tbl_status.row(tr);
		   var id=row.data().id_menu;
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
											<h3 class="m--font-brand">&nbsp;List menu </h3>
									</div>
									
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item" style="display: block;">
											<a href="#" onclick="modal_add_menu()" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="m-menu__link-icon flaticon-user-add"></i>
													<span>menu Baru</span>
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
												<label for="pwd" style="margin-top: 5px"><strong>menu name</strong></label>
												<select class="custom-select form-control" id="filter_menu">
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
											<th>id_menu</th>
											<th>title</th>
											<th>url</th>
											<th>icon</th>
											<th>parent</th>
											<th>has_child</th>
											<th>is_parent</th>
											<th>is_active</th>
											<th>description</th>
											<th>action</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
			<!-- ===============================MODAL=========================== -->
			<div class="modal fade" id="modal_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<form action="javascript:void(0)" method="post" onsubmit="simpan_data()" id="form_menu">
						<div class="modal-header">
							<h5 class="modal-title" id="labelmodal">Tambah menu</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="menu_code">id_menu</label>
										<input type="text" class="form-control" id="id_menu" name="id_menu">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="menu_code">title</label>
										<input type="text" class="form-control" id="title" name="title">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="menu_code">url</label>
										<input type="text" class="form-control" id="url" name="url">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="menu_code">icon</label>
										<input type="text" class="form-control" id="icon" name="icon">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="menu_code">parent</label>
										<select id="parent" name="parent" class="form-control m-input select2" required="required">
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="menu_code">has_child</label>
										<select id="has_child" name="has_child" class="form-control m-input select2" required="required">
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="company">is_parent</label>
										<select id="is_parent" name="is_parent" class="form-control m-input select2" required="required">
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="is_active">is_active</label>
										<select id="is_active" name="is_active" class="form-control m-input select2" required="required">
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="is_deleted">is_deleted</label>
										<select id="is_deleted" name="is_deleted" class="form-control m-input select2" required="required">
											<option value="0">No</option>
											<option value="1">Yes</option>
										</select>
									</div>
								</div>

								<div class="col-md-11">
									<div class="form-group">
										<label for="remarks">description</label>
										<textarea name="description" id="description" columns="3" style="min-height:70px" class="custom-select form-control" placeholder="Type Search"></textarea>
									</div>
									
								</div>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" id="btnsave">Save menu</button>
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
              dropdownParent: $("#modal_menu")
      });

	  $("#company").select2({
			tags: true,
			dropdownParent: $("#modal_menu")
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
function modal_add_menu(){
	load_company();
	$("#modal_menu").modal({backdrop: 'static',keyboard: false});
	$("#form_menu").attr('onsubmit','simpan_data()');
	$("#form_menu")[0].reset();
	$("#labelmodal").html("menu Baru");
	$("#btnsave").html("Simpan menu");
}

function simpan_data(){
 $("#modal_menu").modal({backdrop: 'static',keyboard: false});
processing_modal();
  var formData = new FormData($("#form_menu")[0]);
   $.ajax({
   type: "POST",
	url : "<?php echo site_url('Administrator/save_menu')?>",
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
			$("#form_menu")[0].reset();
			$("#modal_menu").modal('hide');
		} else{
				 error_notify(data.message);
				 stop_processing_modal();
		}
		  // $("#form_menu").modal('hide');
		}
   }); 
}
function edit_data(id_menu){
	load_company()
 $("#modal_menu").modal({backdrop: 'static',keyboard: false});
$("#labelmodal").html("Edit menu");
$("#btnsave").html("Update menu");
processing();
$("#form_menu")[0].reset();
  $.ajax({ 
	  type: "POST",  
	  url: "<?php echo site_url('Administrator/detail_menu')?>",  
	  data: {'id_menu':id_menu},  
	  dataType:"json",
	  success: function(data) {
			console.log(data.listdata);
			var list=data.listdata;
			var kode=data.code;
			if(kode==1){
					$("#modal_menu").modal('show');
					stop_processing();
					$.each(list,function(i){
						console.log('hasil adalah '+list[i].id_menu);
						$("#id_menu").val(list[i].id_menu);
						$("#title").val(list[i].title);
						$("#url").val(list[i].url);
						$("#icon").val(list[i].icon);
						$("#parent").val(list[i].parent);
						$("#has_child").val(list[i].has_child);
						$("#is_parent").val(list[i].is_parent);
						$("#is_active").val(list[i].is_active);
						$("#is_deleted").val(list[i].is_deleted);
						$("#description").val(list[i].description);

						$("#form_menu").attr('onsubmit','update_data()');
					});
				   
			} else{
					stop_processing();
			}
	  }
  });      
}
function update_data(){
 $("#modal_menu").modal({backdrop: 'static',keyboard: false});
processing_modal();
  var formData = new FormData($("#form_menu")[0]);
   $.ajax({
   type: "POST",
	url : "<?php echo site_url('Administrator/update_menu')?>",
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
			$("#form_menu")[0].reset();
			$("#modal_menu").modal('hide');
		} else{
			 error_notify(data.message);
			 stop_processing_modal();
		} 
	 }
   });  
}

function hapus_data(id_menu){
var conf=confirm('Yakin Non-aktif menu ini ?');
if(conf){
		processing();
		  $.ajax({ 
			  type: "POST",  
			  url: "<?php echo site_url('master/master/nonactive_menu')?>",  
			  data: {'id_menu':id_menu},  
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
mApp.block("#modal_menu .modal-content", {
			overlayColor: "#000000",
			type: "loader",
			state: "primary",
			message: "Processing..."
		});
}

function stop_processing_modal(){
	setTimeout(function() {
			mApp.unblock("#modal_menu .modal-content")
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
	tbl_status.ajax.url('<?php echo site_url()?>master/master/list_menu').load();
	// return false;
} else {
	
//var inputan=txt_search+"_"+tgl+"_"+column;
if(nama !=''){
		tbl_status.ajax.url('<?php echo site_url()?>master/master/list_menu/'+nama+"/"+date1+"/"+date2).load();
} else {
		tbl_status.ajax.url('<?php echo site_url()?>master/master/list_menu').load();		
}

}

}


	</script>