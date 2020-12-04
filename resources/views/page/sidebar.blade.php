<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('adm/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Hallo Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      @guest
        <div class="info">
          <a href="{{ route('login') }}" class="d-block">{{ __('Login') }}</a>
        </div>
      @else
        <div class="image">
          <img src="{{asset('adm/dist/img/default-150x150.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block" href="{{url('home')}}">{{ Auth::user()->name }}</a>
        </div>
      @endguest
      </div> --}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ Request::is('barang','penjualan')? 'menu-open':'' }}">
            <a href="#" class="nav-link {{ Request::is('barang','penjualan')? 'active':'' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('barang')}}" class="nav-link {{ Request::is('barang')? 'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('penjualan')}}" class="nav-link {{ Request::is('penjualan')? 'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('barang/create','penjualan/create')? 'menu-open':'' }}">
            <a href="#" class="nav-link {{ Request::is('barang/create','penjualan/create')? 'active':'' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Add
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('barang/create')}}" class="nav-link {{ Request::is('barang/create')? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('penjualan/create')}}" class="nav-link {{ Request::is('penjualan/create')? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-header">More</li>
          <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link {{ Request::is('user')? 'active':'' }}">
              <i class="nav-icon fas fa-file"></i>
              <p>User</p>
            </a>
          </li> --}}
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
