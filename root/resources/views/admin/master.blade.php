<!doctype html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body>
<section class="body">
    @include('admin.header')
    <div class="inner-wrapper">
        @include('admin.aside')
        <section class="content-body" role="main">
            @yield('content')
        </section>
    </div>
</section>
@include('admin.js')
</body>
</html>