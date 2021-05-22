<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3A3A3A">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <!-- CSS -->        
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="../css/theme.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/user.css" />
    <title>BAA</title>
    </head>
  <body>
    <div class="overlay d-none"></div>
   
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="panel-sticky" id="panel-sticky">
                        <div class="bg-white text-left text-md-center height-80 panel-logo">
                            <a href="../signin.html" target="_blank"><img src="../images/logo.svg" class="img-fluid"/></a>
                            <span onclick="openNav()" class="menu"><img src="../images/menu.svg"></span>
                        </div> 
                        <span onclick="closeNav()" class="closebtn"><img src="../images/close.svg"></span>
                        <div class="bg-white">
                            <div class="intro text-center">
                                <a href="#" target="_blank"><img src="../images/ph-logo.svg" class="img-fluid mb-3"/></a>
                                <h3 class="company-name">Octet Design Studio</h3>
                                <h4 class="company-type">Private Limited</h4>
                                <span class="badge badge-pill badge-success">Verified</span>
                            </div>
                            <div class="list-group nav-list">
                                <a href="newsfeed.html" class="list-group-item list-group-item-action">Newsfeed</a>
                                <a href="directory.html" class="list-group-item list-group-item-action">Directory</a>
                                <a href="hirecandidate.html" class="list-group-item list-group-item-action active">Hire Candidate</a>
                                <a href="my-profile.html" class="list-group-item list-group-item-action">My Profile</a>
                                <a href="settings.html" class="list-group-item list-group-item-action">Account Settings</a>
                            </div>
                        </div>
                        <div class="bg-white mt-20 social">
                            <p class="mb-4">
                                Follow us on other social channels
                            </p>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="#" target="_blank"><img src="../images/facebook.svg" /></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><img src="../images/twitter.svg" /></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><img src="../images/linkedin.svg" /></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><img src="../images/instagram.svg" /></a></li>
                            </ul>
                        </div>
                        <div class="bg-white mt-20 help">
                            <a href="help.html" target="_blank">
                                Need Help ? <img src="../images/help.svg" />
                            </a>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="bg-white main-title height-80 d-flex align-items-center">
                        <a href="hirecandidate.html" class="mr-2">
                            <img src="../images/back.svg" alt="back"/>
                        </a>
                        <h1>Post a Job</h1>
                    </div>
                    <div class="query-card">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="font-16">Add Job Details</p>
                            </div>
                        </div>
                        <div class="form-section mb-0 p-0">                         
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <p>Job Title</p>
                                    <div class="form-group pt-0 bg-group">
                                        <select class="selectpicker w-100">
                                            <option>Designer</option>
                                        </select>
                                    </div>                                    
                                </div>                             
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <p>Product Category</p>
                                    <div class="form-group pt-0 bg-group">
                                        <select class="selectpicker w-100">
                                            <option>Home Decor</option>
                                        </select>
                                    </div> 
                                </div> 
                                <div class="col-md-6">
                                    <p>Required Experience</p>
                                    <div class="form-group pt-0 bg-group">
                                        <select class="selectpicker w-100">
                                            <option>1 - 2 Years</option>
                                        </select>
                                    </div> 
                                </div>                             
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <p>Location</p>
                                    <div class="form-group bg-group">                                    
                                        <input type="text" class="form-control" id="" placeholder="Eg. Ahmedabad">                                   
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <p>Salary</p>
                                    <div class="form-group bg-group">                                    
                                        <input type="text" class="form-control" id="" placeholder="Eg. 4,00,000 p.a">                                   
                                    </div>
                                </div>                             
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <p>Job Description</p>
                                    <div class="form-group bg-group">                                    
                                        <textarea class="form-control" id="" placeholder="Write description here.." rows="5"></textarea>
                                    </div>
                                </div>                             
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12 text-right">
                                    <a href="hirecandidate.html" class="btn btn-black">Post Job</a>
                                </div>
                            </div>
                        </div>                        
                    </div>                   
                </div>
            </div>
        </div>
        
        
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>