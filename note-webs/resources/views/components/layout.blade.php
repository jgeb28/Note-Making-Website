<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note App</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <x-navbar />
    @session('message')
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endsession
    {{ $slot }}
</body>
</html>