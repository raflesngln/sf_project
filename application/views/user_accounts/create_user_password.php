<!DOCTYPE html>

<html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic | Default Forms</title>
        <meta name="description" content="Default form examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
        <link href="<?php echo base_url() ?>assets/metronic/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="<?php echo base_url() ?>assets/metronic/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url() ?>assets/metronic/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="<?php echo base_url() ?>assets/metronic/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/metronic/demo/default/media/img/logo/favicon.ico" />
        <script type="text/javascript" src="<?php echo base_url();?>assets/pnotify/pnotify.custom.min.js"></script>
<link href="<?php echo base_url();?>assets/pnotify/pnotify.custom.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/pnotify/animate.css" media="all" rel="stylesheet" type="text/css" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">

       

            <!-- END: Header -->

            <!-- begin::Body -->
            <!-- <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"> -->

                <!-- BEGIN: Left Aside -->
               
                <!-- END: Left Aside -->
               <!-- konten -->
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                                
                                <!--begin::Portlet-->
                                <div class="m-portlet" style="margin-top: 32px;padding-top: 30px">
                                    
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title" id="info-msg">
                                                <div class="form-group m-form__group" id="info-msg">
                                                <!-- <div class="alert alert-success text-center" role="alert"> -->
                                                  <h3 class="m--font-info">  Create new password</h3>
                                                 
                                              </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!--begin::Form-->
                                    <form id="form_update" class="m-form m-form--label-align-right" method="post" action="javascript:void(0)" onsubmit="update_password()">
                                        <div class="m-portlet__body">
                                            <div class="m-form__section m-form__section--first" >
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">Please create new password:</h3>
                                                </div>
                                                <p><input type="hidden" id="emailmd5" name="emailmd5" value="<?=$email_md5;?>"></p>
                                                <p><input type="hidden" id="token" name="token" value="<?=$token;?>"></p>

                                                <div class="form-group m-form__group row">
                                                    <label class="col-lg-2 col-form-label">New Password:</label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control m-input" id="pass" name="pass" required="required" placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-lg-2 col-form-label">Retype New Password:</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control m-input" id="pass2" name="pass2" required="required" placeholder="retype">
                                                </div>
                                               
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions m-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-6">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!--end::Form-->
                                </div>

                            </div>
                        </div>
                    </div>
               <!-- konten -->
        </div>

        <script src="<?php echo base_url() ?>assets/metronic/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/metronic/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<script type="text/javascript">
function update_password(){
    processing();
      var formData = new FormData($("#form_update")[0]);
       $.ajax({
       type: "POST",
        url : "<?php echo site_url('login/update_password')?>",
        data: formData,
        dataType: "json",
        cache: false,
        processData: false,
        contentType: false,
        success: function(data){
            stop_processing();
            console.log(data);
            var kode=data.code;
            var text='';
            var label='';
            if(kode==1){
                $("#form_update")[0].reset();
                label='m--font-success';
                $("#form_update").empty();
            } else{
                label='m--font-danger';
            }
                text +='<h5 class="'+label+'">  <strong>INFO !</strong> '+data.message+'</h5>';
                    $("#info-msg").html(text);
         }
       });
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
        tbl_status.ajax.url('<?php echo site_url()?>master/master/list_company').load();
        // return false;
    } else {
        
    //var inputan=txt_search+"_"+tgl+"_"+column;
    if(nama !=''){
            tbl_status.ajax.url('<?php echo site_url()?>master/master/list_company/'+nama+"/"+date1+"/"+date2).load();
    } else {
            tbl_status.ajax.url('<?php echo site_url()?>master/master/list_company').load();        
    }

}

}
</script>
        <!--end::Global Theme Bundle -->
    </body>

    <!-- end::Body -->
</html>