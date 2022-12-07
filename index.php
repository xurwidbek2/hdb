<?php session_start();
if(isset($_SESSION["isloggedIn"]) && $_SESSION["isloggedIn"]){
  header("Location: dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Log__in</title>
</head>
<body>
  <div class="login__box">
    <h2>Login</h2>
    <div class="col-12">
    <?php if(isset($_SESSION["message"])) : ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo $_SESSION["message"]; ?>
                </div>
                <?php endif; unset($_SESSION["message"]); ?>
    <form action="page.php" method="post">
      <!-- username -->
      <div class="user__box">
        <input type="text" id="text" name="username" required>
        <label for="text">Username:</label>
        <span id="err"></span>
      </div>
      <!-- pass -->
      <div class="user__box">
        <input type="password" id="password" name="password" required>
        <label for="password">Password:</label>
        <span id="err2"></span>
      </div>
      <!-- button submit -->
      <button id="btn" type="submit">Submit</button>
    </form>
    </div>
  </div>


  <!-- script link -->
  <script src="js/script.js"></script>
</body>
</html>