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
                   
                    <li><a href="/blogs">Blogs</a></li>

                    <li><a href="https://ormrepo-training.thinkific.com/">Courses</a></li>
             
                    <li><a href="/diversecodertv">DiverseCoderTV</a></li>

                    
                   
                </ul>
            </div><!-- /.right-menu -->
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
                   
                    <li><a href="/admin/blogs">Blogs</a></li>

                    <li><a href="https://ormrepo-training.thinkific.com/">Courses</a></li>
                  
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
            </div><!-- /.right-menu -->


        @endif

    </nav>
</header>

