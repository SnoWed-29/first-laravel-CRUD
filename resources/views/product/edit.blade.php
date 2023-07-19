<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
        <h1>Edit a product</h1>
        <form method="POST" action="{{route('product.update' , ['product'=>$product])}}">
            @csrf
            @method('put')
            <div>
                @if($errors->any())
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                @endif
            </div>
            <div>
                <label>Name :</label>
                <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
            </div><br>
            <div>
                <label>Qty :</label>
                <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
            </div><br>
            <div>
                <label>Price :</label>
                <input type="text" name="price" placeholder="Name" value="{{$product->price}}">
            </div><br>
            <div>
                <label>Description :</label>
                <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
            </div><br>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
</body>
</html>