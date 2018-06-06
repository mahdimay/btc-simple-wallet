<?PHP
session_start();
include_once('config.php');
$url = $_SESSION['url'];
$user = $_POST['user'];
$pass = $_POST['pass'];
if (isset($_POST['user']) && isset($_POST['pass'])){
$sql = "SELECT user, pass FROM users WHERE user='$user' AND pass='$pass'";
$result = $con->query($sql);
if ($result->num_rows > 0){
    $_SESSION['login'] = 1;
    $_SESSION['user'] = "$user";
    if (isset($_SESSION['url'])){
    

 echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    } else{
       echo '<meta http-equiv="refresh" content="0;url=dash.php" />';
    }
} else{
    echo "Username or password is wrong. Try again.";
}
}