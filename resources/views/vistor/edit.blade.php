<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples List</title>
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Qualification</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($examples as $example)
            <tr>
                <td>{{ $example->id }}</td>
                <td>{{ $example->first_name }}</td>
                <td>{{ $example->last_name }}</td>
                <td>{{ $example->gender }}</td>
                <td>{{ $example->qualification }}</td>
                <td>
                    <a href="{{ route('example.edit', $example->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('example.destroy', $example->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
