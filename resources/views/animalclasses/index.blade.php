<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список классов</title>
</head>
<body>
<h2>Список классов</h2>
<ul>
@foreach($classList as $item)
    <li> {{$item->titles}}</li>
    @endforeach
</ul>

</body>
</html>