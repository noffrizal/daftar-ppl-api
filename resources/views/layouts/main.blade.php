<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
  <meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
  <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
  <title>Pendaftaran PPL</title>
  @stack('css')
  <!-- Application vendor css url -->
  <link rel="stylesheet" href="/assets/cssbundle/daterangepicker.min.css">
  <!-- project css file  -->
  <link rel="stylesheet" href="/assets/css/luno-style.css">
  <!-- Jquery Core Js -->


</head>

<body class="layout-1" data-luno="theme-blue">
  <!-- start: sidebar -->
  @include('layouts.sidebar')


  <!-- start: body area -->
  <div class="wrapper">
    <!-- start: page header -->
    @include('layouts.header')
    <!-- start: page toolbar -->

    <!-- start: page body -->
    @yield('content')

    <!-- start: page footer -->
    <footer class="page-footer">
      <div class="container-fluid flex-wrap justify-content-between align-items-center">
        <p class="col-md-12 mb-0 text-muted text-center">© 2021 <a href="https://it.iainlangsa.ac.id/" target="_blank" title="ThemeMakker Infotech LLP">TIPD</a>, IAIN Langsa.</p>
      </div>
    </footer>
  </div>

  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="/assets/js/theme.js"></script>
  <script src="/assets/js/plugins.js"></script>
  <!-- Plugin Js -->
  @stack('js')
  <script src="/assets/js/bundle/apexcharts.bundle.js"></script>
  <!-- Vendor Script -->
  <script src="/assets/js/bundle/apexcharts.bundle.js"></script>
  <script>
    // LUNO Revenue
    var options = {
      series: [{
        name: 'Income',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
      }, {
        name: 'Expenses',
        data: [123, 142, 135, 127, 143, 122, 117, 131, 122, 122, 112, 116]
      }, {
        name: 'Revenue',
        data: [223, 242, 235, 227, 243, 222, 217, 231, 222, 222, 212, 216]
      }],
      chart: {
        type: 'bar',
        height: 260,
        stacked: true,
        stackType: '100%',
        toolbar: {
          show: false,
        },
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
          }
        }
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      },
      fill: {
        opacity: 1
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      },
    };
    var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
    chart.render();
    // Sales by Category
    var options = {
      chart: {
        height: 280,
        type: 'donut',
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              total: {
                showAlways: true,
                show: true
              }
            }
          }
        }
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        show: true,
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      series: [55, 35, 10],
    }
    var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
    chart.render();
  </script>

</body>

</html>
