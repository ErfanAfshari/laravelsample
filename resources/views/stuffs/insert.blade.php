<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Insert Products</title>
</head>
<body>
    <div class="col-md-6" style="margin:auto;margin-top:20px;">
    <h3>Insert Products Form</h3>

        <form action="{{route('storeproduct')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"  name="title" class="form-control" value="" placeholder="عنوان محصول">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" value="" placeholder="قیمت محصول">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" class="form-control" value="" placeholder="تصویر محصول">
                </div>
            </div>
            
            <input type="submit" class="btn btn-success" value=" Save " style="margin:auto;margin-top:20px;">
           
        </form>    
    </div>
 
</body>
</html>
