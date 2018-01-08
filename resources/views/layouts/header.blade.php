<header class="main-header">

    <!-- Logo -->
    {{--<a href="/" class="logo">--}}
        {{--<!-- mini logo for sidebar mini 50x50 pixels -->--}}
        {{--<span class="logo-mini"><b>A</b>LT</span>--}}
        {{--<!-- logo for regular state and mobile devices -->--}}
        {{--<span class="logo-lg"><b>Admin</b>LTE</span>--}}
    {{--</a>--}}
    <nav class="navbar navbar-static-top no-margin" role="navigation">
        <!-- Sidebar toggle button-->
        {{--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">--}}
            {{--<span class="sr-only">Toggle navigation</span>--}}
        {{--</a>--}}

        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">{{ config('app.name') }}</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                @if (Auth::check())

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            {{--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">--}}

                            <span>{{ Auth::user()->email }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}

                                <p>
                                    {{ auth()->user()->email }}
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Minha conta</a>
                                </div>
                                <div class="pull-right">
                                    {{--<a href="/logout" class="btn btn-default btn-flat">Sair</a>--}}

                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>

                @else
                    <li>
                        <a href="/register"><i class="fa fa-user"></i> Cadastrar</a>
                    </li>
                    <li>
                        <a href="/login"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>