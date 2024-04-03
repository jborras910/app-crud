<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <a href="{{route('student.index')}}">Back</a>
    <hr>

    <form method="post" action="{{route('student.store')}}" >
        @csrf
        @method('post')
        <div>
            <input type="text" name="first_name" placeholder="First Name...">
        </div>
        <div>
            <input type="text" name="last_name" placeholder="Last Name...">
        </div>
        <div>
            <input type="text" name="email" placeholder="Email...">
        </div>
<br>
        <input type="submit" value="Add Student">
    </form>

</body>
</html>