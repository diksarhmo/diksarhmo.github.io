<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header>
        <img src="./1/logo1.png"></img>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnlogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">

        <span class="icon-close"><ion-icon name="close"></ion-icon></span>

        <div class="form-box login">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                        </span>
                    <input type="Username" placeholder="Username" name="Username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" name="Password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" value="Login" name="login-btns" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon>
                        </span>
                    <input type="Text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                        </span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree terms & conditions</label>
                    
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>



    
    <script src="login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login-btns'])){
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $sql="SELECT * FROM logindiksar.detaillogin1 WHERE Username = '$Username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['Password'];
        if($Password == $resultPassword){
            header('Location:index.html');
        }else{
            echo "<script> 
                alert('Login Unsuccessful'); 
            </script>";
        }
    }
}
?>