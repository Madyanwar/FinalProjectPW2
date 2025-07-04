  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
          <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                <a href="{{ ('profile') }}" class="d-block">
                    @auth
                        {{ strtoupper(Auth::user()->name) }}
                    @endauth
                </a>
                <span class="text-primary">Role: {{ Auth::user()->role }}</span>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dasboard Data
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      
                      <ul class="nav nav-treeview">
                      @if(Auth::user()->role == 'dosen')
                          <li class="nav-item">
                              <a href="{{ route('mahasiswas.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Mahasiswa</p>
                              </a>
                          </li>
                            @endif
                          @if(Auth::user()->role == 'admin')
                          <li class="nav-item">
                              <a href="{{ route('dosens.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Dosen</p>
                              </a>
                          </li>
                            @endif
                          <li class="nav-item">
                              <a href="{{ route('prodis.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Prodi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('rombongan_belajars.index') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Rombel</p>
                              </a>
                          </li>
                      </ul>

                      <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Log-Out</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                    
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
