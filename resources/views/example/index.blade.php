<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples List</title>
</head>

<body>
    <!-- Start the table -->
    <table border="1px">
        <!-- Table header section -->
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
                    <form action="{{ route('example.edit', $example->id) }}" method="GET">
                        <button type="submit">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('example.destroy', $example->id) }}" method="POST">
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
