<!DOCTYPE html>
<?PHP
session_start();
$filename = basename($_SERVER['REQUEST_URI']);

if ($_SESSION['login']==1){
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>



    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <font color="white"><h1>Simple BTC Wallet</h1></font>
                </div>

                 <span class="logout-spn" >
                  <a id="logout" class="btn btn-danger btn-lg btn-block" style="color:#fff;">LOGOUT</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">




                    <li>
                        <a href="includes/dash.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>


                    <li>
                        <a href="includes/address.php"><i class="fa fa-book "></i>Addresses</a>
                    </li>
                    <li>
                        <a href="includes/withdraw.php"><i class="fa fa-paper-plane "></i>Withdraw</a>
                    </li>
                    <li>
                        <a href="includes/history.php"><i class="fa fa-history "></i>History</a>
                    </li>
                    <li class="active-link">
                        <a href="includes/settings.php"><i class="fa fa-gear "></i>Settings</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">

                            <input name="curpass" class="form-control" placeholder="Current Password" type="password"/>
                            <br>
<input name="npass" class="form-control" placeholder="New Password" type="password"/>
<br>
<input name="rnpass" class="form-control" placeholder="Re-enter New Password" type="password"/>
<input name="user" class="form-control"  type="hidden" value='<?PHP echo $_SESSION["user"]; ?>'/>
<br>
                            <a id="change" class="btn btn-danger btn-lg btn-block">Change</a>
                        </div>
                    </div>

                <!-- /. ROW  -->
                <hr />


                <!-- /. ROW  -->

            </div>
            </div>
            <div id="alert">

            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">

     <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 yourdomain.com | Theme by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a> | Script by: <a href="http://megacrypto.online" style="color:#fff;" target="_blank">Megacrypto</a>
                </div>
            </div>
        </div>
          <script>
       	$('#change').click(function() {

			 var user = $('input[name=user]').val();
			 var curpass = $('input[name=curpass]').val();
			 var npass = $('input[name=npass]').val();
			 var rnpass = $('input[name=rnpass]').val();
    $.ajax({
        url: 'change.php',
        type: 'POST',
        data: {
           user:user,
           curpass:curpass,
           npass:npass,
           rnpass:rnpass

        },
        success: function(data) {
           alert(data);

        }
    });
});
$('#logout').click(function() {


    $.ajax({
        url: 'logout.php',
        type: 'POST',
        data: {
           user:'h'

        },
        success: function(logout) {
      $("#alert").html(logout);


        }
    });
});
   </script>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
<?PHP
} else{
    $_SESSION['url'] = "$filename";
    echo '<meta http-equiv="refresh" content="0;url=index.php" />';
}
