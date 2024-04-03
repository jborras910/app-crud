<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update</h1>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

            @endif
        </div>
       
        <div>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}">
        </div>
        <div>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update product">
            <a href="{{route('product.index')}}">back</a>
        </div>
    </form>
</body>
</html>