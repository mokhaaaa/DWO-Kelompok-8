
 <?php

 if (!empty($_POST)) {

   $username = $_POST['username'];
   $password = $_POST['password'];

   if ($username == "admin" && $password == "admin") {
     header("location:pages/home.php");
   }
 }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>LOGIN</title>
</head>
<body>
    <section>
        <!--Form login-->
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input name="username"  required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input name="password" type="password" required>
                        <label for="">Password</label>
                    </div>
                    
                    <div class="button">
                    <input type="submit" name="submit" value="Login">
                    </div>
                    <!--Arahkan ke resgister-->
                    
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>