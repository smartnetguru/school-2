<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('root/resources/assets/images/logo/logo.png') }}"/>
    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/custom.css') }}"/>
</head>
<body>
<div class="container">
    <header>
        <div>
            <img src="{{ asset('root/resources/assets/images/banner/banner.png') }}" alt="" class="img-responsive"/>
            <div class="navbar navbar-sky">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/">HOME</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li><a href="#">ACADEMIC</a></li>
                            <li><a href="#">MANAGEMENT</a></li>
                            <li><a href="#">ADMISSION</a></li>
                            <li><a href="#">STUDENTS</a></li>
                            <li><a href="#">NOTICE</a></li>
                            <li><a href="#">RESULTS</a></li>
                            <li><a href="#">CONTACTS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
</div>
</body>
</html>