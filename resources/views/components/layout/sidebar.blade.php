<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path opacity=".5"
                        d="M13.8.36 3.4 7.44C.57 9.69-.38 12.48.56 15.8c.13.43.53 1.99 2.56 3.44.69.49 2.2 1.16 4.55 2L7.6 21.25 2.63 24.55c-2.19 1.75-2.55 3.96-1.08 6.62 1.27 1.65 3.64 2.1 5.53 1.38 1.25-.48 4.37-2.54 9.33-6.17 1.62-1.88 2.28-3.93 2-6.15-.45-2.7-2.23-4.66-5.36-5.86l-2.13-.9 7.7-5.48L13.8.36Z"
                        fill="#696cff" />
                    <path
                        d="M5.47 6c-1.42 2.21-1.1 4.07.94 5.57 2.21 1 3.7 1.66 4.46 1.95l4.65.9 3.11-6.45C15.54 3.12 13.93.57 13.8.36l-.01.01C13.58.51 10.81 2.39 5.47 6Z"
                        fill="#696cff" />
                    <path
                        d="m7.5 21.23 4.82 2.09c1.85 1.44 2.08 3.17.69 5.19-1.39 2.02-2.7 3.29-3.94 3.8-3.3 1.15-4.95 1.71-4.95 1.71S2.75 33.05 0 31.16c-.56-3.34-.56-5.11 0-5.29.84-.27 2.78-3.05 3.3-3.34.35-.2 1.75-.64 4.2-1.3Z"
                        fill="#696cff" />
                    <path
                        d="m20.6 7.13 5 6.67a1.5 1.5 0 0 1-1.2 2.2H14a1.5 1.5 0 0 1-1.5-1.5c0-.43.14-.85.4-1.2l5-6.66a1.5 1.5 0 0 1 2.7.5Z"
                        fill="#696cff" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item active">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('category.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div data-i18n="Category">Category</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('products*') ? 'active' : '' }}">
            <a href="{{ route('products.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Products">Products</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('users*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">User</div>
            </a>
        </li>
    </ul>
</aside>
