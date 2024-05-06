<div class="modal fade" id="kt_modal_add_deals" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Add
                            Deals </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style="width: -webkit-fill-available;">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="dateInput" class="form-label">Deal
                                        fix Date *</label>
                                    <input class="form-control form-control-solid" placeholder="Pick date rage"
                                        id="kt_daterangepicker_3">
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Customer
                                        *
                                    </label>
                                    <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Orginazation
                                        *
                                    </label>
                                    <input type="name" class="form-control" id="name" />
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="email" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone
                                        *</label>
                                    <input type="phone number" class="form-control" id="numberInput1"
                                        aria-describedby="dateHelp">
                                </div>
                                <div class="card mt-3 p-5">
                                    <h4>Requirements</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Currency
                                                *
                                            </label>
                                            <input type="name" class="form-control" id="name"
                                                aria-describedby="nameHelp">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dateInput" class="form-label">Deal
                                                fix Date
                                                *</label>
                                            <input class="form-control form-control-solid" placeholder="Pick date rage"
                                                id="kt_daterangepicker_2" />
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label for="name" class="form-label">Assigned
                                                Team
                                            </label>
                                            <select class="form-select" aria-label="Default select example">
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
                                        </div>
                                        <div class="col-md-12 mt-3 mb-3">
                                            <label for="name" class="form-label">Content
                                            </label>
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="floatingTextarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button class="btn btn-primary mb-5">Update
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






<div class="modal fade" id="editleads" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Modify Leads</span>
                    </h3>
                    <h5 class="modal-title" id="editlead">Update -  Lead Name</h5>
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
                                    <input type="text" class="form-control" id="u_customer" placeholder="Customer Name">
                                    <input type="hidden" class="form-control" id="ulid" placeholder="Customer Name">
                                    <div  style="color:red" id="ue_customer">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="name" class="form-label">Company Name *
                                    </label>
                                    <input type="text" class="form-control"  id="u_Orginazation"  placeholder="Orginazation Name" value="">
                                    <div style="color:red" id="ue_Orginazation">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Service Required  *
                                    </label>
                                    <select class="form-select" aria-label="Default select example"  id="u_title">
                                       
                                       {{-- @foreach ($getprojects as $projects)
                                       <option value="{{$projects->Project_Name}}">{{$projects->Project_Name}}</option>
                                       @endforeach --}}
                                  
                                      
                                    </select>
                                </div>
                                
                                <div class="col-md-6 mt-3" id="radioBoxs">
                                    <label for="name" class="form-label">Lead Source* </label>
                                    </label>
                                    <br>
                                   
                                    <select class="form-select" aria-label="Default select example" id="u_leadsource">
                                       
                                    </select>


                                   
                                </div>
                                
                                {{-- <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Source *
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="u_leadsource_">

                                        @foreach ($getleadsource as $leadssource)
                                        <option value="{{$leadssource->leadsource}}">{{$leadssource->leadsource}}</option>
                                        @endforeach
                                       
                                    </select>
                                    <div  style="color:red" id="e_leadsource">
                                    </div>
                                </div> --}}
                                <div class="col-md-6 mt-3">
                                    <label for="dateInput" class="form-label">Phone *</label>
                                    <input type="text" class="form-control" id="tellphone" name="tellphone" aria-describedby="nameHelp">

                                    <div  style="color:red" id="ue_mobile">
                                    </div>

                                  
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="email" class="form-label">Email
                                    </label>
                                    <input type="text" class="form-control" id="u_email" placeholder="Email id">
                                    <div  style="color:red" id="ue_email">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">
                                        Priority *
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="leadlabel">
                                        {{-- @foreach ($getalllabel as $label)
                                        <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                        @endforeach --}}
                                        
                                       
                                    </select>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Price
                                    </label>
                                    <input type="name" class="form-control" id="price" name="price" aria-describedby="nameHelp">

                                    <div  style="color:red" id="ue_price">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">Lead Owner
                                    </label>
                                    <select class="form-select" aria-label="Default select example" id="leadowner">
                                     

                                        {{-- @foreach ($getempdetails as $emp)
                                        <option value="{{$emp->uid}}" {{$emp->uid==session()->get('uid')? "Selected" : ""}}>{{$emp->fullname}}</option>
                                        @endforeach
                                        --}}
                                     
                                    </select>

                                    <div  style="color:red" id="ue_leadowner">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town
                                    </label>
                                    <input type="name" class="form-control" id="city" name="city" aria-describedby="nameHelp">

                                    <div  style="color:red" id="ue_city">
                                    </div>
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" placeholder="Leave a comment here"
                                            id="u_Description" style="height: 150px;"></textarea>
                                    </div>
                                    <div  style="color:red" id="ue_remarks">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5"  id="updatelead">Update Lead</button>
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














