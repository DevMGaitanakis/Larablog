<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="fluid-container">
      <div class="row">
@if(Auth::check())
<div class="col-lg-2">
  <ul class="list-group">
    <li class="list-group-item">
      <a href="{{route('post.index')}}">My Posts</a>
    </li>
    <li class="list-group-item">
      <a href="{{route('post.create')}}">Create New Post</a>
    </li>
    <li class="list-group-item">
      <a href="{{route('post.trashed')}}">Trashed Posts</a>
    </li>
  </ul>
<ul class="list-group">
  <li class="list-group-item">
    <a href="{{route('category.create')}}">Create New Category</a>
  </li>
  <li class="list-group-item">
    <a href="{{route('category.index')}}">View Categories</a>
  </li>
  <li class="list-group-item">
    <a href="{{route('subcategory.create')}}">Create New SubCategory</a>
  </li>
  <li class="list-group-item">
    <a href="{{route('subcategory.index')}}">View SubCategories</a>
  </li>
</ul>
<ul class="list-group">
  <li class="list-group-item">
    <a href="{{route('user.create')}}">Create Users</a>
  </li>
  <li class="list-group-item">
    <a href="{{route('user.index')}}">View Users</a>
  </li>
</ul>
<ul class="list-group">
  <li class="list-group-item">
    <a href="{{route('settings.index')}}">Settings</a>
  </li>
</ul>
</div>
@endif
    <div class="col-lg-6">
      @yield('content')
    </div>

  </div>

</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/toastr.min.js') }}"> </script>
    <script>

    @if(Session::has('success'))
      toastr.success('{{Session::get('success')}}')
    @endif
    @if(Session::has('info'))
      toastr.success('{{Session::get('success')}}')
    @endif
    </script>
@yield('scripts')
</body>
</html>
