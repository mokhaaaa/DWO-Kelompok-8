<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/logoo.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 "> 
                <img src="../assets/img/logo2.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Adventure Works </span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/home.php">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#nav-collapse">
    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
        <span class="nav-link-text ms-1">Order Quantity</span>
    </a>
    <div class="collapse" id="nav-collapse">
        <ul class="list-group">
            <li class="list-group-item">
                <a class="nav-link " href="chart1orderqty.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 1</span>
                </a>
            </li>
            
            <li class="list-group-item">
                <a class="nav-link " href="chart2orderqty.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 2</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart3orderqty.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 3</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart4orderqty.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 4</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart5orderqty.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 5</span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="chart5orderqty.php" data-bs-toggle="collapse" data-bs-target="#nav-collapse">
    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                           <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
        <span class="nav-link-text ms-1">Total Due</span>
    </a>
    <div class="collapse" id="nav-collapse">
        <ul class="list-group">
        <li class="list-group-item">
                <a class="nav-link " href="chart1totaldue.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 1</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart2totaldue.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 2</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart3totaldue.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 3</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart4totaldue.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 4</span>
                </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link " href="chart5totaldue.php">
                <div class="icon icon-shape icon-xs border-radius-md text-center me-2 d-flex align-items-center justify-content-center bg-gradient-info">
    <img src="../assets/img/chart2.png" alt="Chart Icon" class="chart-icon">
</div>

                    <span class="nav-link-text ms-1">Chart 5</span>
                </a>
            </li>
        </div>

    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Total Due</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Chart 3</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Chart 3</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Due</p>
                                        <h5 class="font-weight-bolder">
                                            $163,464,602
                                        </h5>
                                        <p class="mb-0">
                                            Between 2001 - 2004
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Order Quantity</p>
                                        <h5 class="font-weight-bolder">
                                            2.252.382
                                        </h5>
                                        <p class="mb-0">
                                            Between 2001 - 2004
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Products</p>
                    <h5 class="font-weight-bolder">
                      504
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span>
                      Between 2001 - 2004
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Vendors</p>
                    <h5 class="font-weight-bolder">
                      104
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder"></span> Between 2001 - 2004
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
        
            
        
        <div class="row mt-4">
                <div class="col-lg-12 mb-lg-12 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize text-center">Bar Chart</h6>
                            <p class="text-sm mb-0"style="text-align: center;">
                            <span class="font-weight-bold">Comparison Of Product Category With Total Due</span> 
                            
                            
                            </p>
                        </div>
                        <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-bar" class="chart-canvas" style="width: 100%; height: 500px;"></canvas>
                        </div>
                </div>
            </div>
    </div>


    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
    var ctx = document.getElementById('chart-bar').getContext('2d');

    <?php
    $query = "SELECT p.category, IFNULL(SUM(fp.total_due), 0) AS total_due FROM product p LEFT JOIN fakta_pembelian fp ON fp.product_id = p.product_id WHERE p.category IS NOT NULL OR p.category = ' ' GROUP BY p.category";
    $result = mysqli_query($conn, $query);

    $categories = array();
    $datasets = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $category = $row['category'];
        $totalDue = $row['total_due'];

        $categories[] = $category;
        $datasets[] = array('label' => $category, 'data' => $totalDue);
    }

    echo "var data = {";
    echo "labels: " . json_encode($categories) . ",";
    echo "datasets: [{";
    echo "label: 'Total Due',";
    echo "data: " . json_encode(array_column($datasets, 'data')) . ",";
    echo "backgroundColor: 'rgba(54, 162, 235, 0.5)',"; // Warna latar belakang
    echo "borderColor: 'rgba(54, 162, 235, 1)',"; // Warna batas
    echo "borderWidth: 1"; // Lebar batas
    echo "}]";
    echo "};";
    ?>

var options = {
    responsive: true,
    scales: {
        x: {
            title: {
                display: true,
                text: 'Product Category'
            }
        },
        y: {
            beginAtZero: true,
            title: {
                display: true,
                text: 'Total Due'
            },
            ticks: {
                callback: function(value, index, values) {
                    var formattedValue = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                    return formattedValue.substring(0, 10);
                }
            }
        }
    },
    plugins: {
        tooltip: {
            callbacks: {
                label: function(context) {
                    var value = context.parsed.y;
                    var formattedValue = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                    return formattedValue.substring(0, 10);
                }
            }
        }
    },
    onClick: function(e, element) {
        var categoryLabel = this.data.labels[element[0].index];
        if (categoryLabel === 'Accessories') {
            // Redirect ke halaman data1chart2.php
            window.location.href = 'data1chart3totaldue.php';
        } else if (categoryLabel === 'Components') {
            // Redirect ke halaman data2chart2.php
            window.location.href = 'data2chart3totaldue.php';
        }
    }
};

    // Membuat chart bar
    new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>