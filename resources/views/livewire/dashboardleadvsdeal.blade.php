<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <!-- <div class="card card-xl-stretch mb-5 mb-xl-10 mt-5">
    <div class="card-header border-0 pt-2">
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </button>
            <h3 class="card-label fw-bold text-gray-900 m-0">Lead's Vs Deal's</h3>
        </div>
    </div>
    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
        <div class="table-responsive" style="    width: -webkit-fill-available;">
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <thead>
                    <tr class="fw-bold text-muted">
                        <th></th>
                        <th>Name</th>
                        <th>Leads</th>
                        <th>Deals</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-content-center"> 
                            {{-- <div class="symbol symbol-40px p-4">
                                @if($l%2==0)
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                        style="font-family: 'arial' !important; text-transform: capitalize;" >{{$staff->fs}}</i></span>
                            @elseif($l%2==1)
                            <span class="symbol-label bg-light-info">
                                <i class="ki-duotone ki-flask fs-2x text-info"
                                    style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                            @endif
        </div> --}}
        </td>
        <td class="align-content-center"> 
            <div class="d-flex align-items-center">
                <div class="d-flex justify-content-start flex-column">
                    <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize;">Currrent Day</p>
                </div>
            </div>
        </td>
        <td class="align-content-center"> 
            <span class="badge badge-light fw-bold my-2 me-5" style="font-size: large;">{{$getleadbytoday}}</span>
        </td>
        <td class="align-content-center"> 
            <div class="d-flex flex-column w-100 me-2">
                <div class="d-flex flex-stack mb-2">
                    <span class="badge badge-light fw-bold my-2 me-5"
                        style="font-size: large;">{{$getdealsbytoday}}</span>
                </div>
            </div>
        </td>
        </tr>
        <tr>
            <td class="align-content-center"> 
                {{-- <div class="symbol symbol-40px p-4">
                                @if($l%2==0)
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                        style="font-family: 'arial' !important; text-transform: capitalize;" >{{$staff->fs}}</i></span>
                @elseif($l%2==1)
                <span class="symbol-label bg-light-info">
                    <i class="ki-duotone ki-flask fs-2x text-info"
                        style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
                @endif
    </div> --}}
    </td>
    <td class="align-content-center"> 
        <div class="d-flex align-items-center">
            <div class="d-flex justify-content-start flex-column">
                <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize;">Currrent Week</p>
            </div>
        </div>
    </td>
    <td class="align-content-center"> 
        <span class="badge badge-light fw-bold my-2 me-5" style="font-size: large;">{{$getleadsbythisweek}}</span>
    </td>
    <td class="align-content-center"> 
        <div class="d-flex flex-column w-100 me-2">
            <div class="d-flex flex-stack mb-2">
                <span class="badge badge-light fw-bold my-2 me-5"
                    style="font-size: large;">{{$getdealsbythisweek}}</span>
            </div>
        </div>
    </td>
    </tr>
    <tr>
        <td class="align-content-center"> 
            {{-- <div class="symbol symbol-40px p-4">
                                @if($l%2==0)
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-flask fs-2x text-success"
                                        style="font-family: 'arial' !important; text-transform: capitalize;" >{{$staff->fs}}</i></span>
            @elseif($l%2==1)
            <span class="symbol-label bg-light-info">
                <i class="ki-duotone ki-flask fs-2x text-info"
                    style="font-family: 'arial' !important; text-transform: capitalize;">{{$staff->fs}}</i></span>
            @endif
</div> --}}
</td>
<td class="align-content-center"> 
    <div class="d-flex align-items-center">
        <div class="d-flex justify-content-start flex-column">
            <p class="text-gray-900 fw-norma  fs-6" style="text-transform: capitalize;">Currrent Month</p>
        </div>
    </div>
</td>
<td class="align-content-center"> 
    <span class="badge badge-light fw-bold my-2 me-5" style="font-size: large;">{{$getleadsbythimonth}}</span>
