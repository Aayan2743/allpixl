<div>
    {{-- Success is as dangerous as failure. --}}

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
                               

                               @livewire('Sidecard')

                            </div>
                        </div>
                       
                    </div>


                    


                   
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
