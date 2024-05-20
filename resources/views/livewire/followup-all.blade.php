<div>
    {{-- Success is as dangerous as failure. --}}


    <div class="card-header border-0 pt-5">
        <div class="card-header position-relative p-0" style="width:-webkit-fill-available;">
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
                        <span class="card-label fw-bold fs-3 mb-1">Follow Ups</span>
                    </h3>
                </li>
            </ul>
            <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                <li class="nav-item p-0 ms-0 me-8" role="presentation">
                    <div class="card-toolbar" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_frie">
                        <a href="#" wire:click="allfollowup" class=" btn btn-sm btn-primary mx-2">Today</a>
                    </div>
                    <div style="align-self: center;">
                    <a href="#" wire:click="todayfollowup"
                        class="btn btn-sm btn-light btn-active-primary mx-3  btn-outline">All </a>
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
                        <!-- <th class="w-25px"></th> -->
                        <th class="min-w-150px">Customer Name</th>
                        <!--<th class="min-w-150px">Company Name</th>-->
                        <th class="min-w-150px">Mail / Phone</th>
                        <th class="min-w-150px">Notes</th>

                        @if(session()->get('role')==1)
                        <th class="min-w-150px">Whoes</th>
                        @endif

                        <th class="min-w-200px">Sheduled Date / Time</th>
                        {{-- <th class="min-w-150px">Status</th> --}}
                        <th class="min-w-150px">Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @if(count($followupdatas)>0)
                    @foreach ($followupdatas as $l=> $fups)
                    <tr>
                        <td class="align-content-center">
                            <a href="{{route('admin.viewleads', Crypt::encryptString($fups->leadid)) }}"
                                class="text-gray-900 fw-bold text-hover-primary d-block fs-6"><span
                                    style="text-transform:capitalize;font-weight:800;">{{$fups->customername}}</span>
                                <br>
                            </a>
                            <span style="text-transform:capitalize">{{$fups->companyname}} </span><br>
                            <span class="badge py-2 px-4 fs-8 badge-light-warning"
                                style="text-transform:capitalize">
                                {{$fups->project}}</span>
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block fs-6">
                            </a>
                        </td>
                       
                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6" style="font-weight:400 !important;">
                                        @if($fups->typeoffollowup=="Call")

                                         <a href="tel:{{$fups->phone}}">{{$fups->phone}}</a>
                                        
                                        @elseif($fups->typeoffollowup=="Email")

                                         <a href="mailto:{{$fups->email}}">{{$fups->email}} </a>
                                        
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="align-content-center">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize">
                                        {{$fups->followupnotes}}
                                        {{-- {{$fups->companyid}} --}}
                                    
                                    </p>
                                </div>
                            </div>
                        </td>

                        @if(session()->get('role')==1)
                        <td class="align-content-center">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize">
                                        {{$fups->teamnames}}
                                        {{-- {{$fups->companyid}} --}}
                                    
                                    </p>
                                </div>
                            </div>
                        </td>
                        @endif

                        <td class="align-content-center">
                            <div class="d-flex  flex-shrink-0">
                                <div class="d-flex flex-stack mb-2">
                                    <p class="text-gray-900 fw-norma  fs-6">
                                        {{ \Carbon\Carbon::parse($fups->nextfollowup)->format('d-M-Y') }},<br>
                                        {{ \Carbon\Carbon::parse($fups->nextfollowup)->format('g:i A') }}
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
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" wire:click="getfollowupdata({{$fups->fid}})"
                                        data-bs-target="#reshedule_follow_up" data-fid="{{$fups->fid}}">
                                        Reschedule </a>


                                        <a href="#" class="btn btn-primary mx-3" data-bs-toggle="modal" wire:click="getfollowupdata({{$fups->fid}})"
                                            data-bs-target="#closefollowups" data-fid="{{$fups->fid}}">
                                            X </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7">
                            <h2 style="text-align: center;"> No Follow-ups for Today ... !</h2>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
            {{$followupdatas->links()}}
        </div>
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
                                            <label for="dateInput" class="form-label">Next Follow-Up Date
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
                                            <label for="name" class="form-label">Select Follow-Up Type *
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
                                                @foreach ($getfollowuptype as $fitem)
                                                <option value="{{$fitem->ftype}}">{{$fitem->ftype}}</option>
                                                @endforeach
                                            </select>

                                            @error('followuptypes')
                                            <div style="color:red" id="u_shedulefollowup">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks *
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
                                            <button class="btn btn-primary mb-5" type="submit" >Re Sheduled Follow-Up </button>
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


    <div wire:ignore.self class="modal fade" id="closefollowups" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Close Follow-Up</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="closefollowup"  method="post">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="dateInput" class="form-label">Are You Sure You Want To Close The <span style="color:red" > {{$ftype}}</span> Follow-Up ..? 
                                                </label>
                                                <input type="hidden" class="form-control" wire:model="fid" id="fid" name="fid" value=""
                                                placeholder="Call Title">
                                           
                                        </div>
                                       
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks for closing *
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
                                            <button class="btn btn-primary mb-5" type="submit" >Close Follow-Up
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
</div>
