<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}


    <form class="form w-100" wire:submit.prevent="Logincheck">
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-gray-900 fw-bolder mb-3">
                Super Admin Login
            </h1>
           
        </div>
       
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="User Name" wire:model.live="uname" class="form-control bg-transparent" />

            @error('uname') 
            <div class="invalid-feedbac" style="color: red" id="error_username">
                {{$message}}
            </div>
            
            @enderror
         
            <!--end::Email-->
        </div>
        <!--begin::Input group-->
        <div class="fv-row mb-8" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control bg-transparent" wire:model.live="upassw" type="password"
                        placeholder="Password" />
                        @error('upassw') 
                        <div class="invalid-feedbac" style="color: red" id="error_username">
                            {{$message}}
                        </div>
                        
                        @enderror
                  
                </div>
   
            </div>
     
        </div>
                    <div class="d-grid mb-10">
            <button type="submit" id="login" class="btn btn-primary">
                <!--begin::Indicator label-->
                <span class="indicator-label">
                    Login</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                    Please wait... <span
                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress--> </button>
        </div>
    
    </form> 

    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif



</div>
