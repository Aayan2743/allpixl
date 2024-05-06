<!-- <!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8" />
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <link rel="stylesheet" href="https://pixl.b-cdn.net/font.css" />
        <link rel="stylesheet" href="https://pixl.b-cdn.net/fullcalendar.bundle.css" />
        <link rel="stylesheet" href="https://pixl.b-cdn.net/datatables.bundle.css" />
        <link rel="stylesheet" href="https://pixl.b-cdn.net/plugins.bundle.css" />
        <link rel="stylesheet" href="https://pixl.b-cdn.net/style.bundle.css" />
        <link rel="stylesheet" href="https://pixl.b-cdn.net/font.css" />
    </head> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8" />
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CRM" />
    <meta property="og:url" content="https://pixl.in/pixl" />
    <meta property="og:site_name" content="CRM" />
    <link rel="canonical" href="https://pixl.in/" />
    <link rel="shortcut icon" href="leader/assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <style>
        .menu-item .menu-link .menu-title {
            display: flex;
            align-items: center;
            flex-grow: 1;
            font-size: 16px !important;
            font-weight: 400;
            color: #000 !important;
        }
        /* graphs */
        :root {
            --chart-width: 650px;
            --chart-height: 300px;
            --grid-color: #aaa;
            --bar-color: #F16335;
            --bar-thickness: 50px;
            --bar-rounded: 3px;
            --bar-spacing: 30px;
        }
        .chart-wrap {
            margin-left: 50px;
            font-family: sans-serif;
        }
        .chart-wrap .title {
            font-weight: bold;
            font-size: 1.62em;
            padding: 0.5em 0 1.8em 0;
            text-align: center;
            white-space: nowrap;
        }
        .chart-wrap.vertical .grid {
            transform: translateY(calc(var(--chart-height) / 2 - var(--chart-width) / 2)) translateX(calc(var(--chart-width) / 2 - var(--chart-height) / 2)) rotate(-90deg);
        }
        .chart-wrap.vertical .grid .bar::after {
            transform: translateY(-50%) rotate(45deg);
            display: block;
        }
        .chart-wrap.vertical .grid::before,
        .chart-wrap.vertical .grid::after {
            transform: translateX(-0.2em) rotate(90deg);
        }
        .chart-wrap .grid {
            position: relative;
            padding: 5px 0;
            height: 100%;
            width: 153%;
            border-left: 2px solid var(--grid-color);
            background: repeating-linear-gradient(90deg, transparent, transparent 19.5%, rgba(170, 170, 170, 0.3) 20%);
        }
        .chart-wrap .grid::before,
        .chart-wrap .grid::after {
            font-size: 0.8em;
            font-weight: bold;
            position: absolute;
            top: -1.5em;
        }
        .chart-wrap .grid::before {
            content: '0%';
            left: -0.5em;
        }
        .chart-wrap .grid::after {
            content: '100%';
            right: -1.5em;
        }
        .chart-wrap .bar {
            width: var(--bar-value);
            height: var(--bar-thickness);
            margin: var(--bar-spacing) 0;
            background-color: var(--bar-color);
            border-radius: 0 var(--bar-rounded) var(--bar-rounded) 0;
        }
        .chart-wrap .bar:hover {
            opacity: 0.7;
        }
        .chart-wrap .bar::after {
            content: attr(data-name);
            margin-left: 100%;
            padding: 10px;
            display: inline-block;
            white-space: nowrap;
        }
        /* end graps */
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }
        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
        .btn-primary {
            background-color: #192440 !important;
        }
        @media (min-width: 992px) {
            .header-fixed[data-kt-sticky-header=on] .header {
                position: fixed;
                top: 0;
                right: 0;
                left: 370px !important;
                z-index: 97;
                background-color: var(--bs-header-desktop-fixed-bg-color);
                box-shadow: var(--bs-header-desktop-fixed-box-shadow);
                height: 65px;
                padding: 0;
                border-bottom-right-radius: 0.65rem;
                border-bottom-left-radius: 0.65rem;
            }
        }
        @media (min-width: 1400px) {
            .sidebar-enabled[data-kt-sticky-header=on] .header {
                right: 421px !important;
            }
        }
        .gradient-box {
            display: flex;
            align-items: center;
            //width: 50vw;
            width: 90%;
            margin: auto;
            max-width: 22em;
            position: relative;
            padding: 30% 2em;
            box-sizing: border-box;
            $border: 5px;
            color: #FFF;
            background: #000;
            background-clip: padding-box;
            /* !importanté */
            border: solid $border transparent;
            /* !importanté */
            border-radius: 1em;
        } 
    </style>
