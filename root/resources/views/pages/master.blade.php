<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('root/resources/assets/images/logo/logo.png') }}"/>
    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('root/resources/assets/engine1/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('root/resources/assets/css/custom.css') }}"/>
    <script src="{{ asset('root/resources/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('root/resources/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('root/resources/assets/js/respond.js') }}"></script>
</head>
<body>
<div class="container">
    <header>
        <img src="{{ asset('root/resources/assets/images/banner/banner.png') }}" alt="" class="img-responsive"/>
        @include('pages.navbar')
        @include('pages.scrollbar')
    </header>
    <article class="col-md-12">
        <section class="col-md-3 navbar aside">
            @include('pages.sidebar')
        </section>
        <section class="col-md-9">
            @yield('content')
        </section>
    </article>
    <footer class="col-md-12">
        @include('pages.footer')
    </footer>
</div>
</body>
</html>