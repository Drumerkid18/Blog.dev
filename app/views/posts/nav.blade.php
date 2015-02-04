<nav class="navbar navbar-default navbar-right">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                <li><a href="{{{ action('HomeController@resume') }}}">Resume</a></li>
                <li><a href="{{{ action('HomeController@portfolio') }}}">Portfolio</a></li>
                @if (Auth::check())
                    <li><a href="{{{ action('PostsController@create') }}}">Create Blog Post</a></li>
                @endif               
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>