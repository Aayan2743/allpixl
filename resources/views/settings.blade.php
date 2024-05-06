@extends('layouts.master')
@section('title') {{'Settings'}} @endsection
@section('maincontent')
<div class="container-xxl" id="kt_content_container">
    <div class="card card-flush p-5">
        <div style="float: right;" class="row hhhsg">
            <div>
                <form class="d-flex max_length" action="https://leads.pixl.in/dashboard/leads" method="GET">
                    <ul class="nav nav-pills nav-pills-custom mb-3 hhhsg" role="tablist" style="DISPLAY:contents;">
                        <li class="nav-item mb-3 me-3 me-lg-6 active" role="presentation">
                            <a class="nav-link active btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                                id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_1" aria-selected="false" role="tab" tabindex="-1">
                                <div class="nav-icon mb-3">
                                    <img src="{{asset('icons/General Settings.png')}}" />
                                </div>
                                <span class="nav-text text-gray-800 fw-bold " style="text-wrap: nowrap;">
                                    General Settings
                                </span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                                id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_2" aria-selected="false" role="tab" tabindex="-1">
                                <div class="nav-icon mb-3">
                                    <img src="{{asset('icons/Lead Sources.png')}}" />
                                </div>
                                <span class="nav-text text-gray-800 fw-bold" style="text-wrap: nowrap;">
                                    Lead Sources
                                </span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                                id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_3" aria-selected="false" role="tab" tabindex="-1">
                                <div class="nav-icon mb-3">
                                    <img src="{{asset('icons/Lead Stages.png')}}" />
                                    {{-- <i class="ki-duotone ki-tablet fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span></i> --}}
                                </div>
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1" style="text-wrap: nowrap;">
                                    Lead Stages
                                </span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                                id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_4" aria-selected="false" role="tab" tabindex="-1">
                                <div class="nav-icon mb-3">
                                    <img src="{{asset('icons/Service Settings.png')}}" />
                                    {{-- <i class="ki-duotone ki-tablet fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span></i> --}}
                                </div>
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1" style="text-wrap: nowrap;">
                                    Service Settings
                                </span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-120px h-100px pt-5 pb-2"
                                id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
                                href="#kt_stats_widget_16_tab_5" aria-selected="false" role="tab" tabindex="-1">
                                <div class="nav-icon mb-3">
                                    <img src="{{asset('icons/Whatsapp Settings.png')}}" />
                                    {{-- <i class="ki-duotone ki-tablet fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span></i> --}}
                                </div>
                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1" style="text-wrap: nowrap;">
                                    Whatsapp Settings
                                </span>
                                <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
      
        <div class="tab-content">
            {{-- @livewire('Generalsetting') --}}
            <div class="tab-pane fade active show" id="kt_stats_widget_16_tab_1" role="tabpanel"
                aria-labelledby="kt_stats_widget_16_tab_link_1">
                @livewire('Generalsetting')
            </div>
            <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel"
                aria-labelledby="kt_stats_widget_16_tab_link_2">
                @livewire('Leadsource')
            </div>
            <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel"
                aria-labelledby="kt_stats_widget_16_tab_link_3">
                @livewire('Leadstages')
            </div>
            <div class="tab-pane fade" id="kt_stats_widget_16_tab_4" role="tabpanel"
                aria-labelledby="kt_stats_widget_16_tab_link_4">
                @livewire('Leadservice')
            </div>
            <div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel"
                aria-labelledby="kt_stats_widget_16_tab_link_5">
                @livewire('Whatappsettings')
            </div>
        </div>
    </div>



    {{-- end --}}


    <div class="tab-pane fade" id="kt_stats_widget_16_tab_5" role="tabpanel"
    aria-labelledby="kt_stats_widget_16_tab_link_5">
    
</div>

{{-- modes start here --}}
<div class="modal fade" id="editleadsource" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Leads Source
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Edit Lead Source *</label>
                                    <input class="form-control" placeholder="Lead Source" id="e_leadsources"
                                        name="e_leadsources" type="text" />
                                    <input class="form-control" placeholder="Lead Source" id="leadsourceid"
                                        name="leadsourceid" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ess_leadsource">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="e_leadsourcedd">Edit Lead Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_stage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Lead Stage
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Edit Lead Stage *</label>
                                    <input class="form-control" placeholder="Lead Stage" id="e_leadstage"
                                        name="e_leadstage" type="text" />
                                    <input class="form-control" placeholder="Lead Source" id="e_leadstage_id"
                                        name="e_leadstage_id" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="er_leadstage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end mt-4">
                                    <button class="btn btn-primary mb-5" id="edit_stage_name">Edit Lead Stage</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- modal_delete_stage --}}
<div class="modal fade" id="modal_delete_stage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Leads Stage
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete Lead Stage
                                        <strong id="stagename" style="color:red;text-decoration:line-through"> </strong>
                                        <strong id="stagenameid"
                                            style="color:red;text-decoration:line-through;display:none"> </strong>
                                    </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deleteleadstagedata">Delete Lead
                                        Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteleadsource" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Leads Source
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete Lead
                                        Source
                                        <strong id="srcid" style="color:red;text-decoration:line-through"> </strong>
                                        <strong id="srcids" style="color:red;text-decoration:line-through"> </strong>
                                    </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deleteleadsourcedata">Delete Lead
                                        Source</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_course" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Edit Service Details
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Service Name *</label>
                                    <input class="form-control" placeholder="Course Name" id="e_coursename"
                                        name="coursename" type="text" />
                                    <input class="form-control" placeholder="Course Name" id="e_courseid"
                                        name="courseidd" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="eu_coursename">
                                    </div>
                                </div>
                                <div class="col-md-12" style="display: none">
                                    <label for="dateInput" class="form-label">Course Price *</label>
                                    <input class="form-control" placeholder="Course Price" id="e_courseprise"
                                        name="courseprise" type="number" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="eu_courseprise">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="editcourse">Update Service</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete_course" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Course Details
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete The Course
                                        <strong style="text-decoration: line-through; color:red" id="project_name">
                                        </strong> <span id="project_id_deta" style="display:none"></span> </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deletecourse">Delete Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_template" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Whatsapp Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Name *</label>
                                    <input class="form-control" placeholder="Template Name" id="etemplatename"
                                        name="etemplatename" type="text" />
                                    <input class="form-control" placeholder="Template Name" id="etemplateid"
                                        name="etemplateid" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatename">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Message *</label>
                                    <textarea class="form-control mb-5" placeholder="Leave a message here"
                                        id="etemplatemessage" style="height: 150px;"></textarea>
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatemessage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="edittemplate">Update Whatsapp
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_delete_template" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Delete Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Are You Sure You Want To Delete Template
                                        Source
                                        <strong id="tmpid" style="color:red;text-decoration:line-through;display:none">
                                        </strong>
                                        <strong id="tmpname" style="color:red;text-decoration:line-through"> </strong>
                                    </label>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="deletetemplatedata">Delete
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_edit_templatess" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Whatsapp Template
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Name *</label>
                                    <input class="form-control" placeholder="Template Name" id="etemplatename"
                                        name="etemplatename" type="text" />
                                    <input class="form-control" placeholder="Template Name" id="etemplateid"
                                        name="etemplateid" type="hidden" />
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatename">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="dateInput" class="form-label">Template Message *</label>
                                    <textarea class="form-control mb-5" placeholder="Leave a message here"
                                        id="etemplatemessage" style="height: 150px;"></textarea>
                                    {{-- <input type="text" class="form-control"  value="" placeholder="Lead Source"> --}}
                                    <div style="color:red" id="ee_templatemessage">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="edittemplate">Update Whatsapp
                                        Template</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leads
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Lead Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="leadcrerated" type="datetime-local" value="<?php echo now() ?>" />
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="text" class="form-control" id="customers" placeholder="Customer Name"
                                        value="">
                                    <div style="color:red" id="e_customer">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name 
                                    </label>
                                    <input type="text" class="form-control" id="Orginazations"
                                        placeholder="Company Name" value="">
                                    <div style="color:red" id="e_Orginazation">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Service Required *
                                    </label>
                                    {{-- <select class="form-control" id="Title">
                                        @foreach ($getprojects as $project)
                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>
                                    @endforeach
                                    </select> --}}
                                    <select class="form-control" id="Titless">
                                        <option value="">Select Service</option>
                                        @foreach ($getprojects as $project)
                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_Title">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Source *
                                    </label>
                                    <select class="form-control" id="leadsource">
                                        <option value="" selected>Select Lead Source</option>
                                        @foreach ($getleadsource as $source)
                                        <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_leadsourcesss">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
                                    <div style="color:red" id="e_mobile">
                                    </div>
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email 
                                    </label>
                                    <input type="text" class="form-control" id="emails" placeholder="Email id">
                                    <div style="color:red" id="e_email">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-control" id="Priotitys">
                                        {{-- <option value="Cold" selected>Cold</option> --}}
                                        <option value="">Lead Type</option>
                                        @foreach ($getalllabel as $label)
                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_Priotity">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Price
                                    </label>
                                    <input type="name" class="form-control" id="leadprise" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Owner
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="owner">
                                        @foreach ($getempdetails as $emp)
                                        <option value="{{$emp->uid}}"
                                            {{$emp->uid==session()->get('uid') ? "Selected" : "" }}>{{$emp->fullname}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div style="color:red" id="e_lead_date">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town 
                                    </label>
                                    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
                                    <div style="color:red" id="e_cityssss">
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks *
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="Description" style="height: 150px;"></textarea>
                                    </div>
                                    <div style="color:red" id="e_Description22sssss2">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createleads1">Create Leads</button>
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




<script>
    window.addEventListener('leadsoursecreate-alert', event => {
        $('#addsource').modal('hide');
    })
    // for genral setting
    window.addEventListener('alert', (event) => {
        // console.log(event);
        let data = event;
        Swal.fire({
            position: data.position,
            icon: "success",
            title: "Page Title Changed Successfully...!",
            showConfirmButton: false,
            timer: 1500
        });
    })
    // for lead source leadsoursecreate
    window.addEventListener('leadsoursecreate-alert', (event) => {
        // console.log(event);
        let data = event.detail;
        console.log(data);
        Swal.fire({
            position: 'center',
            icon: "success",
            // title: "New Lead Source Added Successfully...!",
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
    // for delete leadsourse 
    window.addEventListener('delete-leadsource', (event) => {
        // console.log(event);
        let data = event;
        Swal.fire({
            position: 'center',
            icon: "success",
            title: "Lead Source Deleted Successfully...!",
            showConfirmButton: false,
            timer: 1500
        });
    })
    // for lead stage create_new_lead_stage
    window.addEventListener('create_new_lead_stage', (event) => {
        // console.log(event);
        $('#modal_add_create_stage').modal('hide');
        $('#modal_add_course').modal('hide');
        $('#modal_add_template').modal('hide');
        let data = event.detail;
        Swal.fire({
            position: 'center',
            icon: "success",
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
    //  delete leaqd stage 
    window.addEventListener('delete_leadstage', (event) => {
        // console.log(event);
        let data = event.detail;
        Swal.fire({
            position: 'center',
            icon: "success",
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
</script>
@endsection