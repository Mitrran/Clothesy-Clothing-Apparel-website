<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet"></head>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: home.html");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>

<body>
    <div class="main">
      <div class="container b-container" id="b-container">
        <form class="form" id="a-form" method="" action="">
          <h2 class="form_title title">Create Account</h2>
            <input type="text" class="form__input" name="username" placeholder="Username" required />
            <input type="text" class="form__input" name="email" placeholder="Email Adress">
            <input type="password" class="form__input" name="password" placeholder="Password">
            <p class="link">Already have an account? <a href="login.php">Login here</a></p>
            <input type="submit" name="submit" value="Register" class="form__button button submit">
        </form>

      </div>
      <div class="container a-container" id="a-container">
        <form class="form" id="b-form" method="post" action="">
        <h2 class="form_title title">Sign in to Website</h2>
        <input type="text" class="form__input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="form__input" name="password" placeholder="Password"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
        <input type="submit" value="Login" name="submit" class="form__button button submit"/>
        </form>
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back</h2>
          <div class="middle_letter"> To !</div>
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
