<!doctype html>
<html lang="en">
<head>
    <title>Создать новый класс животного </title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<h2>Создать класс животного </h2>
<form method="post" action="">
    {{csrf_field()}}
    <input type="text" name="newclass">
    <input type="submit" value="Создать">

</form>
</body>
</html>


