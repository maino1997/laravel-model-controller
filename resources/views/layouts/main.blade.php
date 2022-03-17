<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header></header>

    <main>
        <h1>@yield('section_title')</h1>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>
