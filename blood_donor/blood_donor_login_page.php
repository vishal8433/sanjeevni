<!DOCTYPE html>
<?php include("blood_donor_login_page_script.php")?>
<html>
<head>
    <title>Sanjeevni.com/blood_donor_log_in_page</title>
    <!--required meta tag-->
    <meta charset="utf-8">
    <link rel="icon" href="../image/logoimg.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/blood_donor_login_page_stylesheet.css">
    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light  bg-dark">
        <button class="navbar-toggler navbar-toggler-right dropdown" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img class="img-fluid logoimg" src="../image/logoimg.jpg">
            <h7 class="brand-name"><b>Sanjeevni</b></h7>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item item1 active"><a href="../index.php">
                        <button class="contactbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Home</b></button></a>
                </li>
                <li class="nav-item item2 active">
                    <a href="../chatbot.html"> <button class="loginbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Chatbot</b></button></a>
                </li>
                <li class="nav-item item3 active"><a href="../login_signup_page.php">
                        <button class="signbtn btn-outline-success my-2 my-sm-0" type="submit"><b>Sign In/up</b></button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-12">
    <div class="row maincontainer">
    <div class="container-fluid contactform">
        <div class="contact-title">
            <h1 class="loginline"><b>Blood Donor Log In</b></h1>
            <h2 class="logintag">Sanjeevni is always ready<br>to serve you!</h2>
        </div>
        <div class="contact-form">
            <form  action="" method="post">
                <input name="email" type="email" class="form-control" placeholder="your email" autocomplete="off" required><br>
                <input name="password" type="password" class="form-control" placeholder="password" required><br>
                <input name="login" type="submit" class="submit" value="Log In">
            </form>
        </div>
    </div>
        </div>
        </div>
        </div>
    </div>
    <footer>
        <div class="fluid-container f1">
            <div class="container-fluid ">
                <h1 class="infomationtag"><u>information</u></h1>
                <div class="row ourservicesrow">
                    <div class="col-sm-2 ourservices">
                        <h1 class="ourservicesheader"><b>our services :</b></h1>
                    </div>
                    <div class="col-sm-10 aboutmeparagraph">
                        <p class="ourservicesparagraph">Our website aims to provide the best and easy way of finding available beds in hospitals in your location. Also , doctor details , location of hospitals and extra details will be provided via sanjeevni website. By this website we make sure we provide you the details which are legal , eligible and important for our users. Via this website all important and required details can be accessed in one tap .Our services are reliable and trustworthy.</p>
                    </div>
                </div>
                <pre class="copyrightline"><i class="fa fa-copyright" aria-hidden="true"></i>copyright to sanjeevni.com,all rights reserved.</pre>
            </div>
        </div>
    </footer>
</body>
</html>
