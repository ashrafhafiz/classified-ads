<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth.category.create') }}">Add
                            Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth.category.index') }}">Manage
                            Categories</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#subcategory" aria-expanded="false"
                aria-controls="subcategory">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Sub-Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subcategory">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth.subcategory.create') }}">Add
                            Sub-Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth.subcategory.index') }}">Manage
                            Sub-Categories</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#childcategory" aria-expanded="false"
                aria-controls="childcategory">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Child-Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="childcategory">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth.childcategory.create') }}">Add
                            Child-Category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('auth.childcategory.index') }}">Manage
                            Child-Categories</a>
                    </li>
                </ul>
            </div>
        </li>


        {{-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Form elements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register
                            2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                            Lockscreen </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> --}}
    </ul>
</nav>
<!-- partial -->
