<?php include('header.php');?>
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
              </div>
              <!-- /.stars -->
              <h1 class="hotel-name hotel-info__name">Grand Hilton Hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <!-- /.hotel-wrapper -->
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays
              Free
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div data-toggle="modal" data-href="#rating-modal" class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <div class="slider hotel__slider">
            <!-- Slider main container -->
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <img
                    class="swiper-slide__image"
                    src="/img/slide1.webp"
                    alt="slide"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="swiper-slide__image"
                    src="/img/slide2.webp"
                    alt="slide"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="swiper-slide__image"
                    src="/img/slide3.webp"
                    alt="slide"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="swiper-slide__image"
                    src="/img/slide4.webp"
                    alt="slide"
                  />
                </div>
                <div class="swiper-slide">
                  <img
                    class="swiper-slide__image"
                    src="/img/slide5.webp"
                    alt="slide"
                  />
                </div>
              </div>
              <!-- If we need pagination
              <div class="swiper-pagination"></div> -->

              <!-- If we need navigation buttons -->
              <button class="slider-button slider-button--prev"></button>
              <button class="slider-button slider-button--next"></button>
            </div>
            <!-- /. swiper -->
          </div>
          <!-- /.slider -->
          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img
                      src="/img/user.svg"
                      alt="Icon: User"
                      class="booking__icon"
                    />
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <!-- /.booking__text -->
                  <div class="booking__text">
                    <img
                      src="/img/home.svg"
                      alt="Icon: Home"
                      class="booking__icon"
                    />
                    <span class="booking__description">1 x Room</span>
                  </div>
                  <!-- /.booking__text -->
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:21100">
                  <img src="img/phone-call.svg" alt="Icon: phone" />
                  <span class="booking__num">21100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" data-href="#booking-modal" class="button booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2388.8793317991554!2d-80.76099431959035!3d32.13989069484872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88fc791b7607191b%3A0x98f2b586ea9394e7!2sGrand%20Hilton%20Head%20Inn%2C%20Ascend%20Hotel%20Collection!5e0!3m2!1sru!2sru!4v1632393182663!5m2!1sru!2sru"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-right -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->
    <section class="packages">
      <div class="container">
        <h2 class="packages-title">Other packages</h2>
        <div class="packages-grid">
          <div class="packages-grid__topitem" data-aos="fade-right">
            <span class="packages-grid__offer" data-aos="fade-right" data-aos-offset="300"
     data-aos-easing="ease-in-sine">Flash Offer</span>
            <img
              src="/img/packages-topimage.webp"
              alt="Photo: Hotel"
              class="packages-grid__topimage"
            />
            <div class="packages-grid__topbooking">
              <div class="packages-grid__stars">
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
                <img src="/img/star.svg" alt="star" />
              </div>
              <!-- /.stars -->
              <h3 class="packages-grid__toptitle">Hotel Blue Haven</h3>
              <p class="packages-grid__toptext">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <div class="grid-booking">
                <div class="grid-booking__text">
                  <img
                    src="/img/map-pin.svg"
                    alt="Icon: map"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description"
                    >1749 Wheeler Ridge Delaware</span
                  >
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/user.svg"
                    alt="Icon: User"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">2 x Guests</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/home.svg"
                    alt="Icon: Home"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">1 x Room</span>
                </div>
                <!-- /.booking__text -->
                <span class="grid-booking__oldprice">$ 10,500</span>
                <div class="grid-booking__price">
                  <strong class="grid-booking__newprice">$ 8,500</strong>
                  <button class="button grid-booking__button">Book Now</button>
                </div>
                <!-- /.booking__price -->
              </div>
              <!-- /.grid__booking -->
            </div>
            <!-- /.packages-grid__topbooking -->
          </div>
          <!-- /.packages-grid__item1 -->
          <div class="packages-grid__item" data-aos="fade-left">
            <span class="packages-grid__smalloffer" data-aos="fade-right" data-aos-offset="300"
     data-aos-easing="ease-in-sine">Flash Offer</span>
            <img
              src="/img/packages-image2.webp"
              alt="Photo: Hotel"
              class="packages-grid__image"
            />
            <div class="packages-grid__smallbooking">
              <div class="grid-booking">
                <h3 class="grid-booking__title">LUX* Belle Mare</h3>
                <div class="grid-booking__text">
                  <img
                    src="/img/map-pin.svg"
                    alt="Icon: map"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description"
                    >1749 Wheeler Ridge Delaware</span
                  >
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/user.svg"
                    alt="Icon: User"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">2 x Guests</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/home.svg"
                    alt="Icon: Home"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">1 x Room</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-price">
                  <span class="grid-booking__oldprice">$ 8,500</span>
                  <div class="grid-booking__price">
                    <strong class="grid-booking__newprice">$ 3,000</strong>
                    <button class="button grid-booking__button">
                      Book Now
                    </button>
                  </div>
                  <!-- /.grid-booking__price -->
                </div>
                <!-- /.grid-price -->
              </div>
              <!-- /.grid-booking -->
            </div>
            <!-- /.packages-grid__topbooking -->
          </div>
          <!-- /.packages-grid__item -->
          <div class="packages-grid__item" data-aos="zoom-in" data-aos-delay="200">
            <span class="packages-grid__smalloffer">Flash Offer</span>
            <img
              src="/img/packages-image3.webp"
              alt="Photo: Hotel"
              class="packages-grid__image"
            />
            <div class="packages-grid__smallbooking">
              <div class="grid-booking">
                <h3 class="grid-booking__title">White Palace</h3>
                <div class="grid-booking__text">
                  <img
                    src="/img/map-pin.svg"
                    alt="Icon: map"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description"
                    >1749 Wheeler Ridge Delaware</span
                  >
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/user.svg"
                    alt="Icon: User"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">2 x Guests</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/home.svg"
                    alt="Icon: Home"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">1 x Room</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-price">
                  <span class="grid-booking__oldprice">$ 10,500</span>
                  <div class="grid-booking__price">
                    <strong class="grid-booking__newprice">$ 9,500</strong>
                    <button class="button grid-booking__button">
                      Book Now
                    </button>
                  </div>
                  <!-- /.grid-booking__price -->
                </div>
                <!-- /.grid-price -->
              </div>
              <!-- /.grid-booking -->
            </div>
            <!-- /.packages-grid__topbooking -->
          </div>
          <!-- /.packages-grid__item -->
          <div class="packages-grid__item" data-aos="zoom-in" data-aos-delay="400">
            <span class="packages-grid__smalloffer">Flash Offer</span>
            <img
              src="/img/packages-image4.webp"
              alt="Photo: Hotel"
              class="packages-grid__image"
            />
            <div class="packages-grid__smallbooking">
              <div class="grid-booking">
                <h3 class="grid-booking__title">Luxury Place</h3>
                <div class="grid-booking__text">
                  <img
                    src="/img/map-pin.svg"
                    alt="Icon: map"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description"
                    >1749 Wheeler Ridge Delaware</span
                  >
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/user.svg"
                    alt="Icon: User"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">2 x Guests</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/home.svg"
                    alt="Icon: Home"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">1 x Room</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-price">
                  <span class="grid-booking__oldprice">$ 4,500</span>
                  <div class="grid-booking__price">
                    <strong class="grid-booking__newprice">$ 2,500</strong>
                    <button class="button grid-booking__button">
                      Book Now
                    </button>
                  </div>
                  <!-- /.grid-booking__price -->
                </div>
                <!-- /.grid-price -->
              </div>
              <!-- /.grid-booking -->
            </div>
            <!-- /.packages-grid__topbooking -->
          </div>
          <!-- /.packages-grid__item -->
          <div class="packages-grid__item" data-aos="zoom-in" data-aos-delay="600">
            <span class="packages-grid__smalloffer">Flash Offer</span>
            <img
              src="/img/packages-image5.webp"
              alt="Photo: Hotel"
              class="packages-grid__image"
            />
            <div class="packages-grid__smallbooking">
              <div class="grid-booking">
                <h3 class="grid-booking__title">Hotel Five Star</h3>
                <div class="grid-booking__text">
                  <img
                    src="/img/map-pin.svg"
                    alt="Icon: map"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description"
                    >1749 Wheeler Ridge Delaware</span
                  >
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/user.svg"
                    alt="Icon: User"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">2 x Guests</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-booking__text">
                  <img
                    src="/img/home.svg"
                    alt="Icon: Home"
                    class="grid-booking__icon"
                  />
                  <span class="grid-booking__description">1 x Room</span>
                </div>
                <!-- /.booking__text -->
                <div class="grid-price">
                  <span class="grid-booking__oldprice">$ 6,500</span>
                  <div class="grid-booking__price">
                    <strong class="grid-booking__newprice">$ 3,500</strong>
                    <button class="button grid-booking__button">
                      Book Now
                    </button>
                  </div>
                  <!-- /.grid-booking__price -->
                </div>
                <!-- /.grid-price -->
              </div>
              <!-- /.grid-booking -->
            </div>
            <!-- /.packages-grid__topbooking -->
          </div>
          <!-- /.packages-grid__item -->
        </div>
        <!-- /.packages-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.packages -->
    <section
      class="newsletter parallax-window"
      data-parallax="scroll"
      data-image-src="../img/subscribe-bg.webp"
    >
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form action="send.php" method="POST" class="subscribe valid">
          <input
            name="email"
            type="email"
            class="subscribe__input"
            placeholder="Your email address"
            required
          />
          <button type="submit" class="subscribe__button">Send</button>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <!-- /.newsletter -->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews-title">What people think about us</h2>
        <div class="reviews-slider">
          <div class="reviews-swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="reviews-slider__item">
                  <div class="reviews-slider__profile">
                    <img
                      src="/img/reviews-avatar.webp"
                      alt=""
                      class="reviews-slider__avatar"
                    />
                    <h3 class="reviews-slider__username">Megan Fox</h3>
                    <span class="reviews-slider__date"
                      >Stayed 18 Nov, 2019</span
                    >
                    <div class="reviews-slider__rating">
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                    </div>
                  </div>
                  <!-- /.reviews-slider__profile -->
                  <p class="reviews-slider__text">
                    It was very nice hotel with cleanliness. Staff behavior was
                    good and polite. They welcome us very well. Issue was only
                    that Lift was not in working and we were allotted to 3rd
                    floor and amenities articles were in corner of gallery which
                    were giving bad feeling. Breakfast was good and support of
                    the staff was also very nice. Location is not good as per
                    atmosphere, it is very nearby most of the popular places but
                    self location in a narrow street is not good. Overall it was
                    a good experience and could recommend.
                  </p>
                </div>
                <!-- /.reviews-slider__item -->
              </div>
              <div class="swiper-slide">
                <div class="reviews-slider__item">
                  <div class="reviews-slider__profile">
                    <img
                      src="/img/reviews-avatar2.webp"
                      alt="John Newman"
                      class="reviews-slider__avatar"
                    />
                    <h3 class="reviews-slider__username">John Newman</h3>
                    <span class="reviews-slider__date"
                      >Stayed 22 Sep, 2020</span
                    >
                    <div class="reviews-slider__stars">
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                    </div>
                  </div>
                  <!-- /.reviews-slider__profile -->
                  <p class="reviews-slider__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Temporibus, esse id! Expedita officiis nesciunt quos
                    eveniet, esse mollitia reiciendis blanditiis?
                  </p>
                </div>
                <!-- /.reviews-slider__item -->
              </div>
              <div class="swiper-slide">
                <div class="reviews-slider__item">
                  <div class="reviews-slider__profile">
                    <img
                      src="/img/reviews-avatar3.webp"
                      alt="Alina Goldberg"
                      class="reviews-slider__avatar"
                    />
                    <h3 class="reviews-slider__username">Alina Goldberg</h3>
                    <span class="reviews-slider__date"
                      >Stayed 02 Aug, 2021</span
                    >
                    <div class="reviews-slider__stars">
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                      <img src="/img/star.svg" alt="star" />
                    </div>
                  </div>
                  <!-- /.reviews-slider__profile -->
                  <p class="reviews-slider__text">
                    Alias doloribus animi at similique quo ea quae maiores
                    temporibus et itaque nemo vitae distinctio nisi nesciunt
                    eligendi repellat non omnis a numquam molestias, explicabo
                    ad suscipit aspernatur rem! Fugiat dolorem eligendi mollitia
                    fuga non laborum. Alias doloribus animi at similique quo ea
                    quae maiores temporibus et itaque nemo vitae distinctio nisi
                    nesciunt eligendi repellat non omnis a numquam molestias,
                    explicabo ad suscipit aspernatur rem! Fugiat dolorem
                    eligendi mollitia fuga non laborum.
                  </p>
                </div>
                <!-- /.reviews-slider__item -->
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <button class="reviews-button reviews-button--prev"></button>
            <button class="reviews-button reviews-button--next"></button>
          </div>
          <!-- /. reviews-swiper -->
        </div>
        <!-- /.swiper-container reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.reviews -->
    <section class="activities">
      <div class="container">
        <h2 class="activities-title">Other Activities</h2>
        <div class="activities-list">
          <div class="activities-card" data-aos="fade-right" data-aos-delay="200">
            <img
              src="/img/activities-img1.webp"
              alt=""
              class="activities-card__image"
            />
            <span class="activities-card__title"
              >The curious corner of chamarel</span
            >
            <button class="activities-card__button">Book Now</button>
          </div>
          <!-- /.activities-card -->
          <div class="activities-card" data-aos="fade-right" data-aos-delay="400">
            <img
              src="/img/activities-img2.webp"
              alt=""
              class="activities-card__image"
            />
            <span class="activities-card__title"
              >Gymkhana club golf course</span
            >
            <button class="activities-card__button">Book Now</button>
          </div>
          <!-- /.activities-card -->
          <div class="activities-card" data-aos="fade-right" data-aos-delay="600">
            <img
              src="/img/activities-img3.webp"
              alt=""
              class="activities-card__image"
            />
            <span class="activities-card__title"
              >Tamarind falls hiking trip - full day</span
            >
            <button class="activities-card__button">Book Now</button>
          </div>
          <!-- /.activities-card -->
          <div class="activities-card" data-aos="fade-right" data-aos-delay="800">
            <img
              src="/img/activities-img4.webp"
              alt=""
              class="activities-card__image"
            />
            <span class="activities-card__title"
              >The blue marine discovery quest</span
            >
            <button class="activities-card__button">Book Now</button>
          </div>
          <!-- /.activities-card -->
        </div>
        <!-- /.activities-list -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->
<?php include('footer.php'); ?>
