<div>
    {{-- The whole world belongs to you. --}}

    <div class="px-5">
        <div class="row">
            <div class="col-12">
                <h3 class="card-title align-items-start flex-column">

                        <div class="card-header position-relative py-0" style="width:-webkit-fill-available;">
                        
                            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                                <li class="nav-item p-0 ms-0 me-8" role="presentation"
                                    style="align-items: center;display: flow;">
                                    <div class="d-flex">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Leads</span>
                                        </h3>
                                    </div>
                                    <div>
                                        <span class="text-muted mt-1 fw-semibold fs-7">Current Week Expected Leads Revenue Rs:
                                            22</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                                <div class="row" style="float: right;">
                                    <div style="width: max-content;">

                                        @php
                                        $lastValue = request()->query('parameter'); // Get the last value of the 's' parameter from the query string
                                    @endphp

                                        <form class="d-flex" action="{{ route('admin.leads', ['parameter' => '']) }}"
                                            method="GET">
                                            <select name="parameter" class="form-select" style="height: max-content;align-self: center;">
                                                <option value="Cold" {{$lastValue=="Cold" ? "selected":"" }} >Cold</option>
                                                <option value="Hot"  {{$lastValue=="Hot" ? "selected":"" }}>Hot</option>
                                                <option value="Warm" {{$lastValue=="Warm" ? "selected":"" }}>Warm</option>
                                            </select> 
                                            <a class="btn btn-sm btn-primary m-5 btn-outline" data-bs-toggle="modal" data-bs-target="#Bulk_Upload" style="width: -webkit-fill-available;text-wrap: nowrap;">
                                    Bulk Upload
                                </a>    
                                <a href="#" class="btn btn-sm btn-light btn-active-primary m-5" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends" style="border:1px solid black;width: -webkit-fill-available;text-wrap:nowrap;height: -webkit-fill-available;align-self: center;">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add Leads</a>


                                        </form> 

                                    </div> 
                                </div>
                            </ul>
                        
                        </div>


                </h3>
            </div> 
        </div>
         
    </div>
    <div class="card-body py-3">
        <div class="table-responsive" style="overflow: auto;">
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 zigzag" id="tablesss">
                <thead>
                    <tr class="fw-bold text-muted">
                        <th>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                            </div>
                        </th>
                        <th>Customer Name</th>
                        <th>Number</th>
                        <th>Price</th>
                        <th>Source</th>
                        <th>Owner</th>
                        <!--  -->
                        <!-- <th>Lead Stage</th> -->
                        <th>Lead Details </th>
                        <th style="text-align: center;">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($leadsdatas)>0)
                    @foreach ($leadsdatas as $l=> $leads)
                    <tr>
                        <td class="align-content-center">
                            <div class="symbol symbol-40px">
                                @if($leads->label=="Cold")
                                <img src="{{asset('assets/media/Cold.png')}}" style="    width: 25px;
                                    height: 25px;
                                    z-index: 9;
                                    position: absolute;
                                ">
                                @elseif($leads->label=="Warm")
                                <img src="{{asset('assets/media/Warm.png')}}" style="    width: 25px;
                                height: 25px;
                                z-index: 9;
                                position: absolute;
                            ">
                                @elseif($leads->label=="Hot")
                                <img src="{{asset('assets/media/Hot.png')}}" style="    width: 25px;
                                height: 25px;
                                z-index: 9;
                                position: absolute;
                            ">
                                @endif
                                {{-- <img src="{{asset('assets/media/Warm.png')}}"
                                style="width: 25px;
                                height: 25px;
                                z-index: 9;
                                position: absolute;
                                "> --}}
                            </div>
                            <div class="symbol symbol-40px">
                                @if($l%2==0)
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                        style="font-family: 'arial' !important;text-transform: capitalize;">{{$leads->firstletter}}</span></i>
                                </span>
                                @elseif($l%2==1)
                                <span class="symbol-label bg-light-info">
                                    <i class="ki-duotone ki-flask fs-2x text-info"
                                        style="font-family: 'arial' !important;text-transform: capitalize;">{{$leads->firstletter}}</span></i>
                                </span>
                                @endif
                            </div>
                        </td>
                        <td class="align-content-center">
                            <a href="{{route('admin.viewleads', Crypt::encryptString($leads->leadid))}}"
                                 class="text-gray-900 fw-norma  d-block fs-6"
                                style="text-transform: capitalize;font-weight:800 !important;"><span>{{$leads->customer}}</span><br>
                            </a>
                            {{-- <a href="#"
                                 class="text-gray-900 fw-norma  d-block fs-6" style="text-transform: capitalize;"><span>{{$leads->customer}}</span><br>
                            </a> --}}
                            <span
                                style="font-weight: 400; text-transform: capitalize;">{{$leads->ogrinazation}}</span><br>
                            <span class="badge py-2 px-4 fs-8 badge-light-warning"
                                style="text-transform: capitalize">{{$leads->title}}</span>
                            <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex flex-column w-100 me-2">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6" style="font-weight:400 !important;">
                                        {{$leads->phone}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex flex-column w-100 me-2">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6">
                                        {{$leads->value==""? "N/A" : $leads->value}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize">
                                        {{$leads->leadsource}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p  class="text-gray-900 fw-norma  d-block fs-6"
                                        style="text-transform: capitalize">
                                        <span>{{$leads->owner}}</span><br>
                                        <span class="badge rounded-pill text-bg-primary text-white">
                                            {{ \Carbon\Carbon::parse($leads->created_at)->diffForhumans() }}
                                        </span><br>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <p class="text-gray-900 fw-norma  fs-6">
                                    <span class="badge py-3 px-4 fs-8 badge-light-primary">
                                        {{$leads->leadstagetext}}</span>
                                </p>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <a class="leadid" data-lid="{{$leads->leadid}}" data-bs-toggle="modal"
                                        data-bs-target="#converttodeals">
                                        {{-- <i
                                        class="ki-duotone ki-switch fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i> --}}
                                        <img src="{{asset('icons/Convert.png')}}" />
                                    </a>
                                </p>
                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <a class="eleadids" data-lid="{{$leads->leadid}}" data-bs-toggle="modal"
                                        data-bs-target="#editleadsdata">
                                        {{-- <i
                                        class="ki-duotone ki-pencil fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i> --}}
                                        <img src="{{asset('icons/Edit.png')}}" />
                                    </a>
                                </p>
                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <a class="deleteleadbyid" data-lid="{{$leads->leadid}}" data-bs-toggle="modal"
                                        data-bs-target="#deleteleadpage">
                                        {{-- <i
                                        class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i> --}}
                                        <img src="{{asset('icons/delete.png')}}" />
                                    </a>
                                </p>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8">
                            <h3 style="text-align: center;">No Records Found </h3>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


</div>
