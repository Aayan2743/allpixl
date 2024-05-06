<div id="kt_sidebar" class="sidebar" data-kt-drawer="true" data-kt-drawer-name="sidebar"
    data-kt-drawer-activate="{default: true, xxl: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'340px', 'lg': '400px'}" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_sidebar_toggler">
    <div class="d-flex flex-column sidebar-body px-5 py-10" id="kt_sidebar_body">
        <ul class="sidebar-nav nav nav-tabs mb-10" id="kt_sidebar_tabs" role="tablist">
            <!--<li class="nav-item" role="presentation">-->
            <!--    <a class="nav-link active" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_1"-->
            <!--        data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">-->
            <!--        <i class="ki-duotone ki-abstract-36">-->
            <!--            <span class="path1"></span>-->
            <!--            <span class="path2"></span>-->
            <!--        </i>-->
            <!--    </a>-->
            <!--</li>-->
            {{-- <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_2"
                    data-kt-initialized="1" aria-selected="false" tabindex="-1" role="tab">
                    <i class="ki-duotone ki-abstract-41">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
            </li> --}}
            {{-- <li class="nav-item m-3" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true" href="#kt_sidebar_tab_3"
                    data-kt-initialized="1" aria-selected="true" role="tab">
                    <i class="ki-duotone ki-abstract-35">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
            </li> --}}
        </ul>
        <div id="kt_sidebar_content">
            <!-- <div class="hover-scroll-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-offset="0px" -->
            <div class="hover-scroll-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-offset="0px"
                data-kt-scroll-dependencies="#kt_sidebar_tabs"
                data-kt-scroll-wrappers="#kt_sidebar_content, #kt_sidebar_body" >
                <div class="tab-content px-5 px-xxl-10">
                    <div class="tab-pane fade show active" id="kt_sidebar_tab_1" role="tabpanel">
                        <div class="card card-flush card-p-0 card-reset mb-10">
                            <div class="card-header align-items-center border-0">
                                <h3 class="card-title fw-bold text-white fs-3">Dashboard</h3>
                            </div>
                            <div class="card-body">
                                <div class="row g-5">
                                    <div class="col-6">
                                        <div
                                            class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
                                            @if(last(request()->segments())=="dashboard")
                                            <a href="" data-bs-toggle="modal"
                                                {{-- data-bs-target="#kt_modal_invite_friends"> --}}
                                                data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @elseif(last(request()->segments())=="followups")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @elseif(last(request()->segments())=="leads")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @elseif(last(request()->segments())=="viewdeals")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @elseif(last(request()->segments())=="liststaff")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @elseif(last(request()->segments())=="settings")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @elseif(last(request()->segments())=="profile")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <div class=" fs-6 fw-bold text-white text-center">Add Leads
                                                </div>
                                            </a>
                                            @else
                                            <a href="{{route('admin.leads')}}">
                                                <div class=" fs-6 fw-bold text-white text-center">Back To Leads
                                                </div>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div
                                            class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
                                            <a href="{{route('admin.leads')}}">
                                                <div class=" fs-6 fw-bold text-white text-center">View Leads
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div
                                            class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
                                            <a href="{{route('admin.followups')}}">
                                                <div class=" fs-6 fw-bold text-white text-center">
                                                    Follow Ups</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div
                                            class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
                                            <a href="{{route('admin.liststaff')}}">
                                                <div class=" fs-6 fw-bold text-white text-center">View Staff
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush card-p-0 card-reset mb-10" style="display: ">
                                    <div class="card-header align-items-center border-0">
                                        <h3 class="card-title fw-bold text-white fs-3">Leads</h3>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="row g-0">
                                                {{-- countofHot
                                                countofwarm
                                                countofcold --}}
                                                <div class="cardBox" <div
                                                    class="col d-flex flex-column bg-light-primary px-5 py-8 rounded-2 me-2 text-center cards">
                                                    <i
                                                        class="ki-duotone ki-briefcase fs-2x text-primary mb-2 text-center">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span></i>
                                                    <a href="{{route('admin.leads')}}"
                                                        class="text-primary fw-semibold fs-6 text-center">
                                                        Cold
                                                    </a>
                                                    <span class="text-center">{{$countofcold}}</span>
                                                </div>
                                            </div>
                                            <div
                                                class="col d-flex flex-column bg-light-danger px-5 py-8 rounded-2 me-2 text-center">
                                                <i class="ki-duotone ki-abstract-26 fs-2x text-danger text-center">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span></i>
                                                <a href="{{route('admin.leads')}}"
                                                    class="text-danger fw-semibold fs-6 mt-2 text-center">
                                                    Warm
                                                </a>
                                                <span class="text-center">{{$countofwarm}}</span>
                                            </div>
                                            <div
                                                class="col d-flex flex-column bg-light-success px-5 py-8 rounded-2 me-2 text-center">
                                                <i class="ki-duotone ki-sms fs-2x text-success text-center">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span></i>
                                                <a href="{{route('admin.leads')}}"
                                                    class="text-success fw-semibold fs-6 mt-2 text-center">
                                                    Hot
                                                </a>
                                                <span class="text-center">{{$countofHot}}</span>
                                            </div>
                                            {{-- <div
                                                class="col d-flex flex-column bg-light-success px-5 py-8 rounded-2 text-center" >
                                                <i class="ki-duotone ki-sms fs-2x text-success text-center">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span></i>
                                                <a href="addstaff.html"
                                                    class="text-success fw-semibold fs-6 mt-2 text-center">
                                                    Hot
                                                </a>
                                                <span class="text-center">0</span>
                                                </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="card-header align-items-center border-0">
                                    <h3 class="card-title fw-bold text-white fs-3">Deals</h3>
                                </div>
                                <div
                                    class="col d-flex flex-column bg-light-success px-5 py-8 rounded-2 me-2 text-center">
                                    <i class="ki-duotone ki-abstract-26 fs-2x text-success text-center">
                                        <span class="path1"></span>
                                        <span class="path2"></span></i>
                                    <a href="{{route('admin.viewdeals')}}"
                                        class="text-success fw-semibold fs-6 mt-2 text-center">
                                        Won
                                    </a>
                                    <span class="text-center">{{$countofwon}}</span>
                                </div>
                                <div class="col d-flex flex-column bg-light-danger px-5 py-8 rounded-2 text-center">
                                    <i class="ki-duotone ki-sms fs-2x text-danger text-center">
                                        <span class="path1"></span>
                                        <span class="path2"></span></i>
                                    <a href="{{route('admin.viewdeals')}}"
                                        class="text-danger fw-semibold fs-6 mt-2 text-center">
                                        Lost
                                    </a>
                                    <span class="text-center">{{$countoflost}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card card-flush card-p-0 card-reset shadow-none bg-transparent mb-5">
                            <div class="card-header align-items-center border-0">
                                <h3 class="card-title fw-bold text-white fs-3">Activity</h3>
                            </div>
                            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10"
                                id="kt_create_account_stepper" data-kt-stepper="true">
                                <div class=" d-flex" style="background-color: none !important;">
                                    <div class="card-body">
                                        <div class="stepper-nav">
                                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                                <div class="stepper-wrapper">
                                                    <div class="stepper-icon">
                                                        <img src="assets/media/logos/State=Like.png" alt="">
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title text-white">
                                                            Account Type
                                                        </h3>
                                                        <div class="stepper-desc fw-semibold">
                                                            Setup Your Account Details
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stepper-line h-40px"></div>
                                            </div>
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <div class="stepper-wrapper">
                                                    <div class="stepper-icon">
                                                        <img src="assets/media/logos/State=Like.png" alt="">
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title text-white">
                                                            Account Settings
                                                        </h3>
                                                        <div class="stepper-desc fw-semibold">
                                                            Setup Your Account Settings
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stepper-line h-40px"></div>
                                            </div>
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <div class="stepper-wrapper">
                                                    <div class="stepper-icon">
                                                        <img src="assets/media/logos/msgs.png" alt="">
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title text-white">
                                                            Business Info
                                                        </h3>
                                                        <div class="stepper-desc fw-semibold">
                                                            Your Business Related Info
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stepper-line h-40px"></div>
                                            </div>
                                            <div class="stepper-item" data-kt-stepper-element="nav">
                                                <div class="stepper-wrapper">
                                                    <div class="stepper-icon">
                                                        <img src="assets/media/logos/State=Feedback.png" alt="">
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title text-white">
                                                            Billing Details
                                                        </h3>
                                                        <div class="stepper-desc fw-semibold">
                                                            Set Your Payment Methods
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stepper-line h-40px"></div>
                                            </div>
                                            <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                                <div class="stepper-wrapper">
                                                    <div class="stepper-icon">
                                                        <img src="assets/media/logos/State=Post.png" alt="">
                                                    </div>
                                                    <div class="stepper-label">
                                                        <h3 class="stepper-title text-white">
                                                            Completed
                                                        </h3>
                                                        <div class="stepper-desc fw-semibold">
                                                            Woah, we are here
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
                <div class="tab-pane fade" id="kt_sidebar_tab_2" role="tabpanel">
                    <div class="card card-flush card-p-0 card-reset mb-10" style="display: none">
                        <div class="card-header align-items-center border-0">
                            <h3 class="card-title fw-bold text-white fs-3">Leads</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="row g-0">
                                    {{-- countofHot
                                                countofwarm
                                                countofcold --}}
                                    <div
                                        class="col d-flex flex-column bg-light-primary px-5 py-8 rounded-2 me-2 text-center">
                                        <i class="ki-duotone ki-briefcase fs-2x text-primary mb-2 text-center">
                                            <span class="path1"></span>
                                            <span class="path2"></span></i>
                                        <a href="{{route('admin.leads')}}"
                                            class="text-primary fw-semibold fs-6 text-center">
                                            Cold
                                        </a>
                                        <span class="text-center">{{$countofcold}}</span>
                                    </div>
                                    <div
                                        class="col d-flex flex-column bg-light-danger px-5 py-8 rounded-2 me-2 text-center">
                                        <i class="ki-duotone ki-abstract-26 fs-2x text-danger text-center">
                                            <span class="path1"></span>
                                            <span class="path2"></span></i>
                                        <a href="{{route('admin.leads')}}"
                                            class="text-danger fw-semibold fs-6 mt-2 text-center">
                                            Warm
                                        </a>
                                        <span class="text-center">{{$countofwarm}}</span>
                                    </div>
                                    <div
                                        class="col d-flex flex-column bg-light-success px-5 py-8 rounded-2 me-2 text-center">
                                        <i class="ki-duotone ki-sms fs-2x text-success text-center">
                                            <span class="path1"></span>
                                            <span class="path2"></span></i>
                                        <a href="{{route('admin.leads')}}"
                                            class="text-success fw-semibold fs-6 mt-2 text-center">
                                            Hot
                                        </a>
                                        <span class="text-center">{{$countofHot}}</span>
                                    </div>
                                    {{-- <div
                                                class="col d-flex flex-column bg-light-success px-5 py-8 rounded-2 text-center" >
                                                <i class="ki-duotone ki-sms fs-2x text-success text-center">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span></i>
                                                <a href="addstaff.html"
                                                    class="text-success fw-semibold fs-6 mt-2 text-center">
                                                    Hot
                                                </a>
                                                <span class="text-center">0</span>
                                                </div> --}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-flush card-p-0 card-reset mb-5">
                        <div class="card-header align-items-center border-0">
                            <h3 class="card-title fw-bold text-white fs-3">Latest Leads</h3>
                            <div class="card-toolbar">
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments</div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                aria-label="Specify a target name for future usage and reference"
                                                data-bs-original-title="Specify a target name for future usage and reference"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications">
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            @foreach ($topLeads as $l=> $topleadsdata)
                            <div class="d-flex flex-nowrap align-items-center mb-7">
                                <div class="symbol  me-4">
                                    @if($l%2==0)
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-abstract-24 fs-2x text-dark"
                                            style="font-family: 'arial' !important;text-transform:capitalize">{{$topleadsdata->firstletter}}</i>
                                    </span>
                                    @elseif($l%2==1)
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-abstract-24 fs-2x text-dark"
                                            style="font-family: 'arial' !important;text-transform:capitalize">{{$topleadsdata->firstletter}}</i>
                                    </span>
                                    @endif
                                </div>
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="{{route('admin.leads')}}"
                                        class="text-white fw-semibold text-hover-primary fs-6"
                                        style="text-transform: capitalize">{{$topleadsdata->customer}}</a>
                                </div>
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="{{route('admin.leads')}}"
                                        class="text-white fw-semibold text-hover-primary fs-6"
                                        style="text-transform: capitalize">{{ \Carbon\Carbon::parse($topleadsdata->created_at)->diffForHumans()}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <ul class="sidebar-nav nav nav-tabs mb-10" id="kt_sidebar_tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" data-kt-countup-tabs="true"
                        href="#kt_sidebar_tab_1" data-kt-initialized="1" aria-selected="false" tabindex="-1"
                        role="tab">
                        <i class="ki-duotone ki-abstract-36">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true"
                        href="#kt_sidebar_tab_2" data-kt-initialized="1" aria-selected="false" tabindex="-1"
                        role="tab">
                        <i class="ki-duotone ki-abstract-41">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item m-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-kt-countup-tabs="true"
                        href="#kt_sidebar_tab_3" data-kt-initialized="1" aria-selected="true" role="tab">
                        <i class="ki-duotone ki-abstract-35">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </li>
            </ul> --}} 
</div>
</div>