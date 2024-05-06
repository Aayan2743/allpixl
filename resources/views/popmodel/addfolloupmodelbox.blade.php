
<div class="modal fade" id="reshedule_follow_up" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Add Follow-Up</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                        <div class="table-responsive" style="width: -webkit-fill-available;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Follow up Date
                                            *</label>
                                            <input type="datetime-local"  class="form-control" id="nextfollowup" name="nextfollowup">
                                            <div  style="color:red" id="u_nextfollowup">
                                            </div>
                                        {{-- <input class="form-control form-control-solid"
                                            placeholder="Pick date rage"
                                            id="kt_daterangepicker_5" /> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Select Lead
                                        </label>
                                        <select class="form-select"
                                            aria-label="Default select example">
                                            <!-- <option selected="selected"></option> -->
                                            @foreach ($getleads as $leads)
                                            <option value="{{$leads->leadid}}">{{$leads->customer}}</option>
                                            @endforeach
                                            {{-- <option value="2">Sai kiran</option> --}}
                                        </select>
                                        <input type="hidden" class="form-control" id="leadidno" name="leadidno" value="{{$leadid}}" placeholder="Call Title">
                                        <input type="hidden" class="form-control" id="customername" name="customername" value="{{$getleads[0]->customer}}" placeholder="Call Title">
                                        <input type="hidden" class="form-control" id="orginazation" name="orginazation" value="{{$getleads[0]->ogrinazation}}" placeholder="Call Title">
                                        <input type="hidden" class="form-control" id="phones" name="phones" value="{{$getleads[0]->phone}}" placeholder="Call Title">
                                        <input type="hidden" class="form-control" id="emailss" name="emailss" value="{{$getleads[0]->email}}" placeholder="Call Title">
                                        <input type="hidden" class="form-control" id="project" name="project" value="{{$getleads[0]->title}}" placeholder="Call Title">
                                        <input type="hidden" class="form-control" id="teamid" name="project" value="{{$getleads[0]->leadownerid }}" placeholder="Call ownerid">
                                        <input type="hidden" class="form-control" id="teamname" name="project" value="{{$getleads[0]->owner }}" placeholder="Call ownerid">
                                        <div  style="color:red" id="u_follouptype">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Type
                                        </label>
                                        <select class="form-select"
                                            aria-label="Default select example" id="follouptype">
                                            <!-- <option selected="selected"></option> -->
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
                                                id="followupnotes"
                                                name="followupnotes"
                                                style="height: 150px;"></textarea>
                                        </div>
                                        <div  style="color:red" id="u_followupnotes">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button class="btn btn-primary mb-5" data-route="{{route('admin.addfollowupnotes',$getleads[0]->leadid)}}" id="addfollowupsnotes"  id="addfolloup">Add Follow
                                            Up </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xxl-6"></div>
                    <div class="col-xxl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_invite_friendsssssssss" tabindex="-1" aria-hidden="true">
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
                <div class="row gy-5 g-xl-10">
                    <div class="col-xxl-6"></div>
                    <div class="col-xxl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
