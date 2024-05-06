<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="table-responsive">
        <div class="card mb-5 mb-xl-10 mt-4">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Service Settings</span>
                </h3>
                <div>
                    <a href="#" wire:click="cancel" class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline"  data-bs-toggle="modal"
                        data-bs-target="#modal_add_course">
                        <i class="ki-duotone ki-plus fs-2"></i>Create Service</a>
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
                                    Service Name</th>
                                    <th class="min-w-200px">
                                        Service Image</th>
                                <th class="min-w-100px text-center">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getprojects as $project)
                            <tr>
                                <td class="align-content-center">
                                    <div
                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </td>
                                @if($editleadstageid==$project->pid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input class="form-control" placeholder="Course Name" wire:model="coursename" id="coursename"
                                            name="coursename" type="text" />
                                                @error('coursename')
                                                <div style="color:red" id="e_coursename11">
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
                                                style="text-transform: capitalize">
                                                {{$project->Project_Name}}
                                               </p>
                                        </div>
                                    </div>
                                </td>
                                @endif
                                @if($editleadstageid==$project->pid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            @if($project->projectimage==null)
                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" height="50px" width="50" />
                                            @else
                                            <img src=" {{ asset('storage/'.$project->projectimage) }}" height="50px" width="50"  alt="no image"/>
                                            @endif
                                            <input class="form-control" placeholder="Course Name" wire:model="courseimage" id="coursename"
                                            name="coursename" type="file" />
                                                @error('courseimage')
                                                <div style="color:red" id="e_coursename11">
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
                                            @if($project->projectimage==null)
                                            <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="photo" height="50px" width="50" />
                                            @else
                                            <img src=" {{ asset('storage/'.$project->projectimage) }}" height="50px" width="50"  alt="no image"/>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                @endif

                                @if($editleadstageid==$project->pid)
                                <td class="align-content-center">
                                    <div class="d-flex  flex-shrink-0"> 
                                         <button wire:click="update_changes({{$project->pid}})" 
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <img src={{asset('icons\ok.png')}} alt="dsfdsffsd" />
                                                </button>
                                             <button wire:click="cancel({{$project->pid}})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm "
                                        > 
                                        <img src={{asset('icons\x.png')}} alt="dsfdsffsd" />
                                    </button> 
                                    </div>
                                </td>
                                @else


                                <td class="align-content-center">
                                    <div class="d-flex  flex-shrink-0"> 
                                         <button wire:click="update({{$project->pid}})" 
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <img src={{asset('icons\Edit.png')}} alt="dsfdsffsd" />
                                                </button>
                                    <button wire:click="delete({{$project->pid}})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm "
                                        > 
                                        <img src={{asset('icons\delete.png')}} alt="dsfdsffsd" />
                                    </button> 
                                    </div>
                                </td>
                                
                                
                                @endif

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$getprojects->links()}}
                </div>
            </div>
        </div>
    </div>
{{-- model start here --}}
<div wire:ignore.self class="modal fade" id="modal_add_course" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Service Name
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="">
                            <form wire:submit.prevent="create_project" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Service Name *</label>
                                    <input class="form-control" placeholder="Course Name" wire:model="coursename" id="coursename"
                                        name="coursename" type="text" />
                                  @error('coursename')
                                  <div style="color:red" id="e_coursename11">
                                    {{$message}}
                                   </div>
                                  @enderror
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label for="dateInput" class="form-label">Service Name Image</label>
                                    <input class="form-control" placeholder="Course Name" wire:model="courseimage" id="coursename"
                                        name="coursename" type="file" />
                                  @error('courseimage')
                                  <div style="color:red" id="e_coursename11">
                                    {{$message}}
                                   </div>
                                  @enderror
                                </div>
                                <div class="col-md-12 text-end mt-3">
                                    <button class="btn btn-primary mb-5" id="createcours">Create Service Name</button>
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
