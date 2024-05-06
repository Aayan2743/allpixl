<div class="card card-xl-stretch mb-5 mb-xl-10">
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
                                                <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                @if($l%2==0)
                                                <span class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @elseif($l%2==1)
                                                <span class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-flask fs-2x text-info"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @endif
                                            </div> -->
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
                                                <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                @if($l%2==0)
                                                <span class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @elseif($l%2==1)
                                                <span class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-flask fs-2x text-info"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @endif
                                            </div> -->
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
                                                    <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                    @if($l%2==0)
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-flask fs-2x text-success"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @elseif($l%2==1)
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-flask fs-2x text-info"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @endif
                                                </div> -->
                                                    <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                    
                                                        @if($staff->imagepath==null)
                                                        <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" />
                                                        @else
                                                        <img src="{{asset($staff->imagepath)}}" alt="photo" />
                                                        @endif

                                                            {{-- <img
                                                            src="data:image/png;base64,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">
                                                        --}}
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
                                                    <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                    @if($l%2==0)
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-flask fs-2x text-success"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @elseif($l%2==1)
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-flask fs-2x text-info"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @endif
                                                </div> -->
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
                                                    <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                    @if($l%2==0)
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-flask fs-2x text-success"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @elseif($l%2==1)
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-flask fs-2x text-info"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @endif
                                                </div> -->
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
                                                <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                @if($l%2==0)
                                                <span class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @elseif($l%2==1)
                                                <span class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-flask fs-2x text-info"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @endif
                                            </div> -->
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
                                                <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                @if($l%2==0)
                                                <span class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @elseif($l%2==1)
                                                <span class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-flask fs-2x text-info"
                                                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                @endif
                                            </div> -->
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
                                                    <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                                    @if($l%2==0)
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-flask fs-2x text-success"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @elseif($l%2==1)
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-flask fs-2x text-info"
                                                            style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                                    @endif
                                                </div> -->
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


{{-- 
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
                                        <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                        @if($l%2==0)
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-flask fs-2x text-success"
                                                style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                        @elseif($l%2==1)
                                        <span class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-flask fs-2x text-info"
                                                style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                        @endif
                                    </div> -->
                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                            <img
                                                src="https://ca.slack-edge.com/T067CSXTXDM-U067LPSHFD4-df595f9854ff-90">
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
                                        <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                        @if($l%2==0)
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-flask fs-2x text-success"
                                                style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                        @elseif($l%2==1)
                                        <span class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-flask fs-2x text-info"
                                                style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                        @endif
                                    </div> -->
                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                            <img
                                                src="https://ca.slack-edge.com/T067CSXTXDM-U067LPSHFD4-df595f9854ff-90">
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
                                        <!-- <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                        @if($l%2==0)
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-flask fs-2x text-success"
                                                style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                        @elseif($l%2==1)
                                        <span class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-flask fs-2x text-info"
                                                style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                                        @endif
                                    </div> -->
                                        <div class="symbol symbol-50px p-4 px-0"  style="float: right;">
                                            <img
                                                src="https://ca.slack-edge.com/T067CSXTXDM-U067LPSHFD4-df595f9854ff-90">
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
            @endif --}}
        </div>
    </div>
</div>