@extends('layouts.master')
@section('pagename')
@endsection
@section('maincontent')
<div class="container-xxl" id="kt_content_container">
    <!--begin::Tables Widget 9-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <div class="card-header border-0 ">
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
                        <h3 class="card-label fw-bold text-gray-900 m-0">Add Leads</h3>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div
                                    class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Payments</div>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Create Invoice</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a target name for future usage and reference">
                                        <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Generate Bill</a>
                            </div>
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-end">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Plans</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Billing</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Statements</a>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px"
                                                    type="checkbox" value="1" checked="checked"
                                                    name="notifications" />
                                                <span
                                                    class="form-check-label text-muted fs-6">Recuring</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                        </div>
                    </div>
                    <h3 class="card-title align-items-start flex-column">
                      
                        <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                        </div>
                    </h3>
                    
                 
                </div>

                <!-- <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span> -->
            </h3>
            <!-- <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-trigger="hover" title="Click to add a user"> <a href="#" class="btn
            btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
            data-bs-target="#kt_modal_invite_friends"> <i class="ki-duotone ki-plus
            fs-2"></i>New Member</a> </div> -->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="dateInput" class="form-label">Lead Date *</label>
                            <input
                                class="form-control form-control-solid"
                                placeholder="Pick date rage"
                                id="kt_daterangepicker_3"/>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Customer Name *
                            </label>
                            <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="name" class="form-label">Company Name *
                            </label>
                            <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="name" class="form-label">Service Required *
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="selected">Services</option>
                                <option value="1">Web Design</option>
                                <option value="2">Ecommerce</option>
                                <option value="3">SEO</option>
                                <option value="3">Digital Marketing</option>
                                <option value="3">Mobile Apps</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="name" class="form-label">Lead Source *
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="selected">Sources</option>
                                <option value="1">Google</option>
                                <option value="2">SEO</option>
                                <option value="3">Facebook</option>
                                <option value="3">Instagram</option>
                                <option value="3">Friends</option>
                                <option value="3">Clients</option>
                                <option value="3">Linkedin</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="dateInput" class="form-label">Phone *</label>
                            <input
                                type="phone number"
                                class="form-control"
                                id="numberInput1"
                                aria-describedby="dateHelp">
                        </div>
                        <div class="col-md-6  mt-3">
                            <label for="email" class="form-label">Email
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                aria-describedby="emailHelp"
                                required="required">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="name" class="form-label">
                                Priority
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <!-- <option selected="selected">Open this select menu</option> -->
                                <option value="1">Cold</option>
                                <option value="2">Warm</option>
                                <option value="3">Hot</option>
                            </select>
                        </div>
                        <div class="col-md-6  mt-3">
                            <label for="email" class="form-label">Price
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                aria-describedby="emailHelp"
                                required="required">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="name" class="form-label">Lead Owner
                            </label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="selected">Select</option>
                                <option value="1">Asif</option>
                                <option value="2">Naveen</option>
                                <option value="3">Sai Kumar</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="name" class="form-label">City /Town
                            </label>
                            <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>
                        <div class="col-md-12 mt=3 mb-4">
                            <label for="name" class="form-label mt-3">Remarks
                            </label>
                            <div class="form-floating">
                                <!-- <label for="floatingTextarea">Description *</label> -->
                                <textarea
                                    class="form-control mb-5"
                                    placeholder="Leave a comment here"
                                    id="floatingTextarea"
                                    style="height: 150px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-end">
                            <button class="btn btn-primary mb-5">Create Lead</button>
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 9-->
    <!--begin::Row-->
    
    <!--end::Row-->
</div>

@endsection
