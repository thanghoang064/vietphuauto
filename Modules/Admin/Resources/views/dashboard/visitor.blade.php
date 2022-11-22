<style>
    .main {
        background: white;
        padding: 30px;
    }

</style>
@extends('admin::layouts.master')
@section('content')
    <main class="main">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 border-radius-xl shadow-none" id="navbarBlur"
             data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control" onfocus="focused(this)"
                                   onfocusout="defocused(this)">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                               href="https://www.creative-tim.com/builder/material?ref=navbar-dashboard">Online
                                Builder</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="../pages/sign-in.html" class="nav-link font-weight-bold px-0 text-body">
                                <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link p-0 text-body" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link p-0 text-body">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link p-0 text-body" id="dropdownMenuButton"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                     class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                           fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                          d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                          opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                          d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1" aria-hidden="true"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Tổng doanh thu</p>
                                <h4 class="mb-0">{{ isset($totalRevenue) ? number_format($totalRevenue,0,',','.') : '' }} VND</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>Giá bán X
                                số lượng</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">money</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Chỉ tiêu</p>
                                <h4 class="mb-0">{{ isset($target) ? number_format($target,0,',','.') : '' }} VND</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>Số tiền đặt
                                ra để phấn đấu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Lợi nhuận</p>
                                <h4 class="mb-0">{{ isset($totalLn) ? number_format($totalLn,0,',','.') : '' }} VND</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span>Giá bán - chi
                                phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Chi phí</p>
                                <h4 class="mb-0">{{ isset($totalCp) ? number_format($totalCp,0,',','.') : '' }} VND</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>Giá nhập +
                                sửa chữa + lương nhân viên</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-bars" class="chart-canvas" height="212" width="450"
                                            style="display: block; box-sizing: border-box; height: 170px; width: 360.7px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Website Views</h6>
                            <p class="text-sm ">Last Campaign Performance</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transpmb-3arent">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line" class="chart-canvas" height="212" width="450"
                                            style="display: block; box-sizing: border-box; height: 170px; width: 360.7px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 "> Daily Sales </h6>
                            <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales.
                            </p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm"> updated 4 min ago </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line-tasks" class="chart-canvas" height="212" width="450"
                                            style="display: block; box-sizing: border-box; height: 170px; width: 360.7px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Completed Tasks</h6>
                            <p class="text-sm ">Last Campaign Performance</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">just updated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>BXH DOANH THU NHÂN VIÊN</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">Từ trước đến nay</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            STT
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Họ Tên
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Doanh thu
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Chỉ tiêu
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Hoàn thành
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bxhStaff as $index => $staff)
                                    <tr>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                       {{$index+1}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"> {{isset($staff->name) ? $staff->name : '' }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold">  {{isset($staff->turnover) ? $staff->turnover : '' }} </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 75000 VND </span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="progress-wrapper w-75 mx-auto">
                                                    <div class="progress-info">
                                                        <div class="progress-percentage">
                                                            <span class="text-xs font-weight-bold">60%</span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-gradient-info w-60" role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>


                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Top 5 xe được đặt lịch xem nhiều nhất</h6>
                        </div>
                            <div class="card-body p-3">
                                <div class="timeline timeline-one-side">
                                    @foreach($product_view as $index => $view)
                                        @foreach($abc as $a)
                                            @if($a->o_product_id == $view->id)
                                                <div class="timeline-block mb-3">
                                                    <span class="timeline-step">
                                                                @if($index+1 == 1)
                                                                         <img width="40px" src="https://khothietke.net/wp-content/uploads/2021/05/PNGkhothietke.net-02720.png" alt="">
                                                                @elseif($index+1 == 2)
                                                                        <img width="40px" src="https://img.freepik.com/fotos-premium/trofeo-plata_92242-435.jpg" alt="">
                                                                @elseif($index+1 == 3)
                                                                        <img width="20px" src="https://pngimg.com/uploads/golden_cup/golden_cup_PNG94581.png" alt="">
                                                                @else
                                                                    {{$index+1}}
                                                                @endif

                                                                </span>
                                                    <div class="timeline-content">
                                                        <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $view->pro_name }}</h6>
                                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{ $a->soluong }} Lượt xem</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                    </div>
                </div>
                <footer class="footer py-4  ">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="copyright text-center text-sm text-muted text-lg-start">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
                                    Được thực hiện bởi <i class="fa fa-heart" aria-hidden="true"></i>
                                    <a href="https://www.facebook.com/nnson202/" class="font-weight-bold"
                                       target="_blank">Nguyễn Ngọc Sơn</a> <i class="fa fa-heart"
                                                                              aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        {{--        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}


    </main>
    {{--    --}}{{-- chart visitor  --}}
    {{--    <div class="chartOrderMonth tab-none actives">--}}
    {{--        <canvas id="chartOrderMonth"></canvas>--}}
    {{--    </div>--}}

    {{--    <div class="chartBookingCar tab-none">--}}
    {{--        <canvas id="chartBookingCar"></canvas>--}}
    {{--    </div>--}}

    {{--    <div class="chartVisitor tab-none">--}}
    {{--        <canvas id="chartContainer"></canvas>--}}
    {{--    </div>--}}

    {{--    <div class="information tab-none">--}}
    {{--        <canvas id="productarticleorder"></canvas>--}}
    {{--    </div>--}}

    {{--    <div class="statistical-access statistical_access tab-none">--}}
    {{--        <canvas id="statisticalAccess"></canvas>--}}
    {{--    </div>--}}
@endsection
<script>
    const jsonData = <?php echo json_encode($chart_data, JSON_NUMERIC_CHECK); ?>;
    var dates = [];
    var visitors = [];
    for (var i = 0; i < jsonData.length; i++) {
        dates.push(jsonData[i][0]);
        visitors.push(jsonData[i][1]);
    }
    var ctx = document.getElementById('chartContainer').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'Lượng người truy cập websitr',
                data: visitors,
                // this dataset is drawn below
                borderColor: 'rgb(255, 99, 132)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                order: 2
            }, {
                label: 'Lượng người truy cập website',
                data: visitors,
                type: 'line',
                // this dataset is drawn on top
                borderColor: 'rgb(75, 192, 192)',
                order: 1
            }],
            labels: dates
        },
    });
