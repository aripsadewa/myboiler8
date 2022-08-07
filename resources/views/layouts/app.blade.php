<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>{{ $title }} | Boiler</title>
</head>
<body>
    <x-navbar></x-navbar>
    @yield('content')
    <script src="js/app.js"></script>
</body>
</html>
