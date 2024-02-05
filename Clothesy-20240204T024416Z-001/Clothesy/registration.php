<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet"></head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
   <body>
    <div class="main">
      <div class="container a-container" id="a-container">
        <form class="form" id="a-form" method="" action="">
          <h2 class="form_title title">Create Account</h2>
            <input type="text" class="form__input" name="username" placeholder="Username" required />
            <input type="text" class="form__input" name="email" placeholder="Email Adress">
            <input type="password" class="form__input" name="password" placeholder="Password">
            <p class="link">Already have an account? <a href="login.php">Login here</a></p>
            <input type="submit" name="submit" value="Register" class="form__button button submit">
        </form>

      </div>
      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="" action="">
          <h2 class="form_title title">Sign in to Website</h2>
          <input type="text" class="form__input" name="username" placeholder="Username" required />
          <input type="text" class="form__input" name="email" placeholder="Email Adress">
          <input type="submit" name="submit" value="Login" class="form__button button submit">
        </form>
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Hi There</h2>
          <div class="middle_letter">Welcome To !</div>
          <h3 class="logo"><img src="logo.png" alt=""></h3>
        </div>
      </div>
    </div>
  </body>
<?php
    }
?>
</body>
</html>
