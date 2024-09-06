<?php
include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <link rel="stylesheet" href="src/css/signup.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>

    
    <div class="wrapper">
      <h1>Register</h1>
      <br />

      <form>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
          <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
          <input type="text" name="username" placeholder="Enter Username" class="curve" required><br>
          <input type="email" name="email" placeholder="Enter Email" class="curve" required><br>
          <input type="password" name="password" placeholder="Enter Password" class="curve" required><br>
          <button type="submit" name="btn-signup">SIGN UP</button>
      </form>

    
      
      <p class="or">----- or continue with -----</p>
      
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-github"></i>
        <i class="fab fa-facebook"></i>
      </div>

      <div class="not-member">
        <span style="font-family: verdana, geneva, sans-serif;">
          Already have an account? <a href="index.php">Login</a>
        </span>
      </div>
    </div>
  </body>
</html>
