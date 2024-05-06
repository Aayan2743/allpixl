@extends('layouts.master')
@section('pagename')
@endsection
@section('maincontent')
<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
* {
  font-family: 'Roboto', sans-serif;
}
body {
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
 
  overflow: auto;
  margin:0; 
  box-sizing: border-box;
  color: white;
}

main { width: 100%; }

h1 {
  margin: 0 auto;
  padding: 10px;
  text-align: center;
  font-weight: 300;
  margin-bottom: 30px;
}

#table {
  width: 100%;
  margin: auto;
  position: relative;
}

.line {
  display: flex;
  justify-content: start;
  font-size: 14px;
  font-weight: 300;
}

.line.th {
  background-color: #3c3f4e !important;
  font-weight: 400;
  text-transform: capitalize;
  z-index: 1;
  position: relative;
}

.line:not(.th) {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  z-index: 0;
  transition: transform 1s;
}

.line > div {
  text-align: left;
  flex: 1;
  padding: 15px 10px;
  position: relative;
}

.btns {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  position: absolute;
  top: 7px;
  right: 15px;
  transform: scale(.7);
}

.btns > button {
  margin: 2px 0;
  height: 10px;
  width: 10px;
  border: none;
  outline: none;
  background-color: transparent;
  cursor: pointer;
}

.btns > button::before {
  content: "";
  display : inline-block;
  height : 0;
  width : 0;
  border-right : 5px solid transparent;
  border-bottom : 9px solid white;
  border-left : 5px solid transparent;
  opacity: .5;
}

.btns > button.desc::before {
  transform: rotateZ(180deg);
}

.btns > button.active::before, .btns > button:hover::before {
  opacity: 1;
}

@media all and (max-width: 640px) {
  .line > div:nth-child(4) {
    display:none;
  }
}

@media all and (max-width: 370px) {
  .line > div:nth-child(3) {
    display:none;
  }
}

    </style>


