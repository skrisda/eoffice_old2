<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #022d55 !important">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">e-Office</span>
    </a>

    <!-- Sidebar -->
    {{-- <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle
    elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Samit Koyom</a>
    </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item">
                <a href="{{ url('studentuser/home') }}" class="nav-link {{ (request()->segment(2) == 'home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        หน้าหลัก
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('studentuser/summary') }}" class="nav-link {{ (request()->segment(2) == 'summary') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        สรุปการเข้าร่วมกิจกรรม
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('studentuser/profiles') }}" class="nav-link {{ (request()->segment(2) == 'profiles') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        ประวัติส่วนตัว
                    </p>
                </a>
            </li>



            <li class="nav-header">
                <hr>
            </li>

            {{-- <li class="nav-item">
            <a href="#"  class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li> --}}
            <form action="{{ url('office/officeLogout') }}" id="frm_logout" method="post">
                @csrf
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('frm_logout').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>
                </li>
            </form>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>