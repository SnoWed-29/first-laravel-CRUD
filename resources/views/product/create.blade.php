<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
        <h1>Create a product</h1>
        <form method="POST" action="{{route('product.store');}}">
            @csrf
            @method('post')
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
                <input type="text" name="name" placeholder="Name">
            </div><br>
            <div>
                <label>Qty :</label>
                <input type="text" name="qty" placeholder="Qty">
            </div><br>
            <div>
                <label>Price :</label>
                <input type="text" name="price" placeholder="Name">
            </div><br>
            <div>
                <label>Description :</label>
                <input type="text" name="description" placeholder="Description">
            </div><br>
            <div>
                <input type="submit" value="Add product">
            </div>
        </form>
</body>
</html>