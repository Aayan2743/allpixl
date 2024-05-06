<div>
    {{-- Stop trying to control. --}}

    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
        <div class="table-responsive" style="width: -webkit-fill-available;">
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 pt-2">
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
                                    <span class="card-label fw-bold fs-3 mb-1">Deals</span>
                                </h3>
                            </div>
                            <div>
                                <span class="text-muted mt-1 fw-semibold fs-7">Current Month Revenue Rs:
                                   {{$countofdeals}}</span>
                            </div>
                        </li>
                    </ul>


                    <!-- <h3 class="card-title align-items-start flex-column">
                        <div>
                            <div class="card-toolbar">
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
                                    <span class="card-label fw-bold fs-3 mb-1">Deals</span>
                                    <span class="text-muted mt-1 fw-semibold fs-7">Current Month Revenue Rs:
                                        </span>
                                </h3>
                            </div>
                        </div>
                    </h3> --> 
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to Add Deals"> 
                        <a href="{{route('admin.viewdeals')}}" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" >
                            Show All
                            Deals</a>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style="width: -webkit-fill-available;">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 zigzag"
                            id="dealstabs">
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        </div>
                                    </th>
                                    <th>Customer Name</th>
                                    <th>Contact Number</th>
                                    <th>Lead Source</th>
                                    <th>Lead Owner</th>
                                    <th>Price</th>
                                    <th>Lead Details </th>
                                    <th style="text-align: center;">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($getalldeals)>0)
                                @foreach ($getalldeals as $l=> $deals)
                                <tr>
                                    <td>
                                        {{-- <div class="symbol symbol-40px">
                                            <img src="assets/media/Warm.png" style="    width: 25px;
                                                    height: 25px;
                                                    z-index: 9;
                                                    position: absolute;
                                                ">
                                        </div> --}}
                                        <div class="symbol symbol-40px">
                                            @if($l%2==0)
                                            <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-flask fs-2x text-info"
                                                    style="font-family: 'arial' !important; text-transform:capitalize">{{$deals->fs}}</span></i>
                                            </span>
                                            @elseif($l%2==1)
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-flask fs-2x text-success"
                                                    style="font-family: 'arial' !important; text-transform:capitalize">{{$deals->fs}}</span></i>
                                            </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        {{-- <a href="{{route('admin.viewleads',  Crypt::encryptString($deals->leadid))}}" --}}

                                            <a href="{{route('admin.viewdealsdata', Crypt::encryptString($deals->leadid))}}"
                                            class="text-gray-900 fw-norma  d-block fs-6"
                                            style="text-transform: capitalize;font-weight:800 !important;"><span>{{$deals->customer}}</span><br>
                                        </a>
                                        <span
                                            class="text-muted fw-semibold text-muted d-block fs-7 fw-norma">{{$deals->ogrinazation}}</span>
                                        <span class="badge py-2 px-4 fs-8 badge-light-warning"
                                            style="text-transform: capitalize">{{$deals->title}}</span>
                                        <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <p class="text-gray-900 fw-norma  fs-6">
                                                     <a href="tel:{{$deals->phone}}"> {{$deals->phone}} </a>
                                                   </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            <div class="d-flex flex-stack mb-2">
                                                <p class="text-gray-900 fw-norma  fs-6">
                                                    {{$deals->leadsource}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            <div class="d-flex flex-stack mb-2">
                                                <p class="text-gray-900 fw-norma  d-block fs-6">
                                                    <span>{{$deals->owner}}</span><br>
                                                    <span class="badge rounded-pill text-bg-primary text-white">
                                                        {{ \Carbon\Carbon::parse($deals->dealfixdate)->diffForHumans()}}</span><br>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <p class="text-gray-900 fw-norma  fs-6">
                                                    {{$deals->value}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            <p class="text-gray-900 fw-norma  fs-6">
                                                <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">
                                                    @if($deals->dealstatus==0)
                                                    Inprogress
                                                    @elseif($deals->dealstatus==1)
                                                    Sucessfully Completed
                                                    @elseif($deals->dealstatus==2)
                                                    Lost
                                                    @elseif($deals->dealstatus==3)
                                                    Reopen
                                                    @endif
                                                </span>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            @if($deals->dealstatus==0)
                                            {{-- deal status in progress show button close the deal--}}
                                            <p wire:click="closedeal({{$deals->leadid}})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <img src="{{asset('icons/Won.png')}}" alt="image"/ height="20px">
                                              {{-- close  --}}
                                            </p>
                                           {{-- deal status in progress show button lost the deal--}}
                                            <p <a wire:click="deallost({{$deals->leadid}})"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                               {{-- lost --}}
                                               <img src="{{asset('icons/Lost.png')}}" alt="image"/ height="20px">
                                                </a>
                                            </p>
                                            @elseif($deals->dealstatus==1)
                                                 {{-- deal status in complete stage show button reopen the deal--}}
                                            <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <a wire:click="reopen({{$deals->leadid}})" >
                                                    <img src="{{asset('icons/Convert.png')}}" alt="image"/ height="20px">
                                                {{-- ropen --}}
                                                </a>
                                            </p>
                                            @elseif($deals->dealstatus==2)
                                            {{-- deal status in Lost stage show button reopen the deal--}}
                                            <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                               
                                                    <a wire:click="reopen({{$deals->leadid}})" >
                                                        <img src="{{asset('icons/Convert.png')}}" alt="image"/ height="20px">
                                                    {{-- ropen --}}
                                                    </a>

                                                </a>
                                            </p>
                                            @elseif($deals->dealstatus==3)
                                            {{-- deal status in Reopen stage show button won the deal--}}
                                            <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" >
                                                <a  wire:click="closedeal({{$deals->leadid}})"  >
                                                    <img src="{{asset('icons/Won.png')}}"   data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Won" alt="image"/ height="20px">
                                                    {{-- won --}}
                                                </a>
                                            </p>
                                            {{-- deal status in Reopen stage show button lost the deal--}}
                                            <p <a wire:click="deallost({{$deals->leadid}})"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                                <img src="{{asset('icons/Lost.png')}}" alt="image"/ height="20px" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Lost">
                                               {{-- lost --}}
                                                </a>
                                            </p>
                                            @endif
                                            {{-- <a href="#" class="btn btn-outline-primary dealid-won"   data-lid="{{$deals->leadid}}"
                                            data-toggle="modal" data-target="#exampleModal">Won</a> --}}
                                            {{-- edit --}}
                                            <a  wire:click="editdeal({{$deals->leadid}})" data-bs-toggle="modal"
                                                data-bs-target="#dddd" 
                                                <p
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                {{-- <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i> --}}

                                                <img src="{{asset('icons/Edit.png')}}" alt="image"/ height="20px" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit">
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">
                                        <h2 style="text-align: center;"> You Don't Have Any Deals...!</h2>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        
                        @if($countofdeals>3)
                        <a href="{{route('admin.viewdeals')}}" style="text-align: right">{{$countofdeals-3}} More Deals
                            Available </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- model for edit deal --}}

    <div wire:ignore.self  class="modal fade" id="dddd" tabindex="-1" aria-hidden="true">
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
                            <form wire:submit.prevent="convert_to_deal"  method="post">
                                <div class="row">
                                    {{-- <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Deal
                                            fix Date *</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage" type="date"
                                            id="dealfixdata" wire:model="dealfixdata"  name="dealfixdata" >
                                    </div> --}}
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Customer
                                            *
                                        </label>
                                        <input type="name" class="form-control"  wire:model="customers"  id="customer" name="customer" value=""  aria-describedby="nameHelp">
                                        <input type="hidden" class="form-control" id="leadid" name="leadid" value="" placeholder="leadid">
                                        @error('customers')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Organization
                                            *
                                        </label>
                                        <input type="name" class="form-control" id="Orginazation" wire:model="Orginazations"  name="Orginazation" value="" aria-describedby="nameHelp">
                                        @error('Orginazations')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                   
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="email" class="form-label">Email *
                                        </label>
                                        <input type="email" class="form-control" id="email"  wire:model="emails"   name="email" value="" aria-describedby="nameHelp">
                                        @error('emails')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                        
                                   
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone *
                                            </label>
                                        <input type="phone number" class="form-control"  id="phone" wire:model="mobile" name="phone" value="" 
                                            aria-describedby="dateHelp">

                                            @error('mobile')
                                            <div  style="color:red" id="e_customer">
                                                {{$message}}
                                            </div> 
                                            @enderror
                                    </div>
                                    <div class="card mt-3 p-5">
                                        <h4>Deal Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Price
                                                    *
                                                </label>
                                                <input type="name" class="form-control"  name="currency" id="currency"  wire:model="leadprise"
                                                    aria-describedby="nameHelp">
                                                    @error('leadprise')
                                                    <div  style="color:red" id="e_customer">
                                                        {{$message}}
                                                    </div> 
                                                     @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="dateInput" class="form-label">Project Delivery Date
                                                    
                                                    *</label>
                                                <input class="form-control form-control-solid" type="date" placeholder="Pick date rage"  wire:model="expecteddates" 
                                                    />
                                                    @error('expecteddate')
                                                    <div  style="color:red" id="e_customer">
                                                        {{$message}}
                                                    </div> 
                                                     @enderror
    
                                            </div>
                                            
                                            <div class="col-md-12 mt-3 mb-3">
                                                <label for="name" class="form-label">Remarks *
                                                </label>
                                                <textarea class="form-control" wire:model="dealrequirments" placeholder="Leave a comment here"
                                                id="contents"></textarea>

                                                @error('dealrequirments')
                                                    <div  style="color:red" id="e_customer">
                                                        {{$message}}
                                                    </div> 
                                                     @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                       
                                        {{-- <input type="submit" name="" id=""> --}}
                                        <button type="submit" class="btn btn-primary mb-5" >Update
                                            Deal </button>
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
