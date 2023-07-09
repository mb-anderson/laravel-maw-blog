<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('view.home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('common/img/logos/logo.png') }}" style="max-width: 40px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('view.admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Gözetim Paneli</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Arayüz
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
           aria-expanded="true" aria-controls="collapseBlogs">
            <i class="fas fa-fw fa-pen"></i>
            <span>Blog</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Blog:</h6>
                <a class="collapse-item" href="{{ route('view.admin.blog.create') }}"><span class="fa fa-plus"></span> Yeni Oluştur</a>
                <a class="collapse-item" href="{{ route('view.admin.blogs.home') }}">Göster / Düzenle</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Araçlar
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true"
           aria-controls="collapseUsers">
            <i class="fas fa-fw fa-users"></i>
            <span>Kullanıcılar</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kullanıcılar:</h6>
                <a class="collapse-item" href="{{ route('view.admin.user.create') }}"><span class="fa fa-plus"></span> Yeni Oluştur</a>
                <a class="collapse-item" href="{{ route('view.admin.users.home') }}">Göster / Düzenle</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
