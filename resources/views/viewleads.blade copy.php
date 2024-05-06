@extends('layouts.master')
@section('pagename')
@endsection
@section('maincontent')

    <!--end::Header-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-5">
                        <div class="row">
                            <div class="col-md-8 align-self-center">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img
                                            alt="image"
                                            src="{{asset('assets/media/avatars/300-7.jpg')}}"
                                            class="rounded-circle"
                                            width="100" style="border-radius: 8%!important;">
                                    </div>
                                    <div class="col-md-8 align-self-center col-8">
                                        <h3>{{$getleads[0]->customer}}</h3>
                                        <p class="mt-4">
                                          {{$getleads[0]->customer}}
                                        </p>
                                        <p>
                                         <b>{{$getleads[0]->phone}}</b>  
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="d-flex flex-center w-100">       
                                    <div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 160px"></div>
                                </div>
                                  
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <button class="btn btn-success mb-3" style="width:-webkit-fill-available;">Call: {{$getleads[0]->phone}}</button>
                                       </div>
                                       <div class="col-md-6 col-12">
                                        <button class="btn btn-primary" style="width:-webkit-fill-available;">Convert to Deal</button>
                                       </div>
                                </div>
                              
                               
                                

                            </div>
                            <div class="">
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 col-6 text-center">
                                        <div class="m-4">
                                            <p>Lead Created Date</p>
                                            <h6>{{ \Carbon\Carbon::parse($getleads[0]->created_at)->format('d-M-Y') }} </h6>
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
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
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
                                            Template Name</th>
                                        <th class="text-left">
                                            Message</th>
                                            <th class="text-center">
                                                Action
                                            </th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                                        Rahul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-content-center"> 
                                            Hi This is New Message....
                                        </td>
                                        <td class="align-content-center"> 
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                  
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
                                                        Rahul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-content-center"> 
                                            Hi This is New Message....
                                        </td>
                                        <td class="align-content-center"> 
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                 
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
                                                        Rahul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-content-center"> 
                                            Hi This is New Message....
                                        </td>
                                        <td class="align-content-center"> 
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                
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
                                                        Rahul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-content-center"> 
                                            Hi This is New Message....
                                        </td>
                                        <td class="align-content-center"> 
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                              
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
                                                        Rahul</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-content-center"> 
                                            Hi This is New Message....
                                        </td>
                                        <td class="align-content-center"> 
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
           
                  
                        <div class="card ">
                            <div class="row">
                                <div class="col-lg-12 col-xl-12 col-xxl-12 mb-5 mb-xl-0">
                                    <div class="card h-md-100">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-900 m-0">Follow Ups</span>
                                                
                                            </h3>
                                          
                                        </div>
                                        <div class="card-body pt-10 px-0">
                                            <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5"
                                                role="tablist">
                                               
                                                @foreach ($weekData as $key => $value)




                                                <li class="nav-item p-0 ms-0" role="presentation">
                                                    <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
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
                                                <div class="tab-pane fade "
                                                    {{-- id="kt_timeline_widget_3_tab_content_2" role="tabpanel"> --}}
                                                    id="{{$key}}" role="tabpanel">
                                                

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
                                                               

                                                                        @if(count($value)>0)
                                                                        
                                                                                @foreach($value as $sss)
                                                                                {{$sss->typeoffollowup}}
                                                                                @endforeach

                                                                         @else
                                                                      
                                                                        @endif
                                                                       
                                                                 </div>                                                            
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
                                                    </div>
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
                   
                </div>
                
            </div>
            <!--begin::Row-->
            
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>

    <!--end::Content-->
    <!--begin::Footer-->
   
@endsection
