{{-- <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leadsss</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Lead Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="kt_daterangepicker_4" />
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
                                    <input type="phone number" class="form-control" id="numberInput1"
                                        aria-describedby="dateHelp">
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        required="required">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Cold</option>
                                        <option value="2">Warm</option>
                                        <option value="3">Hot</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Price
                                    </label>
                                    <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Owner
                                    </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="selected">Select</option>
                                        <option value="1">Naveen</option>
                                        <option value="2">Asif</option>
                                        <option value="3">Sai Kiran</option>
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
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="floatingTextarea" style="height: 150px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5">Create Lead</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xxl-6"></div>
                    <div class="col-xxl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add Leads</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
   

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Lead Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="leadcrerated"  type="datetime-local" value="<?php echo now() ?>"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="text" class="form-control" id="customers" placeholder="Customer Name">
                                    <div  style="color:red" id="e_customer">
                                    
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name *
                                    </label>
                                   

                                    <input type="text" class="form-control"  id="Orginazations"  placeholder="Company Name" value="">
                                    <div style="color:red" id="e_Orginazation">
                                     
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Service Required *
                                    </label>
                                    
                                    <select class="form-control" id="Title">
                                        @foreach ($getprojects as $project)
                                        <option value="{{$project->pid}}">{{$project->Project_Name}}</option>
                                        @endforeach
                                       
                                        
                                      </select>
                                  <div  style="color:red" id="e_Title">
                                    
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
                                  <div  style="color:red" id="e_leadsourcesss">
                                    
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Phone Number">
                                    <div  style="color:red" id="e_mobile">
                                      
                                    </div>  
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="text" class="form-control" id="emails" placeholder="Email id">
                                    <div  style="color:red" id="e_email">
                                     
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-control" id="Priotity">
                                        <option value="Code" selected>Code</option>
                                        @foreach ($getalllabel as $label)
                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                        @endforeach
                                       
                                        
                                      </select>
                                  <div  style="color:red" id="e_Priotity">
                                    
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
                                    <select class="form-select" aria-label="Default select example"  id="owner">
                                        @foreach ($getempdetails as $emp)
                                        <option value="{{$emp->uid}}">{{$emp->fullname}}</option>
                                        @endforeach
                                    </select>
                                    <div  style="color:red" id="e_lead_date">
                          
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town
                                    </label>
                                    <input type="name" class="form-control" id="citys" aria-describedby="nameHelp">
                                    <div  style="color:red" id="e_city">
                          
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="Description" style="height: 150px;"></textarea>
                                    </div>
                                    <div  style="color:red" id="e_Description">
                          
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createleads">Create Leads</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xxl-6"></div>
                    <div class="col-xxl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_add_leads" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Add Leads</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style="width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Lead Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="kt_daterangepicker_6" />
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer Name *
                                    </label>
                                    <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name
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
                                    <input type="phone number" class="form-control" id="numberInput1"
                                        aria-describedby="dateHelp">
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority
                                    </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Cold</option>
                                        <option value="2">Warm</option>
                                        <option value="3">Hot</option>
                                    </select>
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="price" class="form-label">Price
                                    </label>
                                    <input type="price" class="form-control" id="email" aria-describedby="emailHelp"
                                        required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Owner
                                    </label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="selected">Select</option>
                                        <option value="1">Naveen</option>
                                        <option value="2">Asif</option>
                                        <option value="3">Sai Kiran</option>
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
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="floatingTextarea" style="height: 150px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5">Create Lead</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xxl-6"></div>
                    <div class="col-xxl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addleads" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Convert To 
                            Deals</span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style="width: -webkit-fill-available;">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Deal
                                        fix Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage" type="datetime-local"
                                        id="dealfixdata"  name="dealfixdata" value="<?php echo now()?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer
                                        *
                                    </label>
                                    <input type="name" class="form-control"  id="customer" name="customer" value=""  aria-describedby="nameHelp">
                                    <input type="hidden" class="form-control" id="leadid" name="leadid" value="" placeholder="leadid">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Orginazation
                                        *
                                    </label>
                                    <input type="name" class="form-control"id="Orginazation"  name="Orginazation" value="" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="email" class="form-control" id="emails"  name="emails" value="" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone
                                        *</label>
                                    <input type="phone number" class="form-control"  id="phone"  name="phone" value="" 
                                        aria-describedby="dateHelp">
                                </div>
                                <div class="card mt-3 p-5">
                                    <h4>Requirements</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Currency
                                                *
                                            </label>
                                            <input type="name" class="form-control"  name="currency" id="currency" value="{{$getleadbyid->value ?? ''}}"
                                                aria-describedby="nameHelp">
                                                <div  style="color:red" id="e_currency">
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Delivery Date
                                                
                                                *</label>
                                            <input class="form-control form-control-solid" type="datetime-local" placeholder="Pick date rage" id="expecteddate" name="expecteddate"
                                                />
                                                <div class="-feedback" id="e_expecteddate" style="color:red">
                                                </div>

                                        </div>
                                        {{-- <div class="col-md-12 mt-3">
                                            <label for="name" class="form-label">Assigned
                                                Team
                                            </label>
                                            <select class="form-select" aria-label="Default select example" id="assignedteam">
                                                <option selected="selected">
                                                    Select
                                                    Team
                                                </option>
                                                <option value="1">
                                                    Naveen
                                                </option>
                                                <option value="2">
                                                    Asif
                                                </option>
                                                <option value="3">
                                                    Sai
                                                    Kiran
                                                </option>
                                            </select>
                                        </div> --}}
                                        <div class="col-md-12 mt-3 mb-3">
                                            <label for="name" class="form-label">Content
                                            </label>
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                            id="contents"></textarea>
                                        </div>
                                        <div class="-feedback" id="e_requirements" style="color:red">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button class="btn btn-primary mb-5" id="convertdeals">Update
                                        Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 g-xl-10">
                    <div class="col-xxl-6"></div>
                    <div class="col-xxl-6">
                        <div class="card card-xl-stretch mb-5 mb-xl-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




