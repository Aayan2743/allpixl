<div>
    {{-- Do your work, then step back. --}}
    <div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
        <div class="d-flex flex-stack">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-circle symbol-40px">
                    @if(session()->get('profilelogo')==null)
                    <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                    @else
                    <img src="{{asset(session()->get('profilelogo'))}}" alt="photo" />
                    @endif
                </div>
                <div class="ms-2">
                    <a href="#" class="text-gray-800  fs-6 fw-bold lh-1">{{Session::get('fullname')}}
                        </a>
                    <span class="text-muted fw-semibold d-block fs-7 lh-1">
                    @if(Session::get('role')==1)
                            Admin
                    @elseif(Session::get('role')==0)
                            Staff
                    @endif
                    </span>
                </div>
            </div>
            <div class="ms-1">
                <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2" 
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
                    data-kt-menu-placement="top-end">
                    <i class="ki-duotone ki-setting-2 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <div class="symbol symbol-50px me-5">
                                @if(session()->get('profilelogo')==null)
                                <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                @else
                                <img src="{{asset(session()->get('profilelogo'))}}" alt="photo" />
                                @endif
                                {{-- <img alt="Logo" src="{{asset('assets/media/avatars/300-1.jpg')}}" /> --}}
                            </div>
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">{{Session::get('fullname')}}
                                    <span
                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
                                        @if(Session::get('role')==1)
                                        Admin
                                @elseif(Session::get('role')==0)
                                        Staff
                                @endif
                                    </span>
                                </div>
                                <a href="#"
                                    class="fw-semibold text-muted  fs-7">{{Session::get('email')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="separator my-2"></div>
                    <!-- <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">Language
                            <span
                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                <img class="w-15px h-15px rounded-1 ms-2"
                                    src="assets/media/flags/united-states.svg"
                                    alt="" /></span></span>
                    </a>
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <div class="menu-item px-3">
                            <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                <span class="symbol symbol-20px me-4">
                                </span>English</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                </span>Hindi</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                </span>Telugu</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                </span>Tamil</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                </span>Kannada</a>
                        </div>
                    </div>
                </div> -->
                    <div class="separator my-2"></div>
                    <div class="menu-item px-5">
                        <a href="{{route('admin.profile')}}" class="menu-link px-5" style="font-weight: 600;">My Profile</a>
                    </div>
                    <div class="menu-item px-5">
                        <a href="{{route('admin.logout')}}" class="menu-link px-5">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
