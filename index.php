<?php
include('./includes/header.php');
include('./Database/connection.php');
?>

    <!-- header for project -->

<body>
        <header>
        <div class="house-header">
            <div class="house-container">
                <div class="logo"><a href="index.php">🏡Real Estate</a></div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#Property">Property</a></li>
                        <li><a href="#Land">Land</a></li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#Contact">Contact Us</a></li>
                        <a href="register.php" class="btn"><button>Register Now</button></a>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="word">
            <h1>Finding Your New</h1>
            <h1>Home Is Simple</h1>
            <br>
             <h3>
                  <h4>RealEstate.com is your go to destination for finding the</h4>
                  <h4>perfect rental home to suit your needs.</h4>
                  <h4>With thousands of property listings across Ghana</h4>
             </h3>
        </div>
        <br>
        <br>
        <div class="search_bar">
            <form action="">
                <input type="search" placeholder="search">
            </form>
        </div>
    </header>

</body>