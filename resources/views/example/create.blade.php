<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{ route('example.store') }}">  
        @csrf

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter your firstname"><br><br>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter your lastname"><br><br>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" name="gender" placeholder="Enter gender"><br><br>
        </div>

        <div class="form-group">
            <label for="qualification">Qualification</label>
            <input type="text" class="form-control" name="qualification" placeholder="Enter qualification"><br><br>
        </div>

        <button type="submit">Insert</button>
    </form>

</body>
</html>
