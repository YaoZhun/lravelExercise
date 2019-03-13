@extends('script')
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
</body>

</html>