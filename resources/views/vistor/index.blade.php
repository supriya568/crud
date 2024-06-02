<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <thead>
            <tr>
                <th>purpose</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>address</th>
                <th>date</th>
                <th>in_time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vistors as $vistor)
            <tr>
                <td>{{$vistor->purpose}}</td>
                <td>{{$vistor->name}}</td>
                <td>{{$vistor->phone}}</td>
                <td>{{$vistor->email}}</td>
                <td>{{$vistor->address}}</td>
                <td>{{$vistor->date}}</td>
                <td>{{$vistor->in_time}}</td>
                <td>
                    <form action="{{ route('vistor.edit', $vistor->id)}}" method="GET">
                        @csrf

                        <button class="btn btn-danger" type="submit">Edit</button>
                    </form>
                </td>
                <td>
                    <!-- Delete button -->
                    <form action="{{ route('vistor.destroy', $vistor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

         
        </tbody>
    </table>
</body>

</html>