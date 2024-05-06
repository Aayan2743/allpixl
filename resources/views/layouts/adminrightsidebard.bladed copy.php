<div id="kt_sidebar" class="sidebar" data-kt-drawer="true" data-kt-drawer-name="sidebar"
    data-kt-drawer-activate="{default: true, xxl: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'340px', 'lg': '400px'}" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_sidebar_toggler">
    <div class="d-flex flex-column sidebar-body px-5 py-10" id="kt_sidebar_body">
        <ul class="sidebar-nav nav nav-tabs mb-10" id="kt_sidebar_tabs" role="tablist">
          
        </ul>
        <div id="kt_sidebar_content">
            <div class="hover-scroll-yd" data-kt-scroll="trued" data-kt-scroll-height="auto" data-kt-scroll-offset="0px"
                data-kt-scroll-dependencies="#kt_sidebar_tabs"
                data-kt-scroll-wrappers="#kt_sidebar_content, #kt_sidebar_body" >
                <div class="tab-content px-5 px-xxl-10">
                    <div class="tab-pane fade show active" id="kt_sidebar_tab_1" role="tabpanel">
                        <div class="card card-flush card-p-0 card-reset mb-10">
                            <div>
                                <div class="row">
                                    <div class="my-4">
                                        <div class="display-time"><span>12:28:30</span> &nbsp; &nbsp; &nbsp;
                                            &nbsp; 11 Apr 24 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header align-items-center border-0">
                                <h3 class="card-title fw-bold text-white fs-3">Dashboard</h3>
                            </div>
                            <div class="card-body">
                               
                                <div class="row g-5">
                                    <div class="col-6">
                                       
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



                               @livewire('Sidecard')

                            </div>
                        </div>
                       
                    </div>


                    <div class="tab-pane fade" id="kt_sidebar_tab_2" role="tabpanel">
                        <div class="card card-flush card-p-0 card-reset mb-10" style="display: none">
                            <div class="card-header align-items-center border-0">
                                <h3 class="card-title fw-bold text-white fs-3">Leads</h3>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="row g-0">
                                       
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
                                                            <input class="form-check-input w-30px h-20px"
                                                                type="checkbox" value="1" checked="checked"
                                                                name="notifications">
                                                            <span
                                                                class="form-check-label text-muted fs-6">Recuring</span>
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
    
</div>



{{-- model start here --}}

</div>