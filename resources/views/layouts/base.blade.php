@props(['head' => null, 'footers' => null])
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head }}
    @stack('head')
</head>

<body>
    @if (isset($slot))
        {{ $slot }}
    @endif
    {{ $footers ?? '' }}
    @stack('footers')
</body>

</html>
