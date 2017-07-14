<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin.dashboard') }}"> Fweshdeals </a>

    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('store.index') }}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> My Site</a></li>
        <li class="dropdown">
          <a href="{{ route('store.index')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Activities <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>