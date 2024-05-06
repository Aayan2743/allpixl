@extends('layouts.adminmaster')
@section('pagename')
@endsection
@section('maincontent')
{{-- @include('layouts.cards') --}}
@livewire('superadmin-cards')
<div class="container-xxl" id="kt_content_container">
    <div class="card mb-5 mb-xl-10">
      @livewire('listcustomers')

     
    </div>
</div>

<script>
  window.addEventListener('alert', (event) => {
      // console.log(event);
      $('#addNewCustomer').modal('hide');
      $('#Extendplan').modal('hide');
      $('#DeleteUser').modal('hide');
      
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
