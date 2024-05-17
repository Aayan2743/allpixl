<div>
   
    {{-- righr side --}}


{{-- right side end --}}

    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 500px">
        <div class="table-responsive" style="width: -webkit-fill-available;">
            <div class="card mb-5 mb-xl-12">
                <div class="card-header position-relative py-0" style="width:-webkit-fill-available;">
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation"
                            style="align-items: center;display: flow;">
                            <div class="d-flex">
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
                                <span class="text-muted mt-1 fw-semibold fs-7">Expect Lead Revenue Rs:
                                  {{$leadamount}}  </span>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
                        <li class="nav-item p-0 ms-0 me-8" role="presentation"> 
                            <div class="card-toolbar" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <a href="#" wire:click="cancel"
                                    class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" >
                                    Add Leads</a>
                            </div>
                            <a href="{{route('admin.leads')}}" class="btn btn-sm btn-primary m-5 btn-outline">
                                Show All Leads
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style="width: -webkit-fill-available;">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 zigzag"
                            id="leadstable">
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
                                    <th>Lead Details </th>
                                    <th>Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($leadsdatass)>0)
                                @foreach ($leadsdatass as $l=>$leads)
                                <tr>
                                    <td class="align-content-center">
                                        <div class="symbol symbol-40px">
                                            @if($leads->label=="Cold")
                                            <img src="{{asset('assets/media/Cold.png')}}" style="    width: 25px;
                                                    height: 25px;
                                                    z-index: 9;
                                                    position: absolute;
                                                ">
                                            @elseif($leads->label=="Warm")
                                            <img src="{{asset('assets/media/Warm.png')}}" style="    width: 25px;
                                                height: 25px;
                                                z-index: 9;
                                                position: absolute;
                                            ">
                                            @elseif($leads->label=="Hot")
                                            <img src="{{asset('assets/media/Hot.png')}}" style="    width: 25px;
                                                height: 25px;
                                                z-index: 9;
                                                position: absolute;
                                            ">
                                            @endif
                                        </div>
                                        <div class="symbol symbol-40px">
                                            @if($l%2==0)
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-flask fs-2x text-success"
                                                    style="font-family: 'arial' !important; text-transform:capitalize">{{$leads->firstletter}}
                                            </span></i>
                                            </span>
                                            @elseif($l%2==1)
                                            <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-abstract-24 fs-2x text-info"
                                                    style="font-family: 'arial' !important; text-transform:capitalize">{{$leads->firstletter}}
                                            </span></i>
                                            </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <a href="{{route('admin.viewleads', Crypt::encryptString($leads->leadid))}}"
                                            class="text-gray-900 fw-norma  d-block fs-6"
                                            style="text-transform: capitalize;font-weight:800 !important;"><span>{{$leads->customer}}</span><br>
                                        </a>
                                        <span
                                            class="text-muted fw-semibold text-muted d-block fs-7">{{$leads->ogrinazation}}</span>
                                        <span class="badge py-2 px-4 fs-8 badge-light-warning"
                                            style="text-transform: capitalize">{{$leads->title}}</span>
                                        <!-- <img src="assets/media/Warm.png"  style="height: 25px;position: absolute;left: 6px;"> -->
                                    </td>
                                    <td style="align-content: center;">
                                        <p class="text-gray-900 fw-norma  fs-6">
                                            <a href="tel:{{$leads->phone}}">
                                                {{$leads->phone}}</a></p>
                                    </td>
                                    <td style="align-content: center;">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <p class="text-gray-900 fw-norma  fs-6">
                                                    {{$leads->value==""? "N/A" : $leads->value}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            <div class="d-flex flex-stack">
                                                <p class="text-gray-900 fw-norma  fs-6"
                                                    style="text-transform: uppercase">
                                                    {{$leads->leadsource}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            <div class="d-flex flex-stack mb-2">
                                                <p class="text-gray-900 fw-norma  d-block fs-6"
                                                    style="text-transform: capitalize">
                                                    <span>{{$leads->owner}}</span><br>
                                                    <span class="badge rounded-pill text-bg-primary text-white">
                                                        {{-- {{$leads->created_at}} --}}
                                                        {{ \Carbon\Carbon::parse($leads->created_at)->diffForhumans() }}
                                                    </span><br>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0">
                                            <p class="text-gray-900 fw-norma  fs-6">
                                                @if($l%2==0)
                                                <span
                                                    class="badge py-3 px-4 fs-7 badge-light-success">{{$leads->leadstagetext}}
                                                </span>
                                                @elseif($l%2==1)
                                                <span
                                                    class="badge py-3 px-4 fs-8 badge-light-primary">{{$leads->leadstagetext}}
                                                </span>
                                                @endif
                                            </p>
                                        </div>
                                    </td>
                                    <td class="align-content-center">
                                        <div class="d-flex  flex-shrink-0" style="right: 16px; ">

                                            <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <a wire:click="editLead({{$leads->leadid}})" data-bs-toggle="modal"
                                                data-bs-target="#convertdealssss" >
                                               
                                                <img src="{{asset('icons/Convert.png')}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Convert"/>
                                            </a>
                                            </p>
                                          
                                        
                                            <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                              

                                                <a  wire:click="editLead({{$leads->leadid}})"  data-bs-toggle="modal"
                                                    data-bs-target="#editleads" >
                                                    <img src="{{asset('icons/Edit.png')}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit"/>
                                                    {{-- <i class="ki-duotone ki-pencil fs-2"><span
                                                            class="path1"></span><span class="path2"></span></i> --}}
                                                </a>

                                            </p>
                                            <p class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <a wire:click="editLead({{$leads->leadid}})" 
                                                    data-bs-toggle="modal" data-bs-target="#deleteleads">

                                                    <img src="{{asset('icons/delete.png')}}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete"/>
                                                    {{-- <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span></i> --}}
                                                </a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">
                                        <h2 style="text-align: center;"> You Don't Have Any Leads...!</h2>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        @if($countofleads>3)
                        <a href="{{route('admin.leads')}}" style="text-align: right">{{$countofleads-3}} More Leads
                            Available </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- model come here --}}
    <div wire:ignore.self class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
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
                                                <label for="name" class="form-label">Company Name 
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
                                                <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option> 
                                                <!--<option value="{{$emp->uid}}">{{$emp->fullname}}</option> -->
                                                    <!--<option value="{{$emp->uid}}">{{$emp->fullname}}</option>-->
                                                    @endforeach
                                                </select>
                                                @error('owner')
                                                <div  style="color:red" id="e_customer">
                                                    {{$message}}
                                                </div> 
                                                @enderror
                                                <div> You selected: {{ $owner }}</div> 
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
                                                <label for="name" class="form-label mt-3">Remarks *
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
                                                <button class="btn btn-primary mb-5" id="createlead">Create Leads </button>
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

    {{-- edit lead model box --}}

    <div wire:ignore.self class="modal fade" id="editleads" tabindex="-1" aria-hidden="true">
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
                                                    id="leadcrerated" wire:model="leadcrerated" readonly type="datetime-local" value="<?php echo now() ?>"/>
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
                                                <label for="name" class="form-label">Company Name 
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
                                                    @foreach ($getempdetails as $emp)
                                                    <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid') ? "Selected" : "" }} >{{$emp->fullname}}</option>
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
                                                <label for="name" class="form-label mt-3">Remarks *
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


    {{-- delete model box --}}
    <div wire:ignore.self class="modal fade" id="deleteleads" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container"> 
                    <div class="card-body py-3">
                        <div class="table-responsive" style=" width: -webkit-fill-available;">
       
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="card-label fw-bold fs-3 mb-1 ">Delete Lead</span>
                        </h3>
                            <div class="">
                              

                                
                                Are you sure you want to delete the lead <span style="color: red; text-transform: capitalize" wire:model="customersin">{{ $customersin }} </span>
                               
                               
                                  
                                  <div class="text-right mt-2">
                                    <button class="btn btn-primary" wire:click="deletelead({{$editid}})" id="deleteleadbyi">Delete lead</button>
                                  </div>
                              
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    {{-- convert to deal box --}}
    <div wire:ignore.self  class="modal fade" id="convertdealssss" tabindex="-1" aria-hidden="true">
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
                            <form wire:submit.prevent="convert_to_deal"  method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Deal
                                            Finalize Date *</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage" type="datetime-local"
                                            id="dealfixdata" wire:model="dealfixdata"  readonly name="dealfixdata" value="<?php echo now()?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Customer
                                            *
                                        </label>
                                        <input type="name" class="form-control"  wire:model="customers"  id="customer" name="customer" value=""  aria-describedby="nameHelp">
                                        <input type="hidden" class="form-control" id="leadid" name="leadid" value="" placeholder="leadid">
                                        @error('customers')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">
                                            Organization
                                            *
                                        </label>
                                        <input type="name" class="form-control" id="Orginazation" wire:model="Orginazations"  name="Orginazation" value="" aria-describedby="nameHelp">
                                        @error('Orginazations')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                   
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="email" class="form-label">Email
                                        </label>
                                        <input type="email" class="form-control" id="email"  wire:model="emails"   name="email" value="" aria-describedby="nameHelp">
                                        @error('emails')
                                        <div  style="color:red" id="e_customer">
                                            {{$message}}
                                        </div> 
                                        @enderror
                                        
                                   
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone
                                            *</label>
                                        <input type="phone number" class="form-control"  id="phone" wire:model="mobile" name="phone" value="" 
                                            aria-describedby="dateHelp">

                                            @error('mobile')
                                            <div  style="color:red" id="e_customer">
                                                {{$message}}
                                            </div> 
                                            @enderror
                                    </div>
                                    <div class="card mt-3 p-5">
                                        <h4>Deal Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Price
                                                    *
                                                </label>
                                                <input type="name" class="form-control"  name="currency" id="currency"  wire:model="leadprise"
                                                    aria-describedby="nameHelp">
                                                    @error('leadprise')
                                                    <div  style="color:red" id="e_customer">
                                                        {{$message}}
                                                    </div> 
                                                     @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="dateInput" class="form-label">Project Delivery Date
                                                    
                                                    *</label>
                                                <input class="form-control form-control-solid" type="date" placeholder="Pick date rage"  wire:model="expecteddate" id="expecteddate" name="expecteddate"
                                                    />
                                                    @error('expecteddate')
                                                    <div  style="color:red" id="e_customer">
                                                        {{$message}}
                                                    </div> 
                                                     @enderror
    
                                            </div>
                                            
                                            <div class="col-md-12 mt-3 mb-3">
                                                <label for="name" class="form-label">Remarks *
                                                </label>
                                                <textarea class="form-control" wire:model="dealrequirments" placeholder="Leave a comment here"
                                                id="contents"></textarea>

                                                @error('dealrequirments')
                                                    <div  style="color:red" id="e_customer">
                                                        {{$message}}
                                                    </div> 
                                                     @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                       
                                        {{-- <input type="submit" name="" id=""> --}}
                                        <button type="submit" class="btn btn-primary mb-5" >Convert
                                            Deal </button>
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
