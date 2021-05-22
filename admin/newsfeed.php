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
    <link rel="stylesheet" href="../css/dropzone.min.css" />
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
                                <a href="newsfeed.html" class="list-group-item list-group-item-action active">Manage Newsfeed</a>
                                <a href="manage-members.html" class="list-group-item list-group-item-action">Manage Members</a>
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
                    <div class="bg-white main-title height-80 d-flex flex-column justify-content-center">
                        <h5>Welcome, Alex</h5>
                        <h1>Manage Newsfeed</h1>
                    </div>
                    <div class="addpost">
                        <ul class="nav nav-tabs addpost-list" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="broadcast-tab" data-toggle="tab" href="#broadcast" role="tab" aria-controls="broadcast" aria-selected="true">
                                  Broadcast a Message
                                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                    <g id="iconfinder_pen_2_114682" transform="translate(0 0)">
                                      <rect id="Rectangle_241" data-name="Rectangle 241" width="4.063" height="8.092" transform="matrix(-0.707, -0.707, 0.707, -0.707, 4.841, 11.034)" fill="#545454"/>
                                      <g id="Group_372" data-name="Group 372" transform="translate(0 0)">
                                        <path id="Path_500" data-name="Path 500" d="M14.779,1.961,13.055.238a.812.812,0,0,0-1.149,0l-1.15,1.149L13.63,4.259,14.779,3.11a.812.812,0,0,0,0-1.149" transform="translate(-2.017 0)" fill="#545454"/>
                                        <path id="Path_501" data-name="Path 501" d="M0,15.138l3.734-.862L.86,11.4Z" transform="translate(0 -2.138)" fill="#545454"/>
                                      </g>
                                    </g>
                                  </svg>                                  
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="picture-tab" data-toggle="tab" href="#picture" role="tab" aria-controls="picture" aria-selected="false">
                                  Post a Picture
                                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11.705" viewBox="0 0 15 11.705">
                                    <g id="icons" transform="translate(-24.8 -33.4)">
                                      <g id="Group_383" data-name="Group 383" transform="translate(24.8 33.4)">
                                        <path id="Path_504" data-name="Path 504" d="M38.842,33.4H25.777a.981.981,0,0,0-.977.977v9.751a.981.981,0,0,0,.977.977H38.822a.981.981,0,0,0,.977-.977V34.377A.953.953,0,0,0,38.842,33.4Zm-.421,1.379v6.647L36.1,39.109a.81.81,0,0,0-1.13,0l-3.065,3.065-1.552-1.552a.81.81,0,0,0-1.13,0l-3.046,3.046V34.779Z" transform="translate(-24.8 -33.4)" fill="#545454"/>
                                        <circle id="Ellipse_28" data-name="Ellipse 28" cx="1.341" cy="1.341" r="1.341" transform="translate(3.621 2.701)" fill="#545454"/>
                                      </g>
                                    </g>
                                  </svg>                                  
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">
                                  Post a Video
                                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9.375" viewBox="0 0 15 9.375">
                                    <path id="video_1_" d="M10.314,0a.938.938,0,0,1,.938.937V3.085L14.2.137A.471.471,0,0,1,14.531,0,.468.468,0,0,1,15,.469V8.906a.469.469,0,0,1-.8.331L11.252,6.29l0,2.148a.937.937,0,0,1-.937.938H.938A.937.937,0,0,1,0,8.438l0-7.5A.938.938,0,0,1,.939,0h9.375Z" fill="#545454" fill-rule="evenodd"/>
                                  </svg>                                  
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="event-tab" data-toggle="tab" href="#event" role="tab" aria-controls="event" aria-selected="false">
                                    Share an event
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14.444" viewBox="0 0 13 14.444">
                                        <g id="iconfinder_010_065_calendar_date_schedule_complete_today_1282950" transform="translate(-3 -2)">
                                          <path id="Path_502" data-name="Path 502" d="M14.026,12.021,13,11,10.33,13.675,8.942,12.287,7.921,13.308l2.409,2.418Z" transform="translate(-1.367 -2.5)" fill="#545454"/>
                                          <path id="Path_503" data-name="Path 503" d="M14.623,3.444H13.111V2.722A.722.722,0,0,0,12.389,2h0a.722.722,0,0,0-.722.722v.722H7.333V2.722A.722.722,0,0,0,6.611,2h0a.722.722,0,0,0-.722.722v.722H4.377A1.377,1.377,0,0,0,3,4.821V15.068a1.377,1.377,0,0,0,1.377,1.377H14.623A1.377,1.377,0,0,0,16,15.068V4.821A1.377,1.377,0,0,0,14.623,3.444ZM14.556,15H4.444V6.333H14.556Z" transform="translate(0)" fill="#545454"/>
                                        </g>
                                    </svg>                                      
                                </a>
                              </li>
                          </ul>
                          <div class="tab-content addpostContent" id="myTabContent">
                            <div class="tab-pane fade show active" id="broadcast" role="tabpanel" aria-labelledby="broadcast-tab">
                                <div class="broadcast-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-15">
                                                <span>Add Tags:</span>
                                                <div class="post-tag btn-group btn-group-toggle ml-3" data-toggle="buttons">
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option1"> News
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option2"> Events
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option3"> Updates
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"> Announcements
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="custom-control w-100" id="exampleFormControlTextarea1" rows="3" placeholder="Broadcast your Message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-md-right text-center">
                                        <button class="btn btn-secondary-light btn-raised mt-1 mt-md-0">Save to drafts</button>
                                        <button class="btn btn-primary btn-raised mt-1 mt-md-0">Post Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="picture" role="tabpanel" aria-labelledby="picture-tab">
                                <div class="broadcast-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-15">
                                                <span>Add Tags:</span>
                                                <div class="post-tag btn-group btn-group-toggle ml-3" data-toggle="buttons">
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option1"> News
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option2"> Events
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option3"> Updates
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"> Announcements
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="custom-control w-100" id="exampleFormControlTextarea1" type="text" placeholder="Write Caption here..">
                                        </div>
                                        <div class="col-md-12">
                                            <div id="dropzone">
                                                <form class="dropzone needsclick" id="demo-upload" action="/upload">
                                                  <div class="dz-message needsclick text-center">   
                                                    <img src="../images/upload-image.svg" />
                                                    <p class="mt-2">Drag & Drop Image to Upload or <span class="text-underline">Browse</span></p>
                                                  </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-md-right text-center">
                                        <button class="btn btn-secondary-light btn-raised mt-1 mt-md-0">Save to drafts</button>
                                        <button class="btn btn-primary btn-raised mt-1 mt-md-0">Post Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                                <div class="broadcast-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p-15">
                                                <span>Add Tags:</span>
                                                <div class="post-tag btn-group btn-group-toggle ml-3" data-toggle="buttons">
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option1"> News
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option2"> Events
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                      <input type="radio" name="options" id="option3"> Updates
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"> Announcements
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="custom-control w-100" id="exampleFormControlTextarea1" type="text" placeholder="Write Caption here..">
                                        </div>
                                        <div class="col-md-12">
                                            <div id="dropzone">
                                                <form class="dropzone needsclick" id="demo-upload" action="/upload">
                                                  <div class="dz-message needsclick text-center">   
                                                    <img src="../images/upload-video.svg" />
                                                    <p class="mt-2">Drag & Drop Video to Upload or <span class="text-underline">Browse</span></p>
                                                  </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-md-right text-center">
                                        <button class="btn btn-secondary-light btn-raised mt-1 mt-md-0">Save to drafts</button>
                                        <button class="btn btn-primary btn-raised mt-1 mt-md-0">Post Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab">
                                <div class="event-box">
                                    <div class="d-block d-sm-flex">
                                        <div class="event-left">
                                            Add Event photo:
                                            <div id="dropzone" class="mt-2">
                                                <form class="dropzone needsclick" id="demo-upload" action="/upload">
                                                  <div class="dz-message needsclick text-center">   
                                                    <img src="../images/upload-avtar.svg" />                                                    
                                                  </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="event-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group pt-0">
                                                        <p for="exampleInputEmail1" class="mb-2">Event Name:</p>
                                                        <input type="email" class="control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write name of event">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pt-0">
                                                        <p for="exampleInputEmail1" class="mb-2">Location:</p>
                                                        <input type="email" class="control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Include place or address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group pt-0">
                                                        <p for="exampleInputEmail1" class="mb-2">Event Link:</p>
                                                        <input type="email" class="control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Include event link">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group pt-0">
                                                        <p for="exampleInputEmail1" class="mb-2">Description:</p>
                                                        <input type="email" class="control w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Description">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-md-right text-center">
                                        <button class="btn btn-secondary-light btn-raised mt-1 mt-md-0">Save to drafts</button>
                                        <button class="btn btn-primary btn-raised mt-1 mt-md-0">Post Now</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>

                    <div class="feed-card">
                        <div class="feed-info d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline tag-selected-list">
                                    <li class="list-inline-item orange">News</li>                               
                                </ul>
                                <span class="ml-3">Posted 20 min ago</span>
                            </div>
                            <div>
                                <div class="btn-group">
                                    <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="ex2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/dot.svg" />
                                    </button>  
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ex2">
                                      <a class="dropdown-item" href="#">Edit Post</a>                                      
                                      <a class="dropdown-item" href="#">Delete Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feed-image">
                            <img src="../images/ph-image.svg" class="w-100"/>
                        </div>
                    </div>

                    <div class="feed-card">
                        <div class="feed-info d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline tag-selected-list">
                                    <li class="list-inline-item black">Event</li>                               
                                </ul>
                                <span class="ml-3">Posted 1 hour ago</span>
                            </div>
                            <div>
                                <div class="btn-group">
                                    <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="ex2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/dot.svg" />
                                    </button>  
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ex2">
                                      <a class="dropdown-item" href="#">Edit Post</a>                                      
                                      <a class="dropdown-item" href="#">Delete Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feed-about">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                            </p>
                        </div>
                        <div class="feed-image">
                            <img src="../images/ph-image2.svg" class="w-100"/>
                        </div>
                    </div>

                    <div class="feed-card">
                        <div class="feed-info d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline tag-selected-list">
                                    <li class="list-inline-item black">Event</li>                               
                                </ul>
                                <span class="ml-3">Posted 1 hour ago</span>
                            </div>
                            <div>
                                <div class="btn-group">
                                    <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="ex2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/dot.svg" />
                                    </button>  
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ex2">
                                      <a class="dropdown-item" href="#">Edit Post</a>                                      
                                      <a class="dropdown-item" href="#">Delete Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="feed-link">
                            <div class="media">
                                <img class="mr-3" src="../images/ph-linkthumb.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                  <h5 class="mt-0">Lorem ipsum dolor</h5>
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam </p>
                                  <a href="#" target="_blank">http://www.Weblink_ Example201kjsb10km</a>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="feed-card">
                        <div class="feed-info d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <ul class="list-inline tag-selected-list">
                                    <li class="list-inline-item black">Event</li>                               
                                </ul>
                                <span class="ml-3">Posted 1 hour ago</span>
                            </div>
                            <div>
                                <div class="btn-group">
                                    <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="ex2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/dot.svg" />
                                    </button>  
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ex2">
                                      <a class="dropdown-item" href="#">Edit Post</a>                                      
                                      <a class="dropdown-item" href="#">Delete Post</a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="feed-video">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/kK2SBk0REX8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    <script src="../js/dropzone.min.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>