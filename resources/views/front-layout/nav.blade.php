 <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Carrascosa Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</i></a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                        <li><a href="{{ url('/register') }} "><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                    @else
                        <li><a href="{{ route('admin.favorites.index')}}"><i class="fa fa-heart" aria-hidden="true"></i> My Favorite Post</a></li>                        
                        <li><a href="{{ url('/admin/users/'.Auth::user()->id.'/edit') }}"><i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->name}}</a></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>