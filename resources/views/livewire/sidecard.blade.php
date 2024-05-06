<div>
    {{-- Stop trying to control. --}}

  


    <div class="card card-flush card-p-0 card-reset mb-10" style="display: ">
        <div class="card-header align-items-center border-0">
            <h3 class="card-title fw-bold text-white fs-3">Leads</h3>
        </div>
        <div class="card-body">
            <div>
                <div class="row g-0">
                    {{-- countofHot
                    countofwarm
                    countofcold --}} 
                
                    <div class="col d-flex flex-column bg-light-primary px-4 py-4 rounded-2 me-2 text-center align-self-center"
                        style="align-items: center; cursor:pointer;" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/leads';" >
                       
                        <img src="{{asset('assets/media/Cold.png')}}" style="width: 25px;height: 25px;"/>
                        <a href="{{ env('APP_URL') }}/dashboard/leads?q=Cold"
                            class="text-primary fw-semibold fs-6 text-center"
                            style="font-size:14px !important;">
                            Cold
                        </a>
                        <span class="text-center">{{$countofcold}}</span>
                    </div>
              
                    <div class="col d-flex flex-column bg-light-success px-4 py-4 rounded-2 me-2 text-center align-self-center"
                        style="align-items: center; align-self:center !important; cursor:pointer;" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/leads';">
                       
                        
                        <img src="{{asset('assets/media/Warm.png')}}" style="    width: 25px;
                            height: 25px;
                            ">
                        <a href="{{ env('APP_URL') }}/dashboard/leads?q=Warm"
                            class="text-success fw-semibold fs-6 text-center"
                            style="font-size:14px !important;">
                            Warm
                        </a>
                        <span class="text-center">{{$countofwarm}}</span>
                    </div>
                    <div class="col d-flex flex-column bg-light-danger px-4 py-4 rounded-2 me-2 text-center align-self-center"
                        style="align-items: center;cursor:pointer;" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/leads';">
                        
                        <img src="{{asset('assets/media/Hot.png')}}" style="    width: 25px;
                            height: 25px;
                         ">
                        <a href="{{ env('APP_URL') }}/dashboard/leads?q=Hot"
                            class="text-danger fw-semibold fs-6  text-center"
                            style="font-size:14px !important;">
                            Hot
                        </a>
                        <span class="text-center">{{$countofHot}}</span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row g-0">
        <div class="card-header align-items-center border-0">
            <h3 class="card-title fw-bold text-white fs-3">Deals</h3>
        </div>
        <div class="col d-flex flex-column bg-light-success px-2 py-4 rounded-2 me-2 text-center" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/viewdeals';"
            style="align-items: center;cursor:pointer;">
            {{-- <i class="ki-duotone ki-abstract-26 fs-2x text-success text-center">
                <span class="path1"></span>
                <span class="path2"></span></i> --}}
            <img src="{{asset('icons/Won.png')}}" height="20px" width="20px" />
            <a href="{{ env('APP_URL') }}/dashboard/viewdeals"
                class="text-success fw-semibold fs-6 mt-2 text-center"
                style="font-size:14px !important;">
                Won
            </a>
            <span class="text-center">{{$countofwon}}</span>
        </div>
        <div class="col d-flex flex-column bg-light-danger px-2 py-4 rounded-2 text-center" onclick="window.location.href = '{{ env('APP_URL') }}/dashboard/viewdeals';"
            style="align-items: center;cursor:pointer;">
            {{-- <i class="ki-duotone ki-sms fs-2x text-danger text-center">
                <span class="path1"></span>
                <span class="path2"></span></i> --}}
            <img src="{{asset('icons/Lost.png')}}" height="20px" width="20px" />
            <a href="{{ env('APP_URL') }}/dashboard/viewdeals"
                class="text-danger fw-semibold fs-6 mt-2 text-center"
                style="font-size:14px !important;">
                Lost
            </a>
            <span class="text-center">{{$countoflost}}</span>
        </div>
    </div
    
    @if(session()->get('role')==1)
     <div class="row g-0">
        <div class="mt-4 text-center  border-0">

          
                    
                @php
                // Get the current date
                $currentDate = \Carbon\Carbon::now();

                // Get the expiration date from the session
                $expDate = session()->get('expdate');
                

                // Parse the expiration date as a Carbon instance
                $expirationDate = \Carbon\Carbon::parse($expDate);

                // Calculate the difference in days
                $differenceInDays = $currentDate->diffInDays($expirationDate);
                @endphp

            <h3 class="  text-white  fw-bold fs-4" style="text-transform: capitalize; font-weight:800 !important;">

                Expires In {{$differenceInDays}} Days
            </h3>

           
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editleadsource1">Upgrade</button>
         
           
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

          
        </div>
       
      </div>

   
      @endif
      


   


</div>
