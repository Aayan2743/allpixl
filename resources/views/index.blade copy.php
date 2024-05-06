@extends('layouts.master')
{{-- @section('pagename') --}}
@section('title') {{'DashBoard'}} @endsection
@section('maincontent')
<style>
    #leadstable,
    #dealstabs {
        overflow: hidden;
        th,
        td {
            /* padding:.25em .5em; */
            text-align: left;
            vertical-align: top;
        }
        tr {
            transition: all 1s ease-in-out;
            &.slide-out {
                transform: translateX(100%);
            }
        }
    }
    .cardBox {
        width: 200px;
        height: 200px;
        position: relative;
        display: grid;
        place-items: center;
        overflow: hidden;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 10px 0px,
            rgba(0, 0, 0, 0.5) 0px 2px 25px 0px;
    }
    .cards {
        position: absolute;
        width: 95%;
        height: 95%;
        background: #000814;
        border-radius: 20px;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        color: #ffffff;
        overflow: hidden;
        padding: 20px;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 60px -12px inset,
            rgba(0, 0, 0, 0.5) 0px 18px 36px -18px inset;
    }
    /* body {
  margin:0;
  background:#ccc;
  display:grid;
  min-height:100vh;
  grid-auto-flow:column;
  place-content:center;
} */
</style>
<div class="container-xxl" id="kt_content_container">
    @include('layouts.cards')
    <div class="col-xl-12 mb-5 mb-xl-5">
        <div class="card card-flush h-xl-100 p-4">
            <div class="">
                @include('popmodel.maintaps')
                <div class="tab-content">
                    @include('popmodel.followuptap')
                    {{-- <livewire:LeadsDashboard /> --}}
                    @include('popmodel.leadstap')
                    @include('popmodel.dealstap')
                </div>
            </div>
        </div>
    </div>
    @include('popmodel.welcomemodel')
    <div class="row">
        <div class="col-xl-6 mb-2" >
            {{-- <div class="card card-xl-stretch mb-xl-8 mt-5">
                <div class="card-header border-0">
                    <div class="">
                        <div class="card-toolbar">
                            <button type="button"
                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-category fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <h3 class="card-label fw-bold text-gray-900 m-0">
                                Leads Vs Deals</h3>
                        </div>
                    </div>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-trigger="hover" data-bs-original-title="Click to Add Follow-Up"
                        data-kt-initialized="1">
                      @include('popmodel.leadvsdealmaintab')
                    </div>
                </div>
                <div class="card-header border-0 pt-2">
                    <div class="w-100 flex-lg-row-fluid mx-lg-13">
                        {{-- <div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
                            <div class="d-flex align-items-center gap-2">
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                    id="kt_social_start_sidebar_toggle">
                                    <i class="ki-duotone ki-profile-circle fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </div>
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                    id="kt_social_end_sidebar_toggle">
                                    <i class="ki-duotone ki-scroll fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i>
                                </div>
                            </div>
                        </div> --}}
            <!--end::Mobile toolbar-->
            <!--begin::Timeline-->
            <div class="">
                <div class="tab-content">
                    <!--begin::Tab panel-->
                    {{-- @include('popmodel.todaytab') --}}
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_activity_week" class="card-body p-0 tab-pane fade" role="tabpanel"
                        aria-labelledby="kt_activity_week_tab">
                        <!--begin::Timeline-->
                        @include('popmodel.weektab')
                        <!--end::Timeline-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_activity_month" class="card-body p-0 tab-pane fade" role="tabpanel"
                        aria-labelledby="kt_activity_month_tab">
                        <!--begin::Timeline-->
                        @include('popmodel.monthlytab')
                        <!--end::Timeline-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                </div>
                <!--end::Tab Content-->
                <!-- </div> -->
                <!--end::Card body-->
            </div>
            <!--end::Timeline-->
        </div>
    </div>
</div> --}}
</div>
 
</div>
</div>
<script>
    const rows = Array.from(document.querySelectorAll('tr'));
    function slideOut(row) {
        row.classList.add('slide-out');
    }
    function slideIn(row, index) {
        setTimeout(function () {
            row.classList.remove('slide-out');
        }, (index + 5) * 200);
    }
    rows.forEach(slideOut);
    rows.forEach(slideIn);
</script>
@endsection()
@section('js')
@endsection()