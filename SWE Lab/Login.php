<!-- http://localhost/phpmyadmin/index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index CSS</title>
    <link rel="stylesheet" href="css/login_style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>
    
    <div class="title">
        <img src="images/logo2-.png" alt="Error" >
        <!-- <u><b>V A S P </b></u> -->
    </div>

    <div class="login_box">
        <img src="images/User_Avatar_2.png" alt="Error" height="120">
        
        <h3>Login</h3>
        <form method="POST" action="#">
            <div class="txtbox">
                <span></span>
                <input class="txtbox" type="text" required placeholder="Username" >
            </div>
            <div class="txtbox">
                 <span></span>
                <input type="password" class="txtbox" required placeholder="Password"></input>
            </div>
            <div>
                <input type="submit" value="Sign in">
            </div>
            <br>
            <div class="error">
                <p>Invalid</p>
            </div>
            <div class="forgot">
                Forgot Password ?
            </div>
        </form>
    </div>

    <footer>
        <!-- <span class="footnote"><u>VASP</u></span> -->
        <div class="footer-content">
            <span>Copyright &copy;. VASP and co. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>