<html>
<head>
    <!-- Link -->
    <link rel="stylesheet" href="/css/global.css" type="text/css">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{mix('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <!-- Fonts -->

    <script src="">/* CDN AND JS import*/</script>


    <title>Nom</title>
</head>

<body class="container">

<header>
    <h1 class="text-red-500 text-2xl font-bold">Hello !</h1>
</header>

<div class="main">
    @yield('content')
</div>

<div class="footer clearfix">
    @yield('footer')
</div>


@yield('script')


</body>
</html>