</td>
<td class="align-content-center"> 
    <div class="d-flex flex-column w-100 me-2">
        <div class="d-flex flex-stack mb-2">
            <span class="badge badge-light fw-bold my-2 me-5" style="font-size: large;">{{$getdealsbythimonth}}</span>
        </div>
    </div>
</td>
</tr>
{{-- @endforeach --}}
</tbody>
</table>
</div>
</div>
</div> -->
<div class="card mb-2">
    <!--begin::Header-->
    <div class="card-header position-relative py-0">
        <!--begin::Nav-->
        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3" role="tablist">
            <!--begin::Item-->
            <li class="nav-item p-0 ms-0 me-8" role="presentation">
                <!--begin::Link-->
                <!-- <a class="nav-link btn btn-color-muted px-0 active" data-bs-toggle="tab" id="kt_chart_widgets_22_tab_1"
                    href="#kt_chart_widgets_22_tab_content_1" aria-selected="true" role="tab"> -->
                    <!--begin::Subtitle-->
                    <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900 m-0">Lead's Vs Deal's</span>
                            <!-- <span class="text-gray-500 mt-1 fw-semibold fs-6">Social activities overview</span> -->
                        </h3>
                    <!-- <span class="card-label fw-bold text-gray-900 m-0">
                        Lead's Vs Deal's
                    </span> -->
                    <!--end::Subtitle-->
                    <!--begin::Bullet-->
                    <!-- <span
                        class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span> -->
                    <!--end::Bullet-->
                <!-- </a> -->
                <!--end::Link-->
            </li>
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
        <!--begin::Toolbar-->

        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pb-1">
        <!--begin::Tab Content-->
        <div class="tab-content">
            <!--begin::Tap pane-->
            <div class="tab-pane fade active show" id="kt_chart_widgets_22_tab_content_1" role="tabpanel"
                aria-labelledby="kt_chart_widgets_22_tab_1">
                <!--begin::Wrapper-->
                <div class="d-flex flex-wrap flex-md-nowrap">
                    <!--begin::Items-->
                    <div class="me-md-5 w-100">
                        <!--begin::Item-->
                        <div class="d-flex border border-gray-300 border-dashed rounded p-4 mb-3">
                            <!--begin::Block-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-4">
                                    <span class="symbol-label">
                                        <i class="ki-duotone ki-timer fs-2qx text-primary"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="me-2">
                                    <h6 class="text-gray-800 fs-6 fw-bold">Today</h6> 
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">{{$getleadbytoday}}<span
                                        class="text-muted mt-1 fw-semibold fs-7"> Leads</span></span>
                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1"> &nbsp; |  &nbsp;</span>
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">{{$getdealsbytoday}} <span
                                        class="text-muted mt-1 fw-semibold fs-7"> Deals</span></span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex border border-gray-300 border-dashed rounded p-4 mb-3">
                            <!--begin::Block-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-4">
                                    <span class="symbol-label">
                                        <i class="ki-duotone ki-element-11 fs-2qx text-primary"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="me-2">
                                    <a class="text-gray-800 fs-6 fw-bold">Week</a> 
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">{{$getleadsbythisweek}} <span
                                        class="text-muted mt-1 fw-semibold fs-7"> Leads</span></span>
                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1"> &nbsp; |  &nbsp;</span>
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">{{$getdealsbythisweek}} <span
                                        class="text-muted mt-1 fw-semibold fs-7"> Deals</span></span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex border border-gray-300 border-dashed rounded p-4 mb-3">
                            <!--begin::Block-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-4">
                                    <span class="symbol-label">
                                        <i class="ki-duotone ki-abstract-24 fs-2qx text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="me-2">
                                    <a class="text-gray-800 fs-6 fw-bold">Month</a> 
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">{{$getleadsbythimonth}} <span
                                        class="text-muted mt-1 fw-semibold fs-7"> Leads </span></span>
                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1"> &nbsp; |  &nbsp;</span>
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">{{$getdealsbythimonth}} <span
                                        class="text-muted mt-1 fw-semibold fs-7"> Deals</span></span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                    </div> 
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Tap pane-->
            <!--begin::Tap pane-->
            <div class="tab-pane fade" id="kt_chart_widgets_22_tab_content_2" role="tabpanel"
                aria-labelledby="kt_chart_widgets_22_tab_2">
                <!--begin::Wrapper-->
                <div class="d-flex flex-wrap flex-md-nowrap">
                    <!--begin::Items-->
                    <div class="me-md-5 w-100">
                        <!--begin::Item-->
                        <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-5">
                            <!--begin::Block-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-4">
                                    <span class="symbol-label">
                                        <i class="ki-duotone ki-element-11 fs-2qx text-primary"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span><span class="path4"></span></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Homeworks</a>
                                    <span class="text-gray-500 fw-bold d-block fs-7">Don’t forget to turn in your
                                        task</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">423</span>
                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">154</span>
                                <span class="badge badge-lg badge-light-danger align-self-center px-2">74%</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-5">
                            <!--begin::Block-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-4">
                                    <span class="symbol-label">
                                        <i class="ki-duotone ki-abstract-24 fs-2qx text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>
                                    <span class="text-gray-500 fw-bold d-block fs-7">You take 12 subjects at this
                                        semester</span>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">43</span>
                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">53</span>
                                <span class="badge badge-lg badge-light-info align-self-center px-2">65%</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-5">
                            <!--begin::Block-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-50px me-4">
                                    <span class="symbol-label">
                                        <i class="ki-duotone ki-timer fs-2qx text-primary"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="me-2">
                                    <a class="text-gray-800 text-hover-primary fs-6 fw-bold">Attendance</a> 
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <span class="text-gray-900 fw-bolder fs-2x" style="text-align: -webkit-center;">53</span>
                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">94</span>
                                <span class="badge badge-lg badge-light-primary align-self-center px-2">87%</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                    <!--begin::Container-->
                    <div
                        class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
                        <!--begin::Title-->
                        <div class="fs-4 fw-bold text-gray-900 text-center mb-5">
                            Session Attendance <br>
                            for Current Academic Year
                        </div>
                        <!--end::Title-->
                        <!--begin::Chart-->
                        <div id="kt_chart_widgets_22_chart_2" class="mx-auto mb-4" style="min-height: 191.133px;">
                            <div id="apexchartsm9xo5cbgf"
                                class="apexcharts-canvas apexchartsm9xo5cbgf apexcharts-theme-light"
                                style="width: 250px; height: 191.133px;"><svg id="SvgjsSvg2191" width="250"
                                    height="191.13333333333335" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="250" height="191.13333333333335">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                                    </foreignObject>
                                    <g id="SvgjsG2193" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(33.83333333333333, 0)">
                                        <defs id="SvgjsDefs2192">
                                            <clipPath id="gridRectMaskm9xo5cbgf">
                                                <rect id="SvgjsRect2194" width="188.33333333333334"
                                                    height="210.33333333333334" x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskm9xo5cbgf"></clipPath>
                                            <clipPath id="nonForecastMaskm9xo5cbgf"></clipPath>
                                            <clipPath id="gridRectMarkerMaskm9xo5cbgf">
                                                <rect id="SvgjsRect2195" width="188.33333333333334"
                                                    height="210.33333333333334" x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <filter id="SvgjsFilter2204" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2205" flood-color="#000000"
                                                    flood-opacity="0.45" result="SvgjsFeFlood2205Out"
                                                    in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2206" in="SvgjsFeFlood2205Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2206Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2207" dx="1" dy="1"
                                                    result="SvgjsFeOffset2207Out" in="SvgjsFeComposite2206Out">
                                                </feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2208" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2208Out" in="SvgjsFeOffset2207Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2209" result="SvgjsFeMerge2209Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2210"
                                                        in="SvgjsFeGaussianBlur2208Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2211" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2212" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2209Out" mode="normal"
                                                    result="SvgjsFeBlend2212Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter2217" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2218" flood-color="#000000"
                                                    flood-opacity="0.45" result="SvgjsFeFlood2218Out"
                                                    in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2219" in="SvgjsFeFlood2218Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2219Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2220" dx="1" dy="1"
                                                    result="SvgjsFeOffset2220Out" in="SvgjsFeComposite2219Out">
                                                </feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2221" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2221Out" in="SvgjsFeOffset2220Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2222" result="SvgjsFeMerge2222Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2223"
                                                        in="SvgjsFeGaussianBlur2221Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2224" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2225" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2222Out" mode="normal"
                                                    result="SvgjsFeBlend2225Out"></feBlend>
                                            </filter>
                                            <filter id="SvgjsFilter2230" filterUnits="userSpaceOnUse" width="200%"
                                                height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood2231" flood-color="#000000"
                                                    flood-opacity="0.45" result="SvgjsFeFlood2231Out"
                                                    in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite2232" in="SvgjsFeFlood2231Out"
                                                    in2="SourceAlpha" operator="in" result="SvgjsFeComposite2232Out">
                                                </feComposite>
                                                <feOffset id="SvgjsFeOffset2233" dx="1" dy="1"
                                                    result="SvgjsFeOffset2233Out" in="SvgjsFeComposite2232Out">
                                                </feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur2234" stdDeviation="1 "
                                                    result="SvgjsFeGaussianBlur2234Out" in="SvgjsFeOffset2233Out">
                                                </feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge2235" result="SvgjsFeMerge2235Out"
                                                    in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode2236"
                                                        in="SvgjsFeGaussianBlur2234Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode2237" in="[object Arguments]">
                                                    </feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend2238" in="SourceGraphic"
                                                    in2="SvgjsFeMerge2235Out" mode="normal"
                                                    result="SvgjsFeBlend2238Out"></feBlend>
                                            </filter>
                                        </defs>
                                        <g id="SvgjsG2196" class="apexcharts-pie">
                                            <g id="SvgjsG2197" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle2198" r="42.95934959349594"
                                                    cx="92.16666666666667" cy="92.16666666666667" fill="transparent">
                                                </circle>
                                                <g id="SvgjsG2199" class="apexcharts-slices">
                                                    <g id="SvgjsG2200" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sales" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2201"
                                                            d="M 92.16666666666667 6.247967479674784 A 85.91869918699189 85.91869918699189 0 1 1 6.983013861801382 103.38130731204477 L 49.57484026423403 97.77398698935572 A 42.95934959349594 42.95934959349594 0 1 0 92.16666666666667 49.20731707317073 L 92.16666666666667 6.247967479674784 z "
                                                            fill="rgba(114,57,234,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="262.5" data:startAngle="0"
                                                            data:strokeWidth="0" data:value="70"
                                                            data:pathOrig="M 92.16666666666667 6.247967479674784 A 85.91869918699189 85.91869918699189 0 1 1 6.983013861801382 103.38130731204477 L 49.57484026423403 97.77398698935572 A 42.95934959349594 42.95934959349594 0 1 0 92.16666666666667 49.20731707317073 L 92.16666666666667 6.247967479674784 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2213" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sales" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath2214"
                                                            d="M 6.983013861801382 103.38130731204477 A 85.91869918699189 85.91869918699189 0 0 1 27.569568411074513 35.51653191888188 L 59.86811753887059 63.841599292774276 A 42.95934959349594 42.95934959349594 0 0 0 49.57484026423403 97.77398698935572 L 6.983013861801382 103.38130731204477 z "
                                                            fill="rgba(23,198,83,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="48.75" data:startAngle="262.5"
                                                            data:strokeWidth="0" data:value="13"
                                                            data:pathOrig="M 6.983013861801382 103.38130731204477 A 85.91869918699189 85.91869918699189 0 0 1 27.569568411074513 35.51653191888188 L 59.86811753887059 63.841599292774276 A 42.95934959349594 42.95934959349594 0 0 0 49.57484026423403 97.77398698935572 L 6.983013861801382 103.38130731204477 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2226" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sales" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath2227"
                                                            d="M 27.569568411074513 35.51653191888188 A 85.91869918699189 85.91869918699189 0 0 1 80.95202602128857 6.983013861801382 L 86.55934634397762 49.57484026423403 A 42.95934959349594 42.95934959349594 0 0 0 59.86811753887059 63.841599292774276 L 27.569568411074513 35.51653191888188 z "
                                                            fill="rgba(27,132,255,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="41.25" data:startAngle="311.25"
                                                            data:strokeWidth="0" data:value="11"
                                                            data:pathOrig="M 27.569568411074513 35.51653191888188 A 85.91869918699189 85.91869918699189 0 0 1 80.95202602128857 6.983013861801382 L 86.55934634397762 49.57484026423403 A 42.95934959349594 42.95934959349594 0 0 0 59.86811753887059 63.841599292774276 L 27.569568411074513 35.51653191888188 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2239" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sales" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath2240"
                                                            d="M 80.95202602128857 6.983013861801382 A 85.91869918699189 85.91869918699189 0 0 1 92.15167102484435 6.247968788291402 L 92.15916884575552 49.20731772747904 A 42.95934959349594 42.95934959349594 0 0 0 86.55934634397762 49.57484026423403 L 80.95202602128857 6.983013861801382 z "
                                                            fill="rgba(248,40,90,1)" fill-opacity="1" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="7.5" data:startAngle="352.5"
                                                            data:strokeWidth="0" data:value="2"
                                                            data:pathOrig="M 80.95202602128857 6.983013861801382 A 85.91869918699189 85.91869918699189 0 0 1 92.15167102484435 6.247968788291402 L 92.15916884575552 49.20731772747904 A 42.95934959349594 42.95934959349594 0 0 0 86.55934634397762 49.57484026423403 L 80.95202602128857 6.983013861801382 z ">
                                                        </path>
                                                    </g>
                                                    <g id="SvgjsG2202" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2203" font-family="inherit"
                                                            x="140.6144903583608" y="134.65426772750527"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2204)"
                                                            style="font-family: inherit;">72.9%</text></g>
                                                    <g id="SvgjsG2215" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2216" font-family="inherit"
                                                            x="30.50236503241066" y="73.4610052689523"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2217)"
                                                            style="font-family: inherit;">13.5%</text></g>
                                                    <g id="SvgjsG2228" class="apexcharts-datalabels"><text
                                                            id="SvgjsText2229" font-family="inherit"
                                                            x="61.790320844854804" y="35.33652080304827"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="12px" font-weight="600" fill="#ffffff"
                                                            class="apexcharts-text apexcharts-pie-label"
                                                            filter="url(#SvgjsFilter2230)"
                                                            style="font-family: inherit;">11.5%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2241" x1="0" y1="0" x2="184.33333333333334" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2242" x1="0" y1="0" x2="184.33333333333334" y2="0"
                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(114, 57, 234);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(23, 198, 83);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(27, 132, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(248, 40, 90);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Labels-->
                        <div class="mx-auto">
                            <!--begin::Label-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Bullet-->
                                <div class="bullet bullet-dot w-8px h-7px bg-success me-2"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-8 fw-semibold text-muted">Precent(133)</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Bullet-->
                                <div class="bullet bullet-dot w-8px h-7px bg-primary me-2"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-8 fw-semibold text-muted">Illness(9)</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Bullet-->
                                <div class="bullet bullet-dot w-8px h-7px bg-info me-2"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-8 fw-semibold text-muted">Late(2)</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Bullet-->
                                <div class="bullet bullet-dot w-8px h-7px bg-danger me-2"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="fs-8 fw-semibold text-muted">Absent(3)</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Labels-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Tap pane-->
        </div>
        <!--end::Tab Content-->
    </div>
    <!--end: Card Body-->
</div>


</div>
