<h7 id="top"></h7>
<header role="banner">
    <nav role="navigation" class="navigation">
        @if (Auth::guest())
            <div class="navigation-icon">
                    <div class="menuIcon">
                        <a href="#menuExpand"><i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                        </a>
                    </div><!-- /.menuIcon -->
                    <div class="menu">
                        <ul>
                            <img class="nav_logo"
                                 src="/images/logo/logo_large.png"
                                 alt="The ormrepo thoughtful logo">
                            <li ><a href="/blogs" class="nav-items hide">Home</a></li>
                            <li><a href="/about" class="nav-items hide">About Us</a></li>
                            <li><a href="/contact" class="nav-items hide">Contact Us</a></li>
                            <li><a href="/login" class="nav-items hide">Login</a></li>
                            <li><a href="/register" class="nav-items hide">Register</a></li>
                        </ul>
                    </div><!-- /.menu -->
            </div><!-- /.nav-icon -->

            <div class="main-navigation">
                <ul>
                    <li ><a href="/blogs" class="nav-items"><i class="fa fa-home" aria-hidden="true"></i>
                            Home</a></li>
                    <li><a href="/about" class="nav-items"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                            About Us</a></li>
                    <li><a href="/contact" class="nav-items"><i class="fa fa-universal-access" aria-hidden="true"></i>
                                Contact Us</a></li>
                    <li><a href="/videos" class="nav-items"><i class="fa fa-youtube" aria-hidden="true"></i>
                            Videos</a></li>
                    <li><a href="/login" class="nav-items"><i class="fa fa-user" aria-hidden="true"></i>
                                Login</a></li>
                    <li><a href="/register" class="nav-items"><i class="fa fa-user-plus" aria-hidden="true"></i>
                                Register</a></li>

                    <div class="form-search">
                        {!! Form::open(['method' => 'GET']) !!}
                        <span><i class="fa fa-search" name="search" aria-hidden="true">
                        </i> </span>
                        {!! Form::input('search', 'q', null, ['placeholder' => 'Search...', 'class' => 'search-box']) !!}
                        {!! Form::close() !!}
                    </div><!-- /.form-search -->
                </ul>
            </div><!-- /.main-navigation -->
        @else
            <div class="navigation-icon">
                <div class="menuIcon">
                    <a href="#menuExpand"><i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                    </a>
                </div><!-- /.menuIcon -->
                <div class="menu">
                    <ul>
                        <img class="nav_logo"
                             src="/images/logo/logo_large.png"
                             alt="The ormrepo thoughtful logo">

                        <li ><a href="/admin/blogs" class="nav-items hide">Home</a></li>
                        <li><a href="/about" class="nav-items hide">About Us</a></li>
                        <li><a href="/contact" class="nav-items hide">Contact Us</a></li>

                        <li><a class="nav-items hide" href="{{ url('/logout') }}"

                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div><!-- /.menu -->
            </div><!-- /.navigation-icon -->



            <div class="main-navigation">
                <ul>
                    <li ><a href="/admin/blogs" class="nav-items"><i class="fa fa-home" aria-hidden="true"></i>
                            Home</a></li>
                    <li><a href="/about" class="nav-items"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                    About Us</a></li>

                    <li><a href="/admin/charges" class="nav-items not-active"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                            Store</a></li>
                    <li><a href="/contact" class="nav-items"><i class="fa fa-universal-access" aria-hidden="true"></i>
                            Contact Us</a></li>
                    <li><a href="/videos" class="nav-items"><i class="fa fa-youtube" aria-hidden="true"></i>
                            Videos</a></li>
                    <li><a class="nav-items" href="{{ url('/logout') }}"

                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user" aria-hidden="true"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <div class="form-search">
                        {!! Form::open(['method' => 'GET']) !!}
                        <span><i class="fa fa-search" name="search" aria-hidden="true">
                        </i> </span>
                        {!! Form::input('search', 'q', null, ['placeholder' => 'Search...', 'class' => 'search-box']) !!}
                        {!! Form::close() !!}
                    </div><!-- /.form-search -->
                </ul>
            </div><!-- /.main-navigation -->
        @endif
    </nav><!-- /.navigation -->



</header>


