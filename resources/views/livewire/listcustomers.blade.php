<div>
    {{-- Stop trying to control. --}}
    <div class="card-header border-0 pt-5">
        <div class="card-header position-relative py-0" style="width:-webkit-fill-available;">
            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                <li class="nav-item p-0 ms-0 me-8" role="presentation" style="align-items: center;">
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
                        <span class="card-label fw-bold fs-3 mb-1">Customer List {{$expDates}}</span>
                    </h3>
                </li>
            </ul>
            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                <li class="nav-item p-0 ms-0 me-8" role="presentation">
                    <div class="card-toolbar" data-bs-toggle="modal" data-bs-target="#addNewCustomer">
                        <a href="#"  class=" btn btn-sm btn-primary mx-2" wire:click="resetall"> 
                            Add New Customer</a>
                    </div>
                    <div style="align-self: center;">
                        <a href="#"  class=" btn btn-sm btn-primary mx-2" wire:click="$toggle('isOpen')"> 
                          
                        <i class="fa fa-filter" aria-hidden="true"> </i>Toggle By Status
                    </a>
                    </div>
                    {{-- <input wire:ignore.self type="date" wire:model="dates" wire:change="updateDates"  id="datesInput"> --}}
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body px-10">
        <div class="table-responsive">
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tablefollowup">
                <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-100px"><b>Customer Name<b></th>
                        <th class="min-w-100px"><b>Mail<b></th>
                        <th class="min-w-100px"><b>Phone<b></th>
                        <th class="min-w-100px"><b>Status<b></th>
                        <th class="min-w-100px"><b>Joining Date<b></th>
                        <th class="min-w-100px"><b>Expires Date<b></th>
                        <th class="min-w-100px"><b>Actions <b></th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach ($all as $item)
                    <tr>
                        <td class="align-content-center">
                            <a href="#"
                                class="text-gray-900 fw-bold text-hover-primary d-block fs-6"><span
                                    style="text-transform:capitalize;font-weight:800;"></span>
                                <br>
                            </a>
                            <span style="text-transform:capitalize"> {{$item->companyname}}</span><br>
                            <span class="badge py-2 px-4 fs-8 badge-light-warning"
                                style="text-transform:capitalize"> {{$item->companyid}}
                               </span>
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block fs-6">
                            </a>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6" style="font-weight:400 !important;">
                                        {{$item->email}}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize">
                                        {{$item->mobile}}
                                        {{-- {{$item->expstatus}} --}}
                                        {{-- {{$fups->companyid}} --}}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6">
                                       

                                            @php
                                                $currentdate=now();
                                                
                                                 $flag;
                                                if($currentdate->gt($item->regendingdate)){
                                                    // 01-05-2024 > 08-05-2024
                                                    $flag="Expired";
                                                }else{
                                                    $flag="Active";
                                                }   

                                            @endphp

                                            {{$flag}}
                                            <br>
                                             Current Plan :   
                                            @if($item->plantype==1)
                                            Free Trial
                                            @elseif($item->plantype==2)
                                             Monthly       

                                            @elseif($item->plantype==3)
                                            Mid-Year
                                            @elseif($item->plantype==4)
                                            Yearly
                                            @endif
                                        
                                    </p>
                                </div>
                            </div>
                        </td>
                        {{-- <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    @if($fups->followupstatus==0)
                                    <span class="text-gray-900 fw-norma  fs-6"> Working </span>
                                    @elseif($fups->followupstatus==1)
                                    <span class="text-gray-900 fw-norma  fs-6"> Re-Sheduled </span>
                                    @elseif($fups->followupstatus==2)
                                    <span class="text-gray-900 fw-norma  fs-6"> Close </span>
                                    @endif
                                </div>
                            </div>
                        </td> --}}
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <span style="text-transform:capitalize"> 
                                        {{-- $_stockupdate= Carbon::parse($request->stockupdate)->format('Y-m-d');  --}}
                                        {{ \Carbon\Carbon::parse( $item->reregistrationdate)->format('Y-m-d') }} <br>
                                        {{ \Carbon\Carbon::parse( $item->reregistrationdate)->format('g:i A') }}
                                        
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <span style="text-transform:capitalize"> 
                                        {{ \Carbon\Carbon::parse( $item->regendingdate)->format('Y-m-d') }} <br>
                                        {{ \Carbon\Carbon::parse( $item->regendingdate)->format('g:i A') }} <br>
                                        {{-- Carbon::parse($p->created_at)->diffForHumans(); --}}
                                        {{ \Carbon\Carbon::parse( $item->regendingdate)->diffForHumans() }}
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#Extendplan" wire:click="like({{$item->uid}})"  >
                                        Renewal </a>
                                        <a href="#" class="btn btn-primary mx-3" wire:click="like({{$item->uid}})" data-bs-toggle="modal" "
                                            data-bs-target="#DeleteUser">
                                            X </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$all->links()}}
    </div>
    {{-- followup --}}
    <div wire:ignore.self class="modal fade" id="reshedule_follow_up" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Re Sheduled Follow-Up</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="reshedulefollowups"  method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Next Folloup up Date
                                                *</label>
                                            <input type="datetime-local" class="form-control" wire:model="shedulefollowup" id="shedulefollowup"
                                                name="shedulefollowup">
                                                @error('shedulefollowup')
                                                <div style="color:red" id="u_shedulefollowup">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Select Folloup Type
                                            </label>
                                            <input type="hidden" class="form-control" wire:model="leadidno" id="leadidno" name="leadidno" value=""
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="fid" id="fid" name="fid" value=""
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="customernames" id="customernames" name="customername"
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="orginazations"  id="orginazations" name="orginazation"
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="phones" id="phones" name="phones"
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="emailss" id="emailss" name="emailss"
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="project" id="project" name="project"
                                                placeholder="Call Title">
                                            <input type="hidden" class="form-control" wire:model="teamid" id="teamid" name="project"
                                                placeholder="Call ownerid">
                                            <input type="hidden" class="form-control" wire:model="teamname" id="teamname" name="project"
                                                placeholder="Call ownerid">
                                            <div style="color:red" id="u_follouptype">
                                            </div>
                                            <select class="form-select" wire:model="followuptypes" aria-label="Default select example"
                                                id="followuptypes">
                                                <option value="">Select Follow-Up Type</option>
                                            </select>
                                            @error('followuptypes')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks
                                            </label>
                                            <div class="form-floating">
                                                <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                                    id="reshedulefollowupnotes" name="followupnotes" wire:model="followupnotes"
                                                    style="height: 150px;"></textarea>
                                            </div>
                                            @error('followupnotes')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button class="btn btn-primary mb-5" type="submit" >Add New Customer
                                             </button>
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
    <div wire:ignore.self class="modal fade" id="addNewCustomer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Add New Customer</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="addnewcustomer"  method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Company Name
                                                *</label>
                                            <input type="text" class="form-control" wire:model="cname" id="shedulefollowup"
                                                name="cname">
                                                @error('cname')
                                                <div style="color:red" id="u_shedulefollowup">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">User Full Name *
                                            </label>
                                            <input type="text" class="form-control" wire:model="username" id="shedulefollowup"
                                            name="username">
                                            @error('username')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Mobile No *
                                            </label>
                                            <input type="text" class="form-control" wire:model="cmobile" id="shedulefollowup"
                                            name="cmobile">
                                            @error('cmobile')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Email Id *
                                            </label>
                                            <input type="text" class="form-control" wire:model="cemail" id="shedulefollowup"
                                            name="cemail">
                                            @error('cemail')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Select Plan *
                                            </label>
                                            <select name="cplan" wire:model="cplan" wire:change="selectplan($event.target.value)"   class="form-control">
                                                <option value=""> Select Plan </option>
                                                @foreach ($plans as $item)
                                                <option value="{{$item->planid}}"> {{$item->name}} </option>
                                                @endforeach
                                            </select> 
                                            <p> amount : {{$planamount}} </p>
                                            <p>Days : {{$plandays}} </p>
                                            @error('cplan')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Password *
                                            </label>
                                            <input type="password" class="form-control" wire:model="cpassword" id="shedulefollowup"
                                            name="cpassword">
                                            @error('cemail')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button class="btn btn-primary mb-5" type="submit" >Add New Customer
                                            </button>
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
    <div wire:ignore.self class="modal fade" id="Extendplan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Extend Customer Plan</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="extendplans"  method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span> Your Companyid Details :{{$current_companyid}} </span> <br>
                                            <span> Your Current Plan Details :{{$current_planname}} </span> <br>
                                            <span> Your Current Plan amount :{{$current_amount}} </span> <br>
                                            <span> Your Current Plan Expire Date :{{$current_expiredate}}  </span> <br>
                                            {{-- <span> Your UID :{{$current_uid}}  </span> <br> --}}

                                         </div>
                                        <div class="col-md-12 mt-3">
                                                <select name="cplan" wire:model="cplan" wire:change="selectplan($event.target.value)"   class="form-control">
                                                    <option value=""> Select Plan </option>
                                                    @foreach ($plans as $item)
                                                    <option value="{{$item->planid}}"> {{$item->name}} </option>
                                                    @endforeach
                                                </select> 
                                                <p> Amount : {{$planamount}} </p>
                                                <p>Days : {{$plandays}} </p>
                                                @error('cplan')
                                                <div style="color:red" id="u_shedulefollowup">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <label for="name" class="form-label">User Name *
                                            </label>
                                            <input type="text" class="form-control" wire:model="username" id="shedulefollowup"
                                            name="username">
                                            @error('username')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Mobile No *
                                            </label>
                                            <input type="text" class="form-control" wire:model="cmobile" id="shedulefollowup"
                                            name="cmobile">
                                            @error('cmobile')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Email Id *
                                            </label>
                                            <input type="text" class="form-control" wire:model="cemail" id="shedulefollowup"
                                            name="cemail">
                                            @error('cemail')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Select Plan *
                                            </label>
                                            <select name="cplan" wire:model="cplan" wire:change="selectplan($event.target.value)"   class="form-control">
                                                <option value=""> Select Plan </option>
                                                @foreach ($plans as $item)
                                                <option value="{{$item->planid}}"> {{$item->name}} </option>
                                                @endforeach
                                            </select> 
                                            <p> amount : {{$planamount}} </p>
                                            <p>Days : {{$plandays}} </p>
                                            @error('cplan')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Password *
                                            </label>
                                            <input type="password" class="form-control" wire:model="cpassword" id="shedulefollowup"
                                            name="cpassword">
                                            @error('cemail')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                       --}}
                                        <div class="col-md-12 text-end ">
                                            <button class="btn btn-primary mb-5" type="submit" >Renewal
                                                </button>
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


    <div wire:ignore.self class="modal fade" id="DeleteUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Delete Customer</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                           Are You Sure You Want To Delete The Customer...? <b>{{$current_companyid}} </b>
                                            {{-- <span> Your UID :{{$current_uid}}  </span> <br> --}}

                                         </div>
                                     
                                        
                                        <div class="col-md-12 text-end mt-3">
                                            <button class="btn btn-primary mb-5" type="button" wire:click="deleteCustomer({{$current_uid}})">Delete Customer
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
    </div>
</div>
