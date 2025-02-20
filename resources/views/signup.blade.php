<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./access/css/signup.css">
</head>
<body>
    <form action="{{'signup'}}" method="post" style="with:600px; margin-left:500px">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="text" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="">Web</label>
            <input type="text" class="form-control" name="web">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif
        <button type="submit" class="btn btn-primary" style="left: 200px;">OK</button>
        <div class="dispaly-infor">
            @if(isset($user))
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Web: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
    </form>
</body>
</html>