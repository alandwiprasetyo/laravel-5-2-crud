<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Condensed Table</h2>
    <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $student->full_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->address }}</td>
            <td>
                <form class="right" method="POST" action="{{ route('student.destroy', $student->id) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{ url('student') }}/{{$student->id}}/edit" class="btn waves-effect waves-light">Edit</a>
                    <button type="submit" class="btn waves-effect waves-light">Delete</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
