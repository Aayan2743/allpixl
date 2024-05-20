<div>
    <div class="card-header position-relative py-0" style="width:-webkit-fill-available;">
        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
            <li class="nav-item p-0" role="presentation" style="align-items: center;">
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
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
            </li>
        </ul>
        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3 max_length" role="tablist">
            <li class="nav-item p-0 ms-0 me-8" role="presentation">
                <a class="btn btn-sm btn-primary m-5 btn-outline"  wire:click="toggleSort('value')" style="width:120px;text-wrap: nowrap;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                        <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                      </svg>
                    By Value
                </a>  
                <a class="btn btn-sm btn-primary m-5 btn-outline"  wire:click="toggleSort('title')" style="width:120px;text-wrap: nowrap;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                        <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                      </svg>
                    By Service
                </a>  
                <a class="btn btn-sm btn-primary m-5 btn-outline"  wire:click="toggleSort('expacteddate')" style="width:200px;text-wrap: nowrap;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                        <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
                      </svg>
                    By Project Delivery Date
                </a>  
                {{-- <button wire:click="toggleSort('value')">Sort by Value</button> --}}
                {{-- <button wire:click="toggleSort('title')">Sort by Title</button> --}}
                {{-- <button wire:click="toggleSort('expacteddate')">Sort by Closing</button> --}}
                    <select wire:change="sortbydealstage($event.target.value)" name="s" class="form-select w-100 m-4">
                        <option value="All">All</option>
                        <option value="0">InProgress</option>
                        <option value="1">Successfully Closed</option>
                        <option value="2">Lost</option>
                        <option value="3">Reopen</option>
                    </select> 
            </li>
        </ul>
    </div>
    <div class="card-body py-3">
        <div class="table-responsive" style="overflow: auto;">
            <table
                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tabledeals"  >
                <thead>
                    <tr class="fw-bold text-muted">
                        <th>Customer Name</th>
                        <th>Contact Number</th>
                        <th>Deal Source</th>
                        <th>Deal Owner</th>
                        <th>Deal Closing Date</th>
                        <th>Price</th>
                        <th>Work Status </th>

                        @if(session()->get('role')==1)
                        <th style="text-align: center;">Action
                        </th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($getalldeals)>0)
                    @foreach ($getalldeals as $deals)
                    <tr>
                       
                        <td class="align-content-center"> 
                            <a href="{{route('admin.viewdealsdata', Crypt::encryptString($deals->leadid))}}"
                                class="text-gray-900 fw-norma  d-block fs-6"><span style="text-transform:capitalize;font-weight:800 !important;">{{$deals->customer}}</span><br>
                            </a>
                            <span style="font-weight: 400;text-transform:capitalize">{{$deals->ogrinazation}}</span><br>
                            <span
                                class="badge py-2 px-4 fs-8 badge-light-warning" style="text-transform:capitalize">{{$deals->title}}</span>
                            <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->
                        </td>
                        <td class="align-content-center"> 
                            <div
                                class="d-flex flex-column w-100 me-2">
                                <div class="d-flex flex-stack mb-2">
                                    <p
                                        class="text-gray-900 fw-norma  fs-6" style="font-weight:800 !important;">
                                        <a href="tel:{{$deals->phone}}">{{$deals->phone}}</a></p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center"> 
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p
                                        class="text-gray-900 fw-norma  fs-6">
                                        {{$deals->leadsource}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center"> 
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p
                                        class="text-gray-900 fw-norma  d-block fs-6">
                                        <span>{{$deals->owner}}</span><br>
                                        <span
                                            class="badge fs-8 badge-light-primary">
                                            {{ \Carbon\Carbon::parse($deals->dealfixdate)->diffForHumans()}}</span><br>
                                            <span
                                            class="badge fs-8 badge-light-primary">
                                            {{ \Carbon\Carbon::parse($deals->dealfixdate)->format('d-M-Y')}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center"> 
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p
                                        class="text-gray-900 fw-norma  d-block fs-6">
                                        <span>{{$deals->expacteddate}}</span><br>
                                        <span
                                            class="badge fs-8 badge-light-warning">
                                            {{ \Carbon\Carbon::parse($deals->expacteddate)->diffForHumans()}}</span><br>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center"> 
                            <div
                                class="d-flex flex-column w-100 me-2">
                                <div class="d-flex flex-stack mb-2">
                                    <p
                                        class="text-gray-900 fw-norma  fs-6">
                                        {{$deals->value}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center"> 
                            <div class="d-flex  flex-shrink-0">
                                <p
                                    class="text-gray-900 fw-norma  fs-6">
                                    <span
                                        class="badge py-3 px-4 fs-8 badge-light-primary">
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

                        @if(session()->get('role')==1)
                        <td class="align-content-center"> 
                            <div class="d-flex  flex-shrink-0">
                                @if($deals->dealstatus==0)
                                {{-- deal status in progress show button close the deal--}}
                                <p wire:click="closedeal({{$deals->leadid}})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <img src="{{asset('icons/x.png')}}" alt="image"/ height="20px">
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
                                        <img src="{{asset('icons/Convert.png')}}" alt="image"/ height="20px" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Convert">
                                    {{-- ropen --}}
                                    </a>
                                </p>
                                @elseif($deals->dealstatus==2)
                                {{-- deal status in Lost stage show button reopen the deal--}}
                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <a wire:click="reopen({{$deals->leadid}})" >
                                            <img src="{{asset('icons/Convert.png')}}" alt="image"/ height="20px" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Convert">
                                        {{-- ropen --}}
                                        </a>
                                    </a>
                                </p>
                                @elseif($deals->dealstatus==3)
                                {{-- deal status in Reopen stage show button won the deal--}}
                                <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" >
                                    <a  wire:click="closedeal({{$deals->leadid}})"  >
                                        <img src="{{asset('icons/Won.png')}}" alt="image" / height="20px" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Won">
                                        {{-- won --}}
                                    </a>
                                </p>
                                {{-- deal status in Reopen stage show button lost the deal--}}
                                <p <a wire:click="deallost({{$deals->leadid}})"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                    <img src="{{asset('icons/Lost.png')}}" alt="image"/ height="20px" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Lost" > 
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
                            {{--  --}}
                        </td>

                        @endif
                       


                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7"><h3 style="text-align: center;">No Records Found </h3></td>
                    </tr>
                    @endif
                </tbody>
            </table>
            {{$getalldeals->links()}}
        </div>
    </div>
    <div wire:ignore.self  class="modal fade" id="dddd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2 mt-5">
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="card-label fw-bold fs-3 mb-1 ">Convert To 
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
                                        <label for="name" class="form-label">Orginazation
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
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="email" class="form-control" id="email"  wire:model="emails"   name="email" value="" aria-describedby="nameHelp">
                                        @error('emails')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone
                                            *</label>
                                        <input type="phone number" class="form-control"  id="phone" wire:model="mobile" name="phone" value="" 
                                            aria-describedby="dateHelp">
                                            @error('mobile')
                                            <div  style="color:red" id="e_customer">
                                                {{$message}}
                                            </div> 
                                            @enderror
                                    </div>
                                    <div class="card mt-3 p-5">
                                        <h4>Requirements</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Currency
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
                                                <label for="dateInput" class="form-label">Delivery Date
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
                                                <label for="name" class="form-label">Content
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