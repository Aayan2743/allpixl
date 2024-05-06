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
                               
                                @livewire('dateandtime')
                            </div>
                            <div class="card-header align-items-center border-0">
                                <h3 class="card-title fw-bold text-white fs-3">Dashboard</h3>
                            </div>
                            <div class="card-body">
                               
                                <div class="row g-5">
                                    <div class="col-6">
                                        <div
                                            class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
                                            @if(last(request()->segments())=="dashboard")
                                            <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friendsdddd_1">
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



                               @livewire('Sidecard')

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