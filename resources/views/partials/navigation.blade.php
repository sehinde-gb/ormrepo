<header role="banner">
    <nav role="navigation" class="logo-left">
        @if (Auth::guest())
            <div class="logo-heading">
                <h10>ORM</h10><h11>REPO</h11>
            </div><!-- /.logo-heading -->

            <div class="menuIcon">
                <a href="#menuExpand"><i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </a>
            </div><!-- /.menuIcon -->
            <div class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="/blogs">Posts</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/diversecodertv">DiverseCoderTV</a></li>            
                   
                </ul>
            </div><!-- /.menu -->
        @else

            <div class="logo-heading">
                <h10>ORM</h10><h11>REPO</h11>
            </div><!-- /.logo-heading -->

            <div class="menuIcon">
                <a href="#menuExpand"><i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </a>
            </div><!-- /.menuIcon -->


            <div class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="admin/blogs">Posts</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/diversecodertv">DiverseCoderTV</a></li>
                    <li><a href="{{ url('/logout') }}"

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


        @endif

    </nav>
</header>


