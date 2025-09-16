@extends(backpack_view('blank'))

@php
  $widgets['before_content'][] = [
    'type' => 'jumbotron',
    'heading' => 'Welkom bij je Dashboard!',

  ];
@endphp

@section('content')
<div class="row">
<div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="subheader">Total Users</div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-0 me-2">75,782</div>
                      <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          2%
                          <!-- Download SVG icon from http://tabler.io/icons/icon/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon ms-1 icon-2">
                            <path d="M3 17l6 -6l4 4l8 -8"></path>
                            <path d="M14 7l7 0l0 7"></path>
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div class="text-secondary mt-2">24,635 users increased from last month</div>
                  </div>
                  <div id="chart-visitors" class="position-relative" style="min-height: 96px;"><div id="apexchartshq4kq263" class="apexcharts-canvas apexchartshq4kq263 apexcharts-theme-" style="width: 308px; height: 96px;"><svg id="SvgjsSvg1001" width="308" height="96" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"><foreignObject x="0" y="0" width="308" height="96"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 48px;"></div><style type="text/css">
      .apexcharts-flip-y {
        transform: scaleY(-1) translateY(-100%);
        transform-origin: top;
        transform-box: fill-box;
      }
      .apexcharts-flip-x {
        transform: scaleX(-1);
        transform-origin: center;
        transform-box: fill-box;
      }
      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-right: 1px;
      }

      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><rect id="SvgjsRect1006" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1041" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g id="SvgjsG1042" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g id="SvgjsG1071" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMaskhq4kq263"><rect id="SvgjsRect1038" width="308" height="94" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMaskhq4kq263"><rect id="SvgjsRect1039" width="314" height="100" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskhq4kq263"><rect id="SvgjsRect1040" width="308" height="94" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskhq4kq263"></clipPath><clipPath id="nonForecastMaskhq4kq263"></clipPath></defs><line id="SvgjsLine1007" x1="0" y1="0" x2="0" y2="94" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="94" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1052" class="apexcharts-grid"><g id="SvgjsG1053" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1056" x1="0" y1="0" x2="308" y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1057" x1="0" y1="94" x2="308" y2="94" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1054" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1059" x1="0" y1="94" x2="308" y2="94" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1058" x1="0" y1="1" x2="0" y2="94" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1055" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1043" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1044" class="apexcharts-series" zIndex="0" seriesName="Visitors" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1047" d="M 0 67.57033333333334C 3.717241379310345 67.57033333333334 6.90344827586207 69.82633333333334 10.620689655172415 69.82633333333334C 14.337931034482759 69.82633333333334 17.524137931034485 69.795 21.24137931034483 69.795C 24.958620689655174 69.795 28.144827586206898 69.82633333333334 31.862068965517242 69.82633333333334C 35.57931034482759 69.82633333333334 38.765517241379314 68.385 42.48275862068966 68.385C 46.2 68.385 49.38620689655173 60.47333333333334 53.10344827586207 60.47333333333334C 56.820689655172416 60.47333333333334 60.00689655172414 65.64333333333333 63.724137931034484 65.64333333333333C 67.44137931034483 65.64333333333333 70.62758620689655 57.73166666666668 74.34482758620689 57.73166666666668C 78.06206896551724 57.73166666666668 81.24827586206897 56.72900000000001 84.96551724137932 56.72900000000001C 88.68275862068965 56.72900000000001 91.86896551724139 55.757666666666665 95.58620689655173 55.757666666666665C 99.30344827586207 55.757666666666665 102.4896551724138 55.06833333333333 106.20689655172414 55.06833333333333C 109.92413793103448 55.06833333333333 113.11034482758622 59.11033333333333 116.82758620689656 59.11033333333333C 120.54482758620689 59.11033333333333 123.73103448275863 48.47266666666667 127.44827586206897 48.47266666666667C 131.16551724137932 48.47266666666667 134.35172413793103 53.87766666666667 138.06896551724137 53.87766666666667C 141.7862068965517 53.87766666666667 144.97241379310344 57.44966666666667 148.68965517241378 57.44966666666667C 152.40689655172412 57.44966666666667 155.59310344827585 54.034333333333336 159.3103448275862 54.034333333333336C 163.02758620689656 54.034333333333336 166.21379310344827 42.221666666666664 169.93103448275863 42.221666666666664C 173.64827586206897 42.221666666666664 176.8344827586207 36.86366666666666 180.55172413793105 36.86366666666666C 184.26896551724138 36.86366666666666 187.45517241379312 41.37566666666666 191.17241379310346 41.37566666666666C 194.8896551724138 41.37566666666666 198.07586206896553 33.84 201.79310344827587 33.84C 205.5103448275862 33.84 208.69655172413795 34.38833333333335 212.41379310344828 34.38833333333335C 216.13103448275862 34.38833333333335 219.31724137931036 53.07866666666666 223.0344827586207 53.07866666666666C 226.75172413793103 53.07866666666666 229.93793103448277 47.47 233.6551724137931 47.47C 237.37241379310345 47.47 240.55862068965519 61.147000000000006 244.27586206896552 61.147000000000006C 247.99310344827586 61.147000000000006 251.1793103448276 61.57000000000001 254.89655172413794 61.57000000000001C 258.6137931034483 61.57000000000001 261.8 34.012333333333345 265.51724137931035 34.012333333333345C 269.2344827586207 34.012333333333345 272.4206896551724 22.795000000000016 276.13793103448273 22.795000000000016C 279.85517241379307 22.795000000000016 283.04137931034484 19.52066666666667 286.7586206896552 19.52066666666667C 290.4758620689655 19.52066666666667 293.6620689655172 27.103333333333353 297.37931034482756 27.103333333333353C 301.0965517241379 27.103333333333353 304.28275862068966 42.581999999999994 308 42.581999999999994" fill="none" fill-opacity="1" stroke="color-mix(in srgb, transparent, var(--tblr-primary) 100%)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskhq4kq263)" pathTo="M 0 67.57033333333334C 3.717241379310345 67.57033333333334 6.90344827586207 69.82633333333334 10.620689655172415 69.82633333333334C 14.337931034482759 69.82633333333334 17.524137931034485 69.795 21.24137931034483 69.795C 24.958620689655174 69.795 28.144827586206898 69.82633333333334 31.862068965517242 69.82633333333334C 35.57931034482759 69.82633333333334 38.765517241379314 68.385 42.48275862068966 68.385C 46.2 68.385 49.38620689655173 60.47333333333334 53.10344827586207 60.47333333333334C 56.820689655172416 60.47333333333334 60.00689655172414 65.64333333333333 63.724137931034484 65.64333333333333C 67.44137931034483 65.64333333333333 70.62758620689655 57.73166666666668 74.34482758620689 57.73166666666668C 78.06206896551724 57.73166666666668 81.24827586206897 56.72900000000001 84.96551724137932 56.72900000000001C 88.68275862068965 56.72900000000001 91.86896551724139 55.757666666666665 95.58620689655173 55.757666666666665C 99.30344827586207 55.757666666666665 102.4896551724138 55.06833333333333 106.20689655172414 55.06833333333333C 109.92413793103448 55.06833333333333 113.11034482758622 59.11033333333333 116.82758620689656 59.11033333333333C 120.54482758620689 59.11033333333333 123.73103448275863 48.47266666666667 127.44827586206897 48.47266666666667C 131.16551724137932 48.47266666666667 134.35172413793103 53.87766666666667 138.06896551724137 53.87766666666667C 141.7862068965517 53.87766666666667 144.97241379310344 57.44966666666667 148.68965517241378 57.44966666666667C 152.40689655172412 57.44966666666667 155.59310344827585 54.034333333333336 159.3103448275862 54.034333333333336C 163.02758620689656 54.034333333333336 166.21379310344827 42.221666666666664 169.93103448275863 42.221666666666664C 173.64827586206897 42.221666666666664 176.8344827586207 36.86366666666666 180.55172413793105 36.86366666666666C 184.26896551724138 36.86366666666666 187.45517241379312 41.37566666666666 191.17241379310346 41.37566666666666C 194.8896551724138 41.37566666666666 198.07586206896553 33.84 201.79310344827587 33.84C 205.5103448275862 33.84 208.69655172413795 34.38833333333335 212.41379310344828 34.38833333333335C 216.13103448275862 34.38833333333335 219.31724137931036 53.07866666666666 223.0344827586207 53.07866666666666C 226.75172413793103 53.07866666666666 229.93793103448277 47.47 233.6551724137931 47.47C 237.37241379310345 47.47 240.55862068965519 61.147000000000006 244.27586206896552 61.147000000000006C 247.99310344827586 61.147000000000006 251.1793103448276 61.57000000000001 254.89655172413794 61.57000000000001C 258.6137931034483 61.57000000000001 261.8 34.012333333333345 265.51724137931035 34.012333333333345C 269.2344827586207 34.012333333333345 272.4206896551724 22.795000000000016 276.13793103448273 22.795000000000016C 279.85517241379307 22.795000000000016 283.04137931034484 19.52066666666667 286.7586206896552 19.52066666666667C 290.4758620689655 19.52066666666667 293.6620689655172 27.103333333333353 297.37931034482756 27.103333333333353C 301.0965517241379 27.103333333333353 304.28275862068966 42.581999999999994 308 42.581999999999994" pathFrom="M 0 188 L 0 188 L 10.620689655172415 188 L 21.24137931034483 188 L 31.862068965517242 188 L 42.48275862068966 188 L 53.10344827586207 188 L 63.724137931034484 188 L 74.34482758620689 188 L 84.96551724137932 188 L 95.58620689655173 188 L 106.20689655172414 188 L 116.82758620689656 188 L 127.44827586206897 188 L 138.06896551724137 188 L 148.68965517241378 188 L 159.3103448275862 188 L 169.93103448275863 188 L 180.55172413793105 188 L 191.17241379310346 188 L 201.79310344827587 188 L 212.41379310344828 188 L 223.0344827586207 188 L 233.6551724137931 188 L 244.27586206896552 188 L 254.89655172413794 188 L 265.51724137931035 188 L 276.13793103448273 188 L 286.7586206896552 188 L 297.37931034482756 188 L 308 188" fill-rule="evenodd"></path><g id="SvgjsG1045" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><path id="SvgjsPath1075" d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="color-mix(in srgb, transparent, var(--tblr-primary) 100%)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-marker wi4e466vi no-pointer-events" default-marker-size="0"></path></g></g></g><g id="SvgjsG1048" class="apexcharts-series" zIndex="1" seriesName="Visitorsxlastxmonth" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1051" d="M 0 52.79666666666668C 3.717241379310345 52.79666666666668 6.90344827586207 40.90566666666666 10.620689655172415 40.90566666666666C 14.337931034482759 40.90566666666666 17.524137931034485 55.977000000000004 21.24137931034483 55.977000000000004C 24.958620689655174 55.977000000000004 28.144827586206898 36.519000000000005 31.862068965517242 36.519000000000005C 35.57931034482759 36.519000000000005 38.765517241379314 51.135999999999996 42.48275862068966 51.135999999999996C 46.2 51.135999999999996 49.38620689655173 58.57766666666666 53.10344827586207 58.57766666666666C 56.820689655172416 58.57766666666666 60.00689655172414 62.087 63.724137931034484 62.087C 67.44137931034483 62.087 70.62758620689655 48.22200000000001 74.34482758620689 48.22200000000001C 78.06206896551724 48.22200000000001 81.24827586206897 35.124666666666684 84.96551724137932 35.124666666666684C 88.68275862068965 35.124666666666684 91.86896551724139 53.391999999999996 95.58620689655173 53.391999999999996C 99.30344827586207 53.391999999999996 102.4896551724138 47.376000000000005 106.20689655172414 47.376000000000005C 109.92413793103448 47.376000000000005 113.11034482758622 39.809 116.82758620689656 39.809C 120.54482758620689 39.809 123.73103448275863 60.70833333333334 127.44827586206897 60.70833333333334C 131.16551724137932 60.70833333333334 134.35172413793103 54.394666666666666 138.06896551724137 54.394666666666666C 141.7862068965517 54.394666666666666 144.97241379310344 62.24366666666667 148.68965517241378 62.24366666666667C 152.40689655172412 62.24366666666667 155.59310344827585 58.656000000000006 159.3103448275862 58.656000000000006C 163.02758620689656 58.656000000000006 166.21379310344827 52.170000000000016 169.93103448275863 52.170000000000016C 173.64827586206897 52.170000000000016 176.8344827586207 40.98400000000001 180.55172413793105 40.98400000000001C 184.26896551724138 40.98400000000001 187.45517241379312 34.263000000000005 191.17241379310346 34.263000000000005C 194.8896551724138 34.263000000000005 198.07586206896553 56.008333333333326 201.79310344827587 56.008333333333326C 205.5103448275862 56.008333333333326 208.69655172413795 60.128666666666675 212.41379310344828 60.128666666666675C 216.13103448275862 60.128666666666675 219.31724137931036 62.29066666666667 223.0344827586207 62.29066666666667C 226.75172413793103 62.29066666666667 229.93793103448277 48.61366666666666 233.6551724137931 48.61366666666666C 237.37241379310345 48.61366666666666 240.55862068965519 42.55066666666667 244.27586206896552 42.55066666666667C 247.99310344827586 42.55066666666667 251.1793103448276 47.43866666666668 254.89655172413794 47.43866666666668C 258.6137931034483 47.43866666666668 261.8 50.50933333333333 265.51724137931035 50.50933333333333C 269.2344827586207 50.50933333333333 272.4206896551724 60.771 276.13793103448273 60.771C 279.85517241379307 60.771 283.04137931034484 39.54266666666666 286.7586206896552 39.54266666666666C 290.4758620689655 39.54266666666666 293.6620689655172 58.264333333333326 297.37931034482756 58.264333333333326C 301.0965517241379 58.264333333333326 304.28275862068966 45.98166666666668 308 45.98166666666668" fill="none" fill-opacity="1" stroke="color-mix(in srgb, transparent, var(--tblr-gray-400) 100%)" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="3" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskhq4kq263)" pathTo="M 0 52.79666666666668C 3.717241379310345 52.79666666666668 6.90344827586207 40.90566666666666 10.620689655172415 40.90566666666666C 14.337931034482759 40.90566666666666 17.524137931034485 55.977000000000004 21.24137931034483 55.977000000000004C 24.958620689655174 55.977000000000004 28.144827586206898 36.519000000000005 31.862068965517242 36.519000000000005C 35.57931034482759 36.519000000000005 38.765517241379314 51.135999999999996 42.48275862068966 51.135999999999996C 46.2 51.135999999999996 49.38620689655173 58.57766666666666 53.10344827586207 58.57766666666666C 56.820689655172416 58.57766666666666 60.00689655172414 62.087 63.724137931034484 62.087C 67.44137931034483 62.087 70.62758620689655 48.22200000000001 74.34482758620689 48.22200000000001C 78.06206896551724 48.22200000000001 81.24827586206897 35.124666666666684 84.96551724137932 35.124666666666684C 88.68275862068965 35.124666666666684 91.86896551724139 53.391999999999996 95.58620689655173 53.391999999999996C 99.30344827586207 53.391999999999996 102.4896551724138 47.376000000000005 106.20689655172414 47.376000000000005C 109.92413793103448 47.376000000000005 113.11034482758622 39.809 116.82758620689656 39.809C 120.54482758620689 39.809 123.73103448275863 60.70833333333334 127.44827586206897 60.70833333333334C 131.16551724137932 60.70833333333334 134.35172413793103 54.394666666666666 138.06896551724137 54.394666666666666C 141.7862068965517 54.394666666666666 144.97241379310344 62.24366666666667 148.68965517241378 62.24366666666667C 152.40689655172412 62.24366666666667 155.59310344827585 58.656000000000006 159.3103448275862 58.656000000000006C 163.02758620689656 58.656000000000006 166.21379310344827 52.170000000000016 169.93103448275863 52.170000000000016C 173.64827586206897 52.170000000000016 176.8344827586207 40.98400000000001 180.55172413793105 40.98400000000001C 184.26896551724138 40.98400000000001 187.45517241379312 34.263000000000005 191.17241379310346 34.263000000000005C 194.8896551724138 34.263000000000005 198.07586206896553 56.008333333333326 201.79310344827587 56.008333333333326C 205.5103448275862 56.008333333333326 208.69655172413795 60.128666666666675 212.41379310344828 60.128666666666675C 216.13103448275862 60.128666666666675 219.31724137931036 62.29066666666667 223.0344827586207 62.29066666666667C 226.75172413793103 62.29066666666667 229.93793103448277 48.61366666666666 233.6551724137931 48.61366666666666C 237.37241379310345 48.61366666666666 240.55862068965519 42.55066666666667 244.27586206896552 42.55066666666667C 247.99310344827586 42.55066666666667 251.1793103448276 47.43866666666668 254.89655172413794 47.43866666666668C 258.6137931034483 47.43866666666668 261.8 50.50933333333333 265.51724137931035 50.50933333333333C 269.2344827586207 50.50933333333333 272.4206896551724 60.771 276.13793103448273 60.771C 279.85517241379307 60.771 283.04137931034484 39.54266666666666 286.7586206896552 39.54266666666666C 290.4758620689655 39.54266666666666 293.6620689655172 58.264333333333326 297.37931034482756 58.264333333333326C 301.0965517241379 58.264333333333326 304.28275862068966 45.98166666666668 308 45.98166666666668" pathFrom="M 0 188 L 0 188 L 10.620689655172415 188 L 21.24137931034483 188 L 31.862068965517242 188 L 42.48275862068966 188 L 53.10344827586207 188 L 63.724137931034484 188 L 74.34482758620689 188 L 84.96551724137932 188 L 95.58620689655173 188 L 106.20689655172414 188 L 116.82758620689656 188 L 127.44827586206897 188 L 138.06896551724137 188 L 148.68965517241378 188 L 159.3103448275862 188 L 169.93103448275863 188 L 180.55172413793105 188 L 191.17241379310346 188 L 201.79310344827587 188 L 212.41379310344828 188 L 223.0344827586207 188 L 233.6551724137931 188 L 244.27586206896552 188 L 254.89655172413794 188 L 265.51724137931035 188 L 276.13793103448273 188 L 286.7586206896552 188 L 297.37931034482756 188 L 308 188" fill-rule="evenodd"></path><g id="SvgjsG1049" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g class="apexcharts-series-markers"><path id="SvgjsPath1076" d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="color-mix(in srgb, transparent, var(--tblr-gray-400) 100%)" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-marker w6no8sjfp no-pointer-events" default-marker-size="0"></path></g></g></g><g id="SvgjsG1046" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1050" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1060" x1="0" y1="0" x2="308" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1061" x1="0" y1="0" x2="308" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1062" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1063" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1072" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1073" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1074" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: color-mix(in srgb, transparent, var(--tblr-primary) 100%);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: color-mix(in srgb, transparent, var(--tblr-gray-400) 100%);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                </div>
              </div>


              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="subheader">Active Users</div>
                    <div class="d-flex align-items-baseline mb-2">
                      <div class="h1 mb-0 me-2">25,782</div>
                      <div class="me-auto">
                        <span class="text-red d-inline-flex align-items-center lh-1">
                          -1%
                          <!-- Download SVG icon from http://tabler.io/icons/icon/trending-down -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon ms-1 icon-2">
                            <path d="M3 7l6 6l4 -4l8 8"></path>
                            <path d="M21 10l0 7l-7 0"></path>
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div id="chart-active-users-3" class="position-relative" style="min-height: 130px;"><div id="apexcharts2opje9s3" class="apexcharts-canvas apexcharts2opje9s3 apexcharts-theme-" style="width: 268px; height: 130px;"><svg id="SvgjsSvg1077" width="268" height="130" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"><foreignObject x="0" y="0" width="268" height="130"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div><style type="text/css">
      .apexcharts-flip-y {
        transform: scaleY(-1) translateY(-100%);
        transform-origin: top;
        transform-box: fill-box;
      }
      .apexcharts-flip-x {
        transform: scaleX(-1);
        transform-origin: center;
        transform-box: fill-box;
      }
      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-right: 1px;
      }

      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><g id="SvgjsG1079" class="apexcharts-inner apexcharts-graphical" transform="translate(38, 1)"><defs id="SvgjsDefs1078"><clipPath id="gridRectMask2opje9s3"><rect id="SvgjsRect1080" width="192" height="190" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMask2opje9s3"><rect id="SvgjsRect1081" width="198" height="196" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask2opje9s3"><rect id="SvgjsRect1082" width="192" height="190" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask2opje9s3"></clipPath><clipPath id="nonForecastMask2opje9s3"></clipPath></defs><g id="SvgjsG1085" class="apexcharts-radialbar"><g id="SvgjsG1086"><g id="SvgjsG1087" class="apexcharts-tracks"><g id="SvgjsG1088" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.6688307835135 125.21341463414635 A 60.42682926829268 60.42682926829268 0 1 1 148.3311692164865 125.21341463414633 " fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="17.625609756097564" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.6688307835135 125.21341463414635 A 60.42682926829268 60.42682926829268 0 1 1 148.3311692164865 125.21341463414633 "></path></g></g><g id="SvgjsG1090"><g id="SvgjsG1094" class="apexcharts-series apexcharts-radial-series" seriesName="" rel="1" data:realIndex="0"><path id="SvgjsPath1095" d="M 43.6688307835135 125.21341463414635 A 60.42682926829268 60.42682926829268 0 1 1 151.62318962020538 71.38935680897133 " fill="none" fill-opacity="0.85" stroke="color-mix(in srgb, transparent, var(--tblr-primary) 100%)" stroke-opacity="1" stroke-linecap="butt" stroke-width="18.170731707317074" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="187" data:value="78" index="0" j="0" data:pathOrig="M 43.6688307835135 125.21341463414635 A 60.42682926829268 60.42682926829268 0 1 1 151.62318962020538 71.38935680897133 "></path></g><circle id="SvgjsCircle1091" r="35.6140243902439" cx="96" cy="95" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g><g id="SvgjsG1083" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2078" font-family="inherit" x="96" y="95" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="color-mix(in srgb, transparent, var(--tblr-primary) 100%)" class="apexcharts-text apexcharts-datalabel-label" style="font-family: inherit;"></text><text id="SvgjsText2079" font-family="inherit" x="96" y="103" text-anchor="middle" dominant-baseline="auto" font-size="24px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">78%</text></g></g><line id="SvgjsLine1096" x1="0" y1="0" x2="192" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1097" x1="0" y1="0" x2="192" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1084" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g></svg></div></div>
                  </div>
                </div>
              </div>

              

</div>
@endsection
