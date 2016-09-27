 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
<!--              @if (Auth::check())-->
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Friends</a></li>
                <!--@endif-->
                <form class="navbar-form navbar-left" role="search" action="#">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Search for friends...">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Search" name="submit">
                </form>
            </ul>
          <ul class="nav navbar-nav navbar-right">
<!--              @if (Auth::check())-->
            <li><a href="#">Username</a></li>
            <li><a href="#">Update Profile</a></li>
            <li><a href="#">Log out</a></li>
<!--            @endif-->
            <li><a href="{{ route('auth.register')}}">Register</a></li>
            <li><a href="{{ route('auth.login')}}">Log in</a></li>
          </ul>
         </div><!--/.nav-collapse -->
      </div>
    </nav>
