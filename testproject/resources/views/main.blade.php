<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>艾肯娛樂後台系統</title>
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
  <header class="header-desktop">
  </header>
  <div class="menu-sidebar d-none d-lg-block">
  <div class="logo">
      <a href="#">
        <img src="images/icon/logo.png" alt="ican-logo">
      </a>
    </div>
  <div class="page-wrapper">
    <div class="menu-sidebar__content js-scrollbar1 ps">
      <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
          <li>
            <a href="chart.html">
              <i class="fas fa-home"></i>後台首頁</a>
          </li>
          <li class="has-sub">
            <a class="js-arrow open" href="#">
              <i class="fas fa-gear"></i>帳號設定</a>
            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: block;">
              <li>
                <a href="#">資料設定</a>
              </li>
              <li>
                <a href="#">修改密碼</a>
              </li>
            </ul>
          <li class="has-sub">
            <a class="js-arrow open" href="#">
              <i class="fas fa-user"></i>管理設置</a>
            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: block;">
              <li>
                <a href="#">帳號管理</a>
              </li>
              <li>
                <a href="#">權限管理</a>
              </li>
            </ul>
          <li class="has-sub">
            <a class="js-arrow open" href="#">
              <i class="fas fa-book"></i>後台日誌</a>
            <ul class="list-unstyled navbar__sub-list js-sub-list" style="display: block;">
              <li>
                <a href="#">帳號日誌</a>
              </li>
              <li>
                <a href="#">登入日誌</a>
              </li>
            </ul>
            <ul>
      </nav>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
      </div>
      <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
      </div>
    </div>
  </div>
    {{--Jquery JS--}}
    <script src="vendor/jquery-3.2.1.min.js"></script>
    {{--Bootstrap JS--}}
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    {{-- Vendor JS  --}}
    {{--  幻燈片效果  --}}
    <script src="vendor/slick/slick.min.js">
    </script>
    {{-- wowowowowowo!!!   --}}
    <script src="vendor/wow/wow.min.js"></script>
    {{--  漸變效果  --}}
    <script src="vendor/animsition/animsition.min.js"></script>
    {{--  bootstript 捲動軸  --}}
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    {{--  COUNTER-UP JQUERY PLUGIN  --}}
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    {{--  滾動條  --}}
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    {{--  圖表  --}}
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    {{--  選單2  --}}
    <script src="vendor/select2/select2.min.js"> </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>