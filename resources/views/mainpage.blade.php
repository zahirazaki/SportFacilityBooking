@extends('master.layout')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span><br>IIUM SPORT FACILITY BOOKING</span></h1>
          <h2>Unleash the Champion Within</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Venue</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Slot</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=Zir9GqvCQx0" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="order-1 col-lg-6 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/sdc.jpg" alt="">
            </div>
          </div>
          <div class="order-2 pt-4 col-lg-6 pt-lg-0 order-lg-1 content">
            <h2>Sports Development Centre</h2>
            <p class="fst-italic">
              The sports section in IIUM was established in 1983. Since then, sports have become vibrant activities in IIUM. In 1990, the sports activities in IIUM have drastically increased in term of quantity and quality.  In 1991, the role of sports section became more demanding when IIUM was indirectly involved with the World University Sports Federation (FISU), Asian University Sports Federation (AUSF) and AseanUniversity Sports Council (AUSC).
            </p>
            <h3>Vision</h3>
            <p>To become an excellent sports and recreational centre that provides states-of art facilities and services and develop athletes with holistic personality.</p>
            <h3>Mission</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> Sports culture as a norm to IIUM community.</li>
              <li><i class="bi bi-check-circle"></i> Providing excellent facilities and services.</li>
              <li><i class="bi bi-check-circle"></i> Organizing sports event at all levels.</li>
              <li><i class="bi bi-check-circle"></i> Realizing the vision of producing athletes with holistic personality.</li>
              <li><i class="bi bi-check-circle"></i> Teampower at its best.</li>
              <li><i class="bi bi-check-circle"></i> Sports hub and referral centre to all.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Venue</h2>
            <p>Check Out Our Available Venue</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="menu-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-starters">Courts</li>
                <li data-filter=".filter-salads">Pools</li>
                <li data-filter=".filter-specialty">Tracks</li>
              </ul>
            </div>
          </div>

          <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6 menu-item filter-starters">
              <img src= "assets/img/badminton-courts.jpeg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Badminton Court</a><span>$5.95</span>
              </div>
              <div class="menu-ingredients">
                  Female Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/court-basketball.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Basketball Court</a><span>$6.95</span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/court-tennis.jpeg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Tennis Court</a><span>$7.95</span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
              <img src="assets/img/female-pool.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Female Pool</a><span>$8.95</span>
              </div>
              <div class="menu-ingredients">
                  Female Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <img src="assets/img/football-field.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Football Field</a><span>$9.95</span>
              </div>
              <div class="menu-ingredients">
                  Sayyidina Hamzah Stadium
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/futsal-court.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Futsal Court</a><span>$4.95</span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
              <img src="assets/img/male-pool.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Male Pool</a><span>$9.95</span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/netball-courts.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Netball Court</a><span>$9.95</span>
              </div>
              <div class="menu-ingredients">
                  Female Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <img src="assets/img/running-tracks.jpeg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Running Tracks</a><span>$12.95</span>
              </div>
              <div class="menu-ingredients">
                Sayyidina Hamzah Stadium
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/takraw-courts.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Takraw Court</a><span>$12.95</span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/volleyball-courts.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Volleyball Court</a><span>$12.95</span>
              </div>
              <div class="menu-ingredients">
                Male Sport Complex
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Menu Section -->


    <!-- ======= Booking Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Booking</h2>
            <p>Book A Slot</p>
          </div>

          <form action="addbooking" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="Name" class="form-control" id="Name" placeholder="Your Name (eg: John Wick)" required>
                    </div>
                  </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone (eg: +60133879274)" required>
                    </div>
                <br>
                <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email (eg: JohnSmith@gmail.com)" required>
                        </div>
                      </div>
                <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" class="form-control" name="date" id="date" placeholder="Date (eg: 2024-12-22)" required>
                        </div>
                      </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                    <input type="text" name="time" class="form-control" id="time" placeholder="Time (eg: 14:30)" required>
                    </div>
                  </div>
            <div class="col-md-12 mb-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div>

              <div class="col-md-12 text-center">
                {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                <button type="submit" class="btn btn-primary">Book Now</button>
              </div>
            </div>
          </form>

        </div>
      </section><!-- End Booking Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15933.571787213266!2d101.72471606308996!3d3.25213497079501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc38c2f70795af%3A0xf808897bf1163a3!2sInternational%20Islamic%20University%20Malaysia!5e0!3m2!1sen!2smy!4v1704683165198!5m2!1sen!2smy"  frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="mt-5 row">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jln Gombak, 53100 Kuala Lumpur, Selangor</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Sunday:<br>
                 05:00 PM - 11:00 PM
                </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>03 – 6421 5997 / 03 – 6421 5991 </p>
              </div>

            </div>

          </div>

          <div class="mt-5 col-lg-8 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="mt-3 col-md-6 form-group mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="mt-3 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="mt-3 form-group">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html> --}}

@endsection
