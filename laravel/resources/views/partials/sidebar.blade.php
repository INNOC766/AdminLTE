<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link">
            <img src="{{ asset('adminlte/img/AdminLTELogo.png') }}"
                 alt="AdminLTE Logo"
                 class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">{{ config('app.name', 'AdminLTE') }}</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation"
            >
                {{-- Dashboard --}}
                <li class="nav-item {{ request()->routeIs('dashboard*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.v2') }}" class="nav-link {{ request()->routeIs('dashboard.v2') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard.v3') }}" class="nav-link {{ request()->routeIs('dashboard.v3') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Widgets --}}
                <li class="nav-item {{ request()->routeIs('widgets.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('widgets.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Widgets
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('widgets.small-box') }}" class="nav-link {{ request()->routeIs('widgets.small-box') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Small Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('widgets.info-box') }}" class="nav-link {{ request()->routeIs('widgets.info-box') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Info Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('widgets.cards') }}" class="nav-link {{ request()->routeIs('widgets.cards') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Layout Options --}}
                <li class="nav-item {{ request()->routeIs('layout.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('layout.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Layout Options
                            <span class="nav-badge badge text-bg-secondary me-3">10</span>
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('layout.unfixed-sidebar') }}" class="nav-link {{ request()->routeIs('layout.unfixed-sidebar') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Default Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('layout.fixed-sidebar') }}" class="nav-link {{ request()->routeIs('layout.fixed-sidebar') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('layout.fixed-header') }}" class="nav-link {{ request()->routeIs('layout.fixed-header') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Header</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('layout.fixed-footer') }}" class="nav-link {{ request()->routeIs('layout.fixed-footer') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('layout.sidebar-mini') }}" class="nav-link {{ request()->routeIs('layout.sidebar-mini') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Mini</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('layout.collapsed-sidebar') }}" class="nav-link {{ request()->routeIs('layout.collapsed-sidebar') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Sidebar Collapsed</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- UI Elements --}}
                <li class="nav-item {{ request()->routeIs('ui.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('ui.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-tree-fill"></i>
                        <p>
                            UI Elements
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('ui.general') }}" class="nav-link {{ request()->routeIs('ui.general') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ui.icons') }}" class="nav-link {{ request()->routeIs('ui.icons') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ui.timeline') }}" class="nav-link {{ request()->routeIs('ui.timeline') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Forms --}}
                <li class="nav-item {{ request()->routeIs('forms.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('forms.*') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Forms
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('forms.general') }}" class="nav-link {{ request()->routeIs('forms.general') ? 'active' : '' }}">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Tables --}}
                <li class="nav-item">
                    <a href="{{ route('tables.simple') }}" class="nav-link {{ request()->routeIs('tables.simple') ? 'active' : '' }}">
                        <i class="nav-icon bi bi-table"></i>
                        <p>Tables</p>
                    </a>
                </li>

                {{-- Labels --}}
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle text-danger"></i>
                        <p>Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
