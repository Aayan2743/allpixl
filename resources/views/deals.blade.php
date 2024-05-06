@extends('layouts.master')
@section('title') {{'Deals'}} @endsection
@section('maincontent')
<style>
    #tabledeals {
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
    <div class="card mb-5 mb-xl-10">
        <div class="card p-2 border-0">
            @livewire('Displayalldeals')
        </div>
    </div>
    <div class="modal fade" id="editdealsfromdeals" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2 mt-5">
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="card-label fw-bold fs-3 mb-1 ">Update Deal Status</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive" style=" width: -webkit-fill-available;">
                            <div class="container">
                                <div class="row">
                                    {{-- <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Deal Fix Date *</label>
                                    <input type="date" class="form-control" id="dealfixdatessss" name="dealfixdatessss" value="" placeholder="Customer">
                                    <div  style="color:red" id="uu_dealfixdate">
                                    </div>
                                </div> --}}
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Customer Name *
                                        </label>
                                        <input type="text" class="form-control" id="customername" name="customername"
                                            value="" placeholder="Customer">
                                        <input type="hidden" class="form-control" id="leadidd" name="leadidd" value=""
                                            placeholder="leadid">
                                        <div style="color:red" id="uu_customer">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Company Name *
                                        </label>
                                        <input type="text" class="form-control" id="Orginazationname"
                                            name="Orginazationname" value="" placeholder="Orginazition">
                                        <div style="color:red" id="uu_Orginazation">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone *</label>
                                        <input type="text" class="form-control" id="phoneno" name="phoneno" value=""
                                            placeholder="Mobile Number">
                                        <div style="color:red" id="uu_phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6  mt-3">
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="text" class="form-control" id="emailid" name="emailid" value=""
                                            placeholder="Email id">
                                        <div style="color:red" id="uu_email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Price
                                        </label>
                                        <input type="text" name="currencyvalue" id="currencyvalue" value=""
                                            class="form-control currency">
                                        <div style="color:red" id="uu_currency">
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
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town
                                    </label>
                                    <input type="name" class="form-control" id="cityss" aria-describedby="nameHelp">
                                    <div style="color:red" id="e_city">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Expected Date
                                    </label>
                                    <input type="date" class="form-control" id="expecteddates" name="expecteddates">
                                    <div class="-feedback" id="uu_expecteddate" style="color:red">
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            name="contentss" id="contentss" style="height: 150px;"></textarea>
                                    </div>
                                    <div style="color:red" id="e_Description">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="updatedealspage">Save Changes</button>
                                </div>
                            </div>
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
                                    {{-- <select class="form-control" id="Title">
                                        @foreach ($getprojects as $project)
                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>
                                    @endforeach
                                    </select> --}}
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
        $('#kt_modal_invite_friends').modal('hide');
        $('#editleads').modal('hide');
        $('#deleteleads').modal('hide');
        $('#convertdealssss').modal('hide');
        $('#kt_modal_invite_friendss').modal('hide');
        $('#dddd').modal('hide');
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