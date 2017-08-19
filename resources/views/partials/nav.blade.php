<header role="banner">
    <nav role="navigation" class="logo-left">
        @if (Auth::guest())

            <div class="logo-heading">
                <h10>ORM</h10><h11>REPO</h11>
            </div><!-- /.logo-heading -->

            <div class="right-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/videos">Videos</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </div><!-- /.menu -->
        @else

        @endif

    </nav>
</header>

