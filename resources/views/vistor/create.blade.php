<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form method="post" action="{{ route('vistor.store') }}">
    @csrf
    <div class="form-group">
        <lable for=purpose>Purpose</lable>
        <input type="text" class="form-control" name="purpose" placeholder="enter purpose"><br><br>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="enter name"><br><br>

    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"><br><br>
    </div>
    <div class="form-group">
        <lable for="email">Email</lable>
        <input type="email" class="form-control" name="email" placeholder="enter email"><br><br>
    </div>

    <div class=form-group>
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="enter address"><br><br>
    </div>

    <div class="form-group">
        <lable for="date" >Date</lable>
        <input type="date" class="form-control" name="date" placeholder="enter date"><br><br>
    </div>

    <div class="form-group">
        <label for="in_time">InTime</label>
        <input type="time" class="form-control" name="in_time" placeholder="enter intime"><br><br>
    </div>
    <div >
        <button type="submit">Submit</button>
    </div>
</form>
</body>

</html>