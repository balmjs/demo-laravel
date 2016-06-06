<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>balm-php</title>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/home/index.css">

  <!--[if lt IE 9]>
  <link rel="stylesheet" href="css/ie.css">
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
    <div class="sprites">
      <!-- css sprites -->
      <ul class="icon-list">
        <li class="icon icon-3d_effects"></li>
        <li class="icon icon-connectivity"></li>
        <li class="icon icon-access"></li>
        <li class="icon icon-multimedia"></li>
        <li class="icon icon-offline_storage"></li>
        <li class="icon icon-performance"></li>
        <li class="icon icon-semantics"></li>
        <li class="icon icon-styling"></li>
      </ul>
      <!-- icon font -->
      <i class="fa fa-smile-o fa-2x"></i>
    </div>
    <div class="hero">
      <div class="hero-content">
        <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="Logo Image" class="hero-logo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni modi doloremque excepturi laudantium maxime explicabo cumque deleniti voluptate deserunt.</p>
      </div>
    </div>
    <div class="cards">
      <div class="card">
        <div class="card-image">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
        </div>
        <div class="card-header">
          First Card
        </div>
        <div class="card-copy">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-4.png" alt="">
        </div>
        <div class="card-header">
          Another Card
        </div>
        <div class="card-copy">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
        </div>
        <div class="card-header">
          The Last Card
        </div>
        <div class="card-copy">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>

  <!--<div class="wrapper-for-content-outside-of-footer">
   Uncomment this whole section for a sticky footer. The content of the page should be inside of this .wrapper-for-content-outside-of-footer
  </div>-->

  <footer class="footer-2" role="contentinfo">
    <div class="footer-logo">
      <img src="https://raw.githubusercontent.com/thoughtbot/refills/49db8c0f2f8066c2c3a275781503fe3303a1a9fc/source/images/placeholder.png" alt="Logo image">
    </div>
    <ul>
      <li><a href="javascript:void(0)">About</a></li>
      <li><a href="javascript:void(0)">Contact</a></li>
      <li><a href="javascript:void(0)">Products</a></li>
    </ul>

    <div class="footer-secondary-links">
      <ul>
        <li><a href="javascript:void(0)">Terms and Conditions</a></li>
        <li><a href="javascript:void(0)">Privacy Policy</a></li>
      </ul>
    </div>
  </footer>

  <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.12.3.min.js"><\/script>')
  </script>

  <script src="js/home/index.js"></script>
</body>

</html>
