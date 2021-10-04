<footer class="footer">
      <div class="container">
        <div class="footer-grid">
          <img
            src="/img/vertical-logo.svg"
            alt="Logo: Best Tour Plan"
            class="footer-logo"
          />
          <div class="footer-grid__categories categories">
            <h3 class="categories__title">All categories</h3>
            <ul class="footer-grid__ul">
              <li class="footer-grid__li"><a href="#">All Deals </a></li>
              <li class="footer-grid__li"><a href="#">Hotels</a></li>
              <li class="footer-grid__li"><a href="#">Activities</a></li>
              <li class="footer-grid__li"><a href="#">Spa Packages</a></li>
              <li class="footer-grid__li">
                <a href="#">Hotel Day Packages</a>
              </li>
              <li class="footer-grid__li"><a href="#">Restaurants</a></li>
              <li class="footer-grid__li"><a href="#">Fitness </a></li>
              <li class="footer-grid__li"><a href="#">Rodrigues</a></li>
            </ul>
          </div>
          <!-- /.footer-grid__categories .categories-->
          <div class="footer-grid__additional additional">
            <h3 class="additional__title">additional information</h3>
            <ul class="footer-grid__ul">
              <li class="footer-grid__li"><a href="#">About Us</a></li>
              <li class="footer-grid__li"><a href="#">Contact Us </a></li>
              <li class="footer-grid__li">
                <a href="#">How does it work? </a>
              </li>
              <li class="footer-grid__li">
                <a href="#">Frequently Asked Questions</a>
              </li>
              <li class="footer-grid__li">
                <a href="#">Deals.mu loyalty program</a>
              </li>
              <li class="footer-grid__li">
                <a href="#">Promote your Business on BTP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-grid__additional additional -->
          <div class="footer-grid__legal legal">
            <h3 class="legal__title">legal information</h3>
            <ul class="footer-grid__ul">
              <li class="footer-grid__li">
                <a href="#">Terms & Conditions </a>
              </li>
              <li class="footer-grid__li"><a href="#">Disclaimer </a></li>
              <li class="footer-grid__li">
                <a href="#">Cancellation policy </a>
              </li>
              <li class="footer-grid__li"><a href="#">Privacy</a></li>
            </ul>
          </div>
          <!-- /.footer-grid__legal legal -->
          <div class="footer-grid__social social">
            <h3 class="social__title">social network</h3>
            <div class="social__icons">
              <img src="/img/facebook.svg" alt="facebook" class="social__icon">
              <img src="/img/youtube.svg" alt="youtube" class="social__icon">
              <img src="/img/instagram.svg" alt="instagram" class="social__icon">
            </div>
            <!-- /.social__icons -->
          </div>
          <!-- /.footer-grid__social -->
          <div class="footer-grid__contacts contacts">
            <h3 class="contacts__title">Contact Details</h3>
            <span class="contacts__subtitle">Feel free to contact us by phone, email or by our contact form</span>
            <table>
              <tr>
                <td>
                  <img src="/img/address.svg" alt="address" class="contacts__icon">
                </td>
                <td>9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States</td>
              </tr>
              <tr>
                <td><img src="/img/phone.svg" alt="phone" class="contacts__icon"></td>
                <td>
                  Tel (business hours) : 269 1500 </br>
Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00 pm) </br>
Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm) </br>
                </td>
              </tr>
              <tr>
                <td><img src="/img/email.svg" alt="email" class="contacts__icon"></td>
                <td>cherly.lawson@example.com</td>
              </tr>
            </table>
          </div>
          <!-- /.footer-grid__contacts contacts -->
          <div class="footer-grid__form form">
            <h3 class="form__title">send us a message</h3>
            <form class="form form__flex" action="send.php" method="POST">
              <input name="name" type="text" class="input form__input" placeholder="Your Full Name*">
              <input name="phone" type="tel" class="input form__input" placeholder="Phone Number*">
              <textarea name="message" id="message" class="message form__message" placeholder="Message"></textarea>
              <button class="button form__button">Send</button>
              <span class="reqfields form__reqfields">* Required Fields</span>
            </form>
            <!-- /.form__inputs -->
          </div>
          <!-- /.footer-grid__form form -->
          <div class="footer-grid__bottom">
            <div class="footer-grid__bottom bottom">
              <a class="bottom__link" href="#"> Disclaimer </a>
              <a class="bottom__link" href="#"> Conditions of use </a>
              <a class="bottom__link" href="#"> Cancellation policy </a>
              <img src="/img/payments.png" alt="payments" class="bottom__payments">
          </div>            
            <!-- /.footer-grid__bottom bottom -->
          </div>
          <!-- /.footer-grid__bottom -->
        </div>
        <!-- /.footer-grid -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <?php @include('modal.php'); ?>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/swiper-bundle.js"></script>
    <script src="/js/parallax.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>