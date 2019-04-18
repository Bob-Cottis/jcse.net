<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
        @section('title')
            {{ config('jrnl.shortName') }}
        @endsection
    </title>
</head>

<body>
@yield('content')
</body>
</html>
