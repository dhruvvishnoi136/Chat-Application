<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "head.php"; ?>
<body>
  <div class = "outer">
    <?php include_once "header.php"; ?>
    <div class="wrapper">
      <section class="form login">
        <header>JSchats</header>
        <h2 class = "heading Login">Login</h2>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Login">
          </div>
        </form>
        <div class="link">Not yet signed up? <a href="signup.php">Signup now</a></div>
      </section>
    </div>
      <?php include_once "footer.php"; ?>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  
</body>
</html>
