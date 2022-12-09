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


    <title>Sacha Durand</title>
</head>

<body class="">

<header>
    
</header>

<div class="w-full">
    @yield('content')
</div>

<!--
<div class="footer clearfix">
    @yield('footer')
</div>
-->


@yield('script')


</body>
</html>
