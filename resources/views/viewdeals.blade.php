@extends('layouts.master')
@section('title') {{'View Leads Data'}} @endsection
@section('maincontent')
<!--end::Header-->
<!--begin::Content-->
<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <div class="row">
            <div class="col-md-6" >
                <div class="card p-5">
                    <div class="row">
                        <div class="col-md-8 align-self-center">
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <img alt="image" {{-- src="{{asset('assets/media/avatars/300-7.jpg')}}" --}}
                                        src="{{asset('images/User.jpg')}}" class="rounded-circle" width="100"
                                        style="border-radius: 8%!important;">
                                    {{-- <span
                                            class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-flask fs-2x text-success"
                                                style="font-family: 'arial' !important;text-transform:capitalize" >{{$getleads[0]->first_letter}}</span></i>
                                    </span> --}}
                                </div>
                                <div class="col-md-8 align-self-center col-8">
                                    <h3 style="text-transform: capitalize">{{$getleads[0]->customer}}</h3>
                                    <p class="mt-2" style="text-transform: capitalize">
                                        {{$getleads[0]->ogrinazation}}
                                    </p>
                                    <p>
                                        <b><a href="tel:{{$getleads[0]->phone}}"> {{$getleads[0]->phone}} </a></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex flex-center w-100">
                                <div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 160px">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    {{-- <button class="btn btn-success mb-3" style="width:-webkit-fill-available;">Call: {{$getleads[0]->phone}}</button>
                                    --}}
                                    <a href="tel:{{$getleads[0]->phone}}" class="btn btn-success mb-3"
                                        style="width:-webkit-fill-available;"> <i class="ki-duotone ki-call">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                        </i><br>Call: {{$getleads[0]->phone}}</a>
                                </div>
                                <div class="col-md-4 col-4">
                                    <button class="btn btn-info mb-3 getpayment" data-bs-target="#editdealsfromdeals"
                                        data-route="{{route('admin.getpaymet',$getleads[0]->leadid)}}"
                                        data-bs-toggle="modal" data-leadids="{{$getleads[0]->leadid }}"
                                        style="width:-webkit-fill-available;"> <i class="ki-duotone ki-notepad-edit">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i><br>Manage Payment </button>
                                </div>
                                <div class="col-md-4 col-4">
                                    <button class="btn btn-info mb-3 leadid_inside" data-bs-target="#converttodeals"
                                        data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}"
                                        data-bs-toggle="modal" data-lid="{{$getleads[0]->leadid }}"
                                        style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i><br>Edit Deals Details </button>
                                </div>
                                @livewire('dealclosestatus',['id'=>$getleads[0]->leadid])
                                {{--  --}}
                            </div>
                        </div>
                        <div class="">
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-6 text-center">
                                    <div class="m-4">
                                        <p>Deal Created Date</p>
                                        <h6>{{ \Carbon\Carbon::parse($getleads[0]->dealfixdate)->format('d-M-Y') }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 text-center">
                                    <div class="m-4">
                                        <p>Service Required</p>
                                        <h6>{{$getleads[0]->title}}</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 text-center">
                                    <div class="m-4">
                                        <p>Source of Lead</p>
                                        <h6>{{$getleads[0]->leadsource}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-12 text-left">
                                    <div class="m-4">
                                        <p>Remarks</p>
                                        {{$getleads[0]->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="display: non">
                   
             
                    <div id="history" class="tabcontent">
                        <h3>Payment History</h3>
                        <div class="card-body py-3">
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <thead>
                                        <tr class="fw-bold text-muted">
                                            <th class="w-25px">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                </div>
                                            </th>
                                            <th class="">
                                                #No</th>
                                            <th class="">
                                                Date</th>
                                            <th class="text-left">
                                                Payment Details
                                            </th>
                                            {{-- <th class="text-left">
                                                        Balance 
                                                    </th> --}}
                                            {{-- <th class="text-left">
                                                        Total amount  
                                                    </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactiondetails as $template)
                                        <tr>
                                            <td class="align-content-center">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                </div>
                                            </td>
                                            <td class="align-content-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <p class="text-gray-900 fw-norma  fs-6">
                                                            {{$template->id}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-content-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <p class="text-gray-900 fw-norma  fs-6">
                                                            {{ \Carbon\Carbon::parse($template->created_at)->format('F') }}
                                                            {{ \Carbon\Carbon::parse($template->created_at)->format('d') }}
                                                            ,
                                                            {{ \Carbon\Carbon::parse($template->created_at)->format('Y')  }}
                                                            {{ \Carbon\Carbon::parse($template->created_at)->format('g:i A')  }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-content-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <p class="text-gray-900 fw-norma  fs-6">
                                                            {!!$template->adv!!}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>

            
            </div>
            <div class="card " style="display: no">
                <!--begin::Header-->
        
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6" style="display: non">
                    <!--begin::Nav-->
                    <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                                active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="ki-duotone ki-car fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                            class="path5"></span></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                    Invoice </span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 
                                " id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2"
                                aria-selected="false" tabindex="-1" role="tab">
                                <!--begin::Icon-->
                                <div class="nav-icon mb-3">
                                    <i class="ki-duotone ki-bitcoin fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                    Payment History </span>
                                <!--end::Title-->
                                <!--begin::Bullet-->
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                        </li>
        
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel"
                            aria-labelledby="kt_stats_widget_16_tab_link_1">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">Invoice Amount</th>
                                            <th class="p-0 pb-3 min-w-100px text-center pe-13">Received Amount</th>
                                            <th class="p-0 pb-3 w-125px text-center pe-7">Balance Amount</th>
        
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
        
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
        
                                                        <span
                                                            class="text-gray-900 fw-bold d-block fs-5">{{$getleads[0]->value}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center pe-13">
                                                <span class="text-gray-900 fw-bold d-block fs-5">{{$sum}}</span>
                                            </td>
                                            <td class="text-center pe-0">
                                                <span
                                                    class="text-gray-900 fw-bold d-block fs-5">{{$getleads[0]->value -$sum}}</span>
                                            </td>
                                        </tr>
        
        
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade " id="kt_stats_widget_16_tab_2" role="tabpanel"
                            aria-labelledby="kt_stats_widget_16_tab_link_2">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 pb-3 min-w-150px text-start">#S No</th>
                                            <th class="p-0 pb-3 min-w-100px text-center pe-13">Date.</th>
                                            <th class="p-0 pb-3 w-125px text-center pe-7">Payment Details</th>
        
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($transactiondetails as $template)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-3">
        
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
        
                                                        <span class="text-gray-900 fw-bold d-block fs-5">
                                                            @isset($template->id)
                                                            {{$template->id}}
                                                            @endisset
                                                            
                                                        
                                                        
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center pe-13">
                                                <span class="text-gray-900 fw-bold d-block fs-5">
        
                                                    @isset($template->created_at)
                                                    {{ \Carbon\Carbon::parse($template->created_at)->format('F') }}
                                                    {{ \Carbon\Carbon::parse($template->created_at)->format('d') }}
                                                    ,
                                                    {{ \Carbon\Carbon::parse($template->created_at)->format('Y')  }}
                                                    {{ \Carbon\Carbon::parse($template->created_at)->format('g:i A')  }}
        
                                                    @endisset  
        
        
                                                 
                                                </span>
                                            </td>
                                            <td class="text-center pe-0">
                                                <span class="text-gray-900 fw-bold d-block fs-5">
                                                    @isset($template->adv)
                                                    {!!$template->adv!!}
                                                    @endisset  
                                                
                                                
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
        
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end: Card Body-->
            </div>

        </div>
    </div>
    <div class="col-md-6" style="display: non">
        <div class="card ">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-xxl-12 mb-5 mb-xl-0">
                    <div class="card h-md-100">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900 m-0">Follow-up's History </span>
                            </h3>
                            <h3 class="card-title align-items-end flex-column">
                                {{-- <button class="btn btn-primary" data-bs-target="#add_follow_up"  data-bs-toggle="modal" style="width:-webkit-fill-available;">Add Followup</button> --}}
                            </h3>
                        </div>
                        <div class="card-body pt-10 px-0">
                            <div class="tab-content mb-2 px-9">
                                @foreach ($getallfollowupsdata as $sss)
                                <div class="tab-pane fade active show"
                                    {{-- id="kt_timeline_widget_3_tab_content_2" role="tabpanel"> --}} id=""
                                    role="tabpanel">
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
                                                <span class="text-gray-500 fw-semibold fs-7">
                                                </span>
                                            </div>
                                            <div class="text-gray-700 fw-semibold fs-6">
                                                {{$sss->typeoffollowup}}
                                            </div>
                                            <div class="text-gray-500 fw-semibold fs-7">
                                                Notes : {{$sss->followupnotes}}
                                            </div>
                                            <div class="text-gray-500 fw-semibold fs-7">
                                                @if($sss->followupstatus==0)
                                                <span class="badge rounded-pill bg-danger text-white"> Status :
                                                    Pending</span>
                                                @elseif($sss->followupstatus==1 )
                                                {{-- <span class="badge rounded-pill bg-danger">  Status : Resheduled</span> --}}
                                                <span class="badge rounded-pill bg-warning text-dark">Status :
                                                    Resheduled</span>
                                                @elseif($sss->followupstatus==2)
                                                <span class="badge rounded-pill bg-success">Status : Close</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{-- <a href="{{route('admin.followups')}}" class="btn btn-sm btn-light"
                                        >View</a> --}}
                                    </div>
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
                                <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_project">Add Lesson</a>
                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
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
                                <select name="status" data-control="select2" data-hide-search="true"
                                    class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible"
                                    data-select2-id="select2-data-7-o9bz" tabindex="-1" aria-hidden="true"
                                    data-kt-initialized="1">
                                    <option value="1" selected="" data-select2-id="select2-data-9-1cqa">Options
                                    </option>
                                    <option value="2">Option 1</option>
                                    <option value="3">Option 2</option>
                                    <option value="4">Option 3</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                    data-select2-id="select2-data-8-piyw" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-status-qw-container"
                                            aria-controls="select2-status-qw-container"><span
                                                class="select2-selection__rendered" id="select2-status-qw-container"
                                                role="textbox" aria-readonly="true" title="Options">Options</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4" role="tablist">
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_0" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 text-gray-800 fw-bold">20</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_1" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 text-gray-800 fw-bold">21</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_2" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 text-gray-800 fw-bold">22</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active"
                                        data-bs-toggle="tab" href="#kt_schedule_day_3" aria-selected="true" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 text-gray-800 fw-bold">23</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_4" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 text-gray-800 fw-bold">24</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_5" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">We</span>
                                        <span class="fs-6 text-gray-800 fw-bold">25</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_6" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Th</span>
                                        <span class="fs-6 text-gray-800 fw-bold">26</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_7" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                                        <span class="fs-6 text-gray-800 fw-bold">27</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_8" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                                        <span class="fs-6 text-gray-800 fw-bold">28</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_9" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                                        <span class="fs-6 text-gray-800 fw-bold">29</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_10" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                                        <span class="fs-6 text-gray-800 fw-bold">30</span>
                                    </a>
                                </li>
                                <li class="nav-item me-1" role="presentation">
                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger "
                                        data-bs-toggle="tab" href="#kt_schedule_day_11" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                                        <span class="fs-6 text-gray-800 fw-bold">31</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content px-9">
                                <div id="kt_schedule_day_0" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                9:00 - 10:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Creative Content Initiative </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Mark Randall</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                14:30 - 15:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Development Team Capacity Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                11:00 - 11:45
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Dashboard UI/UX Design Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Mark Randall</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_1" class="tab-pane fade show active" role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                16:30 - 17:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Marketing Campaign Discussion </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Kendell Trevor</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                16:30 - 17:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                9 Degree Project Estimation Meeting </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Sean Bean</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                13:00 - 14:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Creative Content Initiative </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Sean Bean</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_2" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                13:00 - 14:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Creative Content Initiative </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Mark Randall</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                9 Degree Project Estimation Meeting </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Karina Clarke</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                11:00 - 11:45
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Team Backlog Grooming Session </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Caleb Donaldson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_3" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                9:00 - 10:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                9 Degree Project Estimation Meeting </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Yannis Gloverson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                13:00 - 14:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Dashboard UI/UX Design Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                14:30 - 15:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Team Backlog Grooming Session </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Michael Walters</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_4" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Sales Pitch Proposal </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Michael Walters</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                11:00 - 11:45
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Development Team Capacity Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Walter White</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Lunch &amp; Learn Catch Up </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Sean Bean</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_5" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Development Team Capacity Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Mark Randall</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                13:00 - 14:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Creative Content Initiative </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Yannis Gloverson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Lunch &amp; Learn Catch Up </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_6" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Dashboard UI/UX Design Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">David Stevenson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                9:00 - 10:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Sales Pitch Proposal </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Sean Bean</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                16:30 - 17:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Lunch &amp; Learn Catch Up </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Peter Marcus</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_7" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                16:30 - 17:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                9 Degree Project Estimation Meeting </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Michael Walters</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                12:00 - 13:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Weekly Team Stand-Up </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">David Stevenson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                12:00 - 13:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Dashboard UI/UX Design Review </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Kendell Trevor</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_8" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                12:00 - 13:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Team Backlog Grooming Session </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Peter Marcus</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                9:00 - 10:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Marketing Campaign Discussion </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">David Stevenson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                12:00 - 13:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Sales Pitch Proposal </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Michael Walters</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_9" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                9:00 - 10:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Creative Content Initiative </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Caleb Donaldson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                14:30 - 15:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Project Review &amp; Testing </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Caleb Donaldson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                14:30 - 15:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                9 Degree Project Estimation Meeting </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Kendell Trevor</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_10" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                14:30 - 15:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Project Review &amp; Testing </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Bob Harris</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                12:00 - 13:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Committee Review Approvals </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Terry Robins</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                16:30 - 17:30
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Weekly Team Stand-Up </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Yannis Gloverson</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                                <div id="kt_schedule_day_11" class="tab-pane fade show " role="tabpanel">
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                13:00 - 14:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    pm </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Lunch &amp; Learn Catch Up </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Naomi Hayabusa</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                11:00 - 11:45
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Team Backlog Grooming Session </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Peter Marcus</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                    <div class="d-flex flex-stack position-relative mt-8">
                                        <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                        </div>
                                        <div class="fw-semibold ms-5 text-gray-600">
                                            <div class="fs-5">
                                                10:00 - 11:00
                                                <span class="fs-7 text-gray-500 text-uppercase">
                                                    am </span>
                                            </div>
                                            <a href="#" class="fs-5 fw-bold text-gray-800  mb-2">
                                                Project Review &amp; Testing </a>
                                            <div class="text-gray-500">
                                                Lead by <a href="#">Karina Clarke</a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--begin::Row-->
<!--end::Row-->
</div>
<!--end::Container-->
</div>
<!--end::Content-->
<div class="col-xl-6 mb-5 mb-xl-10  ">
    <!--begin::Tables widget 16-->
  
    <!--end::Tables widget 16-->
</div>
<!--begin::Footer-->
<div class="modal fade" id="converttodeals" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit
                            Deals</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style="width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Deal
                                        Finalize Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        type="datetime-local" id="dealfixdata" name="dealfixdata"
                                        value="<?php echo now()?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Customer
                                        *
                                    </label>
                                    <input type="name" class="form-control" id="customer" name="customer" value=""
                                        aria-describedby="nameHelp">
                                    <input type="hidden" class="form-control" id="leadid" name="leadid" value=""
                                        placeholder="leadid">
                                    <div class="-feedback" id="e_customer" style="color:red">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Organization
                                        *
                                    </label>
                                    <input type="name" class="form-control" id="Orginazation" name="Orginazation"
                                        value="" aria-describedby="nameHelp">
                                    <div class="-feedback" id="e_orinazation" style="color:red">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email" class="form-label">Email *
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email" value=""
                                        aria-describedby="nameHelp">
                                    <div class="-feedback" id="e_email" style="color:red">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone
                                        *</label>
                                    <input type="phone number" class="form-control" id="phone" name="phone" value=""
                                        aria-describedby="dateHelp">
                                    <div class="-feedback" id="e_phone" style="color:red">
                                    </div>
                                </div>
                                <div class="card mt-3 p-5">
                                    <h4>Deal Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Price
                                                *
                                            </label>
                                            <input type="name" class="form-control" name="currency" id="currency"
                                                value="{{$getleadbyid->value ?? ''}}" aria-describedby="nameHelp">
                                            <div style="color:red" id="e_currency">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Project Delivery Date
                                                *</label>
                                            <input class="form-control form-control-solid" type="date"
                                                placeholder="Pick date rage" id="expecteddate" name="expecteddate" />
                                            <div class="-feedback" id="e_expecteddate" style="color:red">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12 mt-3">
                                                <label for="name" class="form-label">Assigned
                                                    Team
                                                </label>
                                                <select class="form-select" aria-label="Default select example" id="assignedteam">
                                                    <option selected="selected">
                                                        Select
                                                        Team
                                                    </option>
                                                    <option value="1">
                                                        Naveen
                                                    </option>
                                                    <option value="2">
                                                        Asif
                                                    </option>
                                                    <option value="3">
                                                        Sai
                                                        Kiran
                                                    </option>
                                                </select>
                                            </div> --}}
                                        <div class="col-md-12 mt-3 mb-3">
                                            <label for="name" class="form-label">Remarks *
                                            </label>
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="contents"></textarea>
                                            <div class="-feedback" id="e_remarks" style="color:red">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button class="btn btn-primary mb-5"
                                        data-route="{{route('admin.editdeal',$getleads[0]->leadid)}}"
                                        data-lid="{{$getleads[0]->leadid}}" id="editdeal">Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editdealsfromdeals" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1">Payment Details </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                {{-- <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Deal Fix Date *</label>
                                        <input type="date" class="form-control" id="dealfixdatessss" name="dealfixdatessss" value="" placeholder="Customer">
                                        <div  style="color:red" id="uu_dealfixdate">
                                        </div>
                                    </div> --}}
                                <div class="col-md-12">
                                    <label for="name" class="form-label" id="totalamounts">Total Amount *
                                    </label>
                                    <input type="text" class="form-control" id="totalamount" readonly name="totalamount"
                                        value="" placeholder="Total Amount">
                                    <div style="color:red" id="uu_customer">
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label for="name" class="form-label">Last Paid Transaction *
                                    </label>
                                    <input type="text" class="form-control" id="bal" name="fstin" readonly value=""
                                        placeholder="Balance  Amount">
                                    <div style="color:red" id="uu_customer">
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label for="name" class="form-label">Total Past Transaction Amount *
                                    </label>
                                    <input type="text" class="form-control" readonly id="past_pay_total"
                                        name="past_pay_total" value="" placeholder="past_pay_total">
                                    <div style="color:red" id="uu_customer">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Balance Payment *
                                    </label>
                                    <input type="text" class="form-control" id="pay" name="pay" value=""
                                        placeholder="Now Amount">
                                    <div style="color:red" id="u_pay">
                                    </div>
                                </div>
                                {{-- <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Company Name *
                                        </label>
                                        <input type="text" class="form-control" id="Orginazationname"  name="Orginazationname" value="" placeholder="Orginazition">
                                        <div  style="color:red" id="uu_Orginazation">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone *</label>
                                        <input type="text" class="form-control" id="phoneno"  name="phoneno" value="" placeholder="Mobile Number">
                                        <div  style="color:red" id="uu_phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6  mt-3">
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="text" class="form-control" id="emailid"  name="emailid" value="" placeholder="Email id">
                                        <div  style="color:red" id="uu_email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Price
                                        </label>
                                        <input type="text" name="currencyvalue" id="currencyvalue" value="" class="form-control currency">
                                        <div  style="color:red" id="uu_currency">
                                        </div>   
                                    </div> --}}
                                {{-- <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Assigned Team
                                        </label>
                                        <select class="form-select" aria-label="Default select example"  id="assignedteam"">
                                            @foreach ($getempdetails as $emp)
                                            <option value="{{$emp->uid}}">{{$emp->fullname}}</option>
                                @endforeach
                                </select>
                                <div class="-feedback" id="uu_assignedteam" style="color:red">
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">City /Town
                                        </label>
                                        <input type="name" class="form-control" id="cityss" aria-describedby="nameHelp">
                                        <div  style="color:red" id="e_city">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Expected Date
                                        </label>
                                        <input type="date" class="form-control"  id="expecteddates" name="expecteddates">
                                        <div class="-feedback" id="uu_expecteddate" style="color:red">
                                        </div>
                                    </div> --}}
                            {{-- <div class="col-md-12 mt=3 mb-4">
                                        <label for="name" class="form-label mt-3">Remarks
                                        </label>
                                        <div class="form-floating">
                                            <label for="floatingTextarea"></label>
                                            <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            name="contentss"  id="contentss"  style="height: 150px;"></textarea>
                                        </div>
                                        <div  style="color:red" id="e_Description">
                                        </div>
                                    </div> --}}
                            <div class="col-md-12 text-end mt-3">
                                <button class="btn btn-primary mb-5"
                                    data-route="{{route('admin.addpayment',$getleads[0]->leadid)}}"
                                    id="Addpaymentdetails">Add Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('popmodel.addfolloupmodelbox')
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>
    window.addEventListener('alert', (event) => {
        // console.log(event);
        $('#converttodeals').modal('hide');
        let data = event.detail;
        Swal.fire({
            position: 'center',
            // icon: "success",
            icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
</script>
@endsection