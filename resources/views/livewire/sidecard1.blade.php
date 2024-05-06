<div>
    {{-- Stop trying to control. --}}

  


    <div class="card card-flush card-p-0 card-reset mb-10" style="display: ">
        <div class="card-header align-items-center border-0">
            <h3 class="card-title fw-bold text-white fs-3">Leads</h3>
        </div>
        <div class="card-body">
            <div>
                <div class="row g-0">
                    {{-- countofHot
                    countofwarm
                    countofcold --}} 
                
                    <div class="col d-flex flex-column bg-light-primary px-4 py-4 rounded-2 me-2 text-center align-self-center"
                        style="align-items: center; cursor:pointer;" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/leads';" >
                       
                        <img src="{{asset('assets/media/Cold.png')}}" style="    width: 25px;
                    height: 25px;
                    ;">
                        <a href="{{ env('APP_URL') }}/dashboard/leads"
                            class="text-primary fw-semibold fs-6 text-center"
                            style="font-size:14px !important;">
                            Cold
                        </a>
                        <span class="text-center">{{$countofcold}}</span>
                    </div>
              
                    <div class="col d-flex flex-column bg-light-success px-4 py-4 rounded-2 me-2 text-center align-self-center"
                        style="align-items: center; align-self:center !important; cursor:pointer;" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/leads';">
                       
                        
                        <img src="{{asset('assets/media/Warm.png')}}" style="    width: 25px;
                            height: 25px;
                            ">
                        <a href="{{ env('APP_URL') }}/dashboard/leads"
                            class="text-success fw-semibold fs-6 text-center"
                            style="font-size:14px !important;">
                            Warm
                        </a>
                        <span class="text-center">{{$countofwarm}}</span>
                    </div>
                    <div class="col d-flex flex-column bg-light-danger px-4 py-4 rounded-2 me-2 text-center align-self-center"
                        style="align-items: center;cursor:pointer;" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/leads';">
                        
                        <img src="{{asset('assets/media/Hot.png')}}" style="    width: 25px;
                            height: 25px;
                         ">
                        <a href="{{ env('APP_URL') }}/dashboard/leads"
                            class="text-danger fw-semibold fs-6  text-center"
                            style="font-size:14px !important;">
                            Hot
                        </a>
                        <span class="text-center">{{$countofHot}}</span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row g-0">
        <div class="card-header align-items-center border-0">
            <h3 class="card-title fw-bold text-white fs-3">Deals</h3>
        </div>
        <div class="col d-flex flex-column bg-light-success px-2 py-4 rounded-2 me-2 text-center" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/viewdeals';"
            style="align-items: center;cursor:pointer;">
            {{-- <i class="ki-duotone ki-abstract-26 fs-2x text-success text-center">
                <span class="path1"></span>
                <span class="path2"></span></i> --}}
            <img src="{{asset('icons/Won.png')}}" height="20px" width="20px" />
            <a href="{{ env('APP_URL') }}/dashboard/viewdeals"
                class="text-success fw-semibold fs-6 mt-2 text-center"
                style="font-size:14px !important;">
                Won
            </a>
            <span class="text-center">{{$countofwon}}</span>
        </div>
        <div class="col d-flex flex-column bg-light-danger px-2 py-4 rounded-2 text-center" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/viewdeals';"
            style="align-items: center;cursor:pointer;">
            {{-- <i class="ki-duotone ki-sms fs-2x text-danger text-center">
                <span class="path1"></span>
                <span class="path2"></span></i> --}}
            <img src="{{asset('icons/Lost.png')}}" height="20px" width="20px" />
            <a href="{{ env('APP_URL') }}/dashboard/viewdeals"
                class="text-danger fw-semibold fs-6 mt-2 text-center"
                style="font-size:14px !important;">
                Lost
            </a>
            <span class="text-center">{{$countoflost}}</span>
        </div>
    </div
    
    
     <div class="row g-0">
        <div class="card-header align-items-center border-0">

            <h3 class="d-flex mx-3 flex-column text-white fw-bold my-0 fs-1" style="text-transform: capitalize; font-weight:800 !important;">
                    
                @php
                // Get the current date
                $currentDate = \Carbon\Carbon::now();

                // Get the expiration date from the session
                $expDate = session()->get('expdate');
                

                // Parse the expiration date as a Carbon instance
                $expirationDate = \Carbon\Carbon::parse($expDate);

                // Calculate the difference in days
                $differenceInDays = $currentDate->diffInDays($expirationDate);
            @endphp

                Expires In {{$differenceInDays}} Days
             </h3>


          
        </div>
       
    </div>

    <!--<div wire:ignore.self class="modal fade" id="rrr" tabindex="-1" aria-hidden="true">-->
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
    <!--                            <form wire:submit.prevent="addNewLead" action="" method="post">-->
    <!--                                    <div class="row">-->
    <!--                                        <div class="col-md-6">-->
    <!--                                            <label for="dateInput" class="form-label">Lead Date *</label>-->
    <!--                                            <input class="form-control form-control-solid" placeholder="Pick date rage"-->
    <!--                                                id="leadcrerated" wire:model="leadcrerated"  type="datetime-local" value="<?php echo now() ?>"/>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6">-->
    <!--                                            <label for="name" class="form-label">Customer Name *-->
    <!--                                            </label>-->
    <!--                                            <input type="text" class="form-control" wire:model="customers"  id="customers" placeholder="Customer Name" value="N/A">-->
    <!--                                            @error('customers')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-12 mt-3">-->
    <!--                                            <label for="name" class="form-label">Company Name *-->
    <!--                                            </label>-->
    <!--                                            <input type="text" class="form-control" wire:model="Orginazations"   id="Orginazations"  placeholder="Company Name" value="N/A">-->
    <!--                                            @error('Orginazations')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror   -->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="name" class="form-label">Service Required *-->
    <!--                                            </label>-->
    <!--                                            <select class="form-control" id="Title" wire:model="Title" >-->
    <!--                                                <option value="">Select Service</option>-->
    <!--                                                @foreach ($getprojects as $project)-->
    <!--                                                <option value="{{$project->Project_Name}}">{{$project->Project_Name}}</option>-->
    <!--                                                @endforeach-->
    <!--                                            </select>-->
    <!--                                            @error('Title')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror     -->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="name" class="form-label">Lead Source *-->
    <!--                                            </label>-->
    <!--                                            <select class="form-control" id="leadsource" wire:model="leadsource" >-->
    <!--                                                <option value="" selected>Select Lead Source</option>-->
    <!--                                                @foreach ($getleadsource as $source)-->
    <!--                                                <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>-->
    <!--                                                @endforeach-->
    <!--                                            </select>-->
    <!--                                            @error('leadsource')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="dateInput" class="form-label">Phone *</label>-->
    <!--                                            <input type="text" class="form-control" wire:model="mobile"  id="mobile" placeholder="Phone Number">-->
    <!--                                            @error('mobile')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6  mt-3">-->
    <!--                                            <label for="email" class="form-label">Email-->
    <!--                                            </label>-->
    <!--                                            <input type="text" class="form-control" id="emails" wire:model="emails" placeholder="Email id">-->
    <!--                                            @error('emails')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror  -->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="name" class="form-label">-->
    <!--                                                Priority *-->
    <!--                                            </label>-->
    <!--                                            <select class="form-control" id="Priotity" wire:model="Priotity">-->
    <!--                                                <option value="" selected>Lead Type</option>-->
    <!--                                                @foreach ($getalllabel as $label)-->
    <!--                                                <option value="{{$label->labelname}}">{{$label->labelname}}</option>-->
    <!--                                                @endforeach-->
    <!--                                            </select>-->
    <!--                                            @error('Priotity')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror     -->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="name" class="form-label">Price-->
    <!--                                            </label>-->
    <!--                                            <input type="name" class="form-control" wire:model="leadprise" id="leadprise" aria-describedby="nameHelp"/>-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="name" class="form-label">Lead Owner -->
    <!--                                            </label>-->
    <!--                                            <select class="form-select" aria-label="Default select example" wire:model.live="owner">-->
    <!--                                                <option value="">Select Lead Owner</option>-->
    <!--                                                @foreach ($getempdetails as $emp)-->
    <!--                                                {{-- <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option> --}}-->
    <!--                                                <option value="{{$emp->uid}}">{{$emp->fullname}}</option>-->
    <!--                                                @endforeach-->
    <!--                                            </select>-->
    <!--                                            @error('owner')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror-->
                                              
    <!--                                        </div>-->
    <!--                                        <div class="col-md-6 mt-3">-->
    <!--                                            <label for="name" class="form-label">City /Town-->
    <!--                                            </label>-->
    <!--                                            <input type="name" class="form-control" id="citys" wire:model="citys" aria-describedby="nameHelp">-->
    <!--                                            @error('citys')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror -->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-12 mt=3 mb-4">-->
    <!--                                            <label for="name" class="form-label mt-3">Remarks-->
    <!--                                            </label>-->
    <!--                                            <div class="form-floating">-->
    <!--                                                <label for="floatingTextarea"></label>-->
    <!--                                                <textarea class="form-control mb-5" wire:model="Description" placeholder="Leave a comment here"-->
    <!--                                                    id="Description" style="height: 150px;"></textarea>-->
    <!--                                            </div>-->
    <!--                                            @error('Description')-->
    <!--                                            <div  style="color:red" id="e_customer">-->
    <!--                                                {{$message}}-->
    <!--                                            </div> -->
    <!--                                            @enderror -->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-12 text-end">-->
    <!--                                            <button class="btn btn-primary mb-5" id="createlead">Create Leads </button>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                            </form>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
                   
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


   


</div>
