<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
    </script>

    <title>Show Product<</title> 
</head>
<body>
    
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Web Project</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="{{route('stuffs.index')}}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="{{route('insertproduct')}}">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Add product</span>
                </a></li>
                <li><a href="{{route('stuffs.index')}}">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">List</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li> <a href="{{route('login')}}" >
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="material-icons">computer</i>
                <span class="text">Show Product<</span>
                </div>
            </div>
        </div>
                
    
        <div class="col-md-9" style="margin:auto;margin-top:20px;"> 
            <div class="col-md-9" style="margin:auto;">
            
            <ul>
                <li> {{ $stuff->title}}  </li>
                <li> {{ $stuff->price}}  </li>
                <li> {{ $stuff->image}}  </li>
            </ul>

            <div class="row">
                    <a href="{{route('stuffs.index')}}"class="btn btn-outline-success" > Return to list </a>
                    </div>
            </div>
   
        </div>       

            
    </section>

    <script src="script.js"></script>
</body>
</html>