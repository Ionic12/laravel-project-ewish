<div class="site-navbar-wrap">
  <div class="site-navbar site-navbar-target js-sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-2">
          <h1 class="my-0 site-logo"><a href="index.html">COURSE</a></h1>
        </div>
        <div class="col-10">
          <nav class="site-navigation text-right" role="navigation">
            <div class="container">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
              <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="/" class="nav-link">Home</a></li>
                <li><a href="/.#course" class="nav-link">Course</a></li>
                <li><a href="/.#about" class="nav-link">About Us</a></li>
                @auth
                <li class="has-children">
                  <a href="#" class="nav-link">Hi, {{ auth()->user()->name }}</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="/dashboard" class="nav-link mt-3">Dashboard</a></li>
                    <li class="nav-link">
                      <form action="/logout" method="POST" id="log">
                        @csrf
                       <a onclick="document.getElementById('log').submit()" class="nav-link" >Log Out</a>
                       </form>
                    </li>
                  </ul>
                </li>
                @else
                <li><a href="/loginpage" class="nav-link">Login</a></li>
                @endauth
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
button .nav-link{
  background: transparent;
  color: #212529;
  border: none;
}
.site-navbar-wrap {
  position: absolute;
  z-index: 99;
  width: 100%;
  left: 0; }
  .site-navbar-wrap a {
    color: #fff; 
    transform: translate(0%,-16%)
  }
  .site-navbar-wrap .site-navbar-top {
    font-size: 0.8rem; }

.site-navbar-top {
  border-bottom: 1px solid rgba(255, 255, 255, 0.4); }

.site-navbar {
  margin-bottom: 0px;
  width: 100%; }
  .site-navbar .site-logo {
    font-weight: 200;
    line-height: 0;
    top: -7px;
    position: relative; }
    .site-navbar .site-logo a {
      font-weight: 200;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      text-transform: uppercase; }
  .site-navbar .site-navigation .site-menu {
    margin-bottom: 0; }
    .site-navbar .site-navigation .site-menu a {
      text-decoration: none !important;
      display: inline-block;
      font-weight: 500; }
    .site-navbar .site-navigation .site-menu > li {
      display: inline-block;
      padding: 10px 5px; }
      .site-navbar .site-navigation .site-menu > li > a {
        padding: 20px 10px;
        color: rgba(255, 255, 255, 0.6);
        font-size: 15px;
        text-decoration: none !important; }
        .site-navbar .site-navigation .site-menu > li > a.active {
          color: #fff; }
        .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #fff; }
      .site-navbar .site-navigation .site-menu > li:last-child {
        padding-right: 0; }
        .site-navbar .site-navigation .site-menu > li:last-child > a {
          padding-right: 0; }
    .site-navbar .site-navigation .site-menu .has-children {
      position: relative; }
      .site-navbar .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-navbar .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          font-size: 16px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: 'icomoon'; }
      .site-navbar .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        position: absolute;
        text-align: left;
        -webkit-box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.25);
        box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.25);
        padding: 0px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: #fff;
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s;
        border-radius: 4px; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
          position: absolute; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown a {
          font-size: 14px;
          text-transform: none;
          letter-spacing: normal;
          -webkit-transition: 0s all;
          -o-transition: 0s all;
          transition: 0s all;
          color: #343a40; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown a.active {
            color: #007bff; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown .active > a {
          color: #fff !important; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown > li {
          list-style: none;
          padding: 0;
          margin: 0;
          min-width: 200px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li:first-child > a {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li:last-child > a {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
            padding: 9px 20px;
            display: block; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              background: #ebeef0;
              color: #212529; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
            content: "\e315";
            right: 20px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
            left: 100%;
            top: 0; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
            background: #ebeef0;
            color: #212529; }
      .site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
        color: #fff; }
      .site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
        cursor: pointer; }
        .site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
          -webkit-transition-delay: 0s;
          -o-transition-delay: 0s;
          transition-delay: 0s;
          margin-top: 0px;
          visibility: visible;
          opacity: 1; }

.site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(110%);
  -ms-transform: translateX(110%);
  transform: translateX(110%);
  -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .offcanvas-menu .site-mobile-menu {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
          color: #dee2e6; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 10px 20px;
      display: block;
      position: relative;
      color: #212529; }
      .site-mobile-menu .site-nav-wrap a.active, .site-mobile-menu .site-nav-wrap a:hover {
        color: #007bff; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li.active > a {
        color: #007bff; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 10px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 20px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 16px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 16px;
                padding-left: 60px; }

.sticky-wrapper {
  position: absolute;
  z-index: 100;
  width: 100%; }
  .sticky-wrapper + .site-blocks-cover {
    margin-top: 96px; }
  .sticky-wrapper .site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .sticky-wrapper .site-navbar ul li.active a {
      color: #fff; }
  .sticky-wrapper.is-sticky .site-navbar {
    background-color: #007bff; }
    .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li {
      display: inline-block;
      padding: 10px 5px; }
      .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li:last-child {
        padding-right: 0; }
        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li:last-child > a {
          padding-right: 0; }
      .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li.has-children > a {
        padding-right: 20px; }
      .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li > a {
        padding: 10px 10px;
        color: rgba(255, 255, 255, 0.6);
        font-size: 15px; }
        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #fff !important; }
        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li > a.active {
          color: #fff !important; }
      .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu > li.active a {
        color: #fff; }

</style>