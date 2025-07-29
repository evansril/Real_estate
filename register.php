<?php
include('./includes/header.php');
include('./Database/connection.php');

//get the connection into the database

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $fname=trim(string: $_POST['fname']);
  $lname=trim(string: $_POST['lname']);
  $email=trim(string: $_POST['email']);
  $pnum=trim(string: $_POST['pnum']);
  $password=password_hash(trim(string: $_POST['password']), PASSWORD_DEFAULT); 



  //checking for existing user in the database
  $check=$conn->prepare("SELECT * FROM users WHERE email=?");
  $check->bind_param("s", $email);
  $check->execute();
  $check->store_result();

  if($check->num_rows > 0){
    //user already exists
    echo "User already exists";
  }else{
    //user does not exist, proceed with registration
    $stmt=$conn->prepare("INSERT INTO users (fnam, lname, email, phonenum, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fname, $lname, $email, $pnum, $password);
    if($stmt->execute()){
      echo "Registration successful";
    }else{
      echo "Registration failed";
    }
  }
}


?>
<body>
 <div class="wrapper">
   <form class="register-form" method="post" action="">
    <h2>Register</h2>
    <div class="form-group">
      <label for="name">First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
    </div>
     <div class="form-group">
      <label for="name">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="email">Phone Number</label>
      <input type="tel" id="pnum" name="pnum" placeholder="Enter your Phone Number" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <button type="submit">Register</button>
    </div>
    <div class="form-group">
      <p>Already have an account? <a href="login.php">Login</a></p>
  </form>
 </div>
</body>
</html>
