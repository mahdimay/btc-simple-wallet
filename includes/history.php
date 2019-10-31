<?PHP
include_once('../config.php');
session_start();
$filename = basename($_SERVER['REQUEST_URI']);
if ($_SESSION['login']==1){

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>History | Simple BTC Wallet</title>
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

           <style>
.alert {
    padding: 20px;
    background-color: #0DD200;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>

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
                        <a href="dash.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>


                    <li>
                        <a href="address.php"><i class="fa fa-book "></i>Addresses</a>
                    </li>
                    <li>
                        <a href="withdraw.php"><i class="fa fa-paper-plane "></i>Withdraw</a>
                    </li>
                    <li class="active-link">
                        <a href="history.php"><i class="fa fa-history "></i>History</a>
                    </li>
                    <li>
                        <a href="settings.php"><i class="fa fa-gear "></i>Settings</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>History</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />


 <div id="alert">

 </div>

                   <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Receiver</th>
                                    <th>ID</th>
                                    <th>TX</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?PHP
                                $user = $_SESSION['user'];

                                $sql = "SELECT id,tx,receiver,amount FROM history WHERE user='$user'";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_assoc()){
                                    $amount = $row['amount'];
                                    $receiver = $row['receiver'];
                                    $id = $row['id'];
                                    $tx = $row['tx'];
                                    echo "<tr> <td>$amount</td><td>$receiver</td><td>$id</td><td><a href='https://blockchain.info/tx/$tx' target='_blank'>TX</a></td></tr>";
                                }
                                ?>

                            </tbody>
                        </table>

                 <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
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
