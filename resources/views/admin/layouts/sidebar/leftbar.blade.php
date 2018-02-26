<aside class="left-side sidebar-offcanvas">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Hello, {{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      @if (Auth::user()->role > 2)
      <li class="@if(isset($activeDashboard)) {{ $activeDashboard }} @endif">
        <a href="{{ route('aust_dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview @if(isset($fencerail)) {{ $fencerail }} @endif">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Fencerails</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View</a></li>
          <li><a href="{{ route('fencerail.create') }}"><i class="fa fa-angle-double-right"></i> Upload</a></li>
        </ul>
      </li>
      <li class="treeview @if(isset($gate)) {{ $gate }} @endif">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Gates</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View</a></li>
          <li><a href="{{ route('gate.create') }}"><i class="fa fa-angle-double-right"></i> Upload</a></li>
        </ul>
      </li>
      <li class="treeview @if(isset($handrail)) {{ $handrail }} @endif">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Handrails</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View</a></li>
          <li><a href="{{ route('handrail.create') }}"><i class="fa fa-angle-double-right"></i> Upload</a></li>
        </ul>
      </li>
      <li class="treeview @if(isset($irondoor)) {{ $irondoor }} @endif">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Iron Doors</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View</a></li>
          <li><a href="{{ route('irondoor.create') }}"><i class="fa fa-angle-double-right"></i> Upload</a></li>
        </ul>
      </li>
      <li class="treeview @if(isset($staircase)) {{ $staircase }} @endif">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Staircase</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View</a></li>
          <li><a href="{{ route('staircase.create') }}"><i class="fa fa-angle-double-right"></i> Upload</a></li>
        </ul>
      </li>
      <li class="treeview @if(isset($window)) {{ $window }} @endif">
        <a href="#">
          <i class="fa fa-upload"></i> <span>Windows-Burglary</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View</a></li>
          <li><a href="{{ route('window.create') }}"><i class="fa fa-angle-double-right"></i> Upload</a></li>
        </ul>
      </li>
      <!-- <li class="treeview @if(isset($activeProject)) {{ $activeProject }} @endif">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Projects</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> Energy</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i> ICT</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i> Engineering</a></li>
        </ul>
      </li>

      <li class="@if(isset($activeNews)) {{ $activeNews }} @endif">
        <a href="#">
          <i class="fa fa-edit"></i> <span>News</span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Testimony List</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Message List</a></li>
        </ul>
      </li> -->
      @endif
      <hr>
      <hr>
      @if(Auth::user()->role == 4)
      <li class="treeview ">
        <a href="#">
          <i class="fa fa-users"></i> <span>Admin</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i> View Admin</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i> Add Admin</a></li>
        </ul>
      </li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
