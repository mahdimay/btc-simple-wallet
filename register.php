<?PHP
include_once('config.php');
if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['user'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $sql = "SELECT user, pass, email FROM users WHERE user='$user'";
    $sql2 = "SELECT user, pass, email FROM users WHERE email='$email'";
    $result = $con->query($sql);
    $result2 = $con->query($sql2);
    if ($result->num_rows > 0){
        echo "Sorry, but the username you've choosed has been used. Please choose another username.";
    } else{
        if ($result2->num_rows > 0){
            echo "Sorry, but the email you've choosed has been used.";
        } else{
            $sql3 = "INSERT INTO users (user, pass, email) VALUES ('$user', '$pass', '$email')";
            echo "Account Successfully created!";
            if ($con->query($sql3) === TRUE){
                
            }
            
        }
    }
}