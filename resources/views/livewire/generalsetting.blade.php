<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="table-responsive">
        <h3 class="card-title align-items-start flex-column mb-4">
            <span class="card-label fw-bold fs-3 mb-1">Settings Page</span>
        </h3>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                </div>
                            </th>
                            <th class="min-w-300px">
                                Setting Title</th>
                            <th class="min-w-450px">
                                Designation</th>
                            <th class="min-w-150px">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-content-center">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                </div>
                            </td>
                            <td class="align-content-center">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <p class="text-gray-900 fw-norma  fs-6">
                                            Project Name</p>
                                    </div>
                                </div>
                            </td>
                    <form wire:submit.prevent="changetitle"  method="post"> 
                            <td class="align-content-center">
                                <input type="text" class="form-control" wire:model="title_heading" id="title_heading"
                                    aria-describedby="emailHelp" >
                                    @error('title_heading')
                                    <div style="color:red" id="e_leadsource">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </td>
                            <td class="align-content-center">
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        {{-- <a href="#" class="btn btn-outline-primary" data-sid="" id="updatesession" >Save Changes</a> --}}
                                        <button type="submit" id="updatesessio" class="btn btn-primary">Save
                                            Changes</button>
                                    </div>
                                </div>
                            </td>
                        </form> 

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


