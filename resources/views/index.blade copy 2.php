@extends('layouts.master')
{{-- @section('pagename') --}}
@section('title') {{'Dashboard'}} @endsection
@section('maincontent')
<style>
    #leadstable,
    #dealstabs {
        overflow: hidden;
        th,
        td {
            /* padding:.25em .5em; */
            text-align: left;
            vertical-align: top;
        }
        tr {
            transition: all 1s ease-in-out;
            &.slide-out {
                transform: translateX(100%);
            }
        }
    }
    .cardBox {
        width: 200px;
        height: 200px;
        position: relative;
        display: grid;
        place-items: center;
        overflow: hidden;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 10px 0px,
            rgba(0, 0, 0, 0.5) 0px 2px 25px 0px;
    }
    .cards {
        position: absolute;
        width: 95%;
        height: 95%;
        background: #000814;
        border-radius: 20px;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        color: #ffffff;
        overflow: hidden;
        padding: 20px;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 60px -12px inset,
            rgba(0, 0, 0, 0.5) 0px 18px 36px -18px inset;
    }
    .display-date {
        text-align: center;
        margin-bottom: 10px;
        font-size: 1.6rem;
        font-weight: 600;
    }
    .display-time {
        display: flex;
        font-size: 23px;
        font-weight: bold;
        border: 2px solid #ffd868;
        padding: 10px 20px;
        border-radius: 5px;
        transition: ease-in-out 0.1s;
        transition-property: background, color;
        /* -webkit-box-reflect: below 2px linear-gradient(transparent, rgba(255, 255, 255, 0.05)); */
        color: white;
    }
    .display-time:hover {
        background: #ffd868;
        box-shadow: 0 0 30px#ffd868;
        color: #272727;
        cursor: pointer;
    }
    .gradient-box {
        display: flex; 
        box-sizing: border-box;
        color: #FFF; 
        background-clip: padding-box;
        /* !importanté */
        border: solid 1px transparent;
        /* !importanté */
        border-radius: 1em;
    }
    .gradient-box:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
        margin: -2px;
        /* !importanté */
        border-radius: inherit;
        /* !importanté */
        /* background: linear-gradient(to right, #a12abe, purple); */
        background: linear-gradient(to right, red, purple, red, purple);
    }
    /* body {
  margin:0;
  background:#ccc;
  display:grid;
  min-height:100vh;
  grid-auto-flow:column;
  place-content:center;
} */
</style>
<div class="container" id="kt_content_container">
    @include('layouts.cards')
    <div class="col-xl-12 mb-5 mb-xl-5">
        <div class="card card-flush h-xl-100 p-4">
            <div class="">
                @include('popmodel.maintaps')
                <div class="tab-content">
                    @include('popmodel.followuptap')
                    {{-- <livewire:LeadsDashboard /> --}}
                    @include('popmodel.leadstap')
                    @include('popmodel.dealstap')
                </div>
            </div>
        </div>
    </div>
    @include('popmodel.welcomemodel')
    <div class="row">
        <div class="col-xl-6 mb-2" >
            @livewire('Dashboardleadvsdeal')
           
            {{-- @include('popmodel.leadsvsdeals') --}}
        </div>
        <div class="col-xxl-6 mb-xl-10 mb-2 mt-5"> 
          
            @livewire('Dashboardleadsbystage')
           
        </div>
        <div class="col-xxl-12">
            {{-- @include('popmodel.StaffStatistics') --}}
            @livewire('dashboarstaff')
        </div>
        <div class="col-xl-8 mb-2">

            @livewire('Dashboardleadsbysource')
            {{-- @include('popmodel.leadsbysource') --}}
        </div>
        <div class="col-xl-4 mb-2 mt-0" >
            @livewire('Dashboardleadebyservice')
           
        </div> 
    </div>



    <div class="modal fade" id="kt_modal_invite_friendsdddd_1" tabindex="-1" aria-hidden="true">
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
                                        <input type="text" class="form-control" id="customers1" placeholder="Customer Name"
                                            value="N/A">
                                        <div style="color:red" id="e_customer">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Company Name *
                                        </label>
                                        <input type="text" class="form-control" id="Orginazations1"
                                            placeholder="Company Name" value="N/A">
                                        <div style="color:red" id="e_Orginazation">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Service Required *
                                        </label>
                                        <select class="form-control" id="Titless">
                                            <option value="" >Select Service</option>
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
                                        <select class="form-control" id="leadsource1">
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
                                        <input type="text" class="form-control" id="mobile1" placeholder="Phone Number">
                                        <div style="color:red" id="e_mobile">
                                        </div>
                                    </div>
                                    <div class="col-md-6  mt-3">
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="text" class="form-control" id="emails1" placeholder="Email id">
                                        <div style="color:red" id="e_email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">
                                            Priority *
                                        </label>
                                        <select class="form-control" id="Priotitys">
                                            <option value="">Lead Type</option>
                                            {{-- <option value="Cold" selected>Cold</option> --}}
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
                                        <input type="name" class="form-control" id="citys1" aria-describedby="nameHelp">
                                        <div style="color:red" id="e_city">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt=3 mb-4">
                                        <label for="name" class="form-label mt-3">Remarks
                                        </label>
                                        <div class="form-floating">
                                            <label for="floatingTextarea"></label>
                                            <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                                id="Description1" style="height: 150px;"></textarea>
                                        </div>
                                        <div style="color:red" id="e_Description">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        {{-- <button class="btn btn-primary mb-5" id="createleads1">Create Leads</button> --}}
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
    const displayTime = document.querySelector(".display-time");
    // Time
    function showTime() {
        let time = new Date();
        displayTime.innerText = time.toLocaleTimeString("en-US", {
            hour12: false
        });
        setTimeout(showTime, 1000);
    }
    showTime();
    // Date
    function updateDate() {
        let today = new Date();
        // return number
        let dayName = today.getDay(),
            dayNum = today.getDate(),
            month = today.getMonth(),
            year = today.getFullYear();
        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        const dayWeek = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];
        // value -> ID of the html element
        const IDCollection = ["day", "daynum", "month", "year"];
        // return value array with number as a index
        const val = [dayWeek[dayName], dayNum, months[month], year];
        for (let i = 0; i < IDCollection.length; i++) {
            document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
        }
    }
    updateDate();
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
        $('#reshedule_follow_up').modal('hide');
        $('#closefollowups').modal('hide');
      
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
@endsection()
@section('js')
@endsection()