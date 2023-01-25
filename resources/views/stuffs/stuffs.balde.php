@extends('stuffs.index')
@section('maincontent')
<di calss="row">
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
                <th>delete item</th>
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
                            <div style="margin:auto"><a href="{{route('updateproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-outline-primary" > Update </a></div>
                            <div style="margin:auto;margin-top:5px;"><a href="{{route('showproduct',['id'=>$stuff->id])}}" target="_blank" class="btn btn-outline-dark" > Show </a></div>
                            </td>
                            <td>
                            <form action="{{route('deleteproduct',['id'=>$stuff->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="Delete" class="btn btn-outline-danger deletesubmit">   
                                </form> 
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
@endsection