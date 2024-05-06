<div>
    {{-- Do your work, then step back. --}}

    <div class="row gy-5 g-xl-10 mb-5">
        <div class="col-md-4 asif col-12">
            <div class="card p-7" style="background:#9acaed;">
                <a href="{{route('admin.leads')}}">
                    <div class="" style="">
                        <div class="">
                            <div class="d-flex flex-column flex-grow-1 mb-6">
                                <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3 darj">Leads</a>
                                <div class="mixed-widget-13-chart" style="height: 100px"></div>
                            </div>
                            <div class="mt-5 d-inline-block">
                                <span class="text-gray-900 fw-bold fs-3x me-2 lh-0 darj">{{$leadcount}}</span>
                                <span class="text-gray-900 fw-bold fs-6 lh-0 darj">Total Leads </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 asif col-12">
            <div class="card p-5" style="background:#bfa4e9;">
                <a href="{{route('admin.viewdeals')}}">
                    <div class="" style="">
                        <div class="">
                            <div class="d-flex flex-column flex-grow-1 mb-6">
                                <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3 darj">Deals</a>
                                <div class="mixed-widget-14-chart" style="height: 100px"></div>
                            </div>
                            <div class="mt-5 d-inline-block">
                                <span class="text-gray-900 fw-bold fs-3x me-2 lh-0 darj">{{$dealcount}}</span>
                                <span class="text-gray-900 fw-bold fs-6 lh-0 darj">Total Deals</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 asif col-12">
            <div class="card p-7" style="background:#ffcadc;">
                <a href="{{route('admin.viewdeals')}}">
                    <div class="" style="">
                        <div class="">
                            <div class="d-flex flex-column flex-grow-1 mb-6">
                                <a href="#" class="text-gray-900 text-hover-primary fw-bold fs-3 darj">Follow-Ups</a>
                                <div class="mixed-widget-6-chart" style="height: 100px"></div>
                            </div>
                            <div class="mt-5 d-inline-block">
                                <span class="text-gray-900 fw-bold fs-3x me-2 lh-0 darj">{{$followupcount}}</span>
                                <span class="text-gray-900 fw-bold fs-6 lh-0 darj">Total Follow-Ups </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


</div>