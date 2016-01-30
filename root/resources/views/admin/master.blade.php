<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta name="keyword" content="HTML5 Admin Panel"/>
    <meta name="description" content="Admin panel for school management systems"/>
    <meta name="author" content="smartrahat"/>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('root/resources/assets/vendor/font-awesome/css/font-awesome.css') }}"/>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/theme.css') }}"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ 'root/resources/assets/css/skins/default.css'}}"/>

    <!-- Custom CSS -->
{{--    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/custom.css') }}"/>--}}

    <!-- Head Libs -->
    <script src="{{ asset('root/resources/assets/') }}"></script>
    <!-- Vendor -->
    <script src="{{ asset('root/resources/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('root/resources/assets/js/bootstrap.min.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('root/resources/assets/js/respond.js') }}"></script>
</head>
<body>
<section class="body">
    @include('admin.header')
    @yield('content')
</section>
</body>
</html>