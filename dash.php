<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?PHP
    session_start();
   $filename = basename($_SERVER['REQUEST_URI']);

if ($_SESSION['login']==1){
    ?>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Simple BTC Wallet</title>
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
         .widget{
             width:320px;
                 display: inline-block;
    text-align: center;

            
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
                 

  <li class="active-link">
                        <a href="dash.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    <li>
                        <a href="address.php"><i class="fa fa-book "></i>Addresses</a>
                    </li>
                    <li>
                        <a href="withdraw.php"><i class="fa fa-paper-plane "></i>Withdraw</a>
                    </li>
                    <li>
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
                    <div class="col-lg-12">
                     <h2>Dashboard</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome <?PHP session_start(); echo $_SESSION['user']; ?>!</strong> 
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                  <?PHP
                  include_once('config.php');
                  $user = $_SESSION['user'];
                  echo "<p>Balance is updated and recorded in database every minute.</p>";
                  $sql = "SELECT total FROM users WHERE user='$user'";
                  $result = $con->query($sql);
                  
                  while($row = $result->fetch_assoc()){
                      $balance = $row['total'];
                      
                  }
                  echo "<p>Current Balance: $balance BTC</p>";
                  ?>
                  <div class="widget">
                      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                  
                  </div>
                   
                  <div class="widget">
                      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1027" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                  </div>
                            
                     
                     <div class="widget">
                      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="52" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                  
                  </div>
                  <div class="widget">
                      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1831" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                  
                  </div>
                  <div class="widget">
                      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="1765" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                  
                  </div>
                  <div class="widget">
                      <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script><div class="coinmarketcap-currency-widget" data-currencyid="2" data-base="USD" data-secondary="" data-ticker="true" data-rank="true" data-marketcap="true" data-volume="true" data-stats="USD" data-statsticker="false"></div>
                  
                  </div>
                  </div>
              </div>
                 <!-- /. ROW  -->   
				 
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <div id="alert">
            
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
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 yourdomain.com | Theme by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a> | Script by: <a href="http://megacrypto.online" style="color:#fff;" target="_blank">Megacrypto</a>
                </div>
            </div>
        </div>
          

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