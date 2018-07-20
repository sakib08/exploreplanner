<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="brown">
            <a href="{{ route('admin.dashboard') }}">
                <i class="font-icon font-icon-home"></i>
                <span class="lbl">Dashboard</span>
            </a>
        </li>
        <li class="btn-group dropright">
            <i class="font-icon font-icon-home"></i>
            <a class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Restaurant
              <span class="sr-only">Toggle Dropright</span>
            </a>
            <div class="dropdown-menu">
                <a href="{{ route('admin.planner.restaurant.index') }}">
                    <i class="fas fa-users"></i>
                    <span class="lbl">Create</span>
                </a>
                <a href="{{ route('admin.planner.restaurant.index') }}">
                        <i class="font-icon font-icon-home"></i>
                        <span class="lbl">List</span>
                </a>
            </div>
        </li>
        <li class="btn-group dropright">
            <i class="font-icon font-icon-home"></i>
            <a class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User list
            
              <span class="sr-only">Toggle Dropright</span>
            </a>
            <div class="dropdown-menu">
                <a href="{{ route('admin.auth.user.index') }}">
                    <i class="fas fa-users"></i>
                    <span class="lbl">User list</span>
                </a>
                <a href="{{ route('admin.auth.role.index') }}">
                        <i class="font-icon font-icon-home"></i>
                        <span class="lbl">User Role</span>
                </a>
            </div>
        </li>
    </ul>
</nav><!--.side-menu-->