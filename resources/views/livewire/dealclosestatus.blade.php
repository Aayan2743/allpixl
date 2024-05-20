<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="col-md-4 col-4">
        {{-- $dealstatus= --}}
        @if(checkservice_deal_status($this->id)==3)
             {{-- // in re open stage --}}
        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3" wire:click="closedeal({{$this->id}})";
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Close</button>
        </div>

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3"  wire:click="lostdeal({{$this->id}})" 
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Lost</button>
        </div>

        @elseif(checkservice_deal_status($this->id)==2)
        {{-- if lost --}}

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3" wire:click="closedeal({{$this->id}})";
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Close</button>
        </div>

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3"  wire:click="reopendeal({{$this->id}})" 
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Reopen</button>
        </div>


        @elseif(checkservice_deal_status($this->id)==1)
        {{-- if close --}}

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3" wire:click="lostdeal({{$this->id}})";
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Lost</button>
        </div>

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3"  wire:click="reopendeal({{$this->id}})" 
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Reopen</button>
        </div>


        @elseif(checkservice_deal_status($this->id)==0)
        {{-- if process --}}

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3" wire:click="lostdeal({{$this->id}})";
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Lost</button>
        </div>

        <div class="col-md-12 col-4">
            <button class="btn btn-info mb-3"  wire:click="closedeal({{$this->id}})" 
                style="width:-webkit-fill-available;"><i class="ki-duotone ki-notepad-edit">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i><br>Close</button>
        </div>




        @endif
       

      
      

</div>

</div>
