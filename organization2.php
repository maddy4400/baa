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
    <link rel="stylesheet" type="text/css" href="css/dropzone.min.css" />
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
    <main class="form-wrap py-4">
        
        <section class="w-100">
            <div class="container"> 
                 <!--progress bar-->
                 <div class="row">
                    <div class="col-md-12">
                        <ul class="form-progress">
                            <li class="filled" onclick="location.href='organization1.html'"></li>
                            <li class="active" onclick="location.href='organization2.html'"></li>
                            <li onclick="location.href='organization3.html'"></li>
                            <li onclick="location.href='organization4.html'"></li>
                        </ul>
                    </div>
                </div>     
                <!--progress bar-->          
                <div class="row form-card">
                    <div class="col-md-12">       
                        <form class="" novalidate>
                           <div class="col-md-10 offset-md-1 text-center px-1 px-md-5">                        
                                <h2 class="form-title mb-3">DOCUMENTATION</h2>
                                <p class="sub-title mb-4">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                            </div>
                            <div class="form-section">
                                <h4 class="form-section-title">PAN Verification</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <p>1. Enter PAN Card Details *</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="text" class="form-control" id="organisation" placeholder="Eg.AACEA4521C">                                   
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>2. Upload a Copy of PAN Card *</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file"><span><img src="images/upload.svg" />&nbsp;&nbsp; Upload PAN copy</span></label>                                
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <p class="font-13"><i>Note: <span class="font-weight-light">" * " Mark indicates mandatory input</span></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <h4 class="form-section-title">Upload Documents</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <p>1. CA Certificate <a href="#" class="text-orange text-hover-black text-underline ml-3">Download Format</a></p>
                                        <div class="form-group bg-group">                                    
                                            <input type="file" name="file" id="ca" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="ca"><span><img src="images/upload.svg" />&nbsp;&nbsp; Upload CA certificate copy</span></label>                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>2. Code Of Conduct <a href="#" class="text-orange text-hover-black text-underline ml-3">Download Format</a></p>
                                        <div class="form-group bg-group">                                    
                                            <input type="file" name="file" id="conduct" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="conduct"><span><img src="images/upload.svg" />&nbsp;&nbsp; Upload code of conduct copy</span></label>                            
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <i>Note: Download the form, fill it up and upload a scanned copy.</i>
                                    </div>
                                </div>
                            </div>

                           
                           
                            <div class="form-section">
                                <h4 class="form-section-title">GSTIN</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <p>1. Enter GSTIN Number</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="text" class="form-control" id="organisation" placeholder="Eg.22AAAAA0000A1A5">                                   
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>2. Upload a Copy of GSTIN</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file"><span><img src="images/upload.svg" />&nbsp;&nbsp; Upload GSTIN copy</span></label>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <h4 class="form-section-title">Other Details</h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <p>1. Enter Import Export Code No.</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="text" class="form-control" id="organisation" placeholder="Eg.AB208048A">                                   
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>2. Upload Self Attested Copy</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file"><span><img src="images/upload.svg" />&nbsp;&nbsp; Upload IEC copy</span></label>                                
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <p>3. Enter CIN Number</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="text" class="form-control" id="organisation" placeholder="Eg.AB208048A">                                   
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <p>4. Upload Company Logo</p>
                                        <div class="form-group bg-group">                                    
                                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file"><span><img src="images/upload.svg" />&nbsp;&nbsp; Upload Company Logo</span></label>                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="multisteps-form__content">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3 text-center mt-4 px-1 px-md-5">
                                        <a class="btn btn-block btn-primary btn-raised btn-rounded" onclick="location.href='organization3.html'">Next</a>
                                    </div> 
                                </div>
                            </div> 
                        </form>                                                
                    </div> 
                </div>    
                <div class="text-center mt-3">
                    <a href="#" class="text-dark-light" onclick="location.href='organization3.html'">Do it Later</a>            
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="js/dropzone.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.min.js" type="text/javascript"></script>
 
    <script src="js/custom.js" type="text/javascript"></script>
  </body>
</html>