<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

    @vite('resources/css/app.css')

  {{-- Lien de tailwind css --}}
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    {{-- Content --}}
    @yield('content')
</body>
</html>