@extends('layouts.master')
@section('title') {{'List Staff'}} @endsection
@section('maincontent')
<style>
    #tableaddstaff {
        overflow: hidden;
        th,
        td {
            /* padding:.25em .5em; */
            text-align: left;
            vertical-align: top;
        }
        /* th {
    background-color:#009;
    color:#fff;
  }
  td {
    background-color:#eee;
  } */
    }
</style>
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10 px-12"> 
                @livewire('Liststaffdetails')
             
    </div>
</div>
    {{-- 
<div class="modal fade" id="kt_modal_invite_friendsssss" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container" style="width: initial;">
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
    <div style="color:red" id="e_Title">
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
    <div style="color:red" id="e_leadsourcesss">
    </div>
</div>
<div class="col-md-6 mt-3">
    <label for="dateInput" class="form-label">Phone *</label>
    <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
    <div style="color:red" id="e_mobile">
    </div>
</div>
<div class="col-md-6  mt-3">
    <label for="email" class="form-label">Email
    </label>
    <input type="text" class="form-control" id="emails" placeholder="Email id">
    <div style="color:red" id="e_email">
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
    <div style="color:red" id="e_Priotity">
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
    <select class="form-select" aria-label="Default select example" id="owner">
        @foreach ($getempdetails as $emp)
        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }}>{{$emp->fullname}}
        </option>
        @endforeach
    </select>
    <div style="color:red" id="e_lead_date">
    </div>
</div>
<div class="col-md-6 mt-3">
    <label for="name" class="form-label">City /Town
    </label>
    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
    <div style="color:red" id="e_city">
    </div>