<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 ">
            <h3 class="card-title align-items-start flex-column">
                <div class="card-header border-0 pt-5">
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
                        <h3 class="card-label fw-bold text-gray-900 m-0">Latest Leads</h3>
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
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                title="Click to Add a Lead">
                <a href="#" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                    data-bs-target="#kt_modal_invite_friends">
                    <i class="ki-duotone ki-plus fs-2"></i>Add Leads</a>
            </div>
        </div>
        <div class="card-body py-3">

           


            <div class="table-responsive" style="display: none">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                </div>
                            </th>
                            <th>Customer Name</th>
                            <th>Contact Number</th>
                            <th>Price</th>
                            <th>Lead Source</th>
                            <th>Lead Owner</th>
                            <!--  -->
                            <!-- <th>Lead Stage</th> -->
                            <th>Lead Details </th>
                            <th style="text-align: center;">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leadsdatas as $l=> $leads)
                      
                        <tr>
                            <td class="align-content-center"> 
                                <div class="symbol symbol-40px">
                                 
                                    @if($leads->label=="Cold")
                                    <img src="{{asset('assets/media/Cold.png')}}"
                                        style="    width: 25px;
                                        height: 25px;
                                        z-index: 9;
                                        position: absolute;
                                    ">

                                    @elseif($leads->label=="Warm")
                                    <img src="{{asset('assets/media/Warm.png')}}"
                                    style="    width: 25px;
                                    height: 25px;
                                    z-index: 9;
                                    position: absolute;
                                ">

                                    @elseif($leads->label=="Hot")
                                    <img src="{{asset('assets/media/Hot.png')}}"
                                    style="    width: 25px;
                                    height: 25px;
                                    z-index: 9;
                                    position: absolute;
                                ">

                                    @endif

                                    {{-- <img src="{{asset('assets/media/Warm.png')}}"
                                        style="width: 25px;
                                        height: 25px;
                                        z-index: 9;
                                        position: absolute;
                                    "> --}}
                                </div>
                                <div class="symbol symbol-40px">
                                        @if($l%2==0)
                                        <span
                                        class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-flask fs-2x text-success"
                                            style="font-family: 'arial' !important;text-transform: capitalize;">{{$leads->firstletter}}</span></i>
                                    </span>
                                        @elseif($l%2==1)
                                        <span
                                        class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-flask fs-2x text-info"
                                            style="font-family: 'arial' !important;text-transform: capitalize;">{{$leads->firstletter}}</span></i>
                                    </span>
                                        @endif
                                   

                                </div>
                            </td>
                            <td class="align-content-center"> 

                                <a href="{{route('admin.viewleads',$leads->leadid)}}"
                                     class="text-gray-900 fw-norma  d-block fs-6" style="text-transform: capitalize;"><span>{{$leads->customer}}</span><br>
                                </a>
                                {{-- <a href="#"
                                     class="text-gray-900 fw-norma  d-block fs-6" style="text-transform: capitalize;"><span>{{$leads->customer}}</span><br>
                                </a> --}}
                                <span style="font-weight: 400; text-transform: capitalize;"  >{{$leads->ogrinazation}}</span><br>
                                <span
                                    class="badge py-2 px-4 fs-8 badge-light-warning" style="text-transform: capitalize">{{$leads->title}}</span>
                                <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->

                            </td>
                            <td class="align-content-center"> 
                                <div
                                    class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <p
                                            class="text-gray-900 fw-norma  fs-6">
                                            {{$leads->phone}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div
                                    class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <p
                                            class="text-gray-900 fw-norma  fs-6">
                                            {{$leads->value==""? "N/A" : $leads->value}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        <p
                                            class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize"> 
                                            {{$leads->leadsource}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <div class="d-flex flex-stack mb-2">
                                        <p
                                             class="text-gray-900 fw-norma  d-block fs-6" style="text-transform: capitalize">
                                            <span>{{$leads->owner}}</span><br>
                                            <span
                                                class="badge rounded-pill text-bg-primary text-white">
                                                {{ \Carbon\Carbon::parse($leads->created_at)->diffForhumans() }}
                                                </span><br>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <p
                                        class="text-gray-900 fw-norma  fs-6">
                                        <span
                                            class="badge py-3 px-4 fs-8 badge-light-primary"> {{$leads->leadstagetext}}</span>
                                    </p>
                                </div>
                            </td>
                            <td class="align-content-center"> 
                                <div class="d-flex  flex-shrink-0">
                                    <p
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        
                                        <a class="leadid" data-lid="{{$leads->leadid}}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#converttodeals">
                                        
                                        <i
                                            class="ki-duotone ki-switch fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        </a>
                                    </p>
                                    <p
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                      
                                        <a class="eleadid" data-lid="{{$leads->leadid}}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editleadsdata">
                                        <i
                                            class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        </a>
                                    </p>
                                    <p
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                       
                                        <a class="deleteleadbyid" data-lid="{{$leads->leadid}}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteleadpage">
                                        <i
                                            class="ki-duotone ki-trash fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </a>
                                    </p>
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
                                    <select class="form-control" id="Priotity">
                                        <option value="Cold" selected>Cold</option>
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




<div class="modal fade" id="converttodeals" tabindex="-1" aria-hidden="true">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Deal
                                        fix Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage" type="datetime-local"
                                        id="dealfixdata"  name="dealfixdata" value="<?php echo now()?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer
                                        *
                                    </label>
                                    <input type="name" class="form-control"  id="customer" name="customer" value=""  aria-describedby="nameHelp">
                                    <input type="hidden" class="form-control" id="leadid" name="leadid" value="" placeholder="leadid">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Orginazation
                                        *
                                    </label>
                                    <input type="name" class="form-control"id="Orginazation"  name="Orginazation" value="" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="email" class="form-control" id="email"  name="email" value="" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone
                                        *</label>
                                    <input type="phone number" class="form-control"  id="phone"  name="phone" value="" 
                                        aria-describedby="dateHelp">
                                </div>
                                <div class="card mt-3 p-5">
                                    <h4>Requirements</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Currency
                                                *
                                            </label>
                                            <input type="name" class="form-control"  name="currency" id="currency" value="{{$getleadbyid->value ?? ''}}"
                                                aria-describedby="nameHelp">
                                                <div  style="color:red" id="e_currency">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Delivery Date
                                                
                                                *</label>
                                            <input class="form-control form-control-solid" type="datetime-local" placeholder="Pick date rage" id="expecteddate" name="expecteddate"
                                                />
                                                <div class="-feedback" id="e_expecteddate" style="color:red">
                                                </div>

                                        </div>
                                        {{-- <div class="col-md-12 mt-3">
                                            <label for="name" class="form-label">Assigned
                                                Team
                                            </label>
                                            <select class="form-select" aria-label="Default select example" id="assignedteam">
                                                <option selected="selected">
                                                    Select
                                                    Team
                                                </option>
                                                <option value="1">
                                                    Naveen
                                                </option>
                                                <option value="2">
                                                    Asif
                                                </option>
                                                <option value="3">
                                                    Sai
                                                    Kiran
                                                </option>
                                            </select>
                                        </div> --}}
                                        <div class="col-md-12 mt-3 mb-3">
                                            <label for="name" class="form-label">Content
                                            </label>
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                            id="contents"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button class="btn btn-primary mb-5" id="convertdealdata">Update
                                        Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="editleadsdata" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Modify Leads</span>
                    </h3>
                    <h5 class="modal-title" id="editlead">Update -  Lead Name</h5>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            <div class="row">
                            {{--
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Lead Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="kt_daterangepicker_4" />
                                </div> --}}
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="text" class="form-control" id="u_customer" placeholder="Customer Name">
                                    <input type="hidden" class="form-control" id="ulid" placeholder="Customer Name">
                                    <div  style="color:red" id="ue_customer">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name *
                                    </label>
                                    <input type="text" class="form-control"  id="u_Orginazation"  placeholder="Orginazation Name" value="">
                                    <div style="color:red" id="ue_Orginazation">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Service Required *
                                    </label>
                                    <select class="form-select" aria-label="Default select example"  id="u_title">
                                       
                                       @foreach ($getprojects as $projects)
                                       <option value="{{$projects->Project_Name}}">{{$projects->Project_Name}}</option>
                                       @endforeach
                                  
                                      
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Source *
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="u_leadsource">

                                        @foreach ($getleadsource as $leadssource)
                                        <option value="{{$leadssource->leadsource}}">{{$leadssource->leadsource}}</option>
                                        @endforeach
                                       
                                    </select>
                                    <div  style="color:red" id="e_leadsource">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="tellphone" name="tellphone" aria-describedby="nameHelp">

                                    <div  style="color:red" id="ue_mobile">
                                    </div>

                                  
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="text" class="form-control" id="u_email" placeholder="Email id">
                                    <div  style="color:red" id="ue_email">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="leadlabel">
                                        @foreach ($getalllabel as $label)
                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                        @endforeach
                                        
                                       
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Price
                                    </label>
                                    <input type="name" class="form-control" id="price" name="price" aria-describedby="nameHelp">

                                    <div  style="color:red" id="ue_price">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Owner
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="leadowner">
                                     

                                        @foreach ($getempdetails as $emp)
                                        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid')? "Selected" : ""}}>{{$emp->fullname}}</option>
                                        @endforeach
                                       
                                     
                                    </select>

                                    <div  style="color:red" id="ue_leadowner">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town
                                    </label>
                                    <input type="name" class="form-control" id="city" name="city" aria-describedby="nameHelp">

                                    <div  style="color:red" id="ue_city">
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="u_Description" style="height: 150px;"></textarea>
                                    </div>
                                    <div  style="color:red" id="ue_remarks">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5"  id="updateleaddata">Update Lead</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteleadpage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Lead page</span>
                    </h3>
                  
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            
                            Are you sure you want to delete the lead <span style="color: red; text-transform: capitalize" id="tesing1"></span>
                            <span id="id" style="display: none"> </span>
                           
                              <div class="text-right">
                                <button class="btn btn-primary" id="deleteleadbyids">Delete lead</button>
                              </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection
