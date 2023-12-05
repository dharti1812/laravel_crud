<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>Create Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all as $error)
                    <li>{{$error}}</li>
                @endforeach
                    
              
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
         </div>
         <div class="form-group">
            <label for="">Qty</label>
            <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty">
           </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</body>
</html>