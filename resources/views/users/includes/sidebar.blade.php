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
                <a href="{{ url('users/home') }}"
                    class="nav-link {{ (request()->segment(2) == 'home') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        หน้าหลัก
                    </p>
                </a>
            </li>

            

            <li class="nav-item">
                <a href="{{ url('studentuser/summary') }}"
                    class="nav-link {{ (request()->segment(2) == 'summary') ? 'active' : '' }}">
                    <i class="nav-icon fab fa-wpforms"></i>
                    <p>
                        ส่งข้อสอบ
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('studentuser/profiles') }}"
                    class="nav-link {{ (request()->segment(2) == 'profiles') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-import"></i>
                    <p>
                        รับเอกสาร
                    </p>
                </a>
            </li>

            {{-- <li class="nav-item has-treeview {{ (request()->segment(2)=='products')?'menu-open':'' }}
            {{ (request()->segment(2)=='categories')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-plane"></i>
                    <p>
                        ปฏิบัติงานนอกพื้นที่
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('backend/products') }}"
                            class="nav-link {{ (request()->segment(2)=='products')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>แบบฟอร์มขออนุมัติ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('backend/categories') }}"
                            class="nav-link {{ (request()->segment(2)=='categories')?'active':'' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>รายงานการเดินทาง</p>
                        </a>
                    </li>
                </ul>
            </li> --}}

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
            <form action="{{ url('users/officeLogout') }}" id="frm_logout" method="post">
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