</div>
<div class="col-md-12 mt=3 mb-4">
    <label for="name" class="form-label mt-3">Remarks
    </label>
    <div class="form-floating">
        <label for="floatingTextarea"></label>
        <textarea class="form-control mb-5" placeholder="Leave a comment here" id="Description"
            style="height: 150px;"></textarea>
    </div>
    <div style="color:red" id="e_Description">
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
</div> --}}
<!--<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">-->
<!--    <div class="modal-dialog mw-650px">-->
<!--        <div class="modal-content">-->
<!--            <div class="container-xxl" id="kt_content_container">-->
<!--                <div class="card-header border-0 pt-2 mt-5">-->
<!--                    <h3 class="card-title align-items-start flex-column ">-->
<!--                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leads-->
<!--                        </span>-->
<!--                    </h3>-->
<!--                </div>-->
<!--                <div class="card-body py-3">-->
<!--                    <div class="table-responsive" style=" width: -webkit-fill-available;">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-6">-->
<!--                                    <label for="dateInput" class="form-label">Lead Date *</label>-->
<!--                                    <input class="form-control form-control-solid" placeholder="Pick date rage"-->
<!--                                        id="leadcrerated"  type="datetime-local" value="<?php echo now() ?>"/>-->
<!--                                </div>-->
<!--                                <div class="col-md-6">-->
<!--                                    <label for="name" class="form-label">Customer Name *-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="customers122" placeholder="Customer Name">-->
<!--                                    <div  style="color:red" id="e_customer122">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                {{-- <div class="col-md-12 mt-3">-->
<!--                                    <label for="name" class="form-label">Company Name *-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control"  id="Orginazations"  placeholder="Company Name" value="">-->
<!--                                    <div style="color:red" id="e_Orginazation">-->
<!--                                    </div>-->
<!--                                </div> --}}-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Course Required *-->
<!--                                    </label>-->
<!--                                    <select class="form-control" id="Title122">-->
<!--                                        <option value="" selected>Select Course Details</option>-->
<!--                                        @foreach ($getprojects as $project)-->
<!--                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>-->
<!--                                        @endforeach-->
<!--                                      </select>-->
<!--                                  <div  style="color:red" id="e_Title122">-->
<!--                                  </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Lead Source *-->
<!--                                    </label>-->
<!--                                    <select class="form-control" id="leadsource122">-->
<!--                                        <option value="" selected>Select Lead Source</option>-->
<!--                                        @foreach ($getleadsource as $source)-->
<!--                                        <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>-->
<!--                                        @endforeach-->
<!--                                      </select>-->
<!--                                  <div  style="color:red" id="e_leadsource122">-->
<!--                                  </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="dateInput" class="form-label">Phone *</label>-->
<!--                                    <input type="text" class="form-control" id="mobile122" placeholder="Phone Number">-->
<!--                                    <div  style="color:red" id="e_mobile122">-->
<!--                                    </div>  -->
<!--                                </div>-->
<!--                                <div class="col-md-6  mt-3">-->
<!--                                    <label for="email" class="form-label">Email-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="emails122" placeholder="Email id">-->
<!--                                    <div  style="color:red" id="e_emails122">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">-->
<!--                                        Priority *-->
<!--                                    </label>-->
<!--                                    <select class="form-control" id="Priotity122">-->
<!--                                        @foreach ($getalllabel as $label)-->
<!--                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>-->
<!--                                        @endforeach-->
<!--                                      </select>-->
<!--                                  <div  style="color:red" id="e_Priotity122">-->
<!--                                  </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Price-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="leadprise122" aria-describedby="nameHelp" >-->
<!--                                </div>-->
<!--                                {{-- <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Registration Amount -->
<!--                                    </label>-->
<!--                                    <input type="number" class="form-control" id="registration" aria-describedby="nameHelp">-->
<!--                                    <div  style="color:red" id="e_registration">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Balance Amount-->
<!--                                    </label>-->
<!--                                    <input type="text" class="form-control" id="balance" aria-describedby="nameHelp" readonly>-->
<!--                                    <div  style="color:red" id="e_balance">-->
<!--                                    </div>-->
<!--                                </div> --}}-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">Lead Owner -->
<!--                                    </label>-->
<!--                                    <select class="form-select" aria-label="Default select example"  id="owner122">-->
<!--                                        @foreach ($getempdetails as $emp)-->
<!--                                        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option>-->
<!--                                        @endforeach-->
<!--                                    </select>-->
<!--                                    <div  style="color:red" id="e_lead_date">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 mt-3">-->
<!--                                    <label for="name" class="form-label">City /Town-->
<!--                                    </label>-->
<!--                                    <input type="name" class="form-control" id="citys122" aria-describedby="nameHelp">-->
<!--                                    <div  style="color:red" id="e_city233">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 mt=3 mb-4">-->
<!--                                    <label for="name" class="form-label mt-3">Remarks-->
<!--                                    </label>-->
<!--                                    <div class="form-floating">-->
<!--                                        <label for="floatingTextarea"></label>-->
<!--                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"-->
<!--                                            id="Description122" style="height: 150px;"></textarea>-->
<!--                                    </div>-->
<!--                                    <div  style="color:red" id="e_Description122">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-12 text-end">-->
<!--                                    <button class="btn btn-primary mb-5" id="createleads1">Create Leads</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row gy-5 g-xl-10">-->
<!--                    <div class="col-xxl-6"></div>-->
<!--                    <div class="col-xxl-6">-->
<!--                        <div class="card card-xl-stretch mb-3 mb-xl-5"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
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
                            <form id="editemp">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Employee Name</label>
                                        <input class="form-control" placeholder="Employee Name" id="empname1"
                                            name="empname" type="text" />
                                        <input class="form-control" placeholder="Employee Name" id="empid" name="empid"
                                            type="hidden" />
                                        <div style="color:red" id="e_empname1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Employee Email *
                                        </label>
                                        <input type="text" class="form-control" id="empemail1" name="empemail"
                                            placeholder="Employee Email">
                                        <div style="color:red" id="e_empemail1">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Employee Password*
                                        </label>
                                        <input type="password" class="form-control" id="emppassword1" name="emppassword"
                                            placeholder="Password" value="">
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
                                        <input type="text" class="form-control" id="empdesignation1"
                                            name="empdesignation" placeholder="Employee Designation">
                                        <div style="color:red" id="e_empdesignation1">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="dateInput" class="form-label">Employee Mobile *</label>
                                        <input type="text" class="form-control" id="empmobile1" name="empmobile"
                                            placeholder="Employee Phone Number">
                                        <div style="color:red" id="e_empmobile1">
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
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete The Staff
                                        <span id="empids"
                                            style="color:red; text-transform: capitalize; text-decoration: line-through"></span>
                                        <span id="employeeid"> </span></label>
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
                                        id="leadcrerated" type="datetime-local" value="<?php echo now() ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="text" class="form-control" id="customers" placeholder="Customer Name"
                                        value="">
                                    <div style="color:red" id="e_customer">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name 
                                    </label>
                                    <input type="text" class="form-control" id="Orginazations"
                                        placeholder="Company Name" value="">
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
                                    <div style="color:red" id="e_Title">
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
                                    <div style="color:red" id="e_leadsourcesss">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
                                    <div style="color:red" id="e_mobile">
                                    </div>
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email 
                                    </label>
                                    <input type="text" class="form-control" id="emails" placeholder="Email id">
                                    <div style="color:red" id="e_email">
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
                                    <div style="color:red" id="e_Priotity">
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
                                    <select class="form-select" aria-label="Default select example" id="owner">
                                        @foreach ($getempdetails as $emp)
                                        <option value="{{$emp->uid}}"
                                            {{$emp->uid==session()->get('uid') ? "Selected" : "" }}>{{$emp->fullname}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_lead_date">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town 
                                    </label>
                                    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
                                    <div style="color:red" id="e_cityssss">
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
                                    <div style="color:red" id="e_Description22sssss2">
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
<script>
    const rows = Array.from(document.querySelectorAll('tr'));
    function slideOut(row) {
        row.classList.add('slide-out');
    }
    function slideIn(row, index) {
        setTimeout(function () {
            row.classList.remove('slide-out');
        }, (index + 5) * 200);
    }
    rows.forEach(slideOut);
    rows.forEach(slideIn);
</script>
<script>
    window.addEventListener('alert', (event) => {
        // console.log(event);
        $('#modal_add_staff').modal('hide');
        let data = event.detail;
        Swal.fire({
            position: 'center',
            // icon: "success",
            icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
</script>
@endsection