</script>


<script>
    let result = [];
    let product = <?php echo json_encode($product, JSON_NUMERIC_CHECK); ?>;
    let article = <?php echo json_encode($article, JSON_NUMERIC_CHECK); ?>;


    result.push(product);
    result.push(article);


    var ctx_pr_ar_or = document.getElementById('productarticleorder').getContext('2d');
    new Chart(ctx_pr_ar_or, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: 'My First Dataset',
                data: result,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
            }],
            labels: ['Sản phẩm ', 'Bài viết ']
        },
    });
</script>

<script>
    let result_visitor = [];

    let visitor_count = <?php echo json_encode($visitor_count, JSON_NUMERIC_CHECK); ?>;

    let visitor_of_last_month_count = <?php echo json_encode($visitor_of_last_month_count, JSON_NUMERIC_CHECK); ?>;

    let visitor_of_this_month_count = <?php echo json_encode($visitor_of_this_month_count, JSON_NUMERIC_CHECK); ?>;

    let visitor_of_year_count = <?php echo json_encode($visitor_of_year_count, JSON_NUMERIC_CHECK); ?>;

    let visitors_all_count = <?php echo json_encode($visitors_all_count, JSON_NUMERIC_CHECK); ?>;

    result_visitor.push(visitor_count);
    result_visitor.push(visitor_of_last_month_count);
    result_visitor.push(visitor_of_this_month_count);
    result_visitor.push(visitor_of_year_count);
    result_visitor.push(visitors_all_count);

    var ctx_pr_ar_or = document.getElementById('statisticalAccess').getContext('2d');
    new Chart(ctx_pr_ar_or, {
        type: 'doughnut',
        data: {
            datasets: [{
                label: 'My First Dataset',
                data: result_visitor,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
            }],
            labels: ['Đang online', 'Tổng tháng trước', 'Tổng tháng này', 'Tổng một năm ', 'Tổng truy cập']
        },
    });
</script>


