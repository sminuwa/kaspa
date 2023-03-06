@extends('layouts.app')

@section('content')
    <!-- Start Overview Back Area -->
    <div class="overview-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content">
                            <h5>Total Farmers</h5>
                            <h4>19,202 </h4>
                        </div>
                        <div class="icon">
                            <img src="assets/images/icon/note-2.svg" alt="white-profile-2user">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content">
                            <h5>Total Agro-Dealers</h5>
                            <h4>1,302</h4>
                        </div>
                        <div class="icon">
                            <img src="assets/images/icon/user-2.svg" alt="eye">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content color-style-fe5957">
                            <h5>Total LGA</h5>
                            <h4>34</h4>
                        </div>
                        <div class="icon">
                            <img src="assets/images/icon/people.svg" alt="timer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-audience d-flex justify-content-between align-items-center">
                        <div class="audience-content">
                            <h5>Zones</h5>
                            <h4>3</h4>
                        </div>
                        <div class="icon">
                            <img src="assets/images/icon/profile-2.svg" alt="mask">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Back Area -->

    <!-- Start Employees Info Chart Area -->
    <div class="employees-chart-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="employees-chart-wrap card-box-style rounded rounded-30">
                        <div class="employees-content d-flex justify-content-between align-items-center">
                            <div class="overview-title">
                                <h3>Farmers Overview</h3>
                                <span>December 2022</span>
                            </div>

                            <ul class="total-overview">
                                <li>
                                    <button>North</button>
                                </li>
                                <li>
                                    <button>Central</button>
                                </li>
                                <li>
                                    <button>South</button>
                                </li>
                            </ul>
                        </div>

                        <div class="audience-content-wrap">
                            <div class="audience-chart">
                                <div id="overview_chart_3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="total-employees-content card-box-style rounded rounded-30">
                                <div class="main-title d-flex justify-content-between align-items-center">
                                    <h3>Gender Overview</h3>
                                    <a href="#" class="view-btn">View All</a>
                                </div>

                                <div class="total-employees-chart text-center">
                                    <div id="employees_chart_3"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="single-employees border-style-5c31d6">
                                            <span class="title">Total</span>
                                            <h4>19,202<span>Farmers</span></h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="single-employees border-style-fec107">
                                            <span class="title">Male</span>
                                            <h4>18,700 <span>+32.50%</span></h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="single-employees border-style-4fcb8d">
                                            <span class="title">Female</span>
                                            <h4>502 <span>+2%</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6">
                            <div class="employees-availability-content-wrap availability card-box-style rounded rounded-30">
                                <div class="employees-availability-content">
                                    <div class="main-title d-flex justify-content-between align-items-center">
                                        <h3>Highest Farming Local Governments</h3>

                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>2022</option>
                                            <option value="1">2021</option>
                                            <option value="2">2020</option>
                                            <option value="3">2019</option>
                                        </select>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 col-sm-6 col-md-4">
                                            <div class="single-employees-availability d-flex justify-content-between align-items-center">
                                                <div class="employees-availability-content">
                                                    <h5>Baure</h5>
                                                    <h4>24.67% <span>+04.18%</span></h4>
                                                </div>
                                                <div class="employees-chart">
                                                    <div id="attendance_chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6 col-md-4">
                                            <div class="single-employees-availability d-flex justify-content-between align-items-center">
                                                <div class="employees-availability-content color-style-fe5957">
                                                    <h5>Zango</h5>
                                                    <h4>7.32% <span>-0.21%</span></h4>
                                                </div>
                                                <div class="employees-chart">
                                                    <div id="late_coming"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6 col-md-4">
                                            <div class="single-employees-availability d-flex justify-content-between align-items-center">
                                                <div class="employees-availability-content">
                                                    <h5>Bindawa</h5>
                                                    <h4>34 <span>+2.50%</span></h4>
                                                </div>
                                                <div class="employees-chart">
                                                    <div id="absent_chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="total-hiring-sources-wrap">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="total-hiring-sources-content">
                                    <div class="main-title d-flex justify-content-between align-items-center">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <i class="fa fa-plus"></i> Add Input
                                        </button>
                                        <h3>Input Distribution</h3>



                                        <select class="form-select form-control" aria-label="Default select example">
                                            <option selected>2022</option>
                                            <option value="1">2021</option>
                                            <option value="2">2020</option>
                                            <option value="3">2019</option>
                                        </select>
                                    </div>

                                    <div id="total_hiring_chart"></div>

                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-hiring border-style-4fcb8d">
                                                <span class="title">Fertilizers</span>
                                                <h4>13,500 <span>(Bags)</span></h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-hiring border-style-1765fd">
                                                <span class="title">Seeds</span>
                                                <h4>11,240 <span>(Tonnes)</span></h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-hiring border-style-5c31d6">
                                                <span class="title">Equipment</span>
                                                <h4>230M <span>(Worth)</span></h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-hiring border-style-fec107">
                                                <span class="title">Interventions</span>
                                                <h4>230M <span>(Worth)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="upcoming-interview-content card-box-style rounded rounded-30">
                        <div class="main-title border-style d-flex justify-content-between align-items-center">
                            <h3>Recently Registered</h3>
                            <a href="#" class="view-btn">View All</a>
                        </div>

                        <ul class="interviews-wrap">
                            <li class="single-interview d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="interview-1">
                                    <div class="interview-info ms-2">
                                        <h4>Sunusi Mohd Inuwa</h4>
                                        <span>11:00 AM - 01:30 PM</span>
                                    </div>
                                </div>
                                <a href="#" class="call-btn">Details</a>
                            </li>

                            <li class="single-interview d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="interview-1">
                                    <div class="interview-info ms-2">
                                        <h4>Abdurrahman Lawal</h4>
                                        <span>11:00 AM - 01:30 PM</span>
                                    </div>
                                </div>
                                <a href="#" class="call-btn">Details</a>
                            </li>

                            <li class="single-interview d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="interview-1">
                                    <div class="interview-info ms-2">
                                        <h4>Muhammad Galadima</h4>
                                        <span>11:00 AM - 01:30 PM</span>
                                    </div>
                                </div>
                                <a href="#" class="call-btn">Details</a>
                            </li>

                            <li class="single-interview d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="interview-1">
                                    <div class="interview-info ms-2">
                                        <h4>Sani Mubaraq</h4>
                                        <span>11:00 AM - 01:30 PM</span>
                                    </div>
                                </div>
                                <a href="#" class="call-btn">Details</a>
                            </li>

                            <li class="single-interview d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="interview-1">
                                    <div class="interview-info ms-2">
                                        <h4>Tijjani Aliyu</h4>
                                        <span>11:00 AM - 01:30 PM</span>
                                    </div>
                                </div>
                                <a href="#" class="call-btn">Details</a>
                            </li>
                        </ul>

                        <div class="calendar-wrap style-three">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Employees Info Chart Area -->

    <!-- Start Top Performers Area -->
    <div class="top-performers-area">
        <div class="container-fluid">
            <div class="top-performers-content-wrap card-box-style rounded rounded-30">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="top-performers-content">
                            <h3>Top Farmers</h3>
                            <p>These are the highest performing farmers across all the local governments in Katsina under the Katsina Sustainable Platform for Agriculture (KASPA)..</p>
                            <!--<ul>
                                <li class="single-performers border-style-4fcb8d">
                                    <span class="title">New Task</span>
                                    <h4>304+</h4>
                                </li>
                                <li class="single-performers border-style-1765fd">
                                    <span class="title">Task Completed</span>
                                    <h4>150+</h4>
                                </li>
                            </ul>-->
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="performers-slider owl-carousel owl-theme">
                            <div class="single-performers-card">
                                <div class="performers-img d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="performers-1">
                                    <div>
                                        <span>1 st</span>
                                        <h2>90%</h2>
                                    </div>
                                </div>
                                <h3>Sunusi Mohd Inuwa</h3>
                                <span>#KASPA10001</span>
                            </div>

                            <div class="single-performers-card">
                                <div class="performers-img d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="performers-2">
                                    <div>
                                        <span>2 st</span>
                                        <h2>85%</h2>
                                    </div>
                                </div>
                                <h3>Aliyu Salisu</h3>
                                <span>#KASPA10002</span>
                            </div>

                            <div class="single-performers-card">
                                <div class="performers-img d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="performers-3">
                                    <div>
                                        <span>3 st</span>
                                        <h2>80%</h2>
                                    </div>
                                </div>
                                <h3>Yakubu Suleiman</h3>
                                <span>#KASPA10003</span>
                            </div>

                            <div class="single-performers-card">
                                <div class="performers-img d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="performers-4">
                                    <div>
                                        <span>4 st</span>
                                        <h2>78%</h2>
                                    </div>
                                </div>
                                <h3>Basiru Hambali</h3>
                                <span>#KASPA10004</span>
                            </div>

                            <div class="single-performers-card">
                                <div class="performers-img d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="performers-5">
                                    <div>
                                        <span>5 st</span>
                                        <h2>75%</h2>
                                    </div>
                                </div>
                                <h3>Mutari Tela</h3>
                                <span>KASPA10005</span>
                            </div>

                            <div class="single-performers-card">
                                <div class="performers-img d-flex align-items-center">
                                    <img src="assets/common/images/sample.png" alt="performers-6">
                                    <div>
                                        <span>6 st</span>
                                        <h2>70%</h2>
                                    </div>
                                </div>
                                <h3>Sani Mubarak</h3>
                                <span>#KASPA10006</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Performers Area -->
@endsection
