<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./access/css/form.css">
</head>
<body>
    <form action="/calculate" method="POST" class="form">
        @csrf
        <h1>Thực hiện tính tổng cho 2 số A và B</h1>
        <h4>Enter số A</h4>
        <input type="text" name="a" required>
        <h4>Enter số B</h4>
        <input type="text" name="b" required> <br>
        <button type="submit">Submit</button>

        @if(isset($sum))
            <h2>Kết quả: {{ $sum }}</h2>
        @endif
    </form>
    
</body>
</html>
