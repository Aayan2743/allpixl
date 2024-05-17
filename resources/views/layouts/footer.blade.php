<div class="container">
    <div class="row mt-0">
    </div>
</div>
</div>
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
<div class="container d-flex flex-column flex-md-row flex-stack">
    <div class="text-gray-900 order-2 order-md-1">
        <span class="text-gray-500 fw-semibold me-1">Created by</span>
        <a href="https://pixl.in/" target="_blank"
            class="text-muted  fw-semibold me-2 fs-6">PIXL</a>
    </div>
</div>
</div>
</div>


@include('layouts.rightsidebard')

</div>
</div>
{{-- <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
<i class="ki-duotone ki-arrow-up">
<span class="path1"></span>
<span class="path2"></span>
</i>
</div> --}}

@include('popmodel.allmodels')

<div class="modal fade" id="editleadsource1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Upgrade Your Plan
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                   Please call for Upgrade :  {{session()->get('scontactnamemobileno')}}
                                  
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self class="modal fade" id="editleads" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <div class="container-xxl" id="kt_content_container">
                <div class="card-header border-0 pt-2 mt-5">
                    <h3 class="card-title align-items-start flex-column ">
                        <span class="card-label fw-bold fs-3 mb-1 ">Update Lead
                        </span>
                    </h3>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive" style=" width: -webkit-fill-available;">
                        <div class="container">
                            <form wire:submit.prevent="updateLead" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="dateInput" class="form-label">Lead Date *</label>
                                        <input class="form-control form-control-solid" placeholder="Pick date rage"
                                            id="leadcrerated" wire:model="leadcrerated" readonly type="datetime-local"
                                            value="<?php echo now() ?>" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Customer Name *
                                        </label>
                                        <input type="text" class="form-control" wire:model="customers" id="customers"
                                            placeholder="Customer Name" value="N/A">
                                        @error('customers')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="name" class="form-label">Company Name 
                                        </label>
                                        <input type="text" class="form-control" wire:model="Orginazations"
                                            id="Orginazations" placeholder="Company Name" value="N/A">
                                        @error('Orginazations')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Service Required *
                                        </label>
                                        <select class="form-control" id="Title" wire:model="Title">
                                            <option value="">Select Service</option>
                                            @foreach ($getprojects as $project)
                                            <option value="{{$project->Project_Name}}">{{$project->Project_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Title')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Lead Source *
                                        </label>
                                        <select class="form-control" id="leadsource" wire:model="leadsource">
                                            <option value="" selected>Select Lead Source</option>
                                            @foreach ($getleadsource as $source)
                                            <option value="{{$source->leadsource}}">{{$source->leadsource}}</option>
                                            @endforeach
                                        </select>
                                        @error('leadsource')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="dateInput" class="form-label">Phone *</label>
                                        <input type="text" class="form-control" wire:model="mobile" id="mobile"
                                            placeholder="Phone Number">
                                        @error('mobile')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6  mt-3">
                                        <label for="email" class="form-label">Email 
                                        </label>
                                        <input type="text" class="form-control" id="emails" wire:model="emails"
                                            placeholder="Email id">
                                        @error('emails')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">
                                            Priority *
                                        </label>
                                        <select class="form-control" id="Priotity" wire:model="Priotity">
                                            <option value="" selected>Select Lead Type</option>
                                            @foreach ($getalllabel as $label)
                                            <option value="{{$label->labelname}}">{{$label->labelname}}</option>
                                            @endforeach
                                        </select>
                                        @error('Priotity')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Price
                                        </label>
                                        <input type="name" class="form-control" wire:model="leadprise" id="leadprise"
                                            aria-describedby="nameHelp" />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="name" class="form-label">Lead Owner
                                        </label>
                                        <select class="form-select" aria-label="Default select example"
                                            wire:model.live="owner">
                                            @foreach ($getempdetails as $emp)
                                            <option value="{{$emp->uid}}"
                                                {{$emp->uid==session()->get('uid') ? "Selected" : "" }}>
                                                {{$emp->fullname}}</option>
                                            @endforeach
                                        </select>
                                        @error('owner')
                                        <div style="color:red" id="e_customer">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        {{-- <div> You selected: {{ $owner }}</div> --}}
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="name" class="form-label">City /Town 
                                    </label>
                                    <input type="name" class="form-control" id="citys" wire:model="citys"
                                        aria-describedby="nameHelp">
                                    @error('citys')
                                    <div style="color:red" id="e_customer">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt=3 mb-4">
                                    <label for="name" class="form-label mt-3">Remarks *
                                    </label>
                                    <div class="form-floating">
                                        <label for="floatingTextarea"></label>
                                        <textarea class="form-control mb-5" wire:model="Description"
                                            placeholder="Leave a comment here" id="Description"
                                            style="height: 150px;"></textarea>
                                    </div>
                                    @error('Description')
                                    <div style="color:red" id="e_customer">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-end">
                                    <button class="btn btn-primary mb-5" id="createlea">Update Lead</button>
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


<script>
    window.envVariables = {
        apiUrl: "{{ env('API_URL') }}",
        // Add more variables as needed
    };
</script>


<!--begin::Javascript-->
<script>
     window.addEventListener('openmodel', (event) => {
         console.log(event);
      
      
         $('#rrr').modal('show');
    })

    </script>

{{-- <script> 
    $(document).ready(function() { 
        function disableBack() { 
            window.history.forward() 
        } 
        window.onload = disableBack(); 
        window.onpageshow = function(e) { 
            if (e.persisted) 
                disableBack(); 
        } 
    }); 
</script>  --}}
<script>
var hostUrl = "assets/";


</script>
<!-- <script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script> 
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script> 
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>  -->
<script src="https://pixlclients.b-cdn.net/plugins.bundle.js"></script>
<script src="https://pixlclients.b-cdn.net/scripts.bundle.js"></script>
<script src="https://pixlclients.b-cdn.net/fullcalendar.bundle.js"></script>
<script src="https://pixlclients.b-cdn.net/datatables.bundle.js"></script>
{{-- <script>
$("#kt_daterangepicker_3").daterangepicker({
singleDatePicker: true,
showDropdowns: true,
minYear: 1901,
maxYear: parseInt(moment().format("YYYY"), 12)
}, function (start, end, label) {
var years = moment().diff(start, "years");
alert("You are " + years + " years old!");
});

</script> --}}
{{-- <script>
$("#kt_daterangepicker_2").daterangepicker({
singleDatePicker: true,
showDropdowns: true,
minYear: 1901,
maxYear: parseInt(moment().format("YYYY"), 12)
}, function (start, end, label) {
var years = moment().diff(start, "years");
alert("You are " + years + " years old!");
});

</script> --}}
{{-- <script>
$("#kt_daterangepicker_4").daterangepicker({
singleDatePicker: true,
showDropdowns: true,
minYear: 1901,
maxYear: parseInt(moment().format("YYYY"), 12)
}, function (start, end, label) {
var years = moment().diff(start, "years");
alert("You are " + years + " years old!");
});

</script>
<script>
$("#kt_daterangepicker_5").daterangepicker({
singleDatePicker: true,
showDropdowns: true,
minYear: 1901,
maxYear: parseInt(moment().format("YYYY"), 12)
}, function (start, end, label) {
var years = moment().diff(start, "years");
alert("You are " + years + " years old!");
});

</script>
<script>
$("#kt_daterangepicker_6").daterangepicker({
singleDatePicker: true,
showDropdowns: true,
minYear: 1901,
maxYear: parseInt(moment().format("YYYY"), 12)
}, function (start, end, label) {
var years = moment().diff(start, "years");
var indianFormat = start.format('DD-MM-YYYY'); // Format in DD-MM-YYYY
alert("Your date of birth is " + indianFormat + " and you are " + years + " years old!");
});

</script> --}}
<script src="{{asset('own/createdeal.js')}}"></script>
<script src="{{asset('own/createlead.js')}}"></script>
<script src="{{asset('own/addcallrecords.js')}}"></script>
<script src="{{asset('own/addstaff.js')}}"></script>
<script src="{{asset('own/addsettings.js')}}"></script>
<script src="https://pixlclients.b-cdn.net/chart.js"></script>
<script src="https://pixlclients.b-cdn.net/vis-timeline.bundle.js"></script>
<script src="https://pixlclients.b-cdn.net/percent.js"></script>
<script src="https://pixlclients.b-cdn.net/widgets.bundle.js"></script>
<script src="https://pixlclients.b-cdn.net/widgets.js"></script>
<script src="https://pixlclients.b-cdn.net/chat.js"></script>
<script src="https://pixlclients.b-cdn.net/users-search.js"></script>
<script src="https://pixlclients.b-cdn.net/custom1.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script type="text/javascript" src="{{asset('own/jquery.toast.js')}}"></script>



{{-- @livewire('Rightsidemenu'); --}}

@livewireScripts
</body>

</html>