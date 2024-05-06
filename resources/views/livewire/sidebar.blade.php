<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="aside-logo flex-column-auto px-9 mb-2 mt-5 me-5" id="kt_aside_logo">
        @if(Session::has('heading'))
        <a href="{{route('admin.home')}}">
            <span class="text-gray-900 fw-bold fs-3x me-2 lh-0" style="font-weight:800 !important; font-size:30px !important">{{Session::get('heading')}}</span>
        </a>
           @else
           <a href="{{route('admin.home')}}">
            <span class="text-gray-900 fw-bold  me-2 lh-0" >PIXL</span>
        </a>
        @endif
    </div>

</div>
