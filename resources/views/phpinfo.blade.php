@extends('templates.layout')

@section('title')
    {{config('jrnl.longName')}}
    @endsection

@section('content')
        {{--<div class="flex-center position-ref full-height">--}}
{{--
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

                <p>Editor: <i><script type="text/javascript">mailtobob()</script></i></p>
                <!-- ?php
                include('get_vol_listing.inc.php');
                $st=get_vol_listing();
                if (!$logged_in) {
                    ?> -->
--}}
                <p><?php echo phpinfo(); ?></p>
       {{-- </div>--}}
@endsection
