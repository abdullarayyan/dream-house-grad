<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Building House">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">

    <title>Building House | @yield('title')</title>

    <link rel="shortcut icon" href="{{ url('assets/images/logo.png') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <!-- Plugins -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"></link>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    {{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/sanfrancisco-font.css?v=2" rel="stylesheet"
          type="text/css" media="all"/>

    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/stack-interface.css?v=1" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/lightbox.min.css?v=1" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/socicon.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/flickity.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/jquery.steps.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/iconsmind.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/ihouse_icons.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/sanfrancisco-font.css?v=2" rel="stylesheet"
          type="text/css" media="all"/>
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/theme.css?v=1" rel="stylesheet" type="text/css"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="https://ihouse.fra1.digitaloceanspaces.com/css/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://ihouse.fra1.digitaloceanspaces.com/css/owl.theme.default.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="57x57" href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="https://ihouse.fra1.digitaloceanspaces.com/apple-icon-180x180.png">

    <style>
        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            font-family: "SF Pro AR", "SF Pro Gulf", "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            font-family: "SF Pro AR", "SF Pro Gulf", "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }

        :-ms-input-placeholder { /* IE 10+ */
            font-family: "SF Pro AR", "SF Pro Gulf", "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }

        :-moz-placeholder { /* Firefox 18- */
            font-family: "SF Pro AR", "SF Pro Gulf", "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }
    </style>

    @yield('css')
    <link href="https://ihouse.fra1.digitaloceanspaces.com/css/custom.css?v=0.1.0" rel="stylesheet" type="text/css"
          media="all"/>

</head>

<body>

@include('layouts.includes.header')

<section id="app" class="main-section">
{{--@auth--}}
{{--    @include('layouts.includes.rightNav')--}}
{{--@endauth--}}

<!-- Page -->
    <section class="left-section @auth auth @endauth">
        <div class="page-title">
            <h1 id="previousPageTitle"></h1>
            <h1>@yield('page_title')</h1>
        </div>

        @yield('content')
    </section>

    <!-- Core  -->
    <script src="{{ url('/js/app.js') }}"></script>

    <!-- Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Scripts -->
{{--    <script src="{{ url('js/common.js') }}"></script>--}}
{{--    <script src="{{ url('js/pages/main/app.js') }}"></script>--}}

<!-- Page -->

    @yield('js')
</section>

<div id="loading-content">
    <footer class="footer-1 text-center"
            style="padding-top: 20px;padding-bottom: 0px; background-color: #f6f6f6">
        <div class="container">
{{--            <div class="row" style="justify-content: center">--}}
                <div class="">


                </div>
                <div class="">
                    <ul class="social-list list-inline list--hover">
                        <li style="color: #057a65!important;">
                            <a href="https://www.facebook.com/DREAM-HOUSE-112163563599599" target="_blank">
                                <i class="socicon socicon-facebook icon icon--xs" style="color:#057a65!important;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="socicon socicon-twitter icon icon--xs"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               target="_blank">
                                <i class="socicon socicon-instagram icon icon--xs"></i>
                            </a>
                        </li>


                        <li><a target="_blank" dir="ltr" href="https://wa.me/+972599702861">+970 (59) 970 2861</a> <i
                                class="fab fa-whatsapp"></i></li>
{{--                        <li><a style="color:#4a90e2;font-weight: bold" href="https://s11819879.wixsite.com/website"--}}
{{--                               target="_blank">موقعنا الالكتروني</a></li>--}}
                    </ul>
{{--                </div>--}}
            </div>

        </div>
    </footer>


</div>

@include('layouts.includes.notifications')
</body>

</html>
