<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Social Laravel</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
         @if (Auth::check())
            <li>{{ Auth::user()->getNameOrUsername() }}</li>
            <li>Update Profile</li>
            <li><a href="{{ route('auth.logout') }}">Sign out</a></li>
        @else
            <li><a href="{{ route('auth.signup') }}">Sign up</a></li>
            <li><a href="{{ route('auth.signin') }}">Sign in</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
