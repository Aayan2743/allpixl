@extends('layouts.master')
@section('title') {{'View Leads Data'}} @endsection
@section('maincontent')

    <!--end::Header-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
         
            <div class="row">

                <div class="col-md-6">
                    <div class="card p-5">
                        {{-- <div class="row"> --}}
                            @php
                            $leadId = Request::route('id');
                           
                             $leadId =Crypt::decryptString($leadId);
                            // dd($leadId)

                          
                            @endphp
                           
                           @livewire('ViewleadsCardDisplay',['id' => $leadId])

                        {{-- </div> --}}
                    </div>
                </div>  
                <div class="col-md-6">
                    @php
                    $leadId = Request::route('id');
                   
                     $leadId =Crypt::decryptString($leadId);
                    // dd($leadId)

                  
                    @endphp
                   
              
                  
                   @livewire('ViewleadsFollowup',['id' => $leadId])
                   
                </div>
                       
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="card mt-3 mb-4">
                    <div class="card-body py-3">

                        @livewire('Whatappmessage',['id' => $leadId])

                    </div>
                  
                </div>
                </div>
            </div>
              
               
         
            <!--begin::Row-->
           
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>

    <!--end::Content-->
    <!--begin::Footer-->

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
                                    <div class="col-md-12">
                                        <label for="dateInput" class="form-label">Deal
                                            Finalize Date  *</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage" type="datetime-local"
                                            id="dealfixdata"  name="dealfixdata" value="<?php echo now()?>">
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label for="name" class="form-label">Customer
                                            *
                                        </label>
                                        <input type="name" class="form-control"  id="customer" name="customer" value=""  aria-describedby="nameHelp">
                                        <input type="hidden" class="form-control" id="leadid" name="leadid" value="" placeholder="leadid">
                                    </div> --}}
                                    {{-- <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Orginazation
                                            *
                                        </label>
                                        <input type="name" class="form-control"id="Orginazation"  name="Orginazation" value="" aria-describedby="nameHelp">
                                    </div> --}}
                                    {{-- <div class="col-md-6 mt-3">
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="email" class="form-control" id="email"  name="email" value="" aria-describedby="nameHelp">
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone
                                            *</label>
                                        <input type="phone number" class="form-control"  id="phone"  name="phone" value="" 
                                            aria-describedby="dateHelp">
                                    </div> --}}
                                    <div class="card mt-3 p-5">
                                        <h4>Deal Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Price 
                                                    *
                                                </label>
                                                <input type="name" class="form-control"  name="currency" id="currency" value="{{$getleadbyid->value ?? ''}}"
                                                    aria-describedby="nameHelp">
                                                    <div  style="color:red" id="e_currency">
                                                    </div>
                                            </div>

                                          

                    

                                            <div class="col-md-6">
                                                <label for="dateInput" class="form-label">Project Delivery Date 
                                                    *</label>
                                                <input class="form-control form-control-solid" type="date" placeholder="Pick date rage" id="expecteddate" name="expecteddate"
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
                                                <label for="name" class="form-label">Remarks *
                                                </label>
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                id="contents"></textarea>

                                                <div class="-feedback" id="e_remarks" style="color:red">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                        <button class="btn btn-primary mb-5" data-route="{{route('admin.converttodeal',$getleads[0]->leadid)}}" data-lid="{{$getleads[0]->leadid}}" id="convertdealdata_1">Convert To Deal
                                            </button>
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
        window.addEventListener('alert', (event) => {
             console.log(event);
            $('#kt_modal_invite_friends').modal('hide');
            $('#editleads').modal('hide');
            $('#deleteleads').modal('hide');
            $('#convertdealssss').modal('hide');
            $('#kt_modal_invite_friendss').modal('hide');
            $('#dddd').modal('hide');
            $('#changeleadstage').modal('hide');
            $('#add_follow_up').modal('hide');
            $('#editleadss').modal('hide');
            $('#edit_follow_up').modal('hide');
          
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
