<?php
include('./includes/header.php');
include('./Database/connection.php');
?>
   
<body>
  <div class="wrapper">
    <form class="register-form">
    <h2>Login</h2>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <button type="submit">Login</button>
    </div>
    <div class="form-group">
      <p>Don't have an account? <a href="register.php">Register</a></p>
  </form>
  </div>
</body>
</html>

