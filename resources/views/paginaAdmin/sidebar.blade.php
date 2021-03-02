
<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #1e2125">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Kazandré Boutique">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('img/logooficial.png') }}" width="50" height="50">
        </div>
        <div class="sidebar-brand-text" style="color: #AA700F; font-family: ">Kazandré Boutique</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Productos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
            <i class="fas fa-fw fa-table" style="color: white"></i>
            <span style="color: white">Productos</span></a>
    </li>

    <!-- Categorias -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fa fa-cubes" style="color: white"></i>
            <span style="color: white">Categorias</span></a>
    </li>


    <!-- Usuarios -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-users" style="color: white"></i>
            <span style="color: white">Usuarios</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fa fa-arrow-circle-left" style="color: white"></i>
            <span style="color: white">Ir a la pagina</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->

</ul>
