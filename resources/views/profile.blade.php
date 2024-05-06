@extends('layouts.master')
@section('pagename')
@endsection
@section('maincontent')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('https://preview.keenthemes.com//metronic8/demo1/assets/media/svg/avatars/blank.svg')">
                            <!--begin::Preview existing avatar-->
                            {{-- <div class="image-input-wrapper w-125px h-125px" style="background-image: url(https://preview.keenthemes.com//metronic8/demo1/assets/media/avatars/300-1.jpg)"></div> --}}
                            
                            @if($getempdetails[0]->imagepath==null)
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(https://preview.keenthemes.com//metronic8/demo1/assets/media/avatars/300-1.jpg)"></div>    
                            @else
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset($getempdetails[0]->imagepath)}})"></div>
                            @endif
                            
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            {{-- <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                                <!--end::Inputs-->
                            </label> --}}
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            {{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                            </span> --}}
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            {{-- <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                            </span> --}}
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Hint-->
                        <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                </div>
                <!--end::Pic-->
    
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900  fs-2 fw-bold me-1">{{$getempdetails[0]->fullname}}</a>
                                <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i></a>
                            </div>

                            
                            <!--end::Name-->
    
                            <!--begin::Info-->                        
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#" class="d-flex align-items-center text-gray-500  me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>{{$getempdetails[0]->designation}}          
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-500  me-5 mb-2">
                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>{{$getempdetails[0]->role==1 ? "Admin" : "Staff"}}          
                                </a>
                                <a href="#" class="d-flex align-items-center text-gray-500  mb-2">
                                    <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span class="path2"></span></i>{{$getempdetails[0]->email}}                              
                                </a>
                            </div>

                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#" class="btn btn-primary d-flex align-items-center text-gray-500  me-5 mb-2 edit_emp_profile" data-pid="{{$getempdetails[0]->uid}}"  data-bs-toggle="modal"
                                data-bs-target="#editprofile"  >
                                  Edit
                                </a>
                              
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
    
                    </div>
                    <!--end::Title-->
    
               
                </div>

             
                <!--end::Info-->
            </div>
            <!--end::Details-->   
    

        </div>
    </div>
    
</div>



<div class="modal fade" id="editprofile" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Profile Status</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            <div class="row">
                            {{-- <form id="profileid" enctype="multipart/form-data" action="{{ route('admin.updatemyprofiledetails') }}" method="POST"> --}}
                                <form id="profileidssss" enctype="multipart/form-data" >
                                    {{-- <form id="profileid"  method="POST" enctype="multipart/form-data">    --}}
                                    @csrf
                                    <div class="col-md-12 mt-3">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('https://preview.keenthemes.com//metronic8/demo1/assets/media/svg/avatars/blank.svg')">
                                            <!--begin::Preview existing avatar-->
                                          
                                            <div id="imageDiv" class="image-input-wrapper w-125px h-125px" style="background-image: url(https://preview.keenthemes.com//metronic8/demo1/assets/media/avatars/300-1.jpg)"></div>
                                            <!--end::Preview existing avatar-->
                
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" id="avatar" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                            </span>
                                            <!--end::Cancel-->
                
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>                            </span>
                                            <!--end::Remove-->
                                        </div>

                                        {{-- <img src=""  class="img-fluid" alt="Responsive image"> --}}
                                        <!--end::Image input-->
                
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Employee Name *
                                        </label>
                                        <input type="text" class="form-control" id="empname" name="empname" value="" placeholder="Employee Name">
                                        <input type="hidden" class="form-control" id="empid" name="empid" value="" placeholder="empid">
                                        <input type="hidden" class="form-control" id="imgpaths" name="imgpaths" value="" placeholder="empid">
                                        <div  style="color:red" id="u_empname">
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Employee Email *
                                        </label>
                                       
    
                                        <input type="text" class="form-control" id="empemail"  name="empemail" value="" placeholder="Employee Email">
                                        <div  style="color:red" id="u_empemail">
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone *</label>
                                        <input type="text" class="form-control" id="phoneno"  name="phoneno" value="" placeholder="Mobile Number">
                                        <div  style="color:red" id="u_phone">
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6  mt-3">
                                        <label for="email" class="form-label">Password
                                        </label>
                                        <input type="text" class="form-control" id="emppassword"  name="emppassword" value="" placeholder="Email Password">
    
                                        <div  style="color:red" id="u_emppassword">
                                            
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12 mt-5">
                                        <label for="name" class="form-label">Designation
                                        </label>
                                        <input type="text" name="Designation" id="Designation" value="" placeholder="Employee Designation" class="form-control currency">
                                        <div  style="color:red" id="u_Designation">
                         
                                        </div>   
    
                                    </div>
                                    {{-- <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Assigned Team
                                        </label>
                                        <select class="form-select" aria-label="Default select example"  id="assignedteam"">
                                            @foreach ($getempdetails as $emp)
                                            <option value="{{$emp->uid}}">{{$emp->fullname}}</option>
                                            @endforeach
                                        </select>
                                        <div class="-feedback" id="uu_assignedteam" style="color:red">
                            
                                        </div>
                                    </div> --}}
                                    
    
                                    
                                  
                                    <div class="col-md-12 text-end mt-4">
                                        <button class="btn btn-primary mb-5"  type="submit">Save Changes</button>
                                        {{-- <button type="submit">Upload Image</button> --}}
                                        {{-- <button class="btn btn-primary mb-5" type="submit" id="fsdfsdf">Create Lead</button> --}}
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






<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
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
                                    <input type="text" class="form-control" id="customers" placeholder="Customer Name" value="">
                                    <div  style="color:red" id="#e_customer">
                                    
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name 
                                    </label>
                                   

                                    <input type="text" class="form-control"  id="Orginazations"  placeholder="Company Name" value="">
                                    <div style="color:red" id="e_Orginazation">
                                     
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Service Required *
                                    </label>
                                    
                                    <select class="form-control" id="Titless">
                                        <option value="">Select Service</option>
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
                                        <option value="" selected>Select Lead Source</option>
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
                                    <select class="form-control" id="Priotitys">
                                        {{-- <option value="Cold" selected>Cold</option> --}}
                                        <option value="">Lead Type</option>
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


                                        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option>
                                        @endforeach
                                    </select>
                                    <div  style="color:red" id="e_lead_date">
                          
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town 
                                    </label>
                                    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
                                    <div  style="color:red" id="e_cityssss">
                          
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks *
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="Description" style="height: 150px;"></textarea>
                                    </div>
                                    <div  style="color:red" id="e_Description22sssss2">
                          
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createleads1">Create Leads</button>
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
