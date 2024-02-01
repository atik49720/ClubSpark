<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>
<body>
<ul>
    @foreach($result as $data)
    <li>{{$data->name}}</li>
    @endforeach
</ul>
<h1></h1>
</body>
</html>
