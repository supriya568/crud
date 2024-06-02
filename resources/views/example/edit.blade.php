<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Example</title>
</head>

<body>
    <form method="POST" action="{{ route('example.update', $example->id) }}">
        @csrf
        @method('PUT')
        
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="{{ $example->first_name }}">
        
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="{{ $example->last_name }}">
        
        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="{{ $example->gender }}">
        
        <label for="qualification">Qualification:</label>
        <input type="text" name="qualification" value="{{ $example->qualification }}">
        
        <button type="submit">Update</button>
    </form>
</body>

</html>
