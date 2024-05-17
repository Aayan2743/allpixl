<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="table-responsive">
        <div class="card mb-5 mb-xl-10 mt-4">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Whatsapp Settings</span>
                </h3>
                <div>
                    <a href="#" wire:click="cancel"
                        class="btn btn-sm btn-light btn-active-primary btn-secondary btn-outline" data-bs-toggle="modal"
                        data-bs-target="#modal_add_template">
                        <i class="ki-duotone ki-plus fs-2"></i>Create Template</a>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th class="w-25px">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </th>
                                <th class="min-w-200px">
                                    Template Name</th>
                                <th class="min-w-400px text-left">
                                    Message</th>
                                <th class=" text-left">
                                    Api Key</th>
                                <th class="min-w-100px text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getwhatsapp as $temp)
                            <tr>
                                <td class="align-content-center">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </td>
                                @if($editleadstageid==$temp->templateid)
                                <td class="align-content-center">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <input class="form-control" placeholder="Template Name"
                                                wire:model="templatename" id="templatename" name="templatename"
                                                type="text" />
                                            @error('templatename')
                                            <div style="color:red" id="e_templatename">
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
                                            <p class="text-gray-900 fw-norma  fs-6">
                                                {{$temp->template_name}}</p>
                                        </div>
                                    </div>
                                </td>
                                @endif
                                @if($editleadstageid==$temp->templateid)
                                <td class="align-content-center">
                                    <textarea class="form-control mb-5" placeholder="Leave a message here"
                                        id="templatemessage" wire:model="templatemessage"
                                        style="height: 150px;"></textarea>
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    @error('templatemessage')
                                    <div style="color:red" id="e_templatename">
                                        {{$message}}
                                    </div>
                                </td>
                                @enderror
                                @else
                                <td class="align-content-center">
                                    {!! $temp->template_message !!}
                                </td>
                                @endif
                                @if($editleadstageid==$temp->templateid)
                                <input class="form-control" placeholder="apikey"
                                wire:model="apikey"
                                type="text" />

                                @else
                                <td class="align-content-center">
                                    {!! $temp->apikey !!}
                                </td>
                                @endif







                                @if($editleadstageid==$temp->templateid)
                                <td class="align-content-center">
                                    <div class="d-flex flex-column w-100 me-2">
                                        <div class="d-flex flex-stack mb-2">
                                <td class="align-content-center">
                                    <div class="d-flex  flex-shrink-0">
                                        <button wire:click="update_changes({{$temp->templateid}})"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mx-3">
                                            <img src={{asset('icons\ok.png')}} alt="dsfdsffsd" />
                                        </button>
                                        <button wire:click="cancel({{$temp->templateid}})"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                            <img src={{asset('icons\x.png')}} alt="dsfdsffsd" />
                                        </button>
                                    </div>
                                </td>
                </div>
            </div>
            </td>
            @else
            <td class="align-content-center">
                <div class="d-flex flex-column w-100 me-2">
                    <div class="d-flex flex-stack mb-2">
            <td class="align-content-center">
                <div class="d-flex  flex-shrink-0">
                    <button wire:click="update({{$temp->templateid }})"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <img src={{asset('icons\Edit.png')}} alt="dsfdsffsd" />
                    </button>
                    <button wire:click="delete({{$temp->templateid }})"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                        <img src={{asset('icons\delete.png')}} alt="dsfdsffsd" />
                    </button>
                </div>
            </td>
        </div>
    </div>
    </td>
    @endif
    </tr>
    @endforeach
    </tbody>
    </table>
    {{$getwhatsapp->links()}}
</div>
</div>
</div>
</div>
{{-- model start here --}}
<div wire:ignore.self class="modal fade" id="modal_add_template" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Whatsapp Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="">
                            <form wire:submit.prevent="create_template" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="dateInput" class="form-label">Template Name *</label>
                                        <input class="form-control" placeholder="Template Name"
                                            wire:model="templatename" id="templatename" name="templatename"
                                            type="text" />
                                        @error('templatename')
                                        <div style="color:red" id="e_templatename">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="dateInput" class="form-label">Api Key *</label>
                                        <input class="form-control" placeholder="Api Key" wire:model="apikey"
                                            id="apikey" name="apikey" type="text" />
                                        @error('templatename')
                                        <div style="color:red" id="apikey">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label for="dateInput" class="form-label">Template Message *</label>
                                        <textarea class="form-control mb-5" placeholder="Leave a message here"
                                            id="templatemessage" wire:model="templatemessage"
                                            style="height: 150px;"></textarea>
                                        {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                        @error('templatemessage')
                                        <div style="color:red" id="e_templatename">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button class="btn btn-primary mb-5" id="createtemplat">Create Whatsapp
                                            Template</button>
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
