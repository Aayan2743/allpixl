@extends('layouts.master')
@section('title') {{'List Staff'}} @endsection
@section('maincontent')
<style>
    #tableaddstaff {
        overflow: hidden;
        th,
        td {
            /* padding:.25em .5em; */
            text-align: left;
            vertical-align: top;
        }
        /* th {
    background-color:#009;
    color:#fff;
  }
  td {
    background-color:#eee;
  } */
    }
</style>
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10 px-12"> 
                @livewire('mybillingdata')
             
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
<script>
    window.addEventListener('alert', (event) => {
        // console.log(event);
        $('#modal_add_staff').modal('hide');
        let data = event.detail;
        Swal.fire({
            position: 'center',
            // icon: "success",
            icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    })
</script>
@endsection