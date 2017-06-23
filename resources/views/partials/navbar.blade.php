@include('partials.header')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">

        <!-- Branding Image Left-->
        <a class="navbar-brand" href="{{ url('/articles') }}">
            <img src="http://www.letstalk.is/wp-content/themes/twentyeleven/images/letstalk-logo.png"/>
        </a>

        <!-- Branding Image Right -->
        <a class="navbar-brand pull-right" href="{{ url('/articles') }}">
            <img src="https://media.licdn.com/mpr/mpr/p/4/005/0b3/08f/2b69fe5.png"/>
        </a>

        {{--<div class="header-code"><h1 id="h1-id1">--}}
        {{--Lets get started with Talk--}}
        {{--</h1></div>--}}

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item active" href="/home">Home</a>
                    <a class="blog-nav-item" href="/articles">New features</a>
                    <a class="blog-nav-item" href="articles/create">Create Article</a>
                    <a class="blog-nav-item" href="#">New hires</a>
                    <a class="blog-nav-item" href="#">About us</a>
                </nav>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}" style="color: whitesmoke">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: whitesmoke">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                                   style="background-image: image('uploads/profile-button.png'); position: relative; padding-left: 50px; color: whitesmoke;">

                                    <img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}"
                                         style="width: 32px; height: 32px; position: absolute; top:10px; left: 10px; border-radius: 50%; ">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu pull-right" style="background-color: #2e3436;" role="menu">
                                    <hr>

                                    <li>
                                        <img class="profile-img" src="/uploads/avatars/{{ $user->avatar }}"
                                             style="width: 70px; height: 70px; position: relative; top: 1px;
                                              left: 40px; border-radius: 100%; "><br><br><br><br><br>
                                        <a href="/profile/{{Auth::user()->username}}" style="color: whitesmoke"> Visit Your Profile</a>

                                    </li>
                                    <hr>
                                    <li>
                                        <a href="/articles/create" style="color: whitesmoke"> Create Article</a>
                                    </li>
                                    <li>
                                        <a href="/articles" style="color: whitesmoke"> Read Articles</a>
                                    </li>

                                    <hr>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: whitesmoke">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

