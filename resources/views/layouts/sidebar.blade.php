<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('dashboard.index') }}"><img
                    style="max-width: 92%;
        height: auto;" src="{{ asset('assets/images/logo/logo.png') }}"
                    alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href=""><img class="img-fluid" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('dashboard.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Dashboard </span>
                        </a>
                    </li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title active" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-list') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                            </svg><span>Project</span>

                            <div class="according-menu"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="">
                            <li><a href="{{ route('admin.pending') }}">Pending</a></li>
                            <li><a href="{{ route('create.index') }}">Create </a></li>
                        </ul>
                    </li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title active" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-write') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-write') }}"></use>
                            </svg>
                            <span>Tasks</span>
                            <div class="according-menu"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="">
                            <li><a href="{{ route('task.index') }}">List</a></li>
                            <li><a href="{{ route('task.timeline') }}">Calendar</a></li>
                            <li><a href="{{ route('taskAdmin.create') }}">Create </a></li>
                        </ul>
                    </li>



                    <li class="sidebar-list"><a class="sidebar-link sidebar-title active" href="#">
                            <svg class="stroke-icon">
                                <use href="../assets/svg/icon-sprite.svg#stroke-editors"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-editors"></use>
                            </svg><span>Send Request</span>
                            <div class="according-menu"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="">
                            <li><a href="{{ route('send-request.index') }}">List</a></li>
                            <li><a href="{{ route('send-request.create') }}">Create </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
