<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="card card-xl-stretch mb-3 mb-xl-5">
        <div class="card-header position-relative py-0" style="width:-webkit-fill-available;"> <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist"> <li class="nav-item p-0 ms-0 me-8" role="presentation"> <h3 class="card-title align-items-start flex-column" style="display: block;"> <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> <i class="ki-duotone ki-category fs-1"> <span class="path1"></span> <span class="path2"></span> <span class="path3"></span> <span class="path4"></span> </i> </button> <span class="card-label fw-bold text-gray-900 m-0">Staff Statistics</span> </h3> </li> </ul> </div>
            <!-- <div class="card-header border-0 pt-2">
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-category fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <h3 class="card-label fw-bold text-gray-900 m-0">  </h3>
                </div>
            </div> -->
            <div class="container">
                <div class="row">
                  
        
                    @if(count($staffStatistics2)==0 && count($staffStatistics1)!=0 )
                            @if(count($staffStatistics)>0)
                            <div class="col-6">
                                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                    <div class="table-responsive" style="    width: -webkit-fill-available;">
                                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                            <thead>
                                                <tr class="fw-bold text-muted">
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Leads</th>
                                                    <th>Deals</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($staffStatistics as $l=> $staff)
                                                <tr>
                                                    <td class="py-1">
                                                       
                                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                            {{--   src="https://ca.slack-edge.com/T067CSXTXDM-U067LPSHFD4-df595f9854ff-90" --}}
                                                            @if($staff->imagepath==null)
                                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                            @else
                                                            <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="p-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                    style="text-transform: capitalize;">
                                                                    {{$staff->fullname}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <span class="badge  fw-bold"
                                                            style="font-size: large;">{{$staff->leads_count}}</span>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <div class="d-flex flex-column w-100 me-2">
                                                            <div class="d-flex flex-stack mb-2">
                                                                <span class="badge  fw-bold"
                                                                    style="font-size: large;">{{$staff->deals_count}}</span>
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
                            @endif
                            @if(count($staffStatistics1)>0)
                            <div class="col-6">
                                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                    <div class="table-responsive" style="    width: -webkit-fill-available;">
                                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                            <thead>
                                                <tr class="fw-bold text-muted">
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Leads</th>
                                                    <th>Deals</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($staffStatistics1 as $l=> $staff)
                                                <tr>
                                                    <td class="py-1">
                                                       
                                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                            @if($staff->imagepath==null)
                                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                            @else
                                                            <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="p-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                    style="text-transform: capitalize;">
                                                                    {{$staff->fullname}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <span class="badge  fw-bold"
                                                            style="font-size: large;">{{$staff->leads_count}}</span>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <div class="d-flex flex-column w-100 me-2">
                                                            <div class="d-flex flex-stack mb-2">
                                                                <span class="badge  fw-bold"
                                                                    style="font-size: large;">{{$staff->deals_count}}</span>
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
                            @endif
        
                     @elseif(count($staffStatistics2)>=1)
                     
                                @if(count($staffStatistics)>0)
                                <div class="col-4">
                                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                        <div class="table-responsive" style="    width: -webkit-fill-available;">
                                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="fw-bold text-muted">
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Leads</th>
                                                        <th>Deals</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($staffStatistics as $l=> $staff)
                                                    <tr>
                                                        <td class="py-1">
                                                          
                                                            <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                            
                                                                @if($staff->imagepath==null)
                                                                <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                                @else
                                                                <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                                @endif
        
                                                                  
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                        style="text-transform: capitalize;">
                                                                        {{$staff->fullname}}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <span class="badge  fw-bold"
                                                                style="font-size: large;">{{$staff->leads_count}}</span>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="badge  fw-bold"
                                                                        style="font-size: large;">{{$staff->deals_count}}</span>
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
                                @endif
        
                                @if(count($staffStatistics1)>0)
                                <div class="col-4">
                                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                        <div class="table-responsive" style="    width: -webkit-fill-available;">
                                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="fw-bold text-muted">
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Leads</th>
                                                        <th>Deals</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($staffStatistics1 as $l=> $staff)
                                                    <tr>
                                                        <td class="py-1">
                                                           
                                                            <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                                @if($staff->imagepath==null)
                                                                <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                                @else
                                                                <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                        style="text-transform: capitalize;">
                                                                        {{$staff->fullname}}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <span class="badge  fw-bold"
                                                                style="font-size: large;">{{$staff->leads_count}}</span>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="badge  fw-bold"
                                                                        style="font-size: large;">{{$staff->deals_count}}</span>
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
                                @endif
         
                                @if(count($staffStatistics2)>0)
                                <div class="col-4">
                                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                        <div class="table-responsive" style="    width: -webkit-fill-available;">
                                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="fw-bold text-muted">
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Leads</th>
                                                        <th>Deals</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($staffStatistics2 as $l=> $staff)
                                                    <tr>
                                                        <td class="py-1">
                                                          
                                                            <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                                @if($staff->imagepath==null)
                                                                <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                                @else
                                                                <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                        style="text-transform: capitalize;">
                                                                        {{$staff->fullname}}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <span class="badge  fw-bold"
                                                                style="font-size: large;">{{$staff->leads_count}}</span>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="badge  fw-bold"
                                                                        style="font-size: large;">{{$staff->deals_count}}</span>
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
                                @endif
        
                         @elseif(count($staffStatistics1)==0 && count($staffStatistics2)==0)
                              
                            @if(count($staffStatistics)>0)
                            <div class="col-12">
                                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                    <div class="table-responsive" style="    width: -webkit-fill-available;">
                                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                            <thead>
                                                <tr class="fw-bold text-muted">
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Leads</th>
                                                    <th>Deals</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($staffStatistics as $l=> $staff)
                                                <tr>
                                                    <td class="py-1">
                                                      
                                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                            @if($staff->imagepath==null)
                                                                <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                                @else
                                                                <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                                @endif
                                                        </div>
                                                    </td>
                                                    <td class="p-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                    style="text-transform: capitalize;">
                                                                    {{$staff->fullname}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <span class="badge  fw-bold"
                                                            style="font-size: large;">{{$staff->leads_count}}</span>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <div class="d-flex flex-column w-100 me-2">
                                                            <div class="d-flex flex-stack mb-2">
                                                                <span class="badge  fw-bold"
                                                                    style="font-size: large;">{{$staff->deals_count}}</span>
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
                            @endif  
                            
                            @elseif(count($staffStatistics1)>=1)
        
                            @if(count($staffStatistics)>0)
                            <div class="col-4">
                                <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                    <div class="table-responsive" style="    width: -webkit-fill-available;">
                                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                            <thead>
                                                <tr class="fw-bold text-muted">
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Leads</th>
                                                    <th>Deals</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($staffStatistics as $l=> $staff)
                                                <tr>
                                                    <td class="py-1">
                                                      
                                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                            @if($staff->imagepath==null)
                                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                            @else
                                                            <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td class="p-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                    style="text-transform: capitalize;">
                                                                    {{$staff->fullname}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <span class="badge  fw-bold"
                                                            style="font-size: large;">{{$staff->leads_count}}</span>
                                                    </td>
                                                    <td class="align-content-center"> 
                                                        <div class="d-flex flex-column w-100 me-2">
                                                            <div class="d-flex flex-stack mb-2">
                                                                <span class="badge  fw-bold"
                                                                    style="font-size: large;">{{$staff->deals_count}}</span>
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
                            @endif
        
                                @if(count($staffStatistics1)>0)
                                <div class="col-4">
                                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 400px">
                                        <div class="table-responsive" style="    width: -webkit-fill-available;">
                                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="fw-bold text-muted">
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Leads</th>
                                                        <th>Deals</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($staffStatistics1 as $l=> $staff)
                                                    <tr>
                                                        <td class="py-1">
                                                         
                                                          
                                                            <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                                @if($staff->imagepath==null)
                                                                <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                                @else
                                                                <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <p class="text-gray-900 fw-bold  fs-6 m-0"
                                                                        style="text-transform: capitalize;">
                                                                        {{$staff->fullname}}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <span class="badge  fw-bold"
                                                                style="font-size: large;">{{$staff->leads_count}}</span>
                                                        </td>
                                                        <td class="align-content-center"> 
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="badge  fw-bold"
                                                                        style="font-size: large;">{{$staff->deals_count}}</span>
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
                                @endif
        
        
                            
                            
                @endif
        
        
      
                </div>
            </div>
        </div>


</div>
