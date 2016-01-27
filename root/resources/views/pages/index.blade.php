@extends('pages.master')

@section('content')
    <section class="col-md-9 home">
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <li><img src="{{ asset('root/resources/assets/data1/images/1.jpg') }}" alt="" title="1" id="wows1_0"/></li>
                <li><img src="{{ asset('root/resources/assets/data1/images/2.jpg') }}" alt="" title="2" id="wows1_1"/></li>
                <li><img src="{{ asset('root/resources/assets/data1/images/3.jpg') }}" alt="" title="3" id="wows1_2"/></li>
                <li><img src="{{ asset('root/resources/assets/data1/images/4.jpg') }}" alt="" title="4" id="wows1_3"/></li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="1"><img src="{{ asset('root/resources/assets/tooltips/images/1.jpg') }}" alt="1"/>1</a>
                <a href="#" title="2"><img src="{{ asset('root/resources/assets/tooltips/images/2.jpg') }}" alt="2"/>2</a>
                <a href="#" title="3"><img src="{{ asset('root/resources/assets/tooltips/images/3.jpg') }}" alt="3"/>3</a>
                <a href="#" title="4"><img src="{{ asset('root/resources/assets/tooltips/images/4.jpg') }}" alt="4"/>4</a>
            </div>
        </div>
        <span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.4</span>
        <div class="ws_shadow"></div>
    </div>
        <script src="{{ asset('root/resources/assets/engine1/wowslider.js') }}"></script>
        <script src="{{ asset('root/resources/assets/engine1/script.js') }}"></script>
    <!-- End WOWSlider.com BODY section -->

    <!--    display home page article starts-->
    <?php //echo home_content()?>
    <!--    display home page article ends-->


    </section>
    <section class="col-md-3 aside">
        <section class="news">
            <p class="text-center heading">News/Notice</p>
            <ul class="news-container">
                <?php //display_notice('news') ?>
            </ul>
        </section>

        <section class="news">
            <p class="text-center heading">CHAIRMAN</p>
            <a href="?page=chairman message"><img src="{{ asset('root/resources/assets/images/founder.png') }}" class="img-responsive" alt=""></a>
            <p style="text-align: center; color: #000; font-family:nikosh">ড. মুহাম্মদ মুসা চৌধুরী</p>
        </section>
        <section class="news">
            <p class="text-center heading">PRINCIPAL</p>
            <a href="?page=principal message"><img src="{{ asset('root/resources/assets/images/principal.png') }}" class="img-responsive" alt=""></a>
            <p style="text-align: center; color: #000; font-family:nikosh"></p>
        </section>
    </section>
@stop