<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <h4 class="text-dark"><i class='bx bxs-message-square-dots'></i></h4>
            </span>
            <span class="logo-lg">
                <h4 class="text-dark mt-4"><i class='bx bxs-message-square-dots'></i> Backoffice</h4>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">

            <span class="logo-sm">
                <h4 class="text-white"><i class='bx bxs-message-square-dots'></i></h4>
            </span>
            <span class="logo-lg">
                <h4 class="text-white mt-4"><i class='bx bxs-message-square-dots'></i> Backoffice</h4>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link menu-link"><i
                            class='bx bx-home-alt'></i><span>Dashboard</span> </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.conferences.index') }}" class="nav-link menu-link"><i
                            class='bx bxs-calendar-event'></i><span>Conferences</span> </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.keynotes.index') }}" class="nav-link menu-link"><i
                            class='bx bx-user-voice'></i> <span> Keynote </span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.field_of_studies.index') }}" class="nav-link menu-link"><i class='bx bxs-graduation'></i> <span> Field Of Study </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="mdi mdi-puzzle-outline"></i> <span data-key="t-keynote">Widgets</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
