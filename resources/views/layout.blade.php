<html>
<head>
    <!-- Link -->
    <link rel="stylesheet" href="/css/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <!-- Fonts -->

    <script src="">/* CDN AND JS import*/</script>


    <title>Nom</title>
</head>

<body class="container">

<header>
    <h1>Hello !</h1>
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
