<div class="navbar navbar-sky">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="/">HOME</a></li>
                <li>
                    <a href="#">ABOUT</a>
                    <ul class="sub-menu">
                        <li><a href="#">Chairman Message</a></li>
                        <li><a href="#">Principal Message</a></li>
                    </ul>
                </li>
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