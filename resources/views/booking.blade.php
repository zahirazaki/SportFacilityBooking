@extends('master.layout')

@section('content')

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

          {{-- <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>
                <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div>
                <label for="example-datepicker">Choose a date</label>
                <b-form-datepicker id="example-datepicker" v-model="value" class="mb-2"></b-form-datepicker>
                <p>Value: '{{ value }}'</p>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Book A Slot</button></div>
          </form> --}}

        </div>
      </section><!-- End Booking Section -->

@endsection
