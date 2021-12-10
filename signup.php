<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "head.php"; ?>
<body>
  <div class ="outer">
    <?php include_once "header.php"; ?>
    <div class="wrapper">
      <section class="form signup">
        <header>JSchats</header>
        <h2 class = "heading signup">Sign Up</h2>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="name-details">
            <div class="field input">
              <input type="text" name="fname" placeholder="First name" required>
            </div>
            <div class="field input">
              <input type="text" name="lname" placeholder="Last name" required>
            </div>
          </div>
          <div class="field input">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input">
            <input type="password" name="password" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Sign Up">
          </div>
        </form>
        <div class="link">Already signed up?
          <a href="login.php">Login now</a>
        </div>
      </section>
    </div>
    <?php include_once "footer.php"; ?>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
