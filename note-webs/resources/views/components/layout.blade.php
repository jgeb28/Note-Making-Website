<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @session('message')
        <div class="success-message">
            {{ session('message') }}
        </div>
    @endsession
    {{ $slot }}
</body>
</html>