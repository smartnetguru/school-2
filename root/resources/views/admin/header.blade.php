<header class="header">
    <div class="logo-container">
        <a href="{{ action('PageController@index') }}" class="logo">
            <img src="{{ asset('root/resources/assets/images/logo.png') }}" height="35" alt=""/>
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="header-right">
        <form action="pages-search-results.html" class="search nav-form">
            <div class="input-group input-search">
                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
            </div>
        </form>
        <span class="separator"></span>
        <ul class="notifications">
            <li>
                <a class="dropdown-toggle notification-icon" href="#" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                    <span class="badge">3</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle notification-icon" href="#" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="badge">10</span>
                </a>
            </li>
            <li>
                <a class="dropdown-toggle notification-icon" href="#" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="badge">6</span>
                </a>
            </li>
        </ul>
        <span class="separator"></span>
        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ asset('root/resources/assets/images/!sample-user.jpg') }}" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">{{ Auth::user() ->role}}</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>