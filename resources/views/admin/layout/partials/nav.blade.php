
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Carrascosa Blog</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}}  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('/admin/users/'.Auth::user()->id.'/edit') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/users/'.Auth::user()->id.'/edit') }}"><i class="fa fa-fw fa-user"></i> My profile</a>
                    </li>
                    @if(Auth::user()->type == 'admin')                        
                        <li>
                            <a href="{{ route('admin.users.index') }}"><i class="fa fa-fw fa-group"></i> All users</a>
                        </li>                        
                        <li>
                            <a href="{{ route('admin.posts.index') }}"><i class="fa fa-fw fa-edit"></i> All Posts</a>
                        </li>                      
                        <li>
                            <a href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-edit"></i>Categories</a>
                        </li>                      
                        <li>
                            <a href="{{ route('admin.tags.index') }}"><i class="fa fa-fw fa-edit"></i>Tags</a>
                        </li>                      
                        <li>
                            <a href="{{ route('admin.images.index') }}"><i class="fa fa-fw fa-file-o"></i> Images</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('admin.favorites.index')}}"><i class="fa fa-fw fa-heart-o"></i> Favorite Posts</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>