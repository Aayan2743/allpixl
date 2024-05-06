<div>
    {{-- Stop trying to control. --}}
    <div class="table-responsive">
        <div class="card mb-5 mb-xl-10 mt-4">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">List of Lead Sources</span>
                </h3>
                <div>
                    <a href="#" wire:click="resetpost"  data-bs-toggle="modal" data-bs-target="#addsource"
                        class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal">
                        <i class="ki-duotone ki-plus fs-2"></i>Create Source</a>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th class="w-25px">
                                    <div
                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </th>
                                <th class="min-w-600px">
                                    Sources</th>
                                <th class="min-w-100px text-center">
                                    Image</th>
                                    <th class="min-w-100px text-center">
                                        Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getleadsource as $leadsource)
                            <tr>
                                <td class="align-content-center">
                                    <div
                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </td>
                                @if($editid==$leadsource->lsid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <p class="text-gray-900 fw-norma  fs-6"
                                                style="text-transform: capitalize">
                                               
                                                <input class="form-control" placeholder="Lead Source" wire:model="leadsources" id="leadsources"
                                                name="leadsources" type="text" />

                                                @error('leadsources')
                                                <div style="color:red" id="e_leadsource">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                @else
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <p class="text-gray-900 fw-norma  fs-6"
                                                style="text-transform: capitalize">
                                                {{$leadsource->leadsource}}</p>
                                        </div>
                                    </div>
                                </td>

                                @endif
                              
                                @if($editid==$leadsource->lsid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            @if($leadsource->imagepath==null)
                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" height="50px" width="50" />
                                            @else
                                            <img src=" {{ asset('storage/'.$leadsource->imagepath) }}" height="50px" width="50"  alt="nodvgdfgvfdgvdfg image"/>
                                            @endif
                                            
                                            <input class="form-control"  wire:model="leadsources_image" 
                                            type="file" />
                                            
                                        </div>
                                    </div>
                                </td>

                                @else

                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            @if($leadsource->imagepath==null)
                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" height="50px" width="50" />
                                            @else
                                            {{-- <img src=" {{asset('storage/'.$leadsource->imagepath) }}" height="50px" width="50"  alt="no image"/> --}}
                                            <img src="{{asset('storage/'.$leadsource->imagepath) }}" height="50px" width="50"  alt="no image"/>
                                           
                                            {{-- <img src=" {{ asset('storage/app/public/'.$leadsource->imagepath) }}" height="50px" width="50"  alt="no image"/> --}}
                                            @endif
                                        </div>
                                    </div>
                                </td>

                                @endif

                                @if($editid==$leadsource->lsid)
                                <td class="align-content-center">
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                            <div class="d-flex  flex-shrink-0">
                                              
                                               

                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mx-3" wire:click="updatePost({{$leadsource->lsid}})" >
                                                    {{-- <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i> --}}

                                                    <img src={{asset('icons\ok.png')}} alt="dsfdsffsd" />
                                                   
                                                </button>
                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" wire:click="resetpost()" >
                                                    <img src={{asset('icons\x.png')}} alt="dsfdsffsd" />
                                                    {{-- <i class="ki-duotone ki-trash fs-2 ">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i> --}}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                @else

                                <td class="align-content-center">
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                            <div class="d-flex  flex-shrink-0">
                                                {{-- <a data-leadid="{{$leadsource->lsid}}"
                                                    data-bs-target="#editleadsource"
                                                    data-bs-toggle="modal"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 leadid">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a> --}}
                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mx-3" wire:click="editPost({{$leadsource->lsid}})" >
                                                    {{-- <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i> --}}

                                                    <img src={{asset('icons\Edit.png')}} alt="dsfdsffsd" />
                                                </button>
                                                <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" wire:click="deletePost({{$leadsource->lsid}})" >
                                                    {{-- <i class="ki-duotone ki-trash fs-2 ">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i> --}}
                                                    <img src={{asset('icons\delete.png')}} alt="dsfdsffsd" />
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </td>


                                @endif

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$getleadsource->links()}}
                </div>
            </div>
        </div>
    </div>
    {{-- model start here --}}
    <div wire:ignore.self class="modal fade" id="addsource" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2 mt-5">
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="card-label fw-bold fs-3 mb-1 ">Add Leads Source 
                            </span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive" style=" width: -webkit-fill-available;">
                            <div class="">
                                <div class="row">
                                    <form wire:submit.prevent="createleadsource" method="post">
                                    <div class="col-md-12">
                                        <label for="dateInput" class="form-label">Lead Source *</label>
                                        <input class="form-control" placeholder="Lead Source" wire:model="leadsources" id="leadsources"
                                            name="leadsources" type="text" />
                                        {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                        @error('leadsources')
                                        <div style="color:red" id="e_leadsource">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label for="dateInput" class="form-label">Lead Source Image </label>
                                        <input class="form-control"  wire:model="leadsources_image" 
                                             type="file" />
                                        {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                        @error('leadsources_image')
                                        <div style="color:red" id="e_leadsource">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 text-end mt-3">
                                        <button class="btn btn-primary mb-5" id="addleadsourc">Create Lead Source</button>
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
</div>
