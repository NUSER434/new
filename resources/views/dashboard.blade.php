<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Добро пожаловать, {{ Auth::user()->fullName() }}!</h1>
    <p>Вы успешно вошли в систему.</p>
</body>
</html>
