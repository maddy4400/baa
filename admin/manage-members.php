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
    <link rel="stylesheet" type="text/css" href="../css/admin.css" />
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
                                <a href="newsfeed.html" class="list-group-item list-group-item-action">Manage Newsfeed</a>
                                <a href="manage-members.html" class="list-group-item list-group-item-action active">Manage Members</a>
                                <a href="manage-jobs.html" class="list-group-item list-group-item-action">Manage Jobs</a>
                                <a href="manage-candidates.html" class="list-group-item list-group-item-action">Manage Candidates</a>
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
                                Need Help ?<img src="../images/help.svg" class="ml-2"/>
                            </a>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="bg-white main-title height-80 d-flex flex-row justify-content-between align-items-center">
                        <h1>Manage Members</h1>
                        <a href="member1.html" class="btn btn-header">Add New Member</a>
                    </div>
                    <form class="row filter-card">
                        <div class="col-12 mb-2 col-md pr-md-0">
                            <div class="form-group">
                                <select class="selectpicker w-100">
                                    <option>Showing All</option>
                                    <option>Showing</option>
                                    <option>Showing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mb-2 col-md pr-md-0">
                            <div class="form-group">
                                <select class="selectpicker w-100">
                                    <option>Category</option>
                                    <option>Category1</option>
                                    <option>Category2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mb-2 col-md pr-md-0">
                            <div class="form-group">
                                <select class="selectpicker w-100">
                                    <option>Business</option>
                                    <option>Business 1</option>
                                    <option>Business 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group search-control">
                                <input type="text" class="custom-control w-100" id="" placeholder="Search by name">
                                <button class="btn"><img src="../images/search.svg" /></button>
                            </div>
                        </div>
                      </form>
                    
                    <div class="directory-card">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-9">
                                <div class="media">
                                    <img class="mr-3" src="../images/ph-logo.svg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Company Name</h5>
                                        <p>Constitution Type</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-left text-md-right">
                                <div class="btn-group">
                                    <button type="button" 
                                    class="btn btn-secondary dropdown-toggle actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Add to directory</a>
                                      <a class="dropdown-item" href="organization1.html">Edit</a>
                                      <a class="dropdown-item" href="view-account.html">View Account</a>
                                      <a class="dropdown-item" href="view-membership.html">Membership Status</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <a class="dropdown-item" href="#">Approve/Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0"><span>Membership:</span><br><strong>Catergory 1</strong></div>
                            <div class="col-md-4 mb-2 mb-md-0"><span>Expiry Date:</span><br><strong>31 Dec 2020</strong></div>
                            <div class="col-md-4"><span>Document Status:</span><br><strong>Documents Pending</strong></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0"><span>Product Category:</span><br><strong>Handicraft</strong></div>
                            <div class="col-md-4 mb-2 mb-md-0"><span>Business Type:</span><br><strong>Buying Agency</strong></div>
                        </div>
                    </div>
                    <div class="directory-card">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-9">
                                <div class="media">
                                    <img class="mr-3" src="../images/ph-logo.svg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Company Name</h5>
                                        <p>Constitution Type</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-left text-md-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Add to directory</a>
                                      <a class="dropdown-item" href="organization1.html">Edit</a>
                                      <a class="dropdown-item" href="view-account.html">View Account</a>
                                      <a class="dropdown-item" href="view-membership.html">Membership Status</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <a class="dropdown-item" href="#">Approve/Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0"><span>Membership:</span><br><strong>Catergory 1</strong></div>
                            <div class="col-md-4 mb-2 mb-md-0"><span>Expiry Date:</span><br><strong>31 Dec 2020</strong></div>
                            <div class="col-md-4"><span>Document Status:</span><br><strong>Documents Pending</strong></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0"><span>Product Category:</span><br><strong>Handicraft</strong></div>
                            <div class="col-md-4 mb-2 mb-md-0"><span>Business Type:</span><br><strong>Buying Agency</strong></div>
                        </div>
                    </div>
                    <div class="directory-card">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-9">
                                <div class="media">
                                    <img class="mr-3" src="../images/ph-logo.svg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">Company Name</h5>
                                        <p>Constitution Type</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-left text-md-right">
                                <div class="btn-group">
                                    <button 
                                    type="button" 
                                    class="btn btn-secondary dropdown-toggle actions" 
                                    data-toggle="dropdown" 
                                    aria-haspopup="true" 
                                    aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Add to directory</a>
                                        <a class="dropdown-item" href="organization1.html">Edit</a>
                                        <a class="dropdown-item" href="view-account.html">View Account</a>
                                        <a class="dropdown-item" href="view-membership.html">Membership Status</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Approve/Reject</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0"><span>Membership:</span><br><strong>Catergory 1</strong></div>
                            <div class="col-md-4 mb-2 mb-md-0"><span>Expiry Date:</span><br><strong>31 Dec 2020</strong></div>
                            <div class="col-md-4"><span>Document Status:</span><br><strong>Documents Pending</strong></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0"><span>Product Category:</span><br><strong>Handicraft</strong></div>
                            <div class="col-md-4 mb-2 mb-md-0"><span>Business Type:</span><br><strong>Buying Agency</strong></div>
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