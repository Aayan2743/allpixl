<div>


    <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_2">

        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
            <div class="table-responsive"
                style="width: -webkit-fill-available;">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <div>
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-category fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <h3 class="card-label fw-bold text-gray-900">
                                        Leads</h3>
                                </div>
                            </div>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-trigger="hover"
                            title="Click to Add Lead">
                            {{-- <div id="kt_header_search"
                                class="header-search d-flex align-items-center w-lg-200px mx-3"
                                data-kt-search-keypress="true"
                                data-kt-search-min-length="2"
                                data-kt-search-enter="enter"
                                data-kt-search-layout="menu"
                                data-kt-search-responsive="lg"
                                data-kt-menu-trigger="auto"
                                data-kt-menu-permanent="true"
                                data-kt-menu-placement="bottom-end"
                                data-kt-search="true">
                                <div data-kt-search-element="toggle"
                                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div
                                        class="d-flex btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px">
                                        <i class="ki-duotone ki-magnifier fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </div>
                                </div>
                                <form data-kt-search-element="form"
                                    class="d-none d-lg-block w-100 position-relative mb-2 mb-lg-0"
                                    autocomplete="off">
                                    <input type="hidden">
                                    <i
                                        class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text"
                                        class="form-control bg-transparent ps-13 fs-7 h-40px"
                                        name="search" value=""
                                        placeholder="Quick Search"
                                        data-kt-search-element="input">
                                    <span
                                        class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span
                                            class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                    </span>
                                    <span
                                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                        data-kt-search-element="clear">
                                        <i
                                            class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>
                                </form>
                            </div> --}}
                            <a href="#"
                                class="btn btn-sm btn-light btn-active-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#kt_modal_invite_friends">
                                <i class="ki-duotone ki-plus fs-2"></i>Add
                                Leads</a>

                                <a href="{{route('admin.leads')}}"
                                class="btn btn-sm btn-light btn-active-primary mx-2"
                                >
                               Show All Leads
                                </a>
                        </div>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive"
                            style="width: -webkit-fill-available;">
                            <table
                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 zigzag" id="leadstable">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th>
                                            <div
                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                            </div>
                                        </th>
                                        <th>Customer Name</th>
                                        <th>Contact Number</th>
                                        <th>Price</th>
                                        <th>Lead Source</th>
                                        <th>Lead Owner</th>
                                        <!--  -->
                                        <!-- <th>Lead Stage</th> -->
                                        <th>Lead Details </th>
                                        <th style="text-align: center;">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leadsdatas as $l=>$leads)
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-40px">

                                                @if($leads->label=="Cold")
                                                <img src="{{asset('assets/media/Cold.png')}}"
                                                    style="    width: 25px;
                                                    height: 25px;
                                                    z-index: 9;
                                                    position: absolute;
                                                ">

                                                @elseif($leads->label=="Warm")
                                                <img src="{{asset('assets/media/Warm.png')}}"
                                                style="    width: 25px;
                                                height: 25px;
                                                z-index: 9;
                                                position: absolute;
                                            ">

                                                @elseif($leads->label=="Hot")
                                                <img src="{{asset('assets/media/Hot.png')}}"
                                                style="    width: 25px;
                                                height: 25px;
                                                z-index: 9;
                                                position: absolute;
                                            ">

                                                @endif
                                                
                                            </div>
                                            <div class="symbol symbol-40px">

                                                @if($l%2==0)
                                                <span
                                                    class="symbol-label bg-light-success">

                                                  
                                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                                    style="font-family: 'arial' !important; text-transform:capitalize">{{$leads->firstletter}} </span></i>
                                                   
                                                   
                                                </span>
                                                @elseif($l%2==1)
                                                <span
                                                class="symbol-label bg-light-info">

                                              
                                                <i class="ki-duotone ki-abstract-24 fs-2x text-info"
                                                style="font-family: 'arial' !important; text-transform:capitalize">{{$leads->firstletter}} </span></i>
                                               
                                               
                                            </span>

                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            
                                            <a href="{{route('admin.viewleads',$leads->leadid)}}"
                                                class="text-gray-900 fw-bold  d-block fs-6" style="text-transform: capitalize;"><span>{{$leads->customer}}</span><br>
                                            </a>
                                            <span style="font-weight: 400; text-transform: capitalize;" >{{$leads->ogrinazation}}</span><br>
                                            <span
                                                class="badge py-3 px-4 fs-7 badge-light-warning" style="text-transform: capitalize">{{$leads->title}}</span>
                                            <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->

                                        </td>
                                        <td class="text-end">
                                            <div
                                                class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <p
                                                        class="text-gray-900 fw-bold  fs-6">
                                                        {{$leads->phone}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div
                                                class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <p
                                                        class="text-gray-900 fw-bold  fs-6">
                                                        {{$leads->value==""? "N/A" : $leads->value}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex  flex-shrink-0">
                                                <div class="d-flex flex-stack mb-2">
                                                    <p
                                                        class="text-gray-900 fw-bold  fs-6" style="text-transform: capitalize"> 
                                                        {{$leads->leadsource}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex  flex-shrink-0">
                                                <div class="d-flex flex-stack mb-2">
                                                    <p
                                                        class="text-gray-900 fw-bold  d-block fs-6" style="text-transform: capitalize">
                                                        <span>{{$leads->owner}}</span><br>
                                                        <span
                                                            class="badge rounded-pill text-bg-primary text-white">
                                                            {{ \Carbon\Carbon::parse($leads->created_at)->diffForhumans() }}
                                                            </span><br>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex  flex-shrink-0">
                                                <p
                                                    class="text-gray-900 fw-bold  fs-6">
                                                    
                                                    @if($l%2==0)
                                                    <span
                                                    class="badge py-3 px-4 fs-7 badge-light-success">{{$leads->leadstagetext}} </span>
                                                    @elseif($l%2==1)
                                                    <span
                                                    class="badge py-3 px-4 fs-7 badge-light-primary">{{$leads->leadstagetext}} </span>
                                                    @endif
                                                   
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex  flex-shrink-0">
                                                <p
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    
                                                    <a class="leadid" data-lid="{{$leads->leadid}}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#addleads">
                                                    
                                                    <i
                                                        class="ki-duotone ki-switch fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    </a>
                                                </p>
                                                <p
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                
                                                    <a class="eleadid" data-lid="{{$leads->leadid}}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editleads">
                                                    <i
                                                        class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    </a>
                                                </p>
                                                <p
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                
                                                    <a class="deleteleadbyid" data-lid="{{$leads->leadid}}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteleads">
                                                    <i
                                                        class="ki-duotone ki-trash fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </a>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>