<script>
    var booking = document.getElementById('chartBookingCar').getContext('2d');
    new Chart(booking, {
        type: 'line',
        data: {
            datasets: [{
                label: 'Thống kê số lượng người đặt mua xe trong tháng ',
                data: <?php echo json_encode($order_total_guest, JSON_NUMERIC_CHECK); ?>,
                borderColor: 'rgb(54, 162, 235)',
                backgroundColor: [
                    'rgb(54, 162, 235)'
                ],
                yAxisID: 'y1',
            },
                {
                    label: 'Thống kê số lượng người đặt mua xe trong ngày ',
                    data: <?php echo json_encode($order_total_guest_now, JSON_NUMERIC_CHECK); ?>,
                    borderColor: 'rgb(255, 205, 86)',
                    backgroundColor: [
                        'rgb(255, 205, 86)'
                    ],
                    yAxisID: 'y',
                }
            ],
            labels: <?php echo json_encode($order_product_name_now, JSON_NUMERIC_CHECK); ?>
        },
        options: {
            responsive: true,
            interaction: {
                mode: 'index',
                intersect: false,
            },
            stacked: false,
            plugins: {
                title: {
                    display: true,
                    text: ''
                }
            },
            scales: {
                y1: {
                    type: 'linear',
                    display: true,
                    position: 'left',
                },
                y: {
                    type: 'linear',
                    display: true,
                    position: 'right',

                    // grid line settings
                    grid: {
                        drawOnChartArea: false, // only want the grid lines for one axis to show up
                    },
                },
            }
        },
    });
</script>


<script>
    var orderMonths = document.getElementById('chartOrderMonth').getContext('2d');
    new Chart(orderMonths, {
        type: 'line',
        data: {
            datasets: [
                {
                    label: 'Doanh thu theo ngày trong tháng',
                    data: <?php echo json_encode($revenueCalculation, JSON_NUMERIC_CHECK); ?>,
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }
            ],
            labels: <?php echo json_encode($dd_data, JSON_NUMERIC_CHECK); ?>
        },
    });
</script>

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        let dttn = $('.dttn');
        let slndx = $('.slndx');
        let ntcw = $('.ntcw');
        let spbv = $('.spbv');
        let tk = $('.tk');
        let chartOrderMonth = $('.chartOrderMonth');
        let chartBookingCar = $('.chartBookingCar');
        let chartVisitor = $('.chartVisitor');
        let information = $('.information');
        let statistical_access = $('.statistical_access');
        dttn.click(function () {
            dttn.addClass('active');
            slndx.removeClass('active');
            ntcw.removeClass('active');
            spbv.removeClass('active');
            tk.removeClass('active');
            chartOrderMonth.show();
            chartBookingCar.hide();
            chartVisitor.hide();
            information.hide();
            statistical_access.hide();
        })
        slndx.click(function () {
            dttn.removeClass('active');
            slndx.addClass('active');
            ntcw.removeClass('active');
            spbv.removeClass('active');
            tk.removeClass('active');
            chartOrderMonth.hide();
            chartBookingCar.show();
            chartVisitor.hide();
            information.hide();
            statistical_access.hide();
        })
        ntcw.click(function () {
            dttn.removeClass('active');
            slndx.removeClass('active');
            ntcw.addClass('active');
            spbv.removeClass('active');
            tk.removeClass('active');
            chartOrderMonth.hide();
            chartBookingCar.hide();
            chartVisitor.show();
            information.hide();
            statistical_access.hide();
        })
        spbv.click(function () {
            dttn.removeClass('active');
            slndx.removeClass('active');
            ntcw.removeClass('active');
            spbv.addClass('active');
            tk.removeClass('active');
            chartOrderMonth.hide();
            chartBookingCar.hide();
            chartVisitor.hide();
            information.show();
            statistical_access.hide();
        })
        tk.click(function () {
            dttn.removeClass('active');
            slndx.removeClass('active');
            ntcw.removeClass('active');
            spbv.removeClass('active');
            tk.addClass('active');
            chartOrderMonth.hide();
            chartBookingCar.hide();
            chartVisitor.hide();
            information.hide();
            statistical_access.show();
        })
    </script>
@endsection()


