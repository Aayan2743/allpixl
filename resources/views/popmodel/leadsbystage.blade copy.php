<div class="card h-100 card-flush h-xl-100">
    <div>
        <div>
            <div class="card-toolbar">
                <div data-select2-id="select2-data-185-oos1">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900 m-0">Leads By Stages</span>
                            <!-- <span class="text-gray-500 mt-1 fw-semibold fs-6">Social activities overview</span> -->
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-9 pb-5">
                        <!--begin::Slider-->
                        <div class="tns tns-initiazlied" data-select2-id="select2-data-184-94pz">
                            <!--begin::Slider wrapper-->
                            <div class="tns-outer" id="tns1-ow" data-select2-id="select2-data-tns1-ow">
                                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">
                                    slide <span class="current">4</span> of 4</div>
                                <div id="tns1-mw" class="tns-ovh" data-select2-id="select2-data-tns1-mw">
                                    <div class="tns-inner" id="tns1-iw" data-select2-id="select2-data-tns1-iw">
                                        <div data-tns="true" data-tns-nav-position="bottom" data-tns-controls="false"
                                            class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                            id="tns1" data-kt-initialized="1" data-select2-id="select2-data-tns1">
                                            <!--begin::Slide-->
                                            <div class="mb-3 tns-item" id="tns1-item0" aria-hidden="true" tabindex="-1"
                                                style="   width: -webkit-fill-available;">
                                                <!--begin::Item-->
                                                @foreach ($counts as $stage => $count)
                                                
                                                <div class="d-flex flex-stack my-8">
                                                    <!--begin::Section-->
                                                    <div class="m-0"> 
                                                        <span class="text-gray-500 fw-semibold fs-6">{{$count->leadstagetext}}</span>
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Statistics-->
                                                    <div
                                                        class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                                        <!--begin::Select-->
                                                        <span
                                                            class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">{{$count->count}}</span>  
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-5"></div>

                                                @endforeach
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                {{-- <div class="d-flex flex-stack my-8">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <span class="text-gray-500 fw-semibold fs-6">Follow Up </span>
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Statistics-->
                                                    <div
                                                        class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                                        <!--begin::Select-->
                                                        <span
                                                            class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">7k</span>
                                                        <!--end::Progress-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack my-8">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <span class="text-gray-500 fw-semibold fs-6">
                                                            To Be Closed</span>
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Statistics-->
                                                    <div
                                                        class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                                        <!--begin::Select-->
                                                        <span
                                                            class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">650</span>
                                                        <!--end::Progress-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div>
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack my-8">
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <span class="text-gray-500 fw-semibold fs-6">
                                                            To Be Closed</span>
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Statistics-->
                                                    <div
                                                        class="d-flex flex-column align-items-end w-100 mw-250px overflow-hidden">
                                                        <!--begin::Select-->
                                                        <span
                                                            class="text-gray-800 fw-bold d-block fs-2hx lh-1 ls-n2">650</span> 
                                                        <!--end::Progress-->
                                                    </div>
                                                    <!--end::Statistics-->
                                                </div> --}}
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Slider wrapper-->
                        </div>
                        <!--end::Slider-->
                    </div>
                    <!--end::Body-->
                </div>
                <!-- <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                </button> -->
                <!-- <h3 class="card-label fw-bold text-gray-900 m-0">Leads By Stages</h3> -->
                <!-- <div class="table-responsive" style="width: -webkit-fill-available;">
                    <div class=" pe-6 ">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th></th>
                                    <th>Name</th>
                                    <th>Leads</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($counts as $stage => $count)
                                <tr>
                                    <td class="align-content-center"> 
                                        <div class="symbol symbol-40px p-4">
                                            {{-- <div class="d-flex justify-content-start flex-column px-5">
                                                <span class="bg-light-success" style="height: 70px;width: 8px;"></span>
                                            </div> --}}
                                            {{-- <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-flask fs-2x text-success"
                                                    style="font-family: 'arial' !important;">
                                                     @if($stage==0)
                                                   L
                                                    @elseif($stage==1)
                                                    P
                                                    @elseif($stage==2)
                                                    D
                                                    @elseif($stage==3)
                                                    F 
                                                    @elseif($stage==4)
                                                    C
                                                    @endif
                                                     -
                                                </i></span>--}}
                                        </div>
                                    </td>
                                    <td class="align-content-center"> 
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <p>
                                                    {{$count->leadstagetext}}
                                                    {{-- @if($stage==0)
                                                    Lead Initiated
                                                    @elseif($stage==1)
                                                    Proposal Sent
                                                    @elseif($stage==2)
                                                    Discussion
                                                    @elseif($stage==3)
                                                    Follow up Mode 
                                                    @elseif($stage==4)
                                                    Closed	
                                                    @endif --}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-content-center"> 
                                        <span class="badge badge-light fw-bold my-2 me-5" style="font-size: large;">
                                            {{$count->count}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- <div>
                    <canvas id="myChart1" width="300" height="300"></canvas>
                </div> -->
    </div>
</div>