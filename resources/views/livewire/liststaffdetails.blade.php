<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card-header position-relative p-0" style="width:-webkit-fill-available;">
        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
            <li class="nav-item p-0 ms-0 me-8" role="presentation"
                style="align-items: center;display: flow;align-self: center;">
                <div class="d-flex">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-category fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Staff Details</span>
                    </h3>
                </div>
            </li>
        </ul>
        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
            <li class="nav-item p-0 ms-0 me-8" role="presentation">
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                    data-bs-original-title="Click to Show All " data-kt-initialized="1">
                    @if(session()->get('role')==1)
                    <a href="#" wire:click="cancel"
                        class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" data-bs-toggle="modal"
                        data-bs-target="#modal_add_staff">
                        <i class="ki-duotone ki-plus fs-2"></i>Add Staff</a>
                        @endif
                </div> 
            </li>
        </ul>
    </div>
    <div class="table-responsive">
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tableaddstaff">
            <thead>
                <tr class="fw-bold text-muted">
                    <th class="w-25px">
                        #S Id
                    </th>
                    <th class="w-25px">
                    </th>
                    <th class="min-w-150px">Staff Name</th>
                    <th class="min-w-150px">
                        Designation</th>
                    <th class="min-w-150px">
                        Email</th>
                    <th class="min-w-100px">
                        Mobile</th>
                    <th class="min-w-100px">
                        Role</th>
                    <th class="min-w-100px">
                        Password</th>
                    @if(session()->get('role')==1)
                    <th class="min-w-100px">
                        Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($getempdetails as $l=> $emp)
                <tr>
                    @if($editid!="")
                    <td class="align-content-center">
                        {{$emp->uid}}
                    </td>
                    @else
                    <td class="align-content-center">
                        {{$emp->uid}}
                    </td>
                    @endif
                    @if($editid!="")
                    <td class="align-content-center">
                    </td>
                    @else
                    <td class="align-content-center">
                        @if($emp->imagepath==null)
                        <div class="symbol symbol-40px">
                            @if( $l%2==1)
                            <span class="symbol-label bg-light-success">
                                <i class="ki-duotone ki-flask fs-2x text-success"
                                    style="font-family: 'arial' !important;text-transform: capitalize;">{{$emp->fs}}</span></i>
                            </span>
                            @elseif( $l%2==0)
                            <span class="symbol-label bg-light-info">
                                <i class="ki-duotone ki-flask fs-2x text-info"
                                    style="font-family: 'arial' !important;text-transform: capitalize;">{{$emp->fs}}</span></i>
                            </span>
                            @endif
                        </div>
                        @else
                        <div class="symbol symbol-40px">
                            <span class="symbol-label bg-light-success">
                                <img src=" {{ asset($emp->imagepath) }}" class="rounded" height="50px" width="50" alt="no image" />    
                            </span>
                            
                          
                        </div>
                        @endif
                    </td>
                    @endif
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-start flex-column">
                                <input class="form-control" placeholder="Employee Name" wire:model="empname"
                                    id="empname" name="empname" type="text" />
                                @error('empname')
                                <div style="color:red" id="e_empname">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </td>
                    @else
                    <td class="align-content-center">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-start flex-column">
                                <p class="text-gray-900 fw-norma  fs-6"
                                    style="text-transform: capitalize;font-weight:800 !important;">
                                    {{$emp->fullname}} </p>
                            </div>
                        </div>
                    </td>
                    @endif
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <input type="text" class="form-control" id="empdesignation" wire:model="empdesignation"
                            name="empdesignation" placeholder="Employee Designation">
                        @error('empdesignation')
                        <div style="color:red" id="e_empname">
                            {{$message}}
                        </div>
                        @enderror
                    </td>
                    @else
                    <td class="align-content-center">
                        <p class="text-gray-900 fw-norma  d-block fs-6" style="text-transform: capitalize">
                            {{$emp->designation}}
                        </p>
                    </td>
                    @endif
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <input type="text" class="form-control" id="empemail" wire:model="empemail" name="empemail"
                            placeholder="Employee Email">
                        @error('empemail')
                        <div style="color:red" id="e_empname">
                            {{$message}}
                        </div>
                        @enderror
                    </td>
                    @else
                    <td class="align-content-center">
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <p class="text-gray-900 fw-norma  fs-6" style="font-weight:800 !important;">
                                    {{$emp->email}}</p>
                            </div>
                        </div>
                    </td>
                    @endif
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <input type="text" class="form-control" id="empmobile" name="empmobile" wire:model="empmobile"
                            placeholder="Employee Phone Number">
                        @error('empmobile')
                        <div style="color:red" id="e_empname">
                            {{$message}}
                        </div>
                        @enderror
                    </td>
                    @else
                    <td class="align-content-center">
                        <div class="d-flex  flex-shrink-0">
                            <div class="d-flex flex-stack mb-2">
                                <p class="text-gray-900 fw-norma  fs-6" style="font-weight:800 !important;">
                                    <a href="tel:{{$emp->mobile}}">{{$emp->mobile}}</a></p>
                            </div>
                        </div>
                    </td>
                    @endif
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <select class="form-control" id="emprole" name="emprole" wire:model="emprole">
                            <option value="0">Staff</option>
                            <option value="1">Admin</option>
                        </select>
                        @error('emprole')
                        <div style="color:red" id="e_empname">
                            {{$message}}
                        </div>
                        @enderror
                    </td>
                    @else
                    <td class="align-content-center">
                        <div class="d-flex  flex-shrink-0">
                            <div class="d-flex flex-stack mb-2">
                                <p class="text-gray-900 fw-norma  fs-6">
                                    @if($emp->role==0)
                                    Staff
                                    @elseif($emp->role==1)
                                    Admin
                                    @elseif($emp->role==2)
                                    Super Admin
                                    @endif
                                </p>
                            </div>
                        </div>
                    </td>
                    @endif
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <div class="d-flex  flex-shrink-0">
                            <input type="password" class="form-control" id="password" wire:model="password"
                                name="password" placeholder="Employee Designation">
                            @error('password')
                            <div style="color:red" id="e_empname">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </td>
                    @else
                    <td class="align-content-center">
                        <div class="d-flex flex-column w-100 me-2">
                            <div class="d-flex flex-stack mb-2">
                                <p class="text-gray-900 fw-norma  fs-6" style="font-weight:800 !important;">
                                    *********</p>
                            </div>
                        </div>
                    </td>
                    @endif
                    @if(session()->get('role')==1 && $emp->uid!=session()->get('role'))
                    @if($editid==$emp->uid)
                    <td class="align-content-center">
                        <div class="d-flex  flex-shrink-0">
                            <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mx-3"
                                wire:click="update_changes({{$emp->uid }})">
                                <img src={{asset('icons\ok.png')}} alt="dsfdsffsd"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="edit"/>
                            </button>
                            <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                wire:click="cancel({{$emp->uid }})">
                                <img src={{asset('icons\x.png')}} alt="dsfdsffsd" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="delete"/>
                            </button>
                        </div>
                    </td>
                    @else
                    <td class="align-content-center">
                        <div class="d-flex  flex-shrink-0">
                            <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mx-3"
                                wire:click="editPost({{$emp->uid}})">
                                <img src={{asset('icons\Edit.png')}} alt="dsfdsffsd" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="edit"/>
                            </button>
                            <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                wire:click="deletePost({{$emp->uid }})">
                                <img src={{asset('icons\delete.png')}} alt="dsfdsffsd" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="delete" />
                            </button>
                        </div>
                    </td>
                    @endif
                    @elseif(session()->get('role')==1 && $emp->uid==session()->get('role'))
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$getempdetails->links()}}
    </div>
    {{-- model start here --}}
    <div wire:ignore.self class="modal fade" id="modal_add_staff" tabindex="-1" aria-hidden="true">
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
                                <form wire:submit.prevent="create_new_employee" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Employee Name</label>
                                            <input class="form-control" placeholder="Employee Name" wire:model="empname"
                                                id="empname" name="empname" type="text" />
                                            @error('empname')
                                            <div style="color:red" id="e_empname">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Employee Email *
                                            </label>
                                            <input type="text" class="form-control" id="empemail" wire:model="empemail"
                                                name="empemail" placeholder="Employee Email">
                                            @error('empemail')
                                            <div style="color:red" id="e_empname">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="name" class="form-label">Employee Password*
                                            </label>
                                            <input type="password" class="form-control" id="emppassword"
                                                wire:model="emppassword" name="emppassword" placeholder="Password"
                                                value="">
                                            @error('emppassword')
                                            <div style="color:red" id="e_empname">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="name" class="form-label">Employee Role *
                                            </label>
                                            <select class="form-control" id="emprole" name="emprole"
                                                wire:model="emprole">

                                                <option value="">Select Staff Role</option>
                                                <option value="0">Staff</option>
                                                <option value="1">Admin</option>
                                            </select>
                                            @error('emprole')
                                            <div style="color:red" id="e_empname">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <label for="name" class="form-label">Employee Designation*
                                            </label>
                                            <input type="text" class="form-control" id="empdesignation"
                                                wire:model="empdesignation" name="empdesignation"
                                                placeholder="Employee Designation">
                                            @error('empdesignation')
                                            <div style="color:red" id="e_empname">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="dateInput" class="form-label">Employee Mobile *</label>
                                            <input type="text" class="form-control" id="empmobile" name="empmobile"
                                                wire:model="empmobile" placeholder="Employee Phone Number">
                                            @error('empmobile')
                                            <div style="color:red" id="e_empname">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 text-end mt-5">
                                            <button class="btn btn-primary mb-5" id="">Add Employee</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- --}}
                </div>
            </div>
        </div>
    </div>
</div>