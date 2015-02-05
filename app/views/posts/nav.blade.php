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
                @unless(Auth::check())
                <li class="dropdown">
                <a href="{{{ action('HomeController@showLogin') }}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {{ Form::open(array('action' => 'HomeController@doLogin')) }}
                        <li>
                            <div class="form-group spaced">
                                {{ Form::label('email', 'eMail address') }}
                                {{ Form:: email('email', Input::old('email'), array('class' => 'form-control')) }}
                            </div>
                        </li>

                        <li>
                            <div class="form-group spaced">
                                {{ Form::label('password', 'Password') }}
                                {{ Form:: password('password', array('class' => 'form-control')) }}
                            </div>
                        </li>

                        <li>
                            <div class="form-group spaced">
                                {{ Form::submit('Log In!', array('class' => 'btn btn-primary')) }}
                            </div>
                        </li>
                        {{ Form::close() }}
                    </ul>
                </li>                
                @endunless
                @if (Auth::check())
                    <li><a href="{{{ action('PostsController@create') }}}">Create Blog Post</a></li>
                    <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
                @endif               
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<style type="text/css">
.spaced{
    padding: 5px;
    width: 325px;
}

</style>