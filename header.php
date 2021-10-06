<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
      rel="preload" 
      as="font"
    />
    <link rel="stylesheet" href="sass/swiper-bundle.min.css" class="css" />
    <link rel="stylesheet" href="sass/aos.css">
    <link rel="stylesheet" href="sass/style.css" />
  </head>
  <body>
    <header class="navbar navbar__mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="/" class="logo" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <img
              src="../img/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>
          <form action="#" class="search search__hidden navbar__search">
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: Search" />
            </button>
          </form>
          <a href="#" class="user user__hidden navbar__user" data-aos="fade-left"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
            <img src="img/avatar.webp" alt="Avatar" class="user__avatar" />
            <span class="user__name"><?= "Roman" ?></span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--hidden">
              <a href="#" class="user user__visible navbar__user">
                <img src="img/avatar.webp" alt="Avatar" class="user__avatar" />
                <span class="user__name"><?="Roman"?></span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item--hidden">
              <form action="#" class="search search__visible navbar__search">
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: Search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="activities.php" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="restaurants.php" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar-bottom -->
    </header>
    <!-- /.navbar -->
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->