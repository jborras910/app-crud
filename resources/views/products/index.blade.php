<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
  <div>
    {{session('success')}}
  </div>

        @endif
    </div>
    <a href="{{route('product.create')}}">Create Product</a>
    <table border="1">
        <tr>
        <th>ID</th>
        <th>name</th>
        <th>qty</th>
        <th>price</th>
        <th>description</th>
        <th>Edit</th>
        <th>delete</th>
        </tr>
       
         @foreach ($products as $product)
         <tr>
            <td>
                {{$product->id}}
            </td>
            <td>
                {{$product->name}}
            </td>
            <td>
                {{$product->qty}}
            </td>
            <td>
                {{$product->price}}
            </td>
            <td>
                {{$product->description}}
            </td>
            <td><a href="{{route('product.edit', ['product' => $product])}}">Edit</a></td>
            <td>
                <form method="post" action="{{route('product.destroy', ['product'=> $product])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
           
      
    </table>
</body>
</html>