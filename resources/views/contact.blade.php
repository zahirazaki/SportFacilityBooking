@extends('master.layout')

@section('content')

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

@endsection
