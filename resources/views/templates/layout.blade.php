<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('header')

    <title>
        @yield('title')
        @section('title')
            {{ config('jrnl.shortName') }}
        @endsection
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{--Font Awesome--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/jcseStyle.css') }}" rel="stylesheet">
    @yield('headercss')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2798773881058093",
            enable_page_level_ads: true
        });
    </script>
</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right col-md-2" id="sidebar-wrapper">
        <div class="sidebar-heading jrnl-text"><h3>{{ config('jrnl.shortName') }} </h3> </div>
        <div class="list-group list-group-flush ">
            <a href="{{route('showPage',['msg'=>'jmMessages.newVersion'])}}" class="list-group-item list-group-item-action ">New Version</a>
            <a href="{{route('showPage',['msg'=>'jmMessages.mission'])}}" class="list-group-item list-group-item-action ">Mission</a>
            <a href="{{route('showPage',['msg'=>'jmMessages.indexing'])}}" class="list-group-item list-group-item-action ">Indexing Services</a>
            <a href="{{route('viewAllVol')}}" class="list-group-item list-group-item-action ">List All Volumes</a>
            <div class="list-group-item list-group-item-action ">
                <form method="post" action="{!! route('viewVolpost') !!}">
                @csrf
                <select name="vol">
                @for ($v = config("jrnl.maxVol"); $v >0; $v--)
                    <option value="{{ $v }}">List Volume {{ $v }}</option>
                @endfor
                </select>
                    <input type="submit" name="submit" value="Go" />
                </form>
            </div>
            <a href="{{route('subForm1')}}" class="list-group-item list-group-item-action ">Paper Submission</a>
            <a href="{{route('showPage',['msg'=>'jmMessages.FAQ'])}}" class="list-group-item list-group-item-action ">FAQ</a>
            @yield('sidebar')
            <a href="{{route('showPage',['msg'=>'jmMessages.contactUs'])}}" class="list-group-item list-group-item-action ">Contact Us</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <a href="#" id="menu-toggle"><i class="fas fa-align-justify jrnl-text"></i></a>
            <h2 class="jrnl-text">&nbsp;{{config('jrnl.longName')}}</h2>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    @auth
                        <li class="nav-item active">
                        <a class="nav-link" href="#">My {{config('jrnl.shortName')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'register'}}">Register</a>
                    </li>
                    @endguest
                 </ul>
            </div>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
@yield('scripts')
</body>

</html>
