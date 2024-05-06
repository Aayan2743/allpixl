@extends('layouts.master')
@section('pagename')
@endsection
@section('maincontent')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 ">
            <h3 class="card-title align-items-start flex-column">
            <div class="card-header position-relative py-0" style="width:-webkit-fill-available;">
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation" style="align-items: center;display: flow;">
                            <div class="d-flex">
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold fs-3 mb-1">Leads</span>
                                </h3>
                            </div>
                            <div>
                                <span class="text-muted mt-1 fw-semibold fs-7">Week Expect Revenue Rs:
                                    0</span>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation"> 
                            <div class="card-toolbar" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <a href="https://sales.pixl.in/dashboard/followups" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" >
                                    Add Leads</a>
                            </div>
                            <a href="https://sales.pixl.in/dashboard/leads" class="btn btn-sm btn-primary m-5 btn-outline">
                                Show All Leads
                            </a>
                        </li>
                    </ul>
                </div>

                
                <div class="card-header border-0">
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
                        <h3 class="card-label fw-bold text-gray-900 m-0">Staff Details</h3>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Payments</div>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                    checked="checked" name="notifications" />
                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                        </div>
                    </div>
                    <h3 class="card-title align-items-start flex-column">
                        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                        </div>
                    </h3>
                </div>
            </h3>

                @if(session()->get('role')==1)
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                        title="Click to add a Staff">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                            data-bs-target="#modal_add_staff">
                            <i class="ki-duotone ki-plus fs-2"></i>Add Staff</a>
                         </div>
                 

                @endif
          
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="w-25px">
                            </th>
                            <th class="min-w-200px">Staff Name</th>
                            <th class="min-w-150px">
                                Designation</th>
                            <th class="min-w-150px">
                                Email</th>
                            <th class="min-w-200px">
                                Mobile</th>
                                @if(session()->get('role')==1)
                            <th class="min-w-150px">
                                Action</th>
                                @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getempdetails as $emp)
                            
                      
                        <tr>
                            <td class="align-content-center"> 
                                <div class="symbol symbol-40px">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-flask fs-2x text-success"
                                            style="font-family: 'arial' !important;text-transform: capitalize;">{{$emp->fs}}</span></i>
                                    </span>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize">{{$emp->fullname}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <p  class="text-gray-900 fw-norma  d-block fs-6" style="text-transform: capitalize">{{$emp->designation}}
                                </p>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <p class="text-gray-900 fw-norma  fs-6">{{$emp->email}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        <p class="text-gray-900 fw-norma  fs-6">
                                            {{$emp->mobile}}</p>
                                    </div>
                                </div>
                            </td>
                            @if(session()->get('role')==1)
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                      
                                            <a href="#" data-empid="{{$emp->uid}}" data-bs-toggle="modal"
                                                data-bs-target="#modal_edit_staff"
                                                 class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 updatestaff">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                  
                                    </div>


                                    <div class="d-flex flex-stack mb-2">
                                      
                                        <a href="#" data-empid="{{$emp->uid}}" data-bs-toggle="modal"
                                            data-bs-target="#modal_delete_staff"
                                             class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 deletestaff">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                              
                                </div>
                                </div>
                            </td>
                            @endif
                          
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>








<div class="modal fade" id="kt_modal_invite_friendsssss" tabindex="-1" aria-hidden="true">
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


<div class="modal fade" id="modal_add_staff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Staff


                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            <form id="addemp" > 
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Employee Name</label>
                                    <input class="form-control" placeholder="Employee Name"
                                        id="empname" name="empname"  type="text" />
                                        <div  style="color:red" id="e_empname">
                                    
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Employee Email *
                                    </label>
                                    <input type="text" class="form-control" id="empemail" name="empemail" placeholder="Employee Email">
                                    <div  style="color:red" id="e_empemail">
                                    
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Employee Password*
                                    </label>
                                   

                                    <input type="password" class="form-control"  id="emppassword"  name="emppassword" placeholder="Password" value="">
                                    <div style="color:red" id="e_emppassword">
                                     
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Employee Role *
                                    </label>
                                    
                                    <select class="form-control" id="emprole" name="emprole">
                                    
                                        <option value="0">Staff</option>
                                        <option value="1">Admin</option>
                                       
                                       
                                        
                                      </select>
                                  <div  style="color:red" id="e_emprole">
                                    
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Employee Designation*
                                    </label>
                                    <input type="text" class="form-control" id="empdesignation" name="empdesignation" placeholder="Employee Designation">
                                  <div  style="color:red" id="e_empdesignation">
                                    
                                  </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="dateInput" class="form-label">Employee Mobile *</label>
                                    <input type="text" class="form-control" id="empmobile" name="empmobile" placeholder="Employee Phone Number">
                                    <div  style="color:red" id="e_empmobile">
                                      
                                    </div>  
                                </div>
                              
                                <div class="col-md-12 text-end mt-5">
                                    <button class="btn btn-primary mb-5" id="addemployee">Add Employee</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_edit_staff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Staff


                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            <form id="editemp" > 
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Employee Name</label>
                                    <input class="form-control" placeholder="Employee Name"
                                        id="empname1" name="empname"  type="text" />
                                        <input class="form-control" placeholder="Employee Name"
                                        id="empid" name="empid"  type="hidden" />
                                        <div  style="color:red" id="e_empname1">
                                    
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Employee Email *
                                    </label>
                                    <input type="text" class="form-control" id="empemail1" name="empemail" placeholder="Employee Email">
                                    <div  style="color:red" id="e_empemail1">
                                    
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Employee Password*
                                    </label>
                                   

                                    <input type="password" class="form-control"  id="emppassword1"  name="emppassword" placeholder="Password" value="">
                                    <div style="color:red" id="e_emppassword1">
                                     
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Employee Role *
                                    </label>
                                    
                                    <select class="form-control" id="emprole1" name="emprole">
                                    
                                        <option value="0">Staff</option>
                                        <option value="1">Admin</option>
                                       
                                       
                                        
                                      </select>
                                  <div  style="color:red" id="e_emprole1">
                                    
                                  </div>
                                </div> --}}
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Employee Designation*
                                    </label>
                                    <input type="text" class="form-control" id="empdesignation1" name="empdesignation" placeholder="Employee Designation">
                                  <div  style="color:red" id="e_empdesignation1">
                                    
                                  </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="dateInput" class="form-label">Employee Mobile *</label>
                                    <input type="text" class="form-control" id="empmobile1" name="empmobile" placeholder="Employee Phone Number">
                                    <div  style="color:red" id="e_empmobile1">
                                      
                                    </div>  
                                </div>
                              
                                <div class="col-md-12 text-end mt-5">
                                    <button class="btn btn-primary mb-5" id="updateemp">Update Employee</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_delete_staff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Staff


                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                         
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete The Staff <span id="empids" style="color:red; text-transform: capitalize; text-decoration: line-through"></span> <span id="employeeid"> </span></label>
                                  
                                </div>
                                
                              
                                <div class="col-md-12 text-end mt-5">
                                    <button class="btn btn-primary mb-5" id="deleteemp">Delete Employee</button>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
</div>





@endsection
