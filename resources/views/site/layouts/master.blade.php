<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="{{asset('js/app.js')}}"></script>
</head>
<body class="bg-gray-300 text-sm">
        <section class="bg-white shadow-md py-4">
            @include('site.layouts.header')
        </section>

        <section>
            @yield('content')
        </section>

        <section>
            @include('site.layouts.footer')
        </section>
</body>
</html>
