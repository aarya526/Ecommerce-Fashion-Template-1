<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Template 1</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl/owl.theme.default.min.css">
    <script src="https://kit.fontawesome.com/b896ed8a00.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('layouts.header')
    @yield('main-section')
    <!-- jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/owl/owl.carousel.min.js"></script>
    <script src="/js/script.js"></script>

    @include('layouts.footer')
</body>

</html>
