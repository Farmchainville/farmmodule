@extends('layouts.app')

@section('css')
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/menu/menu-types/vertical-menu-modern.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendors/css/charts/jquery-jvectormap-2.0.3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/vendors/css/charts/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/fonts/simple-line-icons/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/css/core/colors/palette-gradient.css') }}">
<!-- END Page Level CSS-->
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Dashboard</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Overview
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">

                </div>
            </div>
            <div class="content-body">

                <!-- eCommerce statistic -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">{{$farms}}</h3>
                                            <h6>Total Farms</h6>
                                        </div>
                                        <div>
                                            <i class="icon-layers info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                             aria-valuenow="{{$farms}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">{{$lots}}</h3>
                                            <h6>Total Lots</h6>
                                        </div>
                                        <div>
                                            <i class="icon-compass warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                                             aria-valuenow="{{$lots}}6" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">0</h3>
                                            <h6>Staff</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                                             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">200 Kg</h3>
                                            <h6>Production Capacity</h6>
                                        </div>
                                        <div>
                                            <i class="icon-pie-chart danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                             aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
                <!--/ eCommerce statistic -->

                <!-- Revenue, Hit Rate & Deals -->
                <!--
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Revenue</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0">
                                    <div class="row mb-1">
                                        <div class="col-6 col-md-4">
                                            <h5>Current week</h5>
                                            <h2 class="green">&#8358;822,124</h2>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <h5>Previous week</h5>
                                            <h2 class="text-muted">&#8358;520,502</h2>
                                        </div>
                                    </div>
                                    <div class="chartjs">
                                        <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                                        <canvas id="lastYearRevenue" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">

                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body sales-growth-chart">
                                        <div id="monthly-sales" class="height-250"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="chart-title mb-1 text-center">
                                        <h6>Total monthly Sales.</h6>
                                    </div>
                                    <div class="chart-stats text-center">
                                        <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a>
                                        <span class="text-muted">for the last year.</span>
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
                -->

                <!-- Total earning & Recent Sales  -->
            <!--
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="earning-chart position-relative">
                                    <div class="chart-title position-absolute mt-2 ml-2">
                                        <h1 class="display-4">&#8358;5,596,000</h1>
                                        <span class="text-muted">Total Earning</span>
                                    </div>
                                    <canvas id="earning-chart" class="height-450"></canvas>
                                    <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                                        <a href="#" class="btn round btn-danger mr-1 btn-glow">Statistics <i class="ft-bar-chart"></i></a>
                                        <span class="text-muted">for the <a href="#" class="danger darken-2">last year.</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recent-sales" class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Sales</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                                               href="invoice-summary.html" target="_blank">View all</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content mt-1">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">Product</th>
                                            <th class="border-top-0">Images</th>
                                            <th class="border-top-0">Customer</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate">Cocoa</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-4.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-5.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-6.png') }}"
                                                             alt="Avatar">
                                                    </li>

                                                </ul>
                                            </td>
                                            <td>
                                                Gideon Farms
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                                                         aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">&#8358; 210,200.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Chicken</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-7.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-8.png') }}"
                                                             alt="Avatar">
                                                    </li>

                                                </ul>
                                            </td>
                                            <td>
                                                Ace One LTD
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">&#8358; 12,190.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Moringa Leaf</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-1.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-2.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-3.png') }}"
                                                             alt="Avatar">
                                                    </li>

                                                </ul>
                                            </td>
                                            <td>
                                                Mez Farms
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%"
                                                         aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">&#8358; 50,999.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Moringa Powder</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-11.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-12.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                               Tola Restaurant
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%"
                                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">&#8358; 110,050.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Flour</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-6.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle" src="{{ asset('dashboard/images/portrait/small/avatar-s-4.png') }}"
                                                             alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                Renny Enterprises
                                            </td>
                                            <td>
                                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%"
                                                         aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="text-truncate">&#8358; 31,180.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!--/ Total earning & Recent Sales  -->
                <!-- Analytics map based session -->
                <!--
                <div class="row">
                    <div class="col-12">
                        <div class="card box-shadow-0">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col-md-9 col-12">
                                        <div id="world-map-markers" class="height-450"></div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="card-body text-center">
                                            <h4 class="card-title mb-0">Farm Distribution</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="pb-1">Farmers By Location</p>
                                                    <div id="sessions-browser-donut-chart" class="height-200"></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="sales pr-2 pt-2">
                                                        <div class="sales-today mb-2">
                                                            <p class="m-0">Today's Production
                                                                <span class="success float-right"><i class="ft-arrow-up success"></i> 6.89%</span>
                                                            </p>
                                                            <div class="progress progress-sm mt-1 mb-0">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25"
                                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="sales-yesterday">
                                                            <p class="m-0">Yesterday's Production
                                                                <span class="danger float-right"><i class="ft-arrow-down danger"></i> 4.18%</span>
                                                            </p>
                                                            <div class="progress progress-sm mt-1 mb-0">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25"
                                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- Analytics map based session -->
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('dashboard/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('dashboard/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('dashboard/data/jvector/visitor-data.js') }}" type="text/javascript"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('dashboard/js/scripts/pages/dashboard-sales.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
@endsection
