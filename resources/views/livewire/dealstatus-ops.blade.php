
<div>


    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div class="row">
        <div class="col-md-4 col-4">
            {{-- <button class="btn btn-success mb-3" style="width:-webkit-fill-available;">Call: {{$getleads[0]->phone}}</button>
            --}}
            <a href="tel:{{$getleads[0]->phone}}" class="btn btn-success mb-3"
                style="width:-webkit-fill-available;"> <i class="ki-duotone ki-call">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    <span class="path6"></span>
                    <span class="path7"></span>
                    <span class="path8"></span>
                </i><br>Call: {{$getleads[0]->phone}}</a>
        </div>
        <div class="col-md-4 col-4">
            <button class="btn btn-info mb-3 getpayment" data-bs-target="#editdealsfromdeals"
                data-route="{{route('admin.getpaymet',$getleads[0]->leadid)}}"
                data-bs-toggle="modal" data-leadids="{{$getleads[0]->leadid }}"
                style="width:-webkit-fill-available;"> <i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Manage Payment </button>
        </div>
        <div class="col-md-4 col-4">
            <button class="btn btn-info mb-3 leadid_inside" data-bs-target="#converttodeals"
                data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}"
                data-bs-toggle="modal" data-lid="{{$getleads[0]->leadid }}"
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Edit Deals Details </button>
        </div>

        @if(checkservice_deal_status($getleads[0]->leadid)==0)
        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3 leadid_inside" data-bs-target="#converttodeals"
                data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}"
                data-bs-toggle="modal" data-lid="{{$getleads[0]->leadid }}"
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>In progress</button>
        </div>
        @elseif(checkservice_deal_status($getleads[0]->leadid)==1)
        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3 leadid_inside" data-bs-target="#converttodeals"
                data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}"
                data-bs-toggle="modal" data-lid="{{$getleads[0]->leadid }}"
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Close</button>
        </div>

        @elseif(checkservice_deal_status($getleads[0]->leadid)==2)
        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3 leadid_inside" data-bs-target="#converttodeals"
                data-route="{{route('admin.convertlead',$getleads[0]->leadid)}}"
                data-bs-toggle="modal" data-lid="{{$getleads[0]->leadid }}"
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Lost</button>
        </div>

        @elseif(checkservice_deal_status($getleads[0]->leadid)==3)


        <div class="col-md-4 col-4">
            <button class="btn btn-info mb-3" 
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Close</button>

                <button class="btn btn-info mb-3"
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Lost</button>

                <button class="btn btn-info mb-3"
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Reopen</button>

             

        </div>


        @endif
         @livewire('dealclosestatus',['id'=>$getleads[0]->leadid])
      
        {{--  --}}
    </div>

</div>
