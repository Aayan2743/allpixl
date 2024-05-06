@extends('layouts.master')
@section('pagename')
@endsection
@section('maincontent')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Follow Ups/span>
            </h3>
            {{-- <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                title="Click to add a user">
                <a href="#" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                    data-bs-target="#kt_modal_invite_friends">
                    <i class="ki-duotone ki-plus fs-2"></i>Add Follow Up</a>
            </div> --}}
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="w-25px">
                            </th>
                            <th class="min-w-150px">Customer Name</th>
                            <th class="min-w-150px">Company Name</th>
                            <th class="min-w-150px">Mail / Phone</th>
                            <th class="min-w-200px">Notes</th>
                            <th class="min-w-200px">Sheduled Date / Time</th>
                            <th class="min-w-200px">Status</th>
                            <th class="min-w-150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($followupdatas as $l=> $fups)
                            
                      
                        <tr>
                            <td class="align-content-center"> 
                                <div class="d-flex align-items-center pe-5" style="justify-content: space-between; ">
                                    <div class="d-flex justify-content-start flex-column px-5">
                                        <span style="background-color: red;height: 70px;width: 8px;"></span>
                                    </div>
                                    <div class="symbol symbol-40px">
                                            @if($l%2==0)
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-flask fs-2x text-success" style="text-transform:capitalize">{{$fups->firstletter}}</span></i>
                                            </span>
    
                                            @elseif($l%2==1)
                                            <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-flask fs-2x text-info" style="text-transform:capitalize">{{$fups->firstletter}}</span></i>
                                            </span>


                                            @endif
                                      
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center">
                                <a href="#"
                                    class="text-gray-900 fw-bold text-hover-primary d-block fs-6"><span style="text-transform:capitalize">{{$fups->customername}}</span><br>
                                    <span style="text-transform:capitalize">{{$fups->companyname}} </span><br>
                                    <span class="badge py-2 px-4 fs-8 badge-light-warning" style="text-transform:capitalize">
                                        {{$fups->project}}</span>
                                </a>
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block fs-6">
                                </a>
                            </td>
                            <td class="align-content-center">
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6" style="text-transform:capitalize">{{$fups->companyname}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center">
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                            @if($fups->typeoffollowup=="Call")
                                            {{$fups->phone}}
                                            @elseif($fups->typeoffollowup=="Email")
                                                            {{$fups->email}}
                                                 @endif
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6" style="text-transform: capitalize">{{$fups->followupnotes}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center">
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                            {{ \Carbon\Carbon::parse($fups->nextfollowup)->format('d-M-Y') }},
                                            {{ \Carbon\Carbon::parse($fups->nextfollowup)->format('g:i A') }}
                                           </a>
                                    </div>
                                </div>
                            </td>

                            <td class="align-content-center">
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        {{-- <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">
                                          
                                           </a> --}}
                                           

                                    @if($fups->followupstatus==0)
                                    <span class="text-gray-900 fw-bold text-hover-primary fs-6">  Working </span>
                                  
                                    @elseif($fups->followupstatus==1)
                                    <span class="text-gray-900 fw-bold text-hover-primary fs-6">  Re-Sheduled  </span>
                                     
                                    @elseif($fups->followupstatus==2)
                                    <span class="text-gray-900 fw-bold text-hover-primary fs-6">  Close </span>
                                     
                                    @endif 
                                    </div>
                                </div>
                            </td>


                           
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        <a href="#" class="btn btn-primary reshedulefollowup"
                                        data-bs-toggle="modal"
                                        data-bs-target="#reshedule_follow_up" data-fid="{{$fups->fid}}">
                                        Reschedule </a>
                                      
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






<div class="modal fade" id="kt_modal_invite_friendss" tabindex="-1" aria-hidden="true">
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
                                        id="leadcrerated"  type="datetime-local" value="<?php echo now() ?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="text" class="form-control" id="customers" placeholder="Customer Name">
                                    <div  style="color:red" id="e_customer">
                                    
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name *
                                    </label>
                                   

                                    <input type="text" class="form-control"  id="Orginazations"  placeholder="Company Name" value="">
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
                                  <div  style="color:red" id="e_Title">
                                    
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Source *
                                    </label>
                                    <select class="form-control" id="leadsource">
                                      
                                        @foreach ($getleadsource as $source)
                                        <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>
                                        @endforeach
                                       
                                        
                                      </select>
                                  <div  style="color:red" id="e_leadsourcesss">
                                    
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
                                    <div  style="color:red" id="e_mobile">
                                      
                                    </div>  
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="text" class="form-control" id="emails" placeholder="Email id">
                                    <div  style="color:red" id="e_email">
                                     
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-control" id="Priotity">
                                        <option value="Code" selected>Code</option>
                                        @foreach ($getalllabel as $label)
                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                        @endforeach
                                       
                                        
                                      </select>
                                  <div  style="color:red" id="e_Priotity">
                                    
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
                                    <select class="form-select" aria-label="Default select example"  id="owner">
                                        @foreach ($getempdetails as $emp)


                                        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}} </option>
                                        @endforeach
                                    </select>
                                    <div  style="color:red" id="e_lead_date">
                          
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town
                                    </label>
                                    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
                                    <div  style="color:red" id="e_city">
                          
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
                                    <div  style="color:red" id="e_Description">
                          
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createleads">Create Leads</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="reshedule_follow_up" tabindex="-1" aria-hidden="true">

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
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Next Folloup up Date
                                            *</label>

                                           

                                            <input type="datetime-local"  class="form-control" id="shedulefollowup" name="shedulefollowup">
                                            <div  style="color:red" id="u_shedulefollowup">
                                            </div>
                                        {{-- <input class="form-control form-control-solid"
                                            placeholder="Pick date rage"
                                            id="kt_daterangepicker_5" /> --}}
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Select Folloup Type
                                            </label>
                                          


                                            <input type="hidden" class="form-control" id="leadidno" name="leadidno" value="" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="fid" name="fid" value="" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="customernames" name="customername"  placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="orginazations" name="orginazation"  placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="phones" name="phones"  placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="emailss" name="emailss" placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="project" name="project"  placeholder="Call Title">
                                            <input type="hidden" class="form-control" id="teamid" name="project"  placeholder="Call ownerid">
                                            <input type="hidden" class="form-control" id="teamname" name="project"  placeholder="Call ownerid">
                                            <div  style="color:red" id="u_follouptype">
                                            </div>  

                                            <select class="form-select"
                                                aria-label="Default select example" id="followuptypes">
                                           
                                                @foreach ($getfollowuptype as $fitem)
                                                <option value="{{$fitem->ftype}}">{{$fitem->ftype}}</option>
                                                @endforeach
                                           
                                             
                                            </select>
                                        </div>

                                        
                                        <div class="col-md-12 mt=3 mb-4">
                                            <label for="name" class="form-label mt-3">Remarks
                                            </label>
                                            <div class="form-floating">
                                                <textarea class="form-control mb-5"
                                                    placeholder="Leave a comment here"
                                                    id="reshedulefollowupnotes"
                                                    name="followupnotes"
                                                    style="height: 150px;"></textarea>
                                            </div>
                                        
                                         
                                            <div  style="color:red" id="u_reshedulefollowupnotes">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button class="btn btn-primary mb-5" id="shedulefollups">Add Follow
                                                Up </button>
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
@endsection
