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

<h1>Login</h1>
<input class="form-control" type="text" name="user" placeholder="Username">
<br>
<input type="password" class="form-control" name="pass" placeholder="Password">
<br>
<input type="submit" id="submit" class="btn btn-danger btn-lg btn-block" value="Login">
<br>
<h1>Register</h1>
<input class="form-control" type="text" name="username" placeholder="Username">
<br>
<input class="form-control" type="email" name="email" placeholder="Email">
<br>
<input type="password" class="form-control" name="password" placeholder="Password">
<br>
<input type="submit" id="reg" class="btn btn-danger btn-lg btn-block" value="Register">
<div id="alert">

</div>

<script>
    $('#submit').click(function() {

        var user = $('input[name=user]').val();
        var pass = $('input[name=pass]').val();
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: {
                user: user,
                pass: pass

            },
            success: function(data) {

                $("#alert").html(data);

            }
        });
    });
    $('#reg').click(function() {

        var user = $('input[name=username]').val();
        var pass = $('input[name=password]').val();
        var email = $('input[name=email]').val();
        $.ajax({
            url: 'register.php',
            type: 'POST',
            data: {
                user: user,
                pass: pass,
                email: email

            },
            success: function(data) {

                $("#alert").html(data);

            }
        });
    });
</script>