<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.index') }}">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Menu</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#departement" aria-expanded="false"
                    aria-controls="departement">
                    <i class="menu-icon fa fa-building-o"></i>
                    <span class="menu-title">Departement</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="departement">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('departement.index') }}"
                                wire:navigate>Departement List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('departement.create') }}"
                                wire:navigate>Departement Form</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#position" aria-expanded="false"
                    aria-controls="position">
                    <i class="menu-icon fa fa-drivers-license-o"></i>
                    <span class="menu-title">Position</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="position">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('position.index') }}"
                                wire:navigate>Position List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('position.create') }}"
                                wire:navigate>Position Form</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#district" aria-expanded="false"
                    aria-controls="district">
                    <i class="menu-icon fa fa-road"></i>
                    <span class="menu-title">District</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="district">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('district.index') }}"
                                wire:navigate>District List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('district.create') }}"
                                wire:navigate>District Form</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#progress_status" aria-expanded="false"
                    aria-controls="progress_status">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Progress Status</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="progress_status">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('progress_status.index') }}"
                                wire:navigate>Progress Status List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('progress_status.create') }}"
                                wire:navigate>Progress Status Form</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false"
                    aria-controls="users">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}" wire:navigate>Users
                                List</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}"
                                wire:navigate>Progress Status Form</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

    </nav>
</div>
