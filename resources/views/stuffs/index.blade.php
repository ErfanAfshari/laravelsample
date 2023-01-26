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


    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
    </script>

    <title>Admin Dashboard Panel</title> 
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
                <i class="material-icons">list</i>
                <span class="text">Products List</span>
                </div>
            </div>
        </div>
                
    
    
    <div class="row justify-content-center">
        <div class="col-md-11"  style="margin:auto;margin-top:25px;">
        <div class="form-control">
        <table class="table table-bordered" style="marfin-top:20px;">
            <thead>
                <th><h5 class="text-center">id</h5></th>
                <th><h5 class="text-center">title</h5></th>
                <th><h5 class="text-center">price</h5></th>
                <th><h5 class="text-center">image</h5></th>
                <th><h5 class="text-center">edit</h5></th>
                <th><h5 class="text-center">delete item</h5></th>
            </thead>

            <tbody>
                <tbody>
                    @foreach ($stuffs as $stuff)
                        <tr>
                            <td> {{ $stuff->id}}     </td>
                            <td> {{ $stuff->title}}  </td>
                            <td> {{ $stuff->price}}  </td>
                            <td> {{ $stuff->image}}  </td>
                            <td>
                            <div class="text-center">   
                            <div style="margin:auto"><a href="{{route('updateproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-outline-primary" > Update </a></div>
                            <div style="margin:auto;margin-top:5px;"><a href="{{route('showproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-outline-dark" > Show </a></div>
                            </div>   
                            </td>
                            <td>
                            <form action="{{route('deleteproduct',['id'=>$stuff->id])}}" method="post">
                                    @csrf
                                    <div class="text-center">
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Delete" class="btn btn-outline-danger deletesubmit">
                                    </div>   
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>  
            </tbody>       
        </table>
        </div>
        </div>
    </div>
    <div class="dash-content">
            <div class="overview">
                <div class="title">
                <i class="material-icons">add</i>
                    <span class="text">    
                        <a href="{{route('insertproduct')}}"class="btn btn-secondary btn-lg btn-block" > Add Product </a>
                    </span>
                </div>
            </div>
        </div>
   
    <script>
        $(document).ready(function(){
            $('.deletesubmit').on('click',function(e){
                e.preventDefault();
                if(confirm('Do you want to delete this item?'))
                {
                    var form = $(this).closest('form');
                    form.submit();
                }
            })
        })
    </script>         

            
    </section>

    <script src="script.js"></script>
</body>
</html>