</head>
<body id="kt_body" class="header-fixed sidebar-enabled">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document
                    .documentElement
                    .getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window
                    .matchMedia("(prefers-color-scheme: dark)")
                    .matches ?
                    "dark" :
                    "light";
            }
            document
                .documentElement
                .setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.aside')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.nav')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container-xxl" id="kt_content_container">
                        @include('layouts.cards')
                        <div class="col-xl-12 mb-5 mb-xl-5 ">
                            <div class="card card-flush h-xl-100 p-4">
                                <div class="">
                                    @include('popmodel.maintaps')
                                    <div class="tab-content">
                                        @include('popmodel.followuptap')
                                        @include('popmodel.leadstap')
                                        @include('popmodel.dealstap')
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('popmodel.welcomemodel')
                        <div class="row">
                            <div class="col-xl-6 mb-2" >
                                <div class="card card-xl-stretch mb-xl-8 mt-5">
                                    <div class="card-header border-0">
                                        <div class="">
                                            <div class="card-toolbar">
                                                <button type="button"
                                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="ki-duotone ki-category fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </button>
                                                <h3 class="card-label fw-bold text-gray-900 m-0">
                                                    Leads Vs Deals</h3>
                                            </div>
                                        </div>
                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-trigger="hover" data-bs-original-title="Click to Add Follow-Up"
                                            data-kt-initialized="1">
                                            @include('popmodel.leadvsdealmaintab')
                                        </div>
                                    </div>
                                    <div class="card-header border-0 pt-2">
                                        <div class="w-100 flex-lg-row-fluid mx-lg-13">
                                            {{-- <div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                                        id="kt_social_start_sidebar_toggle">
                                                        <i class="ki-duotone ki-profile-circle fs-1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </div>
                                                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                                        id="kt_social_end_sidebar_toggle">
                                                        <i class="ki-duotone ki-scroll fs-1"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!--end::Mobile toolbar-->
                                            <!--begin::Timeline-->
                                            <div class="">
                                                <div class="tab-content">
                                                    <!--begin::Tab panel-->
                                                    @include('popmodel.todaytab')
                                                    <!--end::Tab panel-->
                                                    <!--begin::Tab panel-->
                                                    <div id="kt_activity_week" class="card-body p-0 tab-pane fade"
                                                        role="tabpanel" aria-labelledby="kt_activity_week_tab">
                                                        <!--begin::Timeline-->
                                                        @include('popmodel.weektab')
                                                        <!--end::Timeline-->
                                                    </div>
                                                    <!--end::Tab panel-->
                                                    <!--begin::Tab panel-->
                                                    <div id="kt_activity_month" class="card-body p-0 tab-pane fade"
                                                        role="tabpanel" aria-labelledby="kt_activity_month_tab">
                                                        <!--begin::Timeline-->
                                                        @include('popmodel.monthlytab')
                                                        <!--end::Timeline-->
                                                    </div>
                                                    <!--end::Tab panel-->
                                                    <!--begin::Tab panel-->
                                                </div>
                                                <!--end::Tab Content-->
                                                <!-- </div> -->
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Timeline-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mt-0">
                        </div>
                    </div>
                </div>
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container d-flex flex-column flex-md-row flex-stack">
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-gray-500 fw-semibold me-1">Created by</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-muted  fw-semibold me-2 fs-6">PIXL</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.rightsidebar')
        </div>
    </div>
    {{-- <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div> --}}
    @include('popmodel.allmodels')
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!-- <script src="assets/plugins/global/plugins.bundle.js"></script>
            <script src="assets/js/scripts.bundle.js"></script> 
            <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script> 
            <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>  -->
    <script src="https://pixl.b-cdn.net/plugins.bundle.js"></script>
    <script src="https://pixl.b-cdn.net/scripts.bundle.js"></script>
    <script src="https://pixl.b-cdn.net/fullcalendar.bundle.js"></script>
    <script src="https://pixl.b-cdn.net/datatables.bundle.js"></script>
    <script>
        $("#kt_daterangepicker_3").daterangepicker({
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
        $("#kt_daterangepicker_2").daterangepicker({
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
    </script>
    {{-- <script src="https://pixl.b-cdn.net/chart.js"></script> --}}
    <script src="https://pixl.b-cdn.net/vis-timeline.bundle.js"></script>
    <script src="https://pixl.b-cdn.net/percent.js"></script>
    <script src="https://pixl.b-cdn.net/widgets.bundle.js"></script>
    <script src="https://pixl.b-cdn.net/widgets.js"></script>
    {{-- <script src="https://pixl.b-cdn.net/chat.js"></script> --}}
    <script src="https://pixl.b-cdn.net/users-search.js"></script>
    <script src="https://pixl.b-cdn.net/custom1.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script>
        let ctx4 = document.getElementById("Flowchart").getContext('2d');
        var gradientStroke = ctx4.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, "#ff6c00");
        gradientStroke.addColorStop(1, "#ff3b74");
        var gradientBkgrd = ctx4.createLinearGradient(0, 100, 0, 400);
        gradientBkgrd.addColorStop(0, "rgba(244,94,132,0.2)");
        gradientBkgrd.addColorStop(1, "rgba(249,135,94,0)");
        let draw = Chart.controllers.line.prototype.draw;
        Chart.controllers.line = Chart.controllers.line.extend({
            draw: function () {
                draw.apply(this, arguments);
                let ctx4 = this.chart.chart.ctx4;
                let _stroke = ctx4.stroke;
                ctx.stroke = function () {
                    ctx4.save();
                    ctx4.shadowBlur = 8;
                    ctx4.shadowOffsetX = 0;
                    ctx4.shadowOffsetY = 6;
                    _stroke.apply(this, arguments)
                    ctx4.restore();
                }
            }
        });
        var chart = new Chart(ctx4, {
            type: 'line',
            data: {
                labels: ["Sep", "Oct", "Nov", "Apr"],
                datasets: [{
                    label: "Income",
                    backgroundColor: gradientBkgrd,
                    borderColor: gradientStroke,
                    data: [5500, 1500, 7000, 20000],
                    pointBorderColor: "rgba(255,255,255,0)",
                    pointBackgroundColor: "rgba(255,255,255,0)",
                    pointBorderWidth: 0,
                    pointHoverRadius: 8,
                    pointHoverBackgroundColor: gradientStroke,
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 4,
                    pointRadius: 1,
                    borderWidth: 2,
                    pointHitRadius: 16,
                }]
            },
            options: {
                tooltips: {
                    backgroundColor: '#fff',
                    displayColors: false,
                    titleFontColor: '#000',
                    bodyFontColor: '#000'
                },
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            callback: function (value, index, values) {
                                return (value / 1000) + 'K';
                            }
                        }
                    }],
                }
            }
        });
    </script>
    <script>
        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        google.setOnLoadCallback(drawCharts);
        function drawCharts() {
            var barData = google.visualization.arrayToDataTable([
                ['Day', 'Page Views'],
                ['Sun', 1050],
                ['Sat', 660]
            ]);
            var barOptions = {
                focusTarget: 'category',
                backgroundColor: 'transparent',
                colors: ['cornflowerblue', 'tomato'],
                fontName: 'Open Sans',
                chartArea: {
                    left: 50,
                    top: 10,
                    width: '100%',
                    height: '70%'
                },
                bar: {
                    groupWidth: '80%'
                },
                hAxis: {
                    textStyle: {
                        fontSize: 11
                    }
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 1500,
                    baselineColor: '#DDD',
                    gridlines: {
                        color: '#DDD',
                        count: 4
                    },
                    textStyle: {
                        fontSize: 11
                    }
                },
                legend: {
                    position: 'bottom',
                    textStyle: {
                        fontSize: 12
                    }
                },
                animation: {
                    duration: 1200,
                    easing: 'out',
                    startup: true
                }
            };
            var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart1'));
            barChart.draw(barData, barOptions);
            function randomNumber(base, step) {
                return Math.floor((Math.random() * step) + base);
            }
            function createData(year, start1, start2, step, offset) {
                var ar = [];
                for (var i = 0; i < 12; i++) {
                    ar.push([new Date(year, i), randomNumber(start1, step) + offset, randomNumber(start2, step) +
                        offset
                    ]);
                }
                return ar;
            }
            var randomLineData = [
                ['Year', 'Page Views', 'Unique Views']
            ];
            for (var x = 0; x < 7; x++) {
                var newYear = createData(2007 + x, 10000, 5000, 4000, 800 * Math.pow(x, 2));
                for (var n = 0; n < 12; n++) {
                    randomLineData.push(newYear.shift());
                }
            }
            var lineData = google.visualization.arrayToDataTable(randomLineData);
            var lineOptions = {
                backgroundColor: 'transparent',
                colors: ['cornflowerblue', 'tomato'],
                fontName: 'Open Sans',
                focusTarget: 'category',
                chartArea: {
                    left: 50,
                    top: 10,
                    width: '100%',
                    height: '70%'
                },
                hAxis: {
                    textStyle: {
                        fontSize: 11
                    },
                    baselineColor: 'transparent',
                    gridlines: {
                        color: 'transparent'
                    }
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 50000,
                    baselineColor: '#DDD',
                    gridlines: {
                        color: '#DDD',
                        count: 4
                    },
                    textStyle: {
                        fontSize: 11
                    }
                },
                legend: {
                    position: 'bottom',
                    textStyle: {
                        fontSize: 12
                    }
                },
                animation: {
                    duration: 1200,
                    easing: 'out',
                    startup: true
                }
            };
            var lineChart = new google.visualization.LineChart(document.getElementById('line-chart'));
            lineChart.draw(lineData, lineOptions);
            var pieData = google.visualization.arrayToDataTable([
                ['Country', 'Page Hits'],
                ['USA', 7242],
                ['Canada', 4563],
                ['Mexico', 1345],
                ['Sweden', 946],
                ['Germany', 2150]
            ]);
            var pieOptions = {
                backgroundColor: 'transparent',
                pieHole: 0.4,
                colors: ["cornflowerblue",
                    "olivedrab",
                    "orange",
                    "tomato",
                    "crimson",
                    "purple",
                    "turquoise",
                    "forestgreen",
                    "navy",
                    "gray"
                ],
                pieSliceText: 'value',
                tooltip: {
                    text: 'percentage'
                },
                fontName: 'Open Sans',
                chartArea: {
                    width: '100%',
                    height: '94%'
                },
                legend: {
                    textStyle: {
                        fontSize: 13
                    }
                }
            };
            var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
            pieChart.draw(pieData, pieOptions);
        }
    </script>
    <script>
        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        google.setOnLoadCallback(drawCharts);
        function drawCharts() {
            var barData = google.visualization.arrayToDataTable([
                ['Day', 'Page Views'],
                ['Sun', 1050],
                ['Sat', 660]
            ]);
            var barOptions = {
                focusTarget: 'category',
                backgroundColor: 'transparent',
                colors: ['cornflowerblue', 'tomato'],
                fontName: 'Open Sans',
                chartArea: {
                    left: 50,
                    top: 10,
                    width: '100%',
                    height: '70%'
                },
                bar: {
                    groupWidth: '80%'
                },
                hAxis: {
                    textStyle: {
                        fontSize: 11
                    }
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 1500,
                    baselineColor: '#DDD',
                    gridlines: {
                        color: '#DDD',
                        count: 4
                    },
                    textStyle: {
                        fontSize: 11
                    }
                },
                legend: {
                    position: 'bottom',
                    textStyle: {
                        fontSize: 12
                    }
                },
                animation: {
                    duration: 1200,
                    easing: 'out',
                    startup: true
                }
            };
            var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
            barChart.draw(barData, barOptions);
            function randomNumber(base, step) {
                return Math.floor((Math.random() * step) + base);
            }
            function createData(year, start1, start2, step, offset) {
                var ar = [];
                for (var i = 0; i < 12; i++) {
                    ar.push([new Date(year, i), randomNumber(start1, step) + offset, randomNumber(start2, step) +
                        offset
                    ]);
                }
                return ar;
            }
            var randomLineData = [
                ['Year', 'Page Views', 'Unique Views']
            ];
            for (var x = 0; x < 7; x++) {
                var newYear = createData(2007 + x, 10000, 5000, 4000, 800 * Math.pow(x, 2));
                for (var n = 0; n < 12; n++) {
                    randomLineData.push(newYear.shift());
                }
            }
            var lineData = google.visualization.arrayToDataTable(randomLineData);
            var lineOptions = {
                backgroundColor: 'transparent',
                colors: ['cornflowerblue', 'tomato'],
                fontName: 'Open Sans',
                focusTarget: 'category',
                chartArea: {
                    left: 50,
                    top: 10,
                    width: '100%',
                    height: '70%'
                },
                hAxis: {
                    textStyle: {
                        fontSize: 11
                    },
                    baselineColor: 'transparent',
                    gridlines: {
                        color: 'transparent'
                    }
                },
                vAxis: {
                    minValue: 0,
                    maxValue: 50000,
                    baselineColor: '#DDD',
                    gridlines: {
                        color: '#DDD',
                        count: 4
                    },
                    textStyle: {
                        fontSize: 11
                    }
                },
                legend: {
                    position: 'bottom',
                    textStyle: {
                        fontSize: 12
                    }
                },
                animation: {
                    duration: 1200,
                    easing: 'out',
                    startup: true
                }
            };
            var lineChart = new google.visualization.LineChart(document.getElementById('line-chart'));
            lineChart.draw(lineData, lineOptions);
            var pieData = google.visualization.arrayToDataTable([
                ['Country', 'Page Hits'],
                ['USA', 7242],
                ['Canada', 4563],
                ['Mexico', 1345],
                ['Sweden', 946],
                ['Germany', 2150]
            ]);
            var pieOptions = {
                backgroundColor: 'transparent',
                pieHole: 0.4,
                colors: ["cornflowerblue",
                    "olivedrab",
                    "orange",
                    "tomato",
                    "crimson",
                    "purple",
                    "turquoise",
                    "forestgreen",
                    "navy",
                    "gray"
                ],
                pieSliceText: 'value',
                tooltip: {
                    text: 'percentage'
                },
                fontName: 'Open Sans',
                chartArea: {
                    width: '100%',
                    height: '94%'
                },
                legend: {
                    textStyle: {
                        fontSize: 13
                    }
                }
            };
            var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
            pieChart.draw(pieData, pieOptions);
        }
    </script>
</body>
</html>