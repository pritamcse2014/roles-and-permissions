<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @php
            $permissionUser = App\Models\PermissionRole::getPermission('User', Auth::user()->role_id);
            $permissionRole = App\Models\PermissionRole::getPermission('Role', Auth::user()->role_id);
            $permissionCategory = App\Models\PermissionRole::getPermission('Category', Auth::user()->role_id);
            $permissionSubCategory = App\Models\PermissionRole::getPermission('Sub Category', Auth::user()->role_id);
            $permissionProduct = App\Models\PermissionRole::getPermission('Product', Auth::user()->role_id);
            $permissionSetting = App\Models\PermissionRole::getPermission('Setting', Auth::user()->role_id);

            // dd([
            //     'User' => App\Models\PermissionRole::getPermission('User', Auth::user()->role_id),
            //     'Role' => App\Models\PermissionRole::getPermission('Role', Auth::user()->role_id),
            //     'Category' => App\Models\PermissionRole::getPermission('Category', Auth::user()->role_id),
            //     'Sub Category' => App\Models\PermissionRole::getPermission('Sub Category', Auth::user()->role_id),
            //     'Product' => App\Models\PermissionRole::getPermission('Product', Auth::user()->role_id),
            //     'Setting' => App\Models\PermissionRole::getPermission('Setting', Auth::user()->role_id),
            // ]);
        @endphp
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="{{ url('panel/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->
        @if (!empty($permissionUser))
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{ url('panel/user') }}">
                    <i class="bi bi-person"></i>
                    <span>User</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionRole))
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) != 'role') collapsed @endif" href="{{ url('panel/role') }}">
                    <i class="bi bi-people"></i>
                    <span>Role</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionCategory))
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif" href="{{ url('panel/category') }}">
                    <i class="bi bi-list"></i>
                    <span>Category</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionSubCategory))
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) != 'subcategory') collapsed @endif" href="{{ url('panel/subcategory') }}">
                    <i class="bi bi-chevron-right"></i>
                    <span>Sub Category</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionProduct))
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) != 'product') collapsed @endif" href="{{ url('panel/product') }}">
                    <i class="bi bi-box"></i>
                    <span>Product</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionSetting))
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2) != 'setting') collapsed @endif" href="{{ url('panel/setting') }}">
                    <i class="bi bi-gear"></i>
                    <span>Setting</span>
                </a>
            </li>
        @endif
    </ul>

</aside>
<!-- End Sidebar-->