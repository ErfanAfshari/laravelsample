<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
    </script>
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
                            <td>
                                <form action="{{route('deleteproduct',['id'=>$stuff->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Delete" class="btn btn-danger deletesubmit">   
                                </form> | 
                                <a href="{{route('updateproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-primary" > Update </a> | 
                                <a href="{{route('showproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-outline-dark" > Show </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>  
            </tbody>        
        </table>
    
    </div>
    
    <div class="col-md-9" style="margin:auto;">
    <a href="{{route('insertproduct')}}"class="btn btn-secondary btn-lg btn-block" > Add Product </a>
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
</body>
</html>
