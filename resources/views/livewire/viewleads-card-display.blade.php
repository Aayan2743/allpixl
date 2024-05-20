<div>
    {{-- Be like water. --}}
    <div class="col-md-8 align-self-center mb-5">
        <div class="row">
            <div class="col-md-4 col-4 mt-2">
                <img alt="image" {{-- src="{{asset('assets/media/avatars/300-7.jpg')}}" --}}
                    src="{{asset('images/User.jpg')}}" class="rounded-circle" width="100"
                    style="border-radius: 8%!important;" />
            </div>
            <div class="col-md-8 align-self-center col-8">
                <h3 style="text-transform: capitalize">{{$getleads[0]->customer}} </h3>
                <p class="mt-2" style="text-transform: capitalize">
                    {{$getleads[0]->ogrinazation}}
                </p>
                <p>
                    <b>{{$getleads[0]->phone}}</b>
                </p>
            </div>
        </div>
    </div>

    <div class="">
        <div class="row" >
            <div class="col-md-6 col-12 mt-2"> 
                <a href="tel:{{$getleads[0]->phone}}" class="btn btn-success h-100 mb-3"
                    style="width:-webkit-fill-available;"> <i class="ki-duotone ki-call">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                    </i><br> Call: <br>{{$getleads[0]->phone}}</a>
            </div>
            <div class="col-md-6  col-12 mt-2">
                <button class="btn btn-info  h-100 mb-3" data-bs-target="#changeleadstage" data-bs-toggle="modal"
                    data-leadids="{{$getleads[0]->leadid }}" style="width:-webkit-fill-available;">
                    <i class="ki-duotone ki-notepad-edit">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <br>Lead Stage: {{$getleads[0]->leadstagetext}} </button>
            </div>
            <div class="col-md-6 col-12 mt-3">
                <button class="btn btn-info mb-3  leadid_inside" data-bs-target="#converttodeals"
                    data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}" data-bs-toggle="modal"
                    data-lid="{{$getleads[0]->leadid }}" style="width:-webkit-fill-available;"><i
                        class="ki-duotone ki-notepad-edit">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i><br>Convert To<br> Deal </button>
            </div>
            
            
              <div class="col-md-6 col-12 mt-3 ">

                @if(checkservice_user_access(Session()->get('uid'))['edit_access']==0) 
                <button class="btn btn-info mb-3 " data-bs-target="#access_controller"
                data-bs-toggle="modal" wire:click="editLead({{$getleads[0]->leadid}})"
                style="width:-webkit-fill-available;"><i
                   class="ki-duotone ki-notepad-edit">
                   <span class="path1"></span>
                   <span class="path2"></span>
               </i><br>Edit To<br> Lead </button>


                @elseif(checkservice_user_access(Session()->get('uid'))['edit_access']==1)

                <button class="btn btn-info mb-3 " data-bs-target="#editleadss"
                data-bs-toggle="modal" wire:click="editLead({{$getleads[0]->leadid}})"
                style="width:-webkit-fill-available;"><i
                   class="ki-duotone ki-notepad-edit">
                   <span class="path1"></span>
                   <span class="path2"></span>
               </i><br>Edit To<br> Lead </button>
              
                 @endif



              


            </div>
            
        </div>
    </div>
    <div class="">
        <hr>
        <div class="row">
            <div class="col-md-4 col-6 ">
                <div class="m-4">
                    <p>Lead Created Date</p>
                    <h6>{{ \Carbon\Carbon::parse($getleads[0]->created_at)->format('d-M-Y') }} </h6>
                </div>
            </div>
            <div class="col-md-4 col-6 ">
                <div class="m-4">
                    <p>Service Required</p>
                    <h6>{{$getleads[0]->title}}</h6>
                </div>
            </div>
            <div class="col-md-4 col-6 ">
                <div class="m-4">
                    <p>Source of Lead</p>
                    <h6>{{$getleads[0]->leadsource}}</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="m-4">
                    <p>Remarks</p>
                    {{$getleads[0]->description}}
                </div>
            </div>
        </div>
    </div>
    
    
    <div wire:ignore.self class="modal fade" id="changeleadstage" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start mt-5 flex-column">
                            <span class="card-label fw-bold fs-3 mb-1 mt-3">Change Lead Stage Follow-Up</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 150px">
                            <div class="table-responsive" style="width: -webkit-fill-available;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Current Lead Stage
                                            </label>
                                            <select class="form-select" wire:change="changedata($event.target.value)"
                                                aria-label="Default select example" id="leadstage">
                                                <option value="" selected="selected">Select Lead Stage</option>
                                                @foreach ($getleadstage as $stage)
                                                <option value="{{$stage->stagename }}">{{$stage->stagename}}</option>
                                                @endforeach
                                            </select>
                                            <div class="col-md-12 text-end mt-2">
                                                {{-- <button class="btn btn-primary mb-5" data-route="" id="changeleadstagevalue" >Change Lead Stage --}}
                                                {{-- <button class="btn btn-primary mb-5" wire:click=""  id="changeleadstagevalu" >Change Lead Stage
                                                Up </button> --}}
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
        
        <!--dfdf-->
   
   <div wire:ignore.self class="modal fade" id="editleadss" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Lead
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <form wire:submit.prevent="updateLead" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Lead Date *</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="leadcrerated" wire:model="leadcrerated" readonly type="datetime-local"
                                            value="<?php echo now() ?>" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Customer Name *
                                        </label>
                                        <input type="text" class="form-control" wire:model="customers" id="customers"
                                            placeholder="Customer Name" value="N/A">
                                        @error('customers')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Company Name 
                                        </label>
                                        <input type="text" class="form-control" wire:model="Orginazations"
                                            id="Orginazations" placeholder="Company Name" value="N/A">
                                        @error('Orginazations')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Service Required *
                                        </label>
                                        <select class="form-control" id="Title" wire:model="Title">
                                            <option value="">Select Service</option>
                                            @foreach ($getprojects as $project)
                                            <option value="{{$project->Project_Name}}">{{$project->Project_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Title')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Lead Source *
                                        </label>
                                        <select class="form-control" id="leadsource" wire:model="leadsource">
                                            <option value="" selected>Select Lead Source</option>
                                            @foreach ($getleadsource as $source)
                                            <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>
                                            @endforeach
                                        </select>
                                        @error('leadsource')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone *</label>
                                        <input type="text" class="form-control" wire:model="mobile" id="mobile"
                                            placeholder="Phone Number">
                                        @error('mobile')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6  mt-3">
                                        <label for="email" class="form-label">Email 
                                        </label>
                                        <input type="text" class="form-control" id="emails" wire:model="emails"
                                            placeholder="Email id">
                                        @error('emails')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">
                                            Priority *
                                        </label>
                                        <select class="form-control" id="Priotity" wire:model="Priotity">
                                            <option value="" selected>Select Lead Type</option>
                                            @foreach ($getalllabel as $label)
                                            <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                            @endforeach
                                        </select>
                                        @error('Priotity')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Price
                                        </label>
                                        <input type="name" class="form-control" wire:model="leadprise" id="leadprise"
                                            aria-describedby="nameHelp" />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Lead Owner
                                        </label>
                                        <select class="form-select" aria-label="Default select example"
                                            wire:model.live="owner">
                                            @foreach ($getempdetails as $emp)
                                            <option value="{{$emp->uid}}"
                                                {{$emp->uid==session()->get('uid') ? "Selected" : "" }}>
                                                {{$emp->fullname}}</option>
                                            @endforeach
                                        </select>
                                        @error('owner')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        {{-- <div> You selected: {{ $owner }}</div> --}}
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town 
                                    </label>
                                    <input type="name" class="form-control" id="citys" wire:model="citys"
                                        aria-describedby="nameHelp">
                                    @error('citys')
                                    <div style="color:red" id="e_customer">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks *
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" wire:model="Description"
                                            placeholder="Leave a comment here" id="Description"
                                            style="height: 150px;"></textarea>
                                    </div>
                                    @error('Description')
                                    <div style="color:red" id="e_customer">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createlea">Update Lead</button>
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

   

   
   

   
        
        
    
    
  
    
    
    </div>
    
    
    
    