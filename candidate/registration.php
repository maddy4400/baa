<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3A3A3A">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link rel="stylesheet" href="css/candidate.css" type="text/css"/>
    <title>Candidate</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between header-part-1">
                <div class="logo">
                    <img src="images/logo.svg" alt="logo"/>
                </div>
                <div class="header-right">
                    <a href="tel:+919711916996" class="header-number">+91-9711916996</a>
                    <a href="#" class="btn btn-header">Become a member</a>
                    <a href="#" class="btn btn-header">Login</a>
                </div>
            </div>
            <hr class="m-0"/>
           
            <div class="d-flex align-items-center justify-content-between header-part-2">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">UPDATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                </ul>
                <div class="header-right">
                   <a href="#" class="header-job">JOBS <sup>new</sup></a>
                </div>
            </div>            
        </div>
        
    </header>

    <div class="container-fluid page-title orange">
        <h1>Job Seekers Registration</h1>        
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">

                    <div class="card card-register">
                        <h3>
                            Account Information 
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Eg. Johndoe@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password (Minimum 10 Characters)</label>
                                    <input type="text" class="form-control" id="password" placeholder="Eg. gfgegyoii">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="repassword">Confirm Password</label>
                                    <input type="text" class="form-control" id="repassword" placeholder="Eg. gfgegyoii">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-register">
                        <h3>
                            Personal Information 
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Eg. John Doe">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" id="contact" placeholder="Eg. 9021005005">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-register">
                        <h3>
                            Experience Details 
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Designation</label>
                                    <select class="selectpicker w-100">
                                        <option>Designer 1</option>
                                        <option>Designer 2</option>
                                        <option>Designer 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Product Category</label>
                                    <select class="selectpicker w-100">
                                        <option>Home Decor</option>
                                        <option>Home Decor</option>
                                        <option>Home Decor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Experience</label>
                                    <select class="selectpicker w-100">
                                        <option>1 - 2 Years</option>
                                        <option>3 - 4 Years</option>
                                        <option>5 - 6 Years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Current Salary</label>
                                    <input type="text" class="form-control" id="contact" placeholder="Eg. Rs. 5,00,000/P.A">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-register">
                        <h3>
                            Location Details 
                        </h3>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Current Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Eg. Mumbai, Maharashtra">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox mt-4">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I am ready to relocate</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-register">
                        <h3>
                            Upload Resume
                        </h3>
                        <div class="row">
                            <div class="col-md-12">                                    
                                <label>Upload Resume</label>
                                <!-- Change /upload-target to your upload address -->
                                <form action="/" class="dropzone dz-clickable" id="demo-upload">
                                    <div class="dz-message">Drop files here or click to upload.</div>
                                </form>
                                <p class="mt-2"><i>Note: <span class="font-weight-light">Allowed Formats- Pdf, Doc, JPG</span></i></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center">
                            <button class="btn btn-orange-rounded btn-block">Create Profile</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row footer-part-1">
                <div class="col-md-3">
                    <img src="images/footer-logo.svg" />
                    <p>
                        The ‘Buying Agents Association’ was formed to fulfil the expressed need of Buying Agents to get together formally and work to improve their standards and growth avenues.
                    </p>
                </div>
                <div class="col-md-2 offset-md-1">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>CONTACT US</h4>
                    <ul>
                        <li class="mb-1"><img src="images/mail.svg" class="mr-2"/><a href="mailto:info@baa.org.in" class="font-14">info@baa.org.in</a></li>
                        <li class="mb-1"><img src="images/phone.svg" class="mr-2"/><a href="tel:+919711916996" class="font-14">+91-9711916996</a></li>
                    </ul>
                    <ul class="list-inline social-list">
                        <li class="list-inline-item"><a href="#"><img src="images/fb.svg" alt=""/></a></li>
                        <li class="list-inline-item"><a href="#"><img src="images/linkedin.svg" alt=""/></a></li>
                        <li class="list-inline-item"><a href="#"><img src="images/twitter.svg" alt=""/></a></li>
                        <li class="list-inline-item"><a href="#"><img src="images/insta.svg" alt=""/></a></li>
                    </ul>
                </div>
            </div>
            <div class="row footer-part-2">
                <div class="col-md-6">
                    <p>© 2016 B.A.A. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <p>Have a question or Need Help? <a href="#">Contact Us</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js" type="text/javascript"></script>
</body>
</html>