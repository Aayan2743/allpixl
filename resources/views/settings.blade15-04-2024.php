@extends('layouts.master')
@section('title') {{'Settings'}} @endsection
@section('maincontent')
<div class="container-xxl" id="kt_content_container">
    <div class="card card-flush p-5">
        <div class="">
            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                <li class="nav-item mb-3 me-3 me-lg-6 active" role="presentation">
                    <a class="nav-link active btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                        id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1"
                        aria-selected="false" role="tab" tabindex="-1">
                        <div class="nav-icon mb-3">
                            <img src="{{asset('icons/General Settings.png')}}" />
                        
                        </div>
                        <span class="nav-text text-gray-800 fw-bold ">
                            General Settings
                        </span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                        id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2"
                        aria-selected="false" role="tab" tabindex="-1">
                        <div class="nav-icon mb-3">
                            <img src="{{asset('icons/Lead Sources.png')}}" />
                        
                        </div>
                        <span class="nav-text text-gray-800 fw-bold">
                            Lead Sources
                        </span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                        id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3"
                        aria-selected="false" role="tab" tabindex="-1">
                        <div class="nav-icon mb-3">
                            <img src="{{asset('icons/Lead Stages.png')}}" />
                            {{-- <i class="ki-duotone ki-tablet fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span></i> --}}
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                            Lead Stages
                        </span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                        id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4"
                        aria-selected="false" role="tab" tabindex="-1">
                        <div class="nav-icon mb-3">
                            <img src="{{asset('icons/Service Settings.png')}}" />
                            {{-- <i class="ki-duotone ki-tablet fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span></i> --}}
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                            Service Settings
                        </span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                        id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5"
                        aria-selected="false" role="tab" tabindex="-1">
                        <div class="nav-icon mb-3">
                            <img src="{{asset('icons/Whatsapp Settings.png')}}" />
                            {{-- <i class="ki-duotone ki-tablet fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span></i> --}}
                        </div>
                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                            Whatsapp Settings
                        </span>
                        <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                @livewire('Generalsetting')

                <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel"
                    aria-labelledby="kt_stats_widget_16_tab_link_2">
                    <div class="table-responsive">
                        <div class="card mb-5 mb-xl-10 mt-4">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">List of Lead Sources</span>
                                </h3>
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addsource"
                                        class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal">
                                        <i class="ki-duotone ki-plus fs-2"></i>Create Source</a>
                                </div>
                            </div>
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
                                                <th class="min-w-600px">
                                                    Sources</th>
                                                <th class="min-w-100px text-center">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getleadsource as $leadsource)
                                            <tr>
                                                <td class="align-content-center">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p class="text-gray-900 fw-norma  fs-6"
                                                                style="text-transform: capitalize">
                                                                {{$leadsource->leadsource}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            {{-- <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editleadsource"class="btn btn-primary editleadsources"
                                                                data-bs-toggle="modal" >Edit
                                                            </a> --}}
                                                            <!-- <button type="button" class="btn btn-primary getleadsource"
                                                                data-leadid="{{$leadsource->lsid}}"
                                                                data-bs-target="#editleadsource"
                                                                data-bs-toggle="modal">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-light btn-active-primary m-5"
                                                                data-leadid="{{$leadsource->lsid}}"
                                                                data-bs-target="#deleteleadsource"
                                                                data-bs-toggle="modal">Delete</button> -->
                                                            <div class="d-flex  flex-shrink-0">
                                                                <a data-leadid="{{$leadsource->lsid}}"
                                                                    data-bs-target="#editleadsource"
                                                                    data-bs-toggle="modal"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 leadid">
                                                                    <i class="ki-duotone ki-pencil fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </a>
                                                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm dealid-lost-deal"
                                                                    data-leadid="{{$leadsource->lsid}}"
                                                                    data-bs-target="#deleteleadsource"
                                                                    data-bs-toggle="modal">
                                                                    <i class="ki-duotone ki-trash fs-2 ">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                    </i>
                                                                </p>
                                                            </div>
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
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel"
                    aria-labelledby="kt_stats_widget_16_tab_link_3">
                    <div class="table-responsive">
                        <div class="card mb-5 mb-xl-10 mt-4">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">List of Lead Stages</span>
                                </h3>
                                <div>
                                    <a href="" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                                        data-bs-target="#modal_add_create_stage">
                                        <i class="ki-duotone ki-plus fs-2"></i>Create Stage</a>
                                </div>
                            </div>
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
                                                <th class="min-w-600px">
                                                    Stages</th>
                                                <th class="min-w-100px text-center">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getleadstage as $stage)
                                            <tr>
                                                <td class="align-content-center">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p class="text-gray-900 fw-norma  fs-6"
                                                                style="text-transform: capitalize">
                                                                {{$stage->stagename}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <!-- <button type="button" class="btn btn-primary editleadstage"
                                                                data-stageid="{{$stage->stageid}}"
                                                                data-bs-target="#modal_edit_stage"
                                                                data-bs-toggle="modal">Edit</button>
                                                            <button type="button" class="btn btn-primary editleadstage"
                                                                data-stageid="{{$stage->stageid}}"
                                                                data-bs-target="#modal_delete_stage"
                                                                data-bs-toggle="modal">Delete</button> -->


                                                            <div class="d-flex  flex-shrink-0"> <a
                                                            data-stageid="{{$stage->stageid}}"
                                                                data-bs-target="#modal_edit_stage"
                                                                data-bs-toggle="modal"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 leadid">
                                                                    <i class="ki-duotone ki-pencil fs-2"> <span
                                                                            class="path1"></span> <span
                                                                            class="path2"></span> </i> </a>
                                                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm dealid-lost-deal"
                                                                data-stageid="{{$stage->stageid}}"
                                                                data-bs-target="#modal_delete_stage"
                                                                data-bs-toggle="modal"> <i
                                                                        class="ki-duotone ki-trash fs-2 "> <span
                                                                            class="path1"></span> <span
                                                                            class="path2"></span> <span
                                                                            class="path3"></span> <span
                                                                            class="path4"></span> <span
                                                                            class="path5"></span> </i> </p>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td class="align-content-center"> 
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p
                                                                class="text-gray-900 fw-norma  fs-6">
                                                                Follow Up</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-content-center"> 
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p
                                                                class="text-gray-900 fw-norma  fs-6">
                                                                Proposal Sent</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-content-center"> 
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p
                                                                class="text-gray-900 fw-norma  fs-6">
                                                                Discussion</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-content-center"> 
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p
                                                                class="text-gray-900 fw-norma  fs-6">
                                                                Negotiation</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-content-center"> 
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p
                                                                class="text-gray-900 fw-norma  fs-6">
                                                                To Be Closed</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-content-center"> 
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p
                                                                class="text-gray-900 fw-norma  fs-6">
                                                                Closed</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center"> 
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary">Edit</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_stats_widget_16_tab_4" role="tabpanel"
                    aria-labelledby="kt_stats_widget_16_tab_link_4">
                    <div class="table-responsive">
                        <div class="card mb-5 mb-xl-10 mt-4">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Service Settings</span>
                                </h3>
                                <div>
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                                        data-bs-target="#modal_add_course">
                                        <i class="ki-duotone ki-plus fs-2"></i>Create Service</a>
                                </div>
                            </div>
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
                                                <th class="min-w-600px">
                                                    Service Name</th>
                                                <th class="min-w-100px text-center">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getprojects as $project)
                                            <tr>
                                                <td class="align-content-center">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p class="text-gray-900 fw-norma  fs-6"
                                                                style="text-transform: capitalize">
                                                                {{$project->Project_Name}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <!-- <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button"
                                                                class="btn btn-primary getprojectdata mx-2"
                                                                data-pid="{{$project->pid}}"
                                                                data-bs-target="#modal_edit_course"
                                                                data-bs-toggle="modal">Edit</button>
                                                            <button type="button" class="btn btn-primary getprojectdata"
                                                                data-pid="{{$project->pid}}"
                                                                data-bs-target="#modal_delete_course"
                                                                data-bs-toggle="modal">Delete</button>
                                                        </div>
                                                    </div> -->


                                                    <div class="d-flex  flex-shrink-0"> <a
                                                    data-pid="{{$project->pid}}"
                                                                data-bs-target="#modal_edit_course"
                                                                data-bs-toggle="modal"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 leadid">
                                                                    <i class="ki-duotone ki-pencil fs-2"> <span
                                                                            class="path1"></span> <span
                                                                            class="path2"></span> </i> </a>
                                                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm dealid-lost-deal"
                                                                data-pid="{{$project->pid}}"
                                                                data-bs-target="#modal_delete_course"
                                                                data-bs-toggle="modal"> <i
                                                                        class="ki-duotone ki-trash fs-2 "> <span
                                                                            class="path1"></span> <span
                                                                            class="path2"></span> <span
                                                                            class="path3"></span> <span
                                                                            class="path4"></span> <span
                                                                            class="path5"></span> </i> </p>
                                                            </div>




                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="table-responsive">
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <thead>
                                        <tr class="fw-bold text-muted">
                                            <th class="w-25px">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                </div>
                                            </th>
                                            <th class="min-w-300px">
                                                Service Name</th>
                                            <th class="min-w-100px text-center">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getprojects as $project)
                                        <tr>
                                            <td class="align-content-center"> 
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                </div>
                                            </td>
                                            <td class="align-content-center"> 
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <p
                                                            class="text-gray-900 fw-norma  fs-6">
                                                            {{$project->Project_Name}}</p>
                            </div>
                        </div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex flex-column w-25 me-3">
                                <div class="d-flex flex-stack mb-2">
                                    <button type="button" class="btn btn-primary getprojectdata mx-2"
                                        data-pid="{{$project->pid}}" data-bs-target="#modal_edit_course"
                                        data-bs-toggle="modal">Edit</button>
                                    <button type="button" class="btn btn-primary getprojectdata"
                                        data-pid="{{$project->pid}}" data-bs-target="#modal_delete_course"
                                        data-bs-toggle="modal">Delete</button>
                                </div>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div> --}}
                </div>
                
            </div>
            
        </div>
                </div>
                <div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel"
                    aria-labelledby="kt_stats_widget_16_tab_link_5">
                    <div class="table-responsive">
                        <div class="card mb-5 mb-xl-10 mt-4">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Whatsapp Settings</span>
                                </h3>
                                <div>
                                    <a href="#" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                                        data-bs-target="#modal_add_template">
                                        <i class="ki-duotone ki-plus fs-2"></i>Create Template</a>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                        <thead>
                                            <tr class="fw-bold text-muted">
                                                <th class="w-25px">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </th>
                                                <th class="min-w-200px">
                                                    Template Name</th>
                                                <th class="min-w-400px text-left">
                                                    Message</th>
                                                <th class="min-w-100px text-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getwhatsapp as $temp)
                                            <tr>
                                                <td class="align-content-center">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <p class="text-gray-900 fw-norma  fs-6">
                                                                {{$temp->template_name}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-content-center">
                                                    {!! $temp->template_message !!}
                                                    {{-- {{$temp->template_message}} --}}
                                                </td>
                                                <td class="align-content-center">
                                                    <div class="d-flex flex-column w-100 me-2">
                                                        <div class="d-flex flex-stack mb-2">
                                                            <button type="button" class="btn btn-primary edittemplate"
                                                                data-tid="{{$temp->templateid}}"
                                                                data-bs-target="#modal_edit_template"
                                                                data-bs-toggle="modal">Edit</button>
                                                            <button type="button" class="btn btn-primary deletetemplate"
                                                                data-tid="{{$temp->templateid}}"
                                                                data-bs-target="#modal_delete_template"
                                                                data-bs-toggle="modal">Delete</button>
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
                    </div>
                </div>
</div>
</div>
</div>

</div>
{{-- modes start here --}}
<div class="modal fade" id="addsource" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leads Source
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Lead Source *</label>
                                    <input class="form-control" placeholder="Lead Source" id="leadsources"
                                        name="leadsources" type="text" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="e_leadsource">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="addleadsource">Create Lead Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editleadsource" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Leads Source
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Edit Lead Source *</label>
                                    <input class="form-control" placeholder="Lead Source" id="e_leadsources"
                                        name="e_leadsources" type="text" />
                                    <input class="form-control" placeholder="Lead Source" id="leadsourceid"
                                        name="leadsourceid" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ess_leadsource">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="e_leadsourcedd">Edit Lead Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_stage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Lead Stage
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Edit Lead Stage *</label>
                                    <input class="form-control" placeholder="Lead Stage" id="e_leadstage"
                                        name="e_leadstage" type="text" />
                                    <input class="form-control" placeholder="Lead Source" id="e_leadstage_id"
                                        name="e_leadstage_id" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="er_leadstage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end mt-4">
                                    <button class="btn btn-primary mb-5" id="edit_stage_name">Edit Lead Stage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
{{-- modal_delete_stage --}}
<div class="modal fade" id="modal_delete_stage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Leads Stage
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete Lead Stage
                                        <strong id="stagename" style="color:red;text-decoration:line-through"> </strong>
                                        <strong id="stagenameid"
                                            style="color:red;text-decoration:line-through;display:none"> </strong>
                                    </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deleteleadstagedata">Delete Lead
                                        Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteleadsource" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Leads Source
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete Lead
                                        Source
                                        <strong id="srcid" style="color:red;text-decoration:line-through"> </strong>
                                        <strong id="srcids" style="color:red;text-decoration:line-through"> </strong>
                                    </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deleteleadsourcedata">Delete Lead
                                        Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_add_create_stage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Lead Stage
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Lead Stage Name *</label>
                                    <input class="form-control" placeholder="Lead Source" id="stagenames"
                                        name="stagenames" type="text" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="e_stagename">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="addleadstage">Create Lead Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_add_template" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Whatsapp Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Name *</label>
                                    <input class="form-control" placeholder="Template Name" id="templatename"
                                        name="templatename" type="text" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="e_templatename">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Message *</label>
                                    <textarea class="form-control mb-5" placeholder="Leave a message here"
                                        id="templatemessage" style="height: 150px;"></textarea>
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="e_templatemessage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createtemplate">Create Whatsapp
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_course" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Service Details
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Service Name *</label>
                                    <input class="form-control" placeholder="Course Name" id="e_coursename"
                                        name="coursename" type="text" />
                                    <input class="form-control" placeholder="Course Name" id="e_courseid"
                                        name="courseidd" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="eu_coursename">
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label for="dateInput" class="form-label">Course Price *</label>
                                    <input class="form-control" placeholder="Course Price" id="e_courseprise"
                                        name="courseprise" type="number" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="eu_courseprise">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="editcourse">Update Service</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete_course" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Course Details
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete The Course
                                        <strong style="text-decoration: line-through; color:red" id="project_name">
                                        </strong> <span id="project_id_deta" style="display:none"></span> </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deletecourse">Delete Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_template" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Whatsapp Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Name *</label>
                                    <input class="form-control" placeholder="Template Name" id="etemplatename"
                                        name="etemplatename" type="text" />
                                    <input class="form-control" placeholder="Template Name" id="etemplateid"
                                        name="etemplateid" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatename">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Message *</label>
                                    <textarea class="form-control mb-5" placeholder="Leave a message here"
                                        id="etemplatemessage" style="height: 150px;"></textarea>
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatemessage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="edittemplate">Update Whatsapp
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete_template" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete Template
                                        Source
                                        <strong id="tmpid" style="color:red;text-decoration:line-through;display:none">
                                        </strong>
                                        <strong id="tmpname" style="color:red;text-decoration:line-through"> </strong>
                                    </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deletetemplatedata">Delete
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">-->
<!--    <div class="modal-dialog mw-650px">-->
<!--        <div class="modal-content">-->
<!--            <div class="container-xxl" id="kt_content_container">-->
<!--                <div class="card-header border-0 pt-2 mt-5">-->
<!--                    <h3 class="card-title align-items-start flex-column ">-->
<!--                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leads-->
<!--                        </span>-->
<!--                    </h3>-->
<!--                </div>-->
<!--                <div class="card-body py-3">-->
<!--                    <div class="table-responsive" style=" width: -webkit-fill-available;">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-6">-->
<!--                                    <label for="dateInput" class="form-label">Lead Date *</label>-->
<!--                                    <input class="form-control form-control-solid" placeholder="Pick date rage"-->
<!--                                        id="leadcrerated"  type="datetime-local" value="<?php echo now() ?>"/>-->
<!--                                </div>-->
<!--                                <div class="col-md-6">-->
<!--                                    <label for="name" class="form-label">Customer Name *-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="customers122" placeholder="Customer Name">-->
<!--                                    <div  style="color:red" id="e_customer122">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                {{-- <div class="col-md-12 mt-3">-->
<!--                                    <label for="name" class="form-label">Company Name *-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control"  id="Orginazations"  placeholder="Company Name" value="">-->
<!--                                    <div style="color:red" id="e_Orginazation">-->
<!--                                    </div>-->
<!--                                </div> --}}-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Course Required *-->
<!--                                    </label>-->
<!--                                    <select class="form-control" id="Title122">-->
<!--                                        <option value="" selected>Select Course Details</option>-->
<!--                                        @foreach ($getprojects as $project)-->
<!--                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>-->
<!--                                        @endforeach-->
<!--                                      </select>-->
<!--                                  <div  style="color:red" id="e_Title122">-->
<!--                                  </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Lead Source *-->
<!--                                    </label>-->
<!--                                    <select class="form-control" id="leadsource122">-->
<!--                                        <option value="" selected>Select Lead Source</option>-->
<!--                                        @foreach ($getleadsource as $source)-->
<!--                                        <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>-->
<!--                                        @endforeach-->
<!--                                      </select>-->
<!--                                  <div  style="color:red" id="e_leadsource122">-->
<!--                                  </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="dateInput" class="form-label">Phone *</label>-->
<!--                                    <input type="text" class="form-control" id="mobile122" placeholder="Phone Number">-->
<!--                                    <div  style="color:red" id="e_mobile122">-->
<!--                                    </div>  -->
<!--                                </div>-->
<!--                                <div class="col-md-6  mt-3">-->
<!--                                    <label for="email" class="form-label">Email-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="emails122" placeholder="Email id">-->
<!--                                    <div  style="color:red" id="e_emails122">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">-->
<!--                                        Priority *-->
<!--                                    </label>-->
<!--                                    <select class="form-control" id="Priotity122">-->
<!--                                        @foreach ($getalllabel as $label)-->
<!--                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>-->
<!--                                        @endforeach-->
<!--                                      </select>-->
<!--                                  <div  style="color:red" id="e_Priotity122">-->
<!--                                  </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Price-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="leadprise122" aria-describedby="nameHelp" readonly>-->
<!--                                </div>-->
<!--                                {{-- <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Registration Amount -->
<!--                                    </label>-->
<!--                                    <input type="number" class="form-control" id="registration" aria-describedby="nameHelp">-->
<!--                                    <div  style="color:red" id="e_registration">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Balance Amount-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="balance" aria-describedby="nameHelp" readonly>-->
<!--                                    <div  style="color:red" id="e_balance">-->
<!--                                    </div>-->
<!--                                </div> --}}-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Lead Owner -->
<!--                                    </label>-->
<!--                                    <select class="form-select" aria-label="Default select example"  id="owner122">-->
<!--                                        @foreach ($getempdetails as $emp)-->
<!--                                        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option>-->
<!--                                        @endforeach-->
<!--                                    </select>-->
<!--                                    <div  style="color:red" id="e_lead_date">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">City /Town-->
<!--                                    </label>-->
<!--                                    <input type="name" class="form-control" id="citys122" aria-describedby="nameHelp">-->
<!--                                    <div  style="color:red" id="e_city233">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 mt=3 mb-4">-->
<!--                                    <label for="name" class="form-label mt-3">Remarks-->
<!--                                    </label>-->
<!--                                    <div class="form-floating">-->
<!--                                        <label for="floatingTextarea"></label>-->
<!--                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"-->
<!--                                            id="Description122" style="height: 150px;"></textarea>-->
<!--                                    </div>-->
<!--                                    <div  style="color:red" id="e_Description122">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 text-end">-->
<!--                                    <button class="btn btn-primary mb-5" id="createleads1">Create Leads</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row gy-5 g-xl-10">-->
<!--                    <div class="col-xxl-6"></div>-->
<!--                    <div class="col-xxl-6">-->
<!--                        <div class="card card-xl-stretch mb-3 mb-xl-5"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="modal fade" id="modal_add_course" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Service Name
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Service Name *</label>
                                    <input class="form-control" placeholder="Course Name" id="coursename"
                                        name="coursename" type="text" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="e_coursename11">
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label for="dateInput" class="form-label">Course Price *</label>
                                    <input class="form-control" placeholder="Course Price" id="courseprise"
                                        name="courseprise" type="number" value="0" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="e_courseprise">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createcourse">Create Service</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_templatess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Whatsapp Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Name *</label>
                                    <input class="form-control" placeholder="Template Name" id="etemplatename"
                                        name="etemplatename" type="text" />
                                    <input class="form-control" placeholder="Template Name" id="etemplateid"
                                        name="etemplateid" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatename">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Message *</label>
                                    <textarea class="form-control mb-5" placeholder="Leave a message here"
                                        id="etemplatemessage" style="height: 150px;"></textarea>
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatemessage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="edittemplate">Update Whatsapp
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leads
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Lead Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="leadcrerated" type="datetime-local" value="<?php echo now() ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="text" class="form-control" id="customers" placeholder="Customer Name"
                                        value="N/A">
                                    <div style="color:red" id="e_customer">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name *
                                    </label>
                                    <input type="text" class="form-control" id="Orginazations"
                                        placeholder="Company Name" value="N/A">
                                    <div style="color:red" id="e_Orginazation">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Service Required *
                                    </label>
                                    <select class="form-control" id="Title">
                                        @foreach ($getprojects as $project)
                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_Title">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Source *
                                    </label>
                                    <select class="form-control" id="leadsource">
                                        <option value="" selected>Select Lead Source</option>
                                        @foreach ($getleadsource as $source)
                                        <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_leadsourcesss">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
                                    <div style="color:red" id="e_mobile">
                                    </div>
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="text" class="form-control" id="emails" placeholder="Email id">
                                    <div style="color:red" id="e_email">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-control" id="Priotity">
                                        {{-- <option value="Cold" selected>Cold</option> --}}
                                        @foreach ($getalllabel as $label)
                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_Priotity">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Price
                                    </label>
                                    <input type="name" class="form-control" id="leadprise" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Owner
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="owner">
                                        @foreach ($getempdetails as $emp)
                                        <option value="{{$emp->uid}}"
                                            {{$emp->uid==session()->get('uid') ? "Selected" : "" }}>{{$emp->fullname}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_lead_date">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town
                                    </label>
                                    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
                                    <div style="color:red" id="e_cityssss">
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="Description" style="height: 150px;"></textarea>
                                    </div>
                                    <div style="color:red" id="e_Description22sssss2">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createleads1">Create Leads</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection