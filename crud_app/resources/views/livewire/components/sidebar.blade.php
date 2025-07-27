<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Menu</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#departement" aria-expanded="false"
                    aria-controls="departement">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Departement</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="departement">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('departement.index') }}"
                                wire:navigate>Departement Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('departement.create') }}"
                                wire:navigate>Departement Form</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#position" aria-expanded="false"
                    aria-controls="position">
                    <i class="menu-icon mdi mdi-floor-plan"></i>
                    <span class="menu-title">Position</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="position">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('departement.index') }}"
                                wire:navigate>Position Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('departement.create') }}"
                                wire:navigate>Position Form</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>
