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
                                href="javascript:;">Order Quantity</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Chart 4</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Chart 4</h6>
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
                            <h6 class="text-capitalize text-center">Line Chart</h6>
<p class="text-sm mb-0" style="text-align: center;">
    <span class="font-weight-bold">Order Quantity Trends From Several Cities</span> 
</p>                            
                        </div>
                        <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" style="width: 100%; height: 500px;"></canvas>
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
    var ctx = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx.createLinearGradient(0, 230, 0, 50);
    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');

    var chartData = {
        labels: [], // untuk menyimpan tahun
        datasets: [
            {
                label: "Daly City",
                data: [], // untuk menyimpan order_qty Daly City
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                pointRadius: 0,
                fill: true,
                maxBarThickness: 6
            },
            {
                label: "Lynnwood",
                data: [], // untuk menyimpan order_qty Lynnwood
                borderColor: "#36a2eb",
                backgroundColor: "rgba(54, 162, 235, 0.2)",
                borderWidth: 3,
                pointRadius: 0,
                fill: true,
                maxBarThickness: 6
            },
            {
                label: "Portland",
                data: [], // untuk menyimpan order_qty Portland
                borderColor: "#4bc0c0",
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderWidth: 3,
                pointRadius: 0,
                fill: true,
                maxBarThickness: 6
            }
        ]
    };

    // Query SQL untuk mendapatkan data tren pemesanan produk
    <?php
        $query = "
            SELECT v.city, d.year, IFNULL(SUM(fp.order_qty), 0) AS total_order_qty
            FROM vendor v
            CROSS JOIN date d
            LEFT JOIN fakta_pembelian fp ON v.vendor_id = fp.vendor_id AND d.date_id = fp.date_id
            WHERE (v.state = 'California' AND v.city = 'Daly City')
                OR (v.state = 'Washington' AND v.city = 'Lynnwood')
                OR (v.state = 'Oregon' AND v.city = 'Portland')
                AND d.year IN (2001, 2002, 2003, 2004)
            GROUP BY v.city, d.year
            ORDER BY v.city, d.year;
        ";

        // Eksekusi query SQL dan ambil data untuk chart
        $result = $conn->query($query);

        $chartData = array(
            'labels' => array(),
            'datasets' => array(
                array(
                    'label' => 'Daly City',
                    'data' => array(),
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'fill' => false
                ),
                array(
                    'label' => 'Lynnwood',
                    'data' => array(),
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'fill' => false
                ),
                array(
                    'label' => 'Portland',
                    'data' => array(),
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => false
                )
            )
        );

        $years = array(); // Untuk menyimpan tahun yang sudah ditambahkan

        while ($row = $result->fetch_assoc()) {
            $city = $row['city'];
            $year = $row['year'];
            $totalOrderQty = $row['total_order_qty'];

            // Jika tahun belum ditambahkan, tambahkan ke labels
            if (!in_array($year, $years)) {
                $chartData['labels'][] = $year;
                $years[] = $year; // Tambahkan tahun ke array years
            }

            if ($city === 'Daly City') {
                $chartData['datasets'][0]['data'][] = $totalOrderQty;
            } elseif ($city === 'Lynnwood') {
                $chartData['datasets'][1]['data'][] = $totalOrderQty;
            } elseif ($city === 'Portland') {
                $chartData['datasets'][2]['data'][] = $totalOrderQty;
            }
        }

        echo "var chartData = " . json_encode($chartData) . ";";
    ?>

    new Chart(ctx, {
        type: "line",
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        }
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        }
                    }
                }
            }
        }
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