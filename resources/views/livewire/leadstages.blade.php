<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="table-responsive">
        <div class="card mb-5 mb-xl-10 mt-4">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">List of Lead Stages</span>
                </h3>
                <div>
                    <a href="" wire:click="cancel" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                        data-bs-target="#modal_add_create_stage">
                        <i class="ki-duotone ki-plus fs-2"></i>Create Stage</a>
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
                                    Stages</th>
                                    <th class="min-w-200px">
                                        Stage Logo</th>
                                <th class="min-w-100px text-center">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getleadstage as $stage)
                            <tr>
                                <td class="align-content-center">
                                    <div
                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </td>
                                @if($editleadstageid==$stage->stageid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <p class="text-gray-900 fw-norma  fs-6"
                                                style="text-transform: capitalize">
                                                <input class="form-control" placeholder="Lead Source" wire:model="stagenames" id="stagenames"
                                                name="stagenames" type="text" />
                                            <div style="color:red" id="e_stagename">
                                            </div>
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
                                                {{$stage->stagename}}</p>
                                        </div>
                                    </div>
                                </td>
                                @endif

                                @if($editleadstageid==$stage->stageid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            @if($stage->stageimage==null)
                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" height="50px" width="50" />
                                            @else
                                            <img src=" {{ asset('storage/'.$stage->stageimage) }}" height="50px" width="50"  alt="no image"/>
                                            @endif

                                            <input class="form-control" placeholder="Lead Source" wire:model="stageimage" id="stagenames"
                                            name="stagenames" type="file" />
                                   
                                        <div style="color:red" id="e_stagename">
                                        </div>
                                        </div>
                                    </div>
                                </td>

                                @else
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            @if($stage->stageimage==null)
                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" height="50px" width="50" />
                                            @else
                                            <img src=" {{ asset('storage/'.$stage->stageimage) }}" height="50px"  alt="no image sfdsfsd"/>
                                            {{-- <img src=" {{ asset('storage/app/public/'.$stage->stageimage) }}" height="50px"  alt="no image sfdsfsd"/> --}}
                                            @endif

                                           
                                   
                                       
                                        </div>
                                    </div>
                                </td>

                                @endif

                              
                            
                            
                                @if($editleadstageid==$stage->stageid)

                                <td class="align-content-center">
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                            <div class="d-flex  flex-shrink-0">
                                                <button wire:click="updatePost({{$stage->stageid}})" 
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mx-3">
                                                    <img src={{asset('icons\ok.png')}} alt="dsfdsffsd" />

                                                        </button>
                                                <button wire:click="cancel({{$stage->stageid}})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm "
                                                > 
                                                <img src={{asset('icons\x.png')}} alt="dsfdsffsd" />
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
                                                <button wire:click="update_lead_stage({{$stage->stageid}})" 
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm  mx-3">
                                                    <img src={{asset('icons\Edit.png')}} alt="dsfdsffsd" />

                                                        </button>
                                                <button wire:click="delete_lead_stage({{$stage->stageid}})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm "
                                                > 
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
                    {{$getleadstage->links()}}
                </div>
            </div>
        </div>
    </div>
    {{-- model come here --}}
    <div wire:ignore.self class="modal fade" id="modal_add_create_stage" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="container-xxl" id="kt_content_container">
                    <div class="card-header border-0 pt-2 mt-5">
                        <h3 class="card-title align-items-start flex-column ">
                            <span class="card-label fw-bold fs-3 mb-1 ">Add Lead Stage
                            </span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <form wire:submit.prevent="createleadstage"  method="post">
                        <div class="table-responsive" style=" width: -webkit-fill-available;">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="dateInput" class="form-label">Lead Stage Name *</label>
                                        <input class="form-control" placeholder="Lead Source" wire:model="stagenames" id="stagenames"
                                            name="stagenames" type="text" />
                                      @error('stagenames')
                                      <div style="color:red" id="e_stagename">
                                        {{$message}}
                                    </div>
                                      @enderror
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label for="dateInput" class="form-label">Lead Stage Image</label>
                                        <input class="form-control" placeholder="Lead Source" wire:model="stageimage" id="stagenames"
                                            name="stagenames" type="file" />

                                            @error('stageimage')
                                            <div style="color:red" id="e_stagename">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                      
                                    </div>   
                                    <div class="col-md-12 text-end mt-3">
                                        <button class="btn btn-primary mb-5" id="addleadstag">Create Lead Stage</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
