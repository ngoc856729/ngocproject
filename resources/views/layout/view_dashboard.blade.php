<!DOCTYPE html>
<!-- saved from url=(0050)https://eduport.webestica.com/admin-dashboard.html -->
<html lang="en" data-bs-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Eduport</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <!-- Meta Tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <!-- Dark mode -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://eduport.webestica.com/admin-dashboard.html">
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://eduport.webestica.com/assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="stylesheet" href="{{ URL::asset('dasdboard/css2') }}">

    <!-- Plugins CSS -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('dasdboard/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('dasdboard/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('dasdboard/overlayscrollbars.min.css') }}">
    <script src="{{ URL::asset('dasdboard2/config.js.download') }}"></script>
    <script src="{{ URL::asset('dasdboard2/simplebar.min.js.download') }}"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="{{ URL::asset('dasdboard2/css') }}" rel="stylesheet">
    <link href="{{ URL::asset('dasdboard2/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('dasdboard2/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl" disabled="true">
    <link href="{{ URL::asset('dasdboard2/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ URL::asset('dasdboard2/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl" disabled="true">
    <link href="{{ URL::asset('dasdboard2/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <!-- Theme CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('dasdboard/style.css') }}">

    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }


        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
            height: 70vh;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        #slidebar1 {
            overflow-y: scroll;
        }

        .apexcharts-inner {
            position: relative;
        }

        .apexcharts-text tspan {
            font-family: inherit;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }


        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex;
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-box,
        .apexcharts-custom-tooltip {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse;
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-box span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2;
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }

        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008FFB;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-annotation-rect,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line,
        .apexcharts-zoom-rect,
        .apexcharts-toolbar svg,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }


        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }


        /* Resize generated styles */

        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>
</head>

