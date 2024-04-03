<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create</h1>
    <form method="post" action="{{route('product.store')}}">
        <div>
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

            @endif
        </div>
        @csrf
        @method('post')
        <div>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="Save a new product">
        </div>
    </form>
</body>
</html>