<style>
    .display-date {
        text-align: center;
        margin-bottom: 10px;
        font-size: 1.6rem;
        font-weight: 600;
    }

    .display-time {
        display: flex;
        font-size: 23px;
        font-weight: bold;
        border: 2px solid #ffd868;
        padding: 10px 20px;
        border-radius: 5px;
        transition: ease-in-out 0.1s;
        transition-property: background, color;
        color: white;
        /* -webkit-box-reflect: below 2px linear-gradient(transparent, rgba(255, 255, 255, 0.05)); */
    }

    .display-time:hover {
        background: #ffd868;
        box-shadow: 0 0 30px#ffd868;
        color: #272727;
        cursor: pointer;
    }
    th.min-w-150px {
    font-weight: 400 !important;
    /* color: #000 !important; */
}
th.min-w-200px {
    font-weight: 400 !important;
    /* color: #000 !important; */
}

th {
    font-weight: 400 !important; 
}
</style>


<div id="kt_header" class="header mt-5 mt-lg-0 pt-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{lg: '300px'}">
    <div class="container d-flex flex-stack flex-wrap gap-4" id="kt_header_container">
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-10 pb-lg-0"
            data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
            <h1 class="d-flex flex-column text-gray-900 fw-bold my-0 fs-1"
                style="text-transform: capitalize; font-weight:800 !important;">Hi,
                {{session()->get('sfullname')}}

            </h1>
            <small class="text-muted fs-6 fw-semibold pt-1"></small>
        </div>
        <div class="d-flex d-lg-none align-items-center ms-n3 me-2">
            <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                <i class="ki-duotone ki-abstract-14 fs-1 mt-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            @if(Session::has('heading'))
            <a href="#">
                <!--<span class="text-gray-900 fw-bold fs-3x me-2 lh-0">{{Session::get('heading')}}</span>-->
                <h3 class="theme-light-show h-20px" style="font-size:x-large;">{{Session::get('heading')}}</h3>
                <h3 class="theme-dark-show h-20px" style="font-size:x-large;">{{Session::get('heading')}}</h3>
                <!--<h3 class="theme-dark-show h-20px">{{Session::get('heading')}}</h3> -->
            </a>
            @elseif(!Session::has('heading'))
            <a href="#">
                <h3 class="theme-light-show h-20px"> PIXL </h3>
                <h3 class="theme-dark-show h-20px">PIXL</h3>
            </a>
            @endif
            {{-- <a href="index.html" class="d-flex align-items-center mt-3">
            <h3  class="theme-light-show h-20px"> PIXL</h3> 
            <h3 class="theme-dark-show h-20px">PIXL</h3> 
      </a> --}}
        </div>
        <div class="d-flex align-items-center flex-shrink-0 mb-0 mb-lg-0">
            {{-- <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px"
            data-kt-search-keypress="true" data-kt-search-min-length="2"
            data-kt-search-enter="enter" data-kt-search-layout="menu"
            data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
            data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
            <div data-kt-search-element="toggle"
                class="search-toggle-mobile d-flex d-lg-none align-items-center">
                <div
                    class="d-flex btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px">
                    <i class="ki-duotone ki-magnifier fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <form data-kt-search-element="form"
                class="d-none d-lg-block w-100 position-relative mb-2 mb-lg-0"
                autocomplete="off">
                <input type="hidden" />
                <i
                    class="ki-duotone ki-magnifier fs-2 text-gray-700 position-absolute top-50 translate-middle-y ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px"
                    name="search" value="" placeholder="Quick Search"
                    data-kt-search-element="input" />
                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                    data-kt-search-element="spinner">
                    <span
                        class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                </span>
                <span
                    class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                    data-kt-search-element="clear">
                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
            </form>
        </div> --}}
            <div class="d-flex align-items-center ms-3 ms-lg-4">
                <h3 class="d-flex mx-3 flex-column text-gray-900 fw-bold my-0 fs-1" style="text-transform: capitalize; font-weight:800 !important;">
                    
                 

                </h3>

                <!-- <div class="container">
                    <div class="display-date">
                        <span id="day">day</span>,
                        <span id="daynum">00</span>
                        <span id="month">month</span>
                        <span id="year">0000</span>
                    </div>
                    <div class="display-time"></div>
                </div> -->

                <a href="#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-night-day theme-light-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                    </i>
                    <i class="ki-duotone ki-moon theme-dark-show fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-night-day fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                    <span class="path7"></span>
                                    <span class="path8"></span>
                                    <span class="path9"></span>
                                    <span class="path10"></span>
                                </i>
                            </span>
                            <span class="text-gray-900">Light</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-moon fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <span class="text-gray-900">Dark</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-duotone ki-screen fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </span>
                            <span class="text-gray-900">System</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center d-xxl-none ms-3 ms-lg-4">
                <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative"
                    id="kt_sidebar_toggler">
                    <i class="ki-duotone ki-burger-menu-2 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                        <span class="path6"></span>
                        <span class="path7"></span>
                        <span class="path8"></span>
                        <span class="path9"></span>
                        <span class="path10"></span>
                    </i>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const displayTime = document.querySelector(".display-time");
    // Time
    function showTime() {
        let time = new Date();
        displayTime.innerText = time.toLocaleTimeString("en-US", {
            hour12: false
        });
        setTimeout(showTime, 1000);
    }

    showTime();

    // Date
    function updateDate() {
        let today = new Date();

        // return number
        let dayName = today.getDay(),
            dayNum = today.getDate(),
            month = today.getMonth(),
            year = today.getFullYear();

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        const dayWeek = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];
        // value -> ID of the html element
        const IDCollection = ["day", "daynum", "month", "year"];
        // return value array with number as a index
        const val = [dayWeek[dayName], dayNum, months[month], year];
        for (let i = 0; i < IDCollection.length; i++) {
            document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
        }
    }

    updateDate();
</script>