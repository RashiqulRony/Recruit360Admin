<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>

            <div class="menu-divider"></div>
            <div class="menu-header">Main Navigation</div>

            <div class="menu-item {{ Request::is('countries') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-globe"></i></span>
                    <span class="menu-text">Countries</span>
                </a>
            </div>
            <div class="menu-item {{ Request::is('companies') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-font-awesome"></i></span>
                    <span class="menu-text">Companies</span>
                </a>
            </div>
            <div class="menu-item {{ Request::is('categories') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-cubes"></i></span>
                    <span class="menu-text">Categories</span>
                </a>
            </div>
            <div class="menu-item {{ Request::is('jobs') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-briefcase"></i></span>
                    <span class="menu-text">Jobs</span>
                </a>
            </div>
            <div class="menu-item {{ Request::is('cv-bank') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-file"></i></span>
                    <span class="menu-text">CV Bank</span>
                </a>
            </div>
            <div class="menu-item {{ Request::is('users') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-users"></i></span>
                    <span class="menu-text">Users</span>
                </a>
            </div>
            <div class="menu-item has-sub">
                 <a href="#" class="menu-link">
                     <span class="menu-icon"><i class="fa fa-cog"></i></span>
                     <span class="menu-text">Setting</span>
                     <span class="menu-caret"><b class="caret"></b></span>
                 </a>
                 <div class="menu-submenu">
                     <div class="menu-item">
                         <a href="#" class="menu-link">
                             <span class="menu-text"><i class="fa fa-right-long"></i> CMS</span>
                         </a>
                     </div>
                     <div class="menu-item">
                         <a href="#" class="menu-link">
                             <span class="menu-text"><i class="fa fa-right-long"></i> CONFIG</span>
                         </a>
                     </div>
                     <div class="menu-item">
                         <a href="#" class="menu-link">
                             <span class="menu-text"><i class="fa fa-right-long"></i> PRICING</span>
                         </a>
                     </div>
                 </div>
             </div>

            {{--<div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="fa fa-globe"></i></span>
                    <span class="menu-text">Example</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text"><i class="fa fa-right-long"></i> Submenu</span>
                        </a>
                    </div>

                </div>
            </div>--}}

        </div>
    </div>

    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
</div>
