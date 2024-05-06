<div>
    {{-- Be like water. --}}

    <div class="sidebar-border-dashed d-flex flex-column justify-content-center rounded p-3 p-xxl-5">
        <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friendsdddd">
            <div class=" fs-6 fw-bold text-white text-center">Add Leads
            </div>
        </a>
    </div>


    <div wire:ignore.self class="modal fade" id="kt_modal_invite_friendsdddd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2 mt-5">
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="card-label fw-bold fs-3 mb-1 ">Add Leads ffff
                            </span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive" style=" width: -webkit-fill-available;">
                            <div class="container">
                                <form wire:submit.prevent="addNewLead" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="dateInput" class="form-label">Lead Date *</label>
                                                <input class="form-control form-control-solid" placeholder="Pick date rage"
                                                    id="leadcrerated" wire:model="leadcrerated"  type="datetime-local" value="<?php echo now() ?>"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Customer Name *
                                                </label>
                                                <input type="text" class="form-control" wire:model="customers"  id="customers" placeholder="Customer Name" value="N/A">
                                                @error('customers')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <label for="name" class="form-label">Company Name *
                                                </label>
                                                <input type="text" class="form-control" wire:model="Orginazations"   id="Orginazations"  placeholder="Company Name" value="N/A">
                                                @error('Orginazations')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror   
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="name" class="form-label">Service Required *
                                                </label>
                                                <select class="form-control" id="Title" wire:model="Title" >
                                                    <option value="">Select Service</option>
                                                    @foreach ($getprojects as $project)
                                                    <option value="{{$project->Project_Name}}">{{$project->Project_Name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('Title')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror     
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="name" class="form-label">Lead Source *
                                                </label>
                                                <select class="form-control" id="leadsource" wire:model="leadsource" >
                                                    <option value="" selected>Select Lead Source</option>
                                                    @foreach ($getleadsource as $source)
                                                    <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>
                                                    @endforeach
                                                </select>
                                                @error('leadsource')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="dateInput" class="form-label">Phone *</label>
                                                <input type="text" class="form-control" wire:model="mobile"  id="mobile" placeholder="Phone Number">
                                                @error('mobile')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror
                                            </div>
                                            <div class="col-md-6  mt-3">
                                                <label for="email" class="form-label">Email
                                                </label>
                                                <input type="text" class="form-control" id="emails" wire:model="emails" placeholder="Email id">
                                                @error('emails')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror  
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="name" class="form-label">
                                                    Priority *
                                                </label>
                                                <select class="form-control" id="Priotity" wire:model="Priotity">
                                                    <option value="" selected>Lead Type</option>
                                                    @foreach ($getalllabel as $label)
                                                    <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                                    @endforeach
                                                </select>
                                                @error('Priotity')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror     
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="name" class="form-label">Price
                                                </label>
                                                <input type="name" class="form-control" wire:model="leadprise" id="leadprise" aria-describedby="nameHelp"/>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="name" class="form-label">Lead Owner 
                                                </label>
                                                <select class="form-select" aria-label="Default select example" wire:model.live="owner">
                                                    <option value="">Select Lead Owner</option>
                                                    @foreach ($getempdetails as $emp)
                                                    {{-- <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option> --}}
                                                    <option value="{{$emp->uid}}">{{$emp->fullname}}</option>
                                                    @endforeach
                                                </select>
                                                @error('owner')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror
                                                {{-- <div> You selected: {{ $owner }}</div>  --}}
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="name" class="form-label">City /Town
                                                </label>
                                                <input type="name" class="form-control" id="citys" wire:model="citys" aria-describedby="nameHelp">
                                                @error('citys')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror 
                                            </div>
                                            <div class="col-md-12 mt=3 mb-4">
                                                <label for="name" class="form-label mt-3">Remarks
                                                </label>
                                                <div class="form-floating">
                                                    <label for="floatingTextarea"></label>
                                                    <textarea class="form-control mb-5" wire:model="Description" placeholder="Leave a comment here"
                                                        id="Description" style="height: 150px;"></textarea>
                                                </div>
                                                @error('Description')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror 
                                            </div>
                                            <div class="col-md-12 text-end">
                                                <button class="btn btn-primary mb-5" >Create Leads </button>
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
