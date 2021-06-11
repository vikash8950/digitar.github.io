<!DOCTYPE html>
<html>
<head>
  <title>Project</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/simple-sidebar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pinpad/external/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pinpad/dist/jquery.ui.pinpad.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pinpad/style.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js?v=1.2"></script>

	<style type="text/css">
	#page-content-wrapper{
		margin-top: 59px;
	}
    .btn-orange{
        background-color: #676700 !important;
        color: #fff;
        font-weight: 700;
        border:none;
        padding: 10px 15px;
    }
    .padding0{
      padding: 0 !important;
    }
    .pre-box{
      height: 163px;
      width: 450px;
      background-color: #fff;
      border-color: 3px solid;
      border-style: dashed;
      border-color: #ddd;
      border-radius: 5px;
      text-align: center;
    }
    .pre-box-text{
      padding-top: 7px;
    }
    .pre-box-text p{
      color: #ddd;
      margin: 0;
    }
        div.bhoechie-tab-content{
      padding-left: 20px;
      padding-top: 10px;
      }
    .padding0{
      padding: 0 !important;
    }
    .other-row{
      margin-top: 20px;
    }
    .bhoechie-tab-content .form-control,.other-row{
      margin-top: 20px;
    }
</style>
</head>
<body>
	<?php $this->load->view('nav-view');

	 ?>
	 <div id="wrapper" >
        <!-- /#sidebar-wrapper -->
		<div id="page-content-wrapper">
		  <div class="container-fluid">

        <div id="loader_modal" class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-sm" style="margin-top: 15%;">
                <div class="modal-content" style="width: 48px; background-color: transparent; border: 0px !important; box-shadow: 0px 0px black !important;">
                    <span style="color: #3e7ddc; font-size: 100px;" class="fa fa-spinner fa-spin fa-3x"></span>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-8 col-md-8">
            <?php $this->load->view($module); ?>
          </div>
          <div class="col-lg-2 col-md-2"></div>
        </div>

		  </div>
		</div>
	</div>
</body>
<script type="text/javascript">
  var base_url = '<?php echo base_url(); ?>';
</script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/pinpad/external/jquery-ui/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>assets/pinpad/dist/jquery.ui.pinpad.js"></script>
  <script src="<?php echo base_url(); ?>assets/pinpad/dist/jquery.ui.pinpad.extension.js"></script>
  <script src="<?php echo base_url(); ?>assets/DataTables/datatables.min.js?v=1.2"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
		        e.preventDefault();
		        $(this).siblings('a.active').removeClass("active");
		        $(this).addClass("active");
		        var index = $(this).index();
		        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
		    });
		});
        $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });
    </script>

</html>