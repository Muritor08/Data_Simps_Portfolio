<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "wp");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $user_name =  $_REQUEST['user'];
        $Email = $_REQUEST['email'];
        $Pass =  $_REQUEST['pswd'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO register  VALUES ('$user_name', 
            '$Email','$Pass')";
          
        if(mysqli_query($conn, $sql)){
            
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/signupsuccessful.css">
    <title>Signup | Portfolio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,700;1,400;1,700&display=swap');
    </style>
</head>

<body>
    <header>
        <nav>
            <div>
                <ul class="navbar" style="font-weight: 600;">
                    <li class="navlist">
                        <a href="index.html"><img src="assets/logo.png" class="logo"></a>
                    </li>
                    <li class="navlist" style="float:right"><a href="about.html">About Us</a></li>
                    <li class="navlist" style="float:right"><a href="login.html" class="active">Account</a></li>
                    <li class="navlist" style="float:right"><a href="index.html">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <br><br><br><br>
    <center>
        <form name="f1" action="login.html" method="POST">
            <div class="form">
                <div>
                    <img src="assets/Avatar.png" alt="Avatar" class="Avatar" height="100%" width="100%">
                </div>
                <div class="title">
                    Congrats
                </div>
                <div class="subtitle">
                    Signup successful!
                </div>


                <button type="text" class="submit" style="vertical-align: middle;">Go to Login</button>

            </div>
        </form>
        <p style="text-align:center; font-size:25px;margin-top: 115px;margin-bottom: 25px;">

            <span><b>Let&#39;s Work Together :)</b></span>
        </p>
    </center>


    <footer>
        <br>
        <div aria-disabled="false" class="flist">
            <a data-testid="linkElement" href="https://www.behance.net/" target="_blank" rel="noopener" class="alist"
                aria-disabled="false">
                <span>
                    Behance
                </span>
            </a>
        </div>
        <div aria-disabled="false" class="flist">
            <a data-testid="linkElement" href="https://www.instagram.com/" target="_blank" rel="noopener" class="alist"
                aria-disabled="false">
                <span>
                    Instagram
                </span>
            </a>
        </div>
        <div aria-disabled="false" class="flist">
            <a data-testid="linkElement" href="https://www.linkedin.com/" target="_blank" rel="noopener" class="alist"
                aria-disabled="false">
                <span>
                    Linkedin
                </span>
            </a>
        </div>
        <br>
        <br>

        <div data-testid="richTextElement">
            <p class="font_7" style="text-align:center;font-size:17px;color: white;">
                <span class="color_11">
                    <a data-auto-recognition="true" href="mailto:kamalspamemail8@gmail.com"
                        style="text-decoration: none;color: white;">
                        datasimps@gmail.com
                    </a>??? &nbsp;| &nbsp;Phone:
                    <span style="font-size:15px">
                        +91 9988776655
                    </span>
                </span>
            </p>
        </div>

        <div data-testid="richTextElement">

            <p class="font_9" style="line-height:1.4em;text-align:center;font-size:14px">
                <span class="color_11">
                    &copy; 2021 by Data Simps.
                </span>
            </p>
        </div>
    </footer>

</body>

</html>