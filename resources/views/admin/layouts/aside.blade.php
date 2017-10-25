<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('admin.dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('admin.users')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
        <li><a href="{{ route('admin.posts')}}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
        <li><a href="{{ route('admin.services')}}"><i class="fa fa-handshake-o"></i> <span>Services</span></a></li>
        <li><a href="{{ route('admin.features')}}"><i class="fa fa-puzzle-piece"></i> <span>Features</span></a></li>
        <li><a href="{{ route('admin.info')}}"><i class="fa fa-institution"></i> <span>Company Info</span></a></li>

        <li class="header">SETTING</li>
        <li><a href="{{ route('admin.slides')}}"><i class="fa fa-video-camera"></i> <span>Slide Show</span></a></li>
        <li><a href="{{ route('admin.users')}}"><i class="fa fa-gear"></i> <span>Other</span></a></li>
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>