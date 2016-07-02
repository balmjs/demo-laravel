<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>balm-laravel</title>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="{{ balm('css/about/index.css') }}">

  <!--[if lt IE 9]>
  <link rel="stylesheet" href="{{ balm('css/ie.css') }}">
  <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <header class="navigation" role="banner">
    <div class="navigation-wrapper">
      <a href="javascript:void(0)" class="logo">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="Logo Image">
      </a>
      <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
      <nav role="navigation">
        <ul id="js-navigation-menu" class="navigation-menu show">
          <li class="nav-link"><a href="/">Home</a></li>
          <li class="nav-link"><a href="/about">About</a></li>
          <li id="js-navigation-more" class="nav-link more"><a href="javascript:void(0)">More</a>
            <ul class="submenu">
              <li><a href="javascript:void(0)">Submenu Item</a></li>
              <li><a href="javascript:void(0)">Another Item</a></li>
              <li class="more"><a href="javascript:void(0)">Item with submenu</a>
                <ul class="submenu">
                  <li><a href="javascript:void(0)">Sub-submenu Item</a></li>
                  <li><a href="javascript:void(0)">Another Item</a></li>
                </ul>
              </li>
              <li class="more"><a href="javascript:void(0)">Another submenu</a>
                <ul class="submenu">
                  <li><a href="javascript:void(0)">Sub-submenu</a></li>
                  <li><a href="javascript:void(0)">An Item</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="navigation-tools">
        <div class="search-bar">
          <form role="search">
            <input type="search" placeholder="Enter Search" />
            <button type="submit">
              <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon.png" alt="Search Icon">
            </button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="grid-items">
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item grid-item-big grid-item-image">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>Grid Item With an Image</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item grid-item-big">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>Another Wide Item</h1>
        <p>Lorem ipsum consectetur dolor sit amet, consectetur adipisicing elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>Last Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>Last Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>A Grid Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
      <a href="javascript:void(0)" class="grid-item">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="">
        <h1>Item</h1>
        <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
      </a>
    </div>
  </div>

  <script src="{{ balm('js/vendor/common.js') }}"></script>
  <script src="{{ balm('js/about/index.js') }}"></script>
</body>

</html>
