<?php

include("connection.php");
$obj = new connection(); 

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3A3A3A">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- CSS -->        
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <title>BAA</title>
    </head>
  <body>
    <header>
        <nav class="navbar navbar-light justify-content-between">
            <div class="container">
                <a href="signin.html" class="navbar-brand">
                    <img src="images/logo.svg" class="img-fluid" />
                </a>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-5"><a href="#" target="_blank">Need Help?</a></li>
                    <li class="list-inline-item"><a href="admin/newsfeed.html" class="text-orange" target="_blank">Admin</a></li>                  
                </ul>
            </div>
          </nav>
    </header>
    <main class="form-wrap">
        <section class="w-100">
            <div class="container">                
                <div class="row form-card">
                    <div class="col-md-6 text-center border-right px-1 px-md-5">
                        
                            <h2 class="form-title">Membership Category</h2>
                            <p class="sub-title">Register and be part of us</p>
                            <p class="sub-title mt-4 mb-0">You have Selected:</p>                                                       
                            <select class="selectpicker" id="exampleSelect1" data-style="btn-ps">
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>                                 
                            </select>
                           
                            <p class="mt-3">Facilitated Exports of above US $ 1 Million - Certified by <br> a Chartered Accountant.</p>
                            <div class="selected-package-info mb-4">
                                <h3>Rs. 12,000</h3>
                                <h4>Joining fee</h4>
                                <hr class="devider"/>
                                <h5>Rs. 6,000 Annual fee</h5>
                            </div>
                            <p class="mb-1"><sup>*</sup>An amount of 2% will be charged as online transaction fee</p>
                            <a href="#" class="text-orange">To know more download Memorandum of Association of BAA.</a>
                    </div>
                    <div class="col-md-6">
                        <div class="form-right-width" id="register">
                            <h2 class="form-title text-center">Create Your Account</h2>
                            <form action="register.php" method="post">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" id="username" name="username" placeholder="username">                                   
                                </div>
                                <div class="form-group">                                    
                                    <input type="email" class="form-control" id="email" name="email" placeholder="email">                                   
                                </div>
                                <div class="form-group">                                    
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password">                                   
                                </div>
                                <div class="form-group mb-4">                                    
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="confirm password">  <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div>                                 
                                </div>
                                <button type="submit" class="btn btn-raised btn-primary btn-block btn-rounded mt-4" name="registerButton">Pay & Register</button>
                                <p class="text-center mt-3">Already a member? Are you trying to renew? <a href="#" onclick="location.href='signin.html'" class="text-orange text-hover-black"><strong>Log In Here</strong></a></p>
                            </form>
                        </div>
                    </div>
                </div>  
                <div class="text-center mt-3">
                    <a href="#" class="text-dark-light" onclick="location.href='signin.html'">Go Back</a>            
                </div>  
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                    <p class="mb-0">&copy; Copyrights Buying Agents Association 2020</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Contact Us</a></li>
                        <li class="list-inline-item"><a href="#">Terms &amp; Conditions</a></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </footer>
 
	
    <!-- <div class="scroll-top-wrapper">
        <span class="scroll-top-inner">
            <img src="images/arrow-up.svg" alt="gotoTop">
        </span>
    </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
	<script>
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#confirmPassword").keyup(checkPasswordMatch);
    });
    </script>	
	
  </body>
</html>