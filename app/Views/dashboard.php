<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to Dashboard</h2>
    <p>Hello, <?= session()->get('username'); ?>!</p>
    <a href="/logout">Logout</a>
</body>

</html>