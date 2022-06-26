<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a desired category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Content/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('Content/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Content/Site.css') }}">




    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="/assets/css/style.css">
     -->


</head>
<body style="padding-bottom:0px">
<div class="body-content page " style="padding:0px">
    <div class="navbar navbar-dark navbar-expand navbar-inverse navbar-fixed-top pb-1 mb-0" style="background-color: #222222; font-family:'Segoe UI Emoji';">
        <div class="container">
            <nav class="navbar-collapse collapse">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item navbar-brand" style="font-size: 20px; color: #FFFFFF;">
                        DELI SHOP
                    </li>
                    <li class="nav-item" style="font-size: 16px;">
                        <a class="nav-link" href="/products">ALL PRODUCTS</a>
                    </li>
                    <li class="nav-item" style="font-size: 16px; margin-left: 5px;">
                        <a class="nav-link" href="/categories">CATEGORIES</a>
                    </li>
                    <li class="nav-item" style="font-size: 16px; margin-left: 5px;">
                        <a class="nav-link" href="/carts">SHOPPING CART</a>
                    </li>
                    <li class="nav-item" style="font-size: 16px; margin-left: 5px;">
                        <a class="nav-link" href="/contact">CONTACT</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
{{--                     Authentication Links --}}
                @guest
                        <li style="margin-left: 450px;"></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li style="margin-left: 500px;"></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

<!--              <ul class="nav navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                </ul>-->
            </nav>
        </div>
    </div>



    @yield('content')



    <footer class="page-footer font-small pt-0" style="background-color:#222222; position:absolute; bottom:0; width:100%">

        <!-- Footer Elements -->
        <div class="container pt-3">
            <ul class="group-xs group-middle" style="text-align:center; margin-left:510px" >
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
        </div>
        <!-- Footer Elements -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            © 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>

<link rel="stylesheet" href="{{ asset('Scripts/modernizr-2.8.3.js') }}">
<link rel="stylesheet" href="{{ asset('Scripts/jquery-3.4.1.js') }}">
<link rel="stylesheet" href="{{ asset('Scripts/bootstrap.js') }}">
<link rel="stylesheet" href="{{ asset('Scripts/bootbox.js') }}">
<link rel="stylesheet" href="{{ asset('Scripts/bootbox.min.js') }}">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('Content/js/core.min.js') }}">
<link rel="stylesheet" href="{{ asset('Content/js/script.js') }}">



</body>
</html>
