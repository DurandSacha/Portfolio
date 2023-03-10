<html>
<head>
    <!-- Link -->
    <link rel="stylesheet" href="/css/global.css" type="text/css">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{mix('css/app.css') }}" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="{{ url('favicon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <!-- Fonts -->

    <script src="">/* CDN AND JS import*/</script>


    <title>Sacha Durand</title>
</head>

<body class="m-0 p-0">

<header>
    
</header>

<div class="w-full layout-body m-0 p-0">
    @yield('content')
</div>

<!--
<div class="footer clearfix">
    @yield('footer')
</div>
-->


@yield('script')

<!--SMOOTH SCROLL-->
<script>
    const navLinks = [...document.querySelectorAll(".nav-nav a")];
    const sections = [...document.querySelectorAll(".navSection")];
    console.log(navLinks);
    console.log(sections);

    let sectionPosition;

    function positionCalculation(){
      sectionPosition = sections.map(section => section.offsetTop);
    }
    positionCalculation();
    //console.log(sectionPosition);

    navLinks.forEach(link => link.addEventListener("click", addScrollSmooth));

    function addScrollSmooth(e){
      const linkIndex = navLinks.indexOf(e.target);
      //console.log("e : "+e);
      console.log("linkIndex : "+linkIndex);
      window.scrollTo({
        top: sectionPosition[linkIndex + 1],
        behavior : "smooth"
      })
    }

    window.onscroll = function(e) {
        //var distanceScrolled = document.documentElement.scrollTop;
        //console.log(distanceScrolled);
        //find scroll direction, and scroll to next element
        //console.log(e.timeStamp);
        //
        //console.log(this.oldScroll > this.scrollY);
        
        let direction = this.oldScroll > this.scrollY;
        //console.log(direction);
        if(direction == false){
            //console.log("scroll down");
            //console.log(document.body.scrollTop);
        }
        if(direction == true){
            //console.log("scroll up");
            //console.log(document.body.scrollTop);
            //this.addScrollSmooth(0);
        }
        this.oldScroll = this.scrollY;
    }

    // -1 : home
    // 0 : projet
    // 1 : contact
  </script>
</body>
</html>
