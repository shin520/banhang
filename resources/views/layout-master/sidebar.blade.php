<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ asset('admin') }}/img/logo.png" class="header-logo" />
                {{-- <span class="logo-name">Otika</span> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main menu</li>
            <li class="dropdown active">
                <a href="{{route('home')}}" class="nav-link"><i data-feather="monitor"></i><span>Trang tổng quan</span></a>
            </li>
            <li class="dropdown">
                <a href="{{route('country.list')}}" class="nav-link"><i data-feather="globe"></i><span>Quốc gia</span></a>
            </li>
            <li class="dropdown">
                <a href="{{route('user.list')}}" class="nav-link"><i data-feather="users"></i><span>Người dùng</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user-check"></i><span>Khách hàng</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('customer.list')}}">Danh sách khách hàng</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Sản phẩm</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('categories')}}">Danh mục</a></li>
                    <li><a class="nav-link" href="widget-data.html">Danh sách sản phẩm</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
