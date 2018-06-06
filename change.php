<?PHP
include_once('config.php');
$pass = $_POST['curpass'];
$npass = $_POST['npass'];
$rnpass = $_POST['rnpass'];
$user = $_POST['user'];
if (isset($_POST['curpass']) && isset($_POST['npass'])){
$sqlpass = "SELECT pass FROM users WHERE user='$user' AND pass='$pass'";
$result= $con->query($sqlpass);
if ($result->num_rows > 0){
    if ($rnpass == $npass){
    $sql = "UPDATE users SET pass='$npass' WHERE user='$user'";
if($con->query($sql) === TRUE){
    echo "Password successfully changed!";
}else{
    echo "There was a problem. Please try again.";
}
    }
} else{
    echo "The password is wrong. Try again.";
}
}
