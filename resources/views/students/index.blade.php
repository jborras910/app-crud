<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Students table</h1>
    <div>
        @if(session()->has('success'))
  <div>
    {{session('success')}}
  </div>

        @endif
    </div>
    <a href="{{route('student.create')}}">Add Student</a>
    <hr>
    <table style="width: 50%;" border="2">
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->email}}</td>
        <td><a href="{{route('student.edit', ['student' =>$student])}}">Edit</a></td>
        <th>
            
            <form method="post" action="{{route('student.destroy', ['student' => $student])}}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </th>
    </tr>
  
    @endforeach
    </table>
</body>
</html>