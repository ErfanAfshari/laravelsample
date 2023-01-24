<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Products List</title>
</head>
<body>
    <div class="col-md-9" style="margin:auto;margin-top:20px;">
        
    
        <h1>Products List</h1>

        <table class="table table-bordered" style="marfin-top:20px;">
            <thead>
                <th>id</th>
                <th>title</th>
                <th>price</th>
                <th>image</th>
                <th>edit</th>
            </thead>
            <tbody>
                <tbody>
                    @foreach ($stuffs as $stuff)
                        <tr>
                            <td> {{ $stuff->id}}     </td>
                            <td> {{ $stuff->title}}  </td>
                            <td> {{ $stuff->price}}  </td>
                            <td> {{ $stuff->image}}  </td>
                            <td><a href="" class="btn btn-danger" > Delete </a> | <a href="{{route('updateproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-primary" > Update </a></td>
                        </tr>
                    @endforeach
                </tbody>  
            </tbody>        
        </table>
    
    </div>
    
    <div class="col-md-9" style="margin:auto;">
    <a href="{{route('insertproduct')}}"class="btn btn-dark" > Add Product </a>
    </div>

</body>
</html>
