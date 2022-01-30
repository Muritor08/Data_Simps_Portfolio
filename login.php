<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "wp";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	$username = $_POST['user'];  
    $Pass = $_POST['pswd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $Pass = stripcslashes($Pass);  
        $username = mysqli_real_escape_string($con, $username);  
        $Pass = mysqli_real_escape_string($con, $Pass);  
      
        $sql = "select * from register where user = '$username' and pswd = '$Pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
        }  
        else{  
            echo "<script language='javascript'>
            alert('Please enter correct credentials!!');
            window.location.href='login.html';
       </script>";
        }     
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/loginsuccessful.css ">
    <title>Login | Portfolio</title>
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
        <form name="f1" action="index.html" method="POST">
            <div class="form">
                <div>
                    <img src="assets/Avatar.png" alt="Avatar" class="Avatar" height="100%" width="100%">
                </div>
                <div class="title">
                    Congrats
                </div>
                <div class="subtitle">
                    Login successful!
                </div>


                <button type="text" class="submit" style="vertical-align: middle;">Go back to Home </button>

            </div>
        </form>
        <p style="text-align:center; font-size:25px;margin-top: 115px;margin-bottom: 25px;">

            <span><b>Let&#39;s Work Together :)</b></span>
        </p>
    </center>


    <footer>
        <br>
        <div aria-disabled="false" class="flist">
            <a data-testid="linkElement" href="https://www.behance.net/" target="_blank" rel="noopener" class="alist" aria-disabled="false">
                <span>
                  Behance
              </span>
            </a>
        </div>
        <div aria-disabled="false" class="flist">
            <a data-testid="linkElement" href="https://www.instagram.com/" target="_blank" rel="noopener" class="alist" aria-disabled="false">
                <span>
                  Instagram
              </span>
            </a>
        </div>
        <div aria-disabled="false" class="flist">
            <a data-testid="linkElement" href="https://www.linkedin.com/" target="_blank" rel="noopener" class="alist" aria-disabled="false">
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
                  <a data-auto-recognition="true" href="mailto:kamalspamemail8@gmail.com" style="text-decoration: none;color: white;">
                      datasimps@gmail.com
                  </a>​ &nbsp;| &nbsp;Phone: 
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


