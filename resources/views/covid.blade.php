<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th>UserId</th>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        <tr>
            <td>{{ $data['userId'] }}</td>
            <td>{{ $data['id'] }}</td>
            <td>{{ $data['title'] }}</td>
            <td>{{ $data['body'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>