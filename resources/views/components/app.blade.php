@props(['navigation', 'main', 'footer'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Motel</title>
</head>

<body {{ $attributes }}>
    <div class="grid grid-cols-12">
        <div class="col-start-3 col-end-11">
            {{ $navigation ?? null }}
        </div>
    </div>
    <div class="grid grid-cols-12">
        <div class="col-start-3 col-end-11">
            {{ $main ?? null }}
        </div>
    </div>
</body>

</html>
