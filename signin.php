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
                    <div class="col-md-6 text-center border-right px-5">
                        <div class="form-left-width">
                            <h2 class="form-title">Welcome!</h2>
                            <p class="sub-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
                            <img src="images/login.svg" class="img-fluid my-3"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-right-width">
                            <h2 class="form-title text-center">Login Your Account</h2>
                            <form>
                                <div class="form-group">                                    
                                    <input type="email" class="form-control" id="email" placeholder="email">                                   
                                </div>
                                <div class="form-group mb-3">                                    
                                    <input type="password" class="form-control" id="password" placeholder="password">                                   
                                </div>
                                <p><a href="#" class="text-orange text-hover-black">Forgot password?</a></p>
                                <button type="button" class="btn btn-raised btn-primary btn-block btn-rounded mt-4" onclick="location.href='registration.html'">Login</button>
                                <p class="text-center mt-3">Don't have an account yet? <a href="#" class="text-orange text-hover-black" onclick="location.href='registration.html'"><strong>Register Here</strong></a></p>
                            </form>
                        </div>
                    </div>
                </div>  
                <div class="text-center mt-3">
                    <a href="#" class="text-dark-light">Go Back</a>            
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
   
  </body>
</html>