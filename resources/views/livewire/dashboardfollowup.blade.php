<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="table-responsive" style="width: -webkit-fill-available;overflow: hidden;">
        <div class="card py-3">
            <div class="card-header position-relative py-0" >
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                    <li class="nav-item p-0 ms-0 me-8" role="presentation">
                        <h3 class="card-title align-items-start flex-column" style="display: block;align-self: center;"> <button
                                type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> <i
                                    class="ki-duotone ki-category fs-1"> <span class="path1"></span> <span
                                        class="path2"></span> <span class="path3"></span> <span class="path4"></span>
                                </i> </button> <span class="card-label fw-bold text-gray-900 m-0">Follow-Ups</span>
                        </h3>
                    </li>
                </ul>
                <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                    <li class="nav-item p-0 ms-0 me-8" role="presentation">
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-trigger="hover" title="Click to Show All ">
                            <a href="{{route('admin.followups')}}" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" >
                                All </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                <div class="table-responsive px-10" style=" width: -webkit-fill-available;">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 p-3">
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th></th>
                                <th>Customer Name</th>
                                <th>Mail / Phone</th>
                                <th>Sheduled Date / Time </th>
                                <th>Remarks </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($followupdatas)>0)
                            @foreach ($followupdatas as $l=> $fdata)
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
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-flask fs-2x text-success"
                                                style="font-family: 'arial' !important;text-transform:capitalize">{{$fdata->first_letter}}</span></i>
                                        </span>
                                        @elseif($l%2==1)
                                        <span class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-flask fs-2x text-info"
                                                style="font-family: 'arial' !important;text-transform:capitalize">{{$fdata->first_letter}}</span></i>
                                        </span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('admin.viewleads', Crypt::encryptString( $fdata->leadid))}}"
                                        class="text-gray-900 fw-norma  d-block fs-6"
                                        style="text-transform: capitalize;font-weight:800 !important;"><span>{{$fdata->customername}}</span><br>
                                    </a>
                                    <span
                                        class="text-muted fw-semibold text-muted d-block fs-7">{{$fdata->companyname}}</span>
                                    <span class="badge py-2 px-4 fs-8 badge-light-warning"
                                        style="text-transform: capitalize;">{{$fdata->project}}</span>
                                    <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->
                                </td>
                                <td>
                                    <div class="d-flex  flex-shrink-0">
                                        <div class="d-flex flex-stack mb-2">
                                            <p class="text-gray-900 fw-norma  fs-6">
                                                @if($fdata->typeoffollowup=="Call")
                                                <a href="tel:{{$fdata->phone}}">{{$fdata->phone}}</a
                                                    @elseif($fdata->typeoffollowup=="Email")
                                                {{$fdata->email}}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex  flex-shrink-0">
                                        <div class="d-flex flex-stack mb-2">
                                            <p class="text-gray-900 fw-norma  fs-6">
                                                {{ \Carbon\Carbon::parse($fdata->nextfollowup)->format('g:i A') }}
                                                <br><span class="text-muted fw-semibold text-muted d-block fs-7">
                                                    {{ \Carbon\Carbon::parse($fdata->nextfollowup)->format('d-M-Y') }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex  flex-shrink-0">
                                        <div class="d-flex flex-stack mb-2">
                                            <button type="button" class="btn btn-secondary btn btn-outlineclass="card card-xl-stretch mb-3 mb-xl-10"" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="{{ $fdata->followupnotes=="" ? "N/A" : $fdata->followupnotes}}">
                                                Remarks...
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex  flex-shrink-0">
                                        <div class="d-flex flex-stack mb-2">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#reshedule_follow_up" data-fid="{{$fdata->fid}}"  wire:click="getfollowupdata({{$fdata->fid}})">
                                                Reschedule </a>

                                                <a href="#" class="btn btn-primary mx-3" data-bs-toggle="modal"
                                                data-bs-target="#closefollowups" data-fid="{{$fdata->fid}}"  wire:click="getfollowupdata({{$fdata->fid}})">
                                                X </a>
                                         
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">
                                    <h2 style="text-align: center;">No Follow-ups for Today ... !</h2>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

 
    <div wire:ignore.self class="modal fade" id="reshedule_follow_up" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Re Sheduled Follow-Ups</span>
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
                                            <label for="name" class="form-label">Select Follow-Up Type*
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
                                            <label for="name" class="form-label mt-3">Remarks*
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
                                            <button class="btn btn-primary mb-5" type="submit" >Add Follow
                                                Up </button>
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
                            <span class="card-label fw-bold fs-3 mb-1">Close Followup</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <form wire:submit.prevent="closefollowup"  method="post">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="dateInput" class="form-label">Are You Sure You Want To Close The <span style="color:red" > {{$ftype}}</span> Follow up ..? 
                                                </label>
                                                <input type="hidden" class="form-control" wire:model="fid" id="fid" name="fid" value=""
                                                placeholder="Call Title">
                                           
                                        </div>
                                       
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks For Closing*
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
                                            <button class="btn btn-primary mb-5" type="submit" >Close Follow up
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
