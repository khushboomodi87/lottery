<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Try Your Luck</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/admin_style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!--//CSS-->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" type="text/css" media="all">
</head>

<body>
    <!--Header-->
    <h1 class="title-agile text-center">Try Your Luck</h1>
    <!--//Header-->
		<?php if(isset($_SESSION['password_updated'])): ?>
		    <script>alert("<?php echo $_SESSION['password_updated']; ?>")</script>
			<?php unset($_SESSION['password_updated']); ?>
		<?php endif; ?>
    <!--Body-->
    <?php if($this->session->userdata('ulogged_in')): ?>
        <a class="btn btn-primary pull-right" href="<?php echo base_url();?>Admin/Admin/logout" >Logout</a>
        <a class="btn btn-primary pull-right" href="<?php echo base_url();?>Admin/Admin/change_password" >Change Password</a>
        <a class="btn btn-primary pull-right" href="<?php echo base_url();?>admin" >Home</a>
        <div class="clearfix"></div>
        <?php 
            $this->load->view("Admin/$main_view");
            //$this->load->view('Admin/Logout/logout');
        ?>
    <?php else: ?>

        <?php 
            $this->load->view('Admin/Login/login_view');
        ?>
    <?php endif; ?>
    
    <!--//Body-->

     <!-- Footer-->
    <?php 
        $this->load->view('Admin/Layout/footer_view');
    ?>
     <!-- //Footer-->
    <script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
  <!-- script for show password -->
   
      <script>
        $(".toggle-password").click(function () {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <!-- /script for show password -->

</body>
<!-- //Body -->

</html>