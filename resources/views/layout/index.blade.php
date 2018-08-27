<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VNFACTORY</title>
    <meta name="description" content="VNFACTORY real-estate">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="admin_assets/assets/img/VNFACTORY.png" type="image/x-icon">
    <link rel="icon" href="admin_assets/assets/img/VNFACTORY.png" type="image/x-icon">

    <link rel="stylesheet" href="admin_assets/assets/css/normalize.css">
    <link rel="stylesheet" href="admin_assets/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin_assets/assets/css/fontello.css">
    <link href="admin_assets/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="admin_assets/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="admin_assets/assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="admin_assets/assets/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" href="admin_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_assets/assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="admin_assets/assets/css/price-range.css">
    <link rel="stylesheet" href="admin_assets/assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="admin_assets/assets/css/owl.theme.css">
    <link rel="stylesheet" href="admin_assets/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="admin_assets/assets/css/style.css">
    <link rel="stylesheet" href="admin_assets/assets/css/responsive.css">
    <link rel="stylesheet" href="admin_assets/assets/css/myStyles.css">
    <link rel="stylesheet" href="admin_assets/assets/css/lightslider.min.css">
</head>
<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->

    @include('layout.header')

		@yield('content')

    <!-- Footer area-->
    @include('layout.footer')

    <script src="admin_assets/assets/js/modernizr-2.6.2.min.js"></script>

    <script src="admin_assets/assets/js/jquery-1.10.2.min.js"></script> 
    <script src="admin_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin_assets/assets/js/bootstrap-select.min.js"></script>
    <script src="admin_assets/assets/js/bootstrap-hover-dropdown.js"></script>

    <script src="admin_assets/assets/js/easypiechart.min.js"></script>
    <script src="admin_assets/assets/js/jquery.easypiechart.min.js"></script>

    <script src="admin_assets/assets/js/owl.carousel.min.js"></script>
    <script src="admin_assets/assets/js/wow.js"></script>

    <script src="admin_assets/assets/js/icheck.min.js"></script>
    <script src="admin_assets/assets/js/price-range.js"></script>

    <script src="admin_assets/assets/js/main.js"></script>
    <script type="text/javascript" src="admin_assets/assets/js/lightslider.min.js"></script>
    <script>
      $(document).ready(function () {

          $('#image-gallery').lightSlider({
              gallery: true,
              item: 1,
              thumbItem: 9,
              slideMargin: 0,
              speed: 500,
              auto: true,
              loop: true,
              onSliderLoad: function () {
                  $('#image-gallery').removeClass('cS-hidden');
              }
          });
      });
    </script>
    <script type="text/javascript">
        // $(function () {
        //       var url = window.location.pathname,
        //           urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        //       $('#navigation a').each(function () {
        //           if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
        //               $(this).addClass('active');
        //               $(this).parent().previoussibling().find('a').removeClass('active');
        //           }
        //       });    
        //   });

        function addClassActive() {
          var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
            $('#navigation a').each(function () {
                if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                    $(this).addClass('active');
                    $(this).parent().previoussibling().find('a').removeClass('active');
                }
            });
        }

        addClassActive();
        
    </script>

    @yield('script')

</body>
</html>