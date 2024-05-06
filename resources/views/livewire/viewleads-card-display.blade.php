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
    {{-- <div class="col-md-4" >
        <div class="d-flex flex-center w-100">       
            <div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 160px"></div>
        </div>
    </div> --}}
    <div class="">
        <div class="row" >
            <div class="col-md-4 col-12"> 
                <a href="tel:{{$getleads[0]->phone}}" class="btn btn-success mb-3"
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
            <div class="col-md-4 col-12" >
                <button class="btn btn-info mb-3" data-bs-target="#changeleadstage" data-bs-toggle="modal"
                    data-leadids="{{$getleads[0]->leadid }}" style="width:-webkit-fill-available;">
                    <i class="ki-duotone ki-notepad-edit">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <br>Lead Stage: {{$getleads[0]->leadstagetext}} </button>
            </div>
            <div class="col-md-4 col-12 ">
                <button class="btn btn-info mb-3 leadid_inside" data-bs-target="#converttodeals"
                    data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}" data-bs-toggle="modal"
                    data-lid="{{$getleads[0]->leadid }}" style="width:-webkit-fill-available;"><i
                        class="ki-duotone ki-notepad-edit">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i><br>Convert To<br> Deal </button>
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