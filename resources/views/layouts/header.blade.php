<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- <title>Dashboard</title> --}}
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="CRM" />
        <meta property="og:url" content="https://pixl.in/pixl" />
        <meta property="og:site_name" content="CRM" />
        <link rel="canonical" href="https://pixl.in/" />
        <link rel="shortcut icon" href="{{asset('leader/assets/media/logos/favicon.ico')}}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
     
        <link href="{{asset('assets/css/jquery.toast.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
        </style>
    @livewireStyles

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
                  

