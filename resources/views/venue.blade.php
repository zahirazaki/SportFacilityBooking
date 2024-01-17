@extends('master.layout')

@section('content')

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
                <a href="/booking">Badminton Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Female Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/court-basketball.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Basketball Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/court-tennis.jpeg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Tennis Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
              <img src="assets/img/female-pool.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Female Pool</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Female Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <img src="assets/img/football-field.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Football Field</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Sayyidina Hamzah Stadium
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/futsal-court.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Futsal Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
              <img src="assets/img/male-pool.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Male Pool</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/netball-courts.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Netball Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Female Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
              <img src="assets/img/running-tracks.jpeg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Running Tracks</a><span></span>
              </div>
              <div class="menu-ingredients">
                Sayyidina Hamzah Stadium
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/takraw-courts.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Takraw Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                  Male Sport Complex
              </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
              <img src="assets/img/volleyball-courts.jpg" class="menu-img" alt="">
              <div class="menu-content">
                <a href="/booking">Volleyball Court</a><span></span>
              </div>
              <div class="menu-ingredients">
                Male Sport Complex
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Menu Section -->



@endsection
