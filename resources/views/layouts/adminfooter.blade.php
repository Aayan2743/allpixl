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


@include('layouts.adminrightsidebard')

</div>
</div>
{{-- <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
<i class="ki-duotone ki-arrow-up">
<span class="path1"></span>
<span class="path2"></span>
</i>
</div> --}}

{{-- @include('popmodel.allmodels') --}}



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