<body>


    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- Sidebar START -->
        <nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

            <!-- Navbar brand for xl START -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="https://eduport.webestica.com/index.html">
                    <img class="navbar-brand-item" src="https://eduport.webestica.com/assets/images/logo-light.svg"
                        alt="">
                </a>
            </div>
            <!-- Navbar brand for xl END -->

            <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100 os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="width: 260px; margin: 0px; max-width: 100%; height: 832px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" tabindex="-1"
                        style="overflow: visible;">
                        <div class="os-content" style="padding: 0px; height: 100%; width: 222px; float: left;">
                            <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

                                <!-- Sidebar menu START -->
                                <ul class="navbar-nav flex-column" id="navbar-sidebar">

                                    <!-- Menu item 1 -->
                                    <li class="nav-item"><a href='/usercontrol'
                                            class="nav-link"><i class="bi bi-house fa-fw me-2"></i>Dashboard</a>
                                    </li>

                                    <!-- Title -->
                                    <li class="nav-item ms-2 my-2">User</li>



                                    <!-- Menu item 3 -->
                                    <li class="nav-item"> <a class="nav-link"
                                            href='/createduser'><i
                                                class="fa-solid fa-users me-2"></i>User account</a></li>

                                    <li class="nav-item ms-2 my-2">Course</li>

                                    <!-- Menu item 3 -->
                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-graduation-cap me-2"></i>Role education</a></li>

                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-school-circle-check me-2"></i>Role Course</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-school me-2"></i>Course</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-chalkboard-user me-2"></i>Class</a></li>
                                    <li class="nav-item ms-2 my-2">Billing</li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-basket-shopping me-2"></i>Billing detail</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-bag-shopping me-2"></i>Oder detail</a></li>
                                    <li class="nav-item ms-2 my-2">Traffic</li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="https://eduport.webestica.com/admin-student-list.html"><i
                                                class="fa-solid fa-chart-line me-2"></i>Traffic analysis</a></li>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track os-scrollbar-track-off">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track os-scrollbar-track-off">
                        <div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </nav>
        <!-- Sidebar END -->
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <!-- Page content START -->
        <div class="page-content">

            <!-- Top bar START -->
            <nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
                <div class="container-fluid p-0">
                    <div class="d-flex align-items-center w-100">

                        <!-- Logo START -->
                        <div class="d-flex align-items-center d-xl-none">
                            <a class="navbar-brand" href="https://eduport.webestica.com/index.html">
                                <img class="light-mode-item navbar-brand-item h-30px"
                                    src="./Eduport- LMS, Education and Course Theme_files/logo-mobile.svg"
                                    alt="">
                                <img class="dark-mode-item navbar-brand-item h-30px"
                                    src="./Eduport- LMS, Education and Course Theme_files/logo-mobile-light.svg"
                                    alt="">
                            </a>
                        </div>
                        <!-- Logo END -->

                        <!-- Toggler for sidebar START -->
                        <div class="navbar-expand-xl sidebar-offcanvas-menu">
                            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
                                aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                                <i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip"
                                    data-bs-target="#offcanvasMenu"> </i>
                            </button>
                        </div>
                        <!-- Toggler for sidebar END -->

                        <!-- Top bar left -->
                        <div class="navbar-expand-lg ms-auto ms-xl-0">

                            <!-- Toggler for menubar START -->
                            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTopContent" aria-controls="navbarTopContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-animation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                            <!-- Toggler for menubar END -->

                            <!-- Topbar menu START -->
                            <div class="collapse navbar-collapse w-100" id="navbarTopContent">
                                <!-- Top search START -->
                                <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                                    <div class="nav-item w-100">
                                        <form class="position-relative">
                                            <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0"
                                                type="search" placeholder="Search" aria-label="Search">
                                            <button
                                                class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                                                type="submit"><i class='bx bx-search-alt-2'></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Top search END -->
                            </div>
                            <!-- Topbar menu END -->
                        </div>
                        <!-- Top bar left END -->

                        <!-- Top bar right START -->
                        <div class="ms-xl-auto">
                            <ul class="navbar-nav flex-row align-items-center">

                                <!-- Notification dropdown START -->
                                <li class="nav-item ms-2 ms-md-3 dropdown">
                                    <!-- Notification button -->
                                    <a class="btn btn-light btn-round mb-0"
                                        href="https://eduport.webestica.com/admin-dashboard.html#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                        <i class="bi bi-bell fa-fw"></i>
                                    </a>
                                    <!-- Notification dote -->
                                    <span class="notif-badge animation-blink"></span>

                                    <!-- Notification dropdown menu START -->
                                    <div
                                        class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                                        <div class="card bg-transparent">
                                            <div
                                                class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                                <h6 class="m-0">Notifications <span
                                                        class="badge bg-danger bg-opacity-10 text-danger ms-2">2
                                                        new</span></h6>
                                                <a class="small"
                                                    href="https://eduport.webestica.com/admin-dashboard.html#">Clear
                                                    all</a>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-group list-unstyled list-group-flush">
                                                    <!-- Notif item -->
                                                    <li>
                                                        <a href="https://eduport.webestica.com/admin-dashboard.html#"
                                                            class="list-group-item-action border-0 border-bottom d-flex p-3">
                                                            <div class="me-3">
                                                                <div class="avatar avatar-md">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="https://eduport.webestica.com/assets/images/avatar/01.jpg"
                                                                        alt="avatar">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p class="text-body small m-0">Congratulate <b>Joan
                                                                        Wallace</b> for graduating from <b>Microverse
                                                                        university</b></p>
                                                                <u class="small">Say congrats</u>
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <!-- Notif item -->



                                                </ul>
                                            </div>
                                            <!-- Button -->
                                            <div
                                                class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                                <a href="https://eduport.webestica.com/admin-dashboard.html#"
                                                    class="stretched-link">See all incoming activity</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification dropdown menu END -->
                                </li>
                                <!-- Notification dropdown END -->

                                <!-- Profile dropdown START -->
                                <li class="nav-item ms-2 ms-md-3 dropdown">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm p-0"
                                        href="https://eduport.webestica.com/admin-dashboard.html#"
                                        id="profileDropdown" role="button" data-bs-auto-close="outside"
                                        data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="avatar-img rounded-circle"
                                            src="https://eduport.webestica.com/assets/images/avatar/01.jpg"
                                            alt="avatar">
                                    </a>

                                    <!-- Profile dropdown START -->
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                        aria-labelledby="profileDropdown">
                                        <!-- Profile info -->
                                        <li class="px-3">
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-3 mb-3">
                                                    <img class="avatar-img rounded-circle shadow"
                                                        src="https://eduport.webestica.com/assets/images/avatar/01.jpg"
                                                        alt="avatar">
                                                </div>
                                                <div>
                                                    <a class="h6 mt-2 mt-sm-0"
                                                        href="https://eduport.webestica.com/admin-dashboard.html#">Lori
                                                        Ferguson</a>
                                                    <p class="small m-0">example@gmail.com</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <!-- Links -->
                                        <li><a class="dropdown-item"
                                                href="https://eduport.webestica.com/admin-dashboard.html#"><i
                                                    class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://eduport.webestica.com/admin-dashboard.html#"><i
                                                    class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://eduport.webestica.com/admin-dashboard.html#"><i
                                                    class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                                        <li><a class="dropdown-item bg-danger-soft-hover"
                                                href="https://eduport.webestica.com/admin-dashboard.html#"><i
                                                    class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <!-- Dark mode options START -->
                                        <li>

                                            <!-- Dark mode options END-->
                                    </ul>
                                    <!-- Profile dropdown END -->
                                </li>
                                <!-- Profile dropdown END -->
                            </ul>
                        </div>
                        <!-- Top bar right END -->
                    </div>
                </div>
            </nav>
            <!-- Top bar END -->

            <!-- Page main content START -->
            <div class="page-content-wrapper border">

               @yield('content')

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('dasdboard/bootstrap.bundle.min.js.download') }}"></script>

    <!-- Vendors -->
    <script src="{{ URL::asset('dasdboard/purecounter_vanilla.js.download') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.46.0/apexcharts.min.js"></script>


    <script src="{{ URL::asset('dasdboard2/anchor.min.js.download') }}"></script>
    <script src="{{ URL::asset('dasdboard2/is.min.js.download') }}"></script>

    <script src="{{ URL::asset('dasdboard2/lodash.min.js.download') }}"></script>
    <script src="{{ URL::asset('dasdboard2/polyfill.min.js.download') }}"></script>
    <script src="{{ URL::asset('dasdboard2/list.min.js.download') }}"></script>
    <script src="{{ URL::asset('dasdboard2/theme.js.download') }}"></script>
    <!-- Template Functions -->
    <script src="{{ URL::asset('dasdboard/functions.js.download') }}"></script>


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <svg id="SvgjsSvg1155" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1156"></defs>
        <polyline id="SvgjsPolyline1157" points="0,0"></polyline>
        <path id="SvgjsPath1158"
            d="M-1 232.348L-1 232.348C-1 232.348 64.466796875 232.348 64.466796875 232.348C64.466796875 232.348 128.93359375 232.348 128.93359375 232.348C128.93359375 232.348 193.400390625 232.348 193.400390625 232.348C193.400390625 232.348 257.8671875 232.348 257.8671875 232.348C257.8671875 232.348 322.333984375 232.348 322.333984375 232.348C322.333984375 232.348 386.80078125 232.348 386.80078125 232.348C386.80078125 232.348 451.267578125 232.348 451.267578125 232.348C451.267578125 232.348 515.734375 232.348 515.734375 232.348C515.734375 232.348 580.201171875 232.348 580.201171875 232.348C580.201171875 232.348 644.66796875 232.348 644.66796875 232.348C644.66796875 232.348 644.66796875 232.348 644.66796875 232.348 ">
        </path>
    </svg>
</body>

</html>
