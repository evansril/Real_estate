<?php
include('./includes/header.php');
include('./Database/connection.php')
?>
   
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username or Email</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit" class="login-btn">Login</button>
      <div class="bottom-text">
        Don't have an account? <a href="#">Register</a>
      </div>
    </form>
  </div>
</body>
</html>
