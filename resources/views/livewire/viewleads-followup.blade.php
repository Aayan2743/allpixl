<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card ">
     

            <div class="card h-md-100">
                <div class="row">
            <div class="col-lg-12 col-xl-12 col-xxl-12 mb-5 mb-xl-0">
             
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900 m-0">Follow Ups </span>
                        </h3>
                        <h3 class="card-title align-items-end flex-column">
                            <button class="btn btn-primary" wire:click="cancel" data-bs-target="#add_follow_up"  data-bs-toggle="modal" style="width:-webkit-fill-available;">Add Followup</button>
                        </h3>
                    </div>
                    <div class="card-body pt-10 px-0">
                        <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5"
                            role="tablist">
                            @foreach ($weekData as $key => $value)
                            <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger {{$key==now()->format('d') ? "active" : "" }} "
                                    data-bs-toggle="tab"
                                    {{-- href="#kt_timeline_widget_3_tab_content_2" --}}
                                    href="#{{$key}}"
                                    aria-selected="true" role="tab">
                                    <span class="fs-7 fw-semibold"></span>
                                    <span class="fs-6 fw-bold">{{$key}}</span>
                                </a>
                            </li>
                            @endforeach
                            {{-- <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger "
                                    data-bs-toggle="tab"
                                    href="#kt_timeline_widget_3_tab_content_3"
                                    aria-selected="true" role="tab">
                                    <span class="fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">22</span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                    data-bs-toggle="tab"
                                    href="#kt_timeline_widget_3_tab_content_4"
                                    aria-selected="true" role="tab">
                                    <span class="fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">23</span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger "
                                    data-bs-toggle="tab"
                                    href="#kt_timeline_widget_3_tab_content_5"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span class="fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 fw-bold">24</span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger "
                                    data-bs-toggle="tab"
                                    href="#kt_timeline_widget_3_tab_content_6"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span class="fs-7 fw-semibold">We</span>
                                    <span class="fs-6 fw-bold">25</span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger "
                                    data-bs-toggle="tab"
                                    href="#kt_timeline_widget_3_tab_content_7"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span class="fs-7 fw-semibold">Th</span>
                                    <span class="fs-6 fw-bold">26</span>
                                </a>
                            </li>
                            <li class="nav-item p-0 ms-0" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger "
                                    data-bs-toggle="tab"
                                    href="#kt_timeline_widget_3_tab_content_8"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span class="fs-7 fw-semibold">Fri</span>
                                    <span class="fs-6 fw-bold">27</span>
                                </a>
                            </li> --}}
                        </ul>
                        <div class="tab-content mb-2 px-9">
                            {{-- <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_1" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div> --}}
                            @foreach ($weekData as $key => $value)
                            <div class="tab-pane fade  {{$key==now()->format('d') ? "active show" : "" }}" 
                                {{-- id="kt_timeline_widget_3_tab_content_2" role="tabpanel"> --}}
                                id="{{$key}}" role="tabpanel">
                                @if(count($value)>0)
                                @foreach($value as $sss)
                                <div class="d-flex align-items-center mb-6">
                                        @if($sss->typeoffollowup=="Email")
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-90px mh-100 me-4 bg-warning"></span>
                                        @elseif($sss->typeoffollowup=="Call")
                                        <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-90px mh-100 me-4 bg-success"></span>

                                        @elseif($sss->typeoffollowup=="Visit")
                                        <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-90px mh-100 me-4 bg-info"></span>

                                        @elseif($sss->typeoffollowup=="Online")

                                        <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-90px mh-100 me-4 bg-dark"></span>
                                        @endif


                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            {{ \Carbon\Carbon::parse($sss->nextfollowup)->format('g:i A d-M-Y') }} 
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                 </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                                            {{$sss->typeoffollowup}}
                                             </div>                                                            
                                             <div class="text-gray-500 fw-semibold fs-7">
                                             Notes :  {{$sss->followupnotes}}
                                          
                                            </div>

                                            <div class="text-gray-500 fw-semibold fs-7">
                                               
                                                   @if($sss->followupstatus==0)
                                                            
                                                         <span class="badge rounded-pill bg-danger text-light">  Status : Pending</span>
                                                   @elseif($sss->followupstatus==1  )
                                                   {{-- <span class="badge rounded-pill bg-danger">  Status : Resheduled</span> --}}
                                                   <span class="badge rounded-pill bg-warning text-dark">Status : Resheduled</span>
                                                 
                                                   @elseif($sss->followupstatus==2)
                                                            
                                                            <span class="badge rounded-pill bg-success">Status : Close</span>

                                                   @endif
                                                {{-- {{$sss->followupstatus}} --}}
                                             
                                               </div>
                                    </div>
                                    <a href="{{$sss->fid}}" wire:click="getfollowupdata({{$sss->fid}})" data-bs-target="#edit_follow_up"  data-bs-toggle="modal" class="btn btn-sm btn-light" >Edit</a>
                                       
                                </div>
                                @endforeach
                                    @else
                                    @endif
                                {{-- <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div> --}}
                            </div>
                             @endforeach   
                            {{-- <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_3" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade show active"
                                id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_5" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_6" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_7" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_8" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_9" role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_10"
                                role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div>
                            <div class="tab-pane fade "
                                id="kt_timeline_widget_3_tab_content_11"
                                role="tabpanel">
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            16:30 - 17:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                PM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Dashboard UI/UX Design Review </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Mark Morris</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            10:20 - 11:00
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            Marketing Campaign Discussion </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Peter
                                                Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                                <div class="d-flex align-items-center mb-6">
                                    <span data-kt-element="bullet"
                                        class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                                    <div class="flex-grow-1 me-5">
                                        <div class="text-gray-800 fw-semibold fs-2">
                                            12:00 - 13:40
                                            <span
                                                class="text-gray-500 fw-semibold fs-7">
                                                AM </span>
                                        </div>
                                        <div class="text-gray-700 fw-semibold fs-6">
                                            9 Degree Project Estimation Meeting </div>
                                        <div class="text-gray-500 fw-semibold fs-7">
                                            Lead by
                                            <a href="#"
                                                class="text-primary opacity-75-hover fw-semibold">Lead
                                                by Bob</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-light"
                                        data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_project">View</a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="float-end d-none">
                            <a href="#" class="btn btn-sm btn-light me-2"
                                data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_project">Add Lesson</a>
                            <a href="#" class="btn btn-sm btn-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app">Call Sick for
                                Today</a>
                        </div>
                    </div>
                </div>
                <div class="card card-flush d-none h-md-100">
                    <div class="card-header mt-6">
                        <div class="card-title flex-column">
                            <h3 class="fw-bold mb-1">What's on the road?</h3>
                            <div class="fs-6 text-gray-500">Total 482 participants</div>
                        </div>
                        <div class="card-toolbar">
                            <select name="status" data-control="select2"
                                data-hide-search="true"
                                class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible"
                                data-select2-id="select2-data-7-o9bz" tabindex="-1"
                                aria-hidden="true" data-kt-initialized="1">
                                <option value="1" selected=""
                                    data-select2-id="select2-data-9-1cqa">Options
                                </option>
                                <option value="2">Option 1</option>
                                <option value="3">Option 2</option>
                                <option value="4">Option 3</option>
                            </select><span
                                class="select2 select2-container select2-container--bootstrap5"
                                dir="ltr" data-select2-id="select2-data-8-piyw"
                                style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px"
                                        role="combobox" aria-haspopup="true"
                                        aria-expanded="false" tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-status-qw-container"
                                        aria-controls="select2-status-qw-container"><span
                                            class="select2-selection__rendered"
                                            id="select2-status-qw-container"
                                            role="textbox" aria-readonly="true"
                                            title="Options">Options</span><span
                                            class="select2-selection__arrow"
                                            role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper"
                                    aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4"
                            role="tablist">
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_0"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                    <span class="fs-6 text-gray-800 fw-bold">20</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_1"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                    <span class="fs-6 text-gray-800 fw-bold">21</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_2"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 text-gray-800 fw-bold">22</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active"
                                    data-bs-toggle="tab" href="#kt_schedule_day_3"
                                    aria-selected="true" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 text-gray-800 fw-bold">23</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_4"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 text-gray-800 fw-bold">24</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_5"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">We</span>
                                    <span class="fs-6 text-gray-800 fw-bold">25</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_6"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Th</span>
                                    <span class="fs-6 text-gray-800 fw-bold">26</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_7"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                    <span class="fs-6 text-gray-800 fw-bold">27</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_8"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                    <span class="fs-6 text-gray-800 fw-bold">28</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_9"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Su</span>
                                    <span class="fs-6 text-gray-800 fw-bold">29</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_10"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                    <span class="fs-6 text-gray-800 fw-bold">30</span>
                                </a>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                    data-bs-toggle="tab" href="#kt_schedule_day_11"
                                    aria-selected="false" tabindex="-1" role="tab">
                                    <span
                                        class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                    <span class="fs-6 text-gray-800 fw-bold">31</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content px-9">
                            <div id="kt_schedule_day_0" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            9:00 - 10:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Creative Content Initiative </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Mark Randall</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            14:30 - 15:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Development Team Capacity Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            11:00 - 11:45
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Dashboard UI/UX Design Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Mark Randall</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_1"
                                class="tab-pane fade show active" role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            16:30 - 17:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Marketing Campaign Discussion </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Kendell Trevor</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            16:30 - 17:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            9 Degree Project Estimation Meeting </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Sean Bean</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            13:00 - 14:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Creative Content Initiative </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Sean Bean</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_2" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            13:00 - 14:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Creative Content Initiative </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Mark Randall</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            9 Degree Project Estimation Meeting </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Karina Clarke</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            11:00 - 11:45
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Team Backlog Grooming Session </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Caleb Donaldson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_3" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            9:00 - 10:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            9 Degree Project Estimation Meeting </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Yannis Gloverson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            13:00 - 14:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Dashboard UI/UX Design Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            14:30 - 15:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Team Backlog Grooming Session </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Michael Walters</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_4" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Sales Pitch Proposal </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Michael Walters</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            11:00 - 11:45
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Development Team Capacity Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Walter White</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Lunch &amp; Learn Catch Up </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Sean Bean</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_5" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Development Team Capacity Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Mark Randall</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            13:00 - 14:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Creative Content Initiative </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Yannis Gloverson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Lunch &amp; Learn Catch Up </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_6" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Dashboard UI/UX Design Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">David Stevenson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            9:00 - 10:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Sales Pitch Proposal </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Sean Bean</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            16:30 - 17:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Lunch &amp; Learn Catch Up </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Peter Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_7" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            16:30 - 17:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            9 Degree Project Estimation Meeting </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Michael Walters</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            12:00 - 13:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Weekly Team Stand-Up </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">David Stevenson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            12:00 - 13:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Dashboard UI/UX Design Review </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Kendell Trevor</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_8" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            12:00 - 13:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Team Backlog Grooming Session </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Peter Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            9:00 - 10:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Marketing Campaign Discussion </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">David Stevenson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            12:00 - 13:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Sales Pitch Proposal </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Michael Walters</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_9" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            9:00 - 10:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Creative Content Initiative </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Caleb Donaldson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            14:30 - 15:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Project Review &amp; Testing </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Caleb Donaldson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            14:30 - 15:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            9 Degree Project Estimation Meeting </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Kendell Trevor</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_10" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            14:30 - 15:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Project Review &amp; Testing </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Bob Harris</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            12:00 - 13:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Committee Review Approvals </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Terry Robins</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            16:30 - 17:30
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Weekly Team Stand-Up </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Yannis Gloverson</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                            <div id="kt_schedule_day_11" class="tab-pane fade show "
                                role="tabpanel">
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            13:00 - 14:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                pm </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Lunch &amp; Learn Catch Up </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Naomi Hayabusa</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            11:00 - 11:45
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Team Backlog Grooming Session </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Peter Marcus</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                                <div class="d-flex flex-stack position-relative mt-8">
                                    <div
                                        class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-semibold ms-5 text-gray-600">
                                        <div class="fs-5">
                                            10:00 - 11:00
                                            <span
                                                class="fs-7 text-gray-500 text-uppercase">
                                                am </span>
                                        </div>
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-800  mb-2">
                                            Project Review &amp; Testing </a>
                                        <div class="text-gray-500">
                                            Lead by <a href="#">Karina Clarke</a>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- model add followup --}}
    <div wire:ignore.self class="modal fade" id="add_follow_up" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Add Follow-Up</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="addNewFollowup" action="" method="post">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Follow up Date
                                                *</label>
                                                <input type="datetime-local" wire:model="nextfollowup"  class="form-control" id="nextfollowup" name="nextfollowup">
                                                
                                                @error('nextfollowup')
                                                <div  style="color:red" id="u_nextfollowup">
                                                    {{$message}}
                                                </div>
                                                    
                                                @enderror
                                                
                                          
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Select Lead *
                                            </label>
                                            <select class="form-select" wire:model="leadname"
                                                aria-label="Default select example">
                                                <!-- <option selected="selected"></option> -->
                                                @foreach ($getleads as $leads)
                                                <option value="{{$leads->leadid}}">{{$leads->customer}}</option>
                                                @endforeach
                                                {{-- <option value="2">Sai kiran</option> --}}
                                            </select>
                                            <input type="hidden" class="form-control" id="leadidno" wire:model="leadidno" name="leadidno" value="{{$leadid}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="customername" wire:model="customername" name="customername" value="{{$getleads[0]->customer}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="orginazation" wire:model="orginazation" name="orginazation" value="{{$getleads[0]->ogrinazation}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="phones" wire:model="phones" name="phones" value="{{$getleads[0]->phone}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="emailss" wire:model="emailss" name="emailss" value="{{$getleads[0]->email}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="project" wire:model="project" name="project" value="{{$getleads[0]->title}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="teamid" wire:model="teamid" name="project" value="{{$getleads[0]->leadownerid }}" placeholder="Call ownerid">
                                            <input type="hidden" class="form-control" id="teamname" wire:model="teamname" name="project" value="{{$getleads[0]->owner }}" placeholder="Call ownerid">
                                            <div  style="color:red" id="u_follouptype">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Type *
                                            </label>
                                            <select class="form-select"
                                                aria-label="Default select example" wire:model="follouptype" id="follouptype">
                                                <option value="">Select Type of Followup</option>
                                              
                                                @foreach ($getfollowuptype as $fitem)
                                                <option value="{{$fitem->ftype}}">{{$fitem->ftype}}</option>
                                                @endforeach
                                            </select>
                                            @error('follouptype')
                                            <div  style="color:red" id="u_nextfollowup">
                                                {{$message}}
                                            </div>
                                                
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks *
                                            </label>
                                            <div class="form-floating">
                                                <textarea class="form-control mb-5" wire:model="followupnotes"
                                                    placeholder="Leave a comment here"
                                                    id="followupnotes"
                                                    name="followupnotes"
                                                    style="height: 150px;"></textarea>
                                            </div>
                                            @error('followupnotes')
                                            <div  style="color:red" id="u_nextfollowup">
                                                {{$message}}
                                            </div>
                                                
                                            @enderror
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button class="btn btn-primary mb-5"     id="addfollou">Add Follow
                                                Up </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="edit_follow_up" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Edit Follow-Up</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="updateFollowup" action="" method="post">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Follow up Date
                                                *</label>
                                                <input type="datetime-local" wire:model="nextfollowup"  class="form-control" id="nextfollowup" name="nextfollowup">
                                                
                                                @error('nextfollowup')
                                                <div  style="color:red" id="u_nextfollowup">
                                                    {{$message}}
                                                </div>
                                                    
                                                @enderror
                                                
                                          
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Select Lead
                                            </label>
                                            <select class="form-select" wire:model="leadname"
                                                aria-label="Default select example">
                                                <!-- <option selected="selected"></option> -->
                                                @foreach ($getleads as $leads)
                                                <option value="{{$leads->leadid}}">{{$leads->customer}}</option>
                                                @endforeach
                                                {{-- <option value="2">Sai kiran</option> --}}
                                            </select>
                                            <input type="hidden" class="form-control" id="leadidno" wire:model="leadidno" name="leadidno" value="{{$leadid}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="customername" wire:model="customername" name="customername" value="{{$getleads[0]->customer}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="orginazation" wire:model="orginazation" name="orginazation" value="{{$getleads[0]->ogrinazation}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="phones" wire:model="phones" name="phones" value="{{$getleads[0]->phone}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="emailss" wire:model="emailss" name="emailss" value="{{$getleads[0]->email}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="project" wire:model="project" name="project" value="{{$getleads[0]->title}}" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="teamid" wire:model="teamid" name="project" value="{{$getleads[0]->leadownerid }}" placeholder="Call ownerid">
                                            <input type="hidden" class="form-control" id="teamname" wire:model="teamname" name="project" value="{{$getleads[0]->owner }}" placeholder="Call ownerid">
                                            <div  style="color:red" id="u_follouptype">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Type
                                            </label>
                                            <select class="form-select"
                                                aria-label="Default select example" wire:model="follouptype" id="follouptype">
                                                <option value="">Select Type of Followup</option>
                                              
                                                @foreach ($getfollowuptype as $fitem)
                                                <option value="{{$fitem->ftype}}">{{$fitem->ftype}}</option>
                                                @endforeach
                                            </select>
                                            @error('follouptype')
                                            <div  style="color:red" id="u_nextfollowup">
                                                {{$message}}
                                            </div>
                                                
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks
                                            </label>
                                            <div class="form-floating">
                                                <textarea class="form-control mb-5" wire:model="followupnotes"
                                                    placeholder="Leave a comment here"
                                                    id="followupnotes"
                                                    name="followupnotes"
                                                    style="height: 150px;"></textarea>
                                            </div>
                                            @error('followupnotes')
                                            <div  style="color:red" id="u_nextfollowup">
                                                {{$message}}
                                            </div>
                                                
                                            @enderror
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button class="btn btn-primary mb-5"     id="addfollou">Update Follow
                                                Up </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
