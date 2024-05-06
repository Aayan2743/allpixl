<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
data-kt-drawer-toggle="#kt_aside_toggle">

@livewire('Sidebar')

<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
    <div class="w-100 hover-scroll-overlay-y d-flex pe-3" id="kt_aside_menu_wrapper"
        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper"
        data-kt-scroll-offset="100">
        <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold my-auto"
        id="#kt_aside_menu" data-kt-menu="true">
        <div data-kt-menu-trigger="click" class="menu-item  menu-accordion">
            <a   class="menu-link  {{ (request()->is('dashboard')) ? 'active' : ''}}" href="{{route('admin.home')}}">
                <span class="menu-icon">
                    <i class="ki-duotone ki-black-right fs-2"></i>
                </span>
                {{-- <span class="text-gray-900" style="font-size: 18px !important;
                font-weight: 700;
                ">Dashboard</span> --}}
                    <span class="" style="font-size: 18px !important;
                    {{ (request()->is('dashboard')) ? 'font-weight: 700;' : 'font-weight: 500;'}};
                    ">Dashboard</span>
            </a>
        </div>

       
       
    </div>
    </div>
</div>


@livewire('profilepage')
</div>