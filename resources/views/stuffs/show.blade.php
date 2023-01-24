<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Show Product</title>
</head>
<body>
    <div class="col-md-9" style="margin:auto;margin-top:20px;">
        <h1>Show Product</h1>
    </div>
    <div class="col-md-9" style="margin:auto;">
    
    <ul>
        <li> {{ $stuff->title}}  </li>
        <li> {{ $stuff->price}}  </li>
        <li> {{ $stuff->image}}  </li>
    </ul>

    <a href="{{route('stuffs.index')}}"class="btn btn-outline-success" > Return to list </a>
    </div>

</body>
</html>
