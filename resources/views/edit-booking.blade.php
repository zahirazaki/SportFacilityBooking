@extends('master.layout')

@section('content')

    <!-- ======= Booking Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Update</h2>
            <p>Update Your Slot</p>
          </div>

          <form action="" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" class="form-control" value="{{$booking->date}}" name="date" id="date" placeholder="Date (eg: 2024-12-22)" required>
                        </div>
                      </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                    <input type="text" value="{{$booking->time}}" name="time" class="form-control" id="time" placeholder="Time (eg: 14:30)" required>
                    </div>
                  </div>
            <div class="col-md-12 mb-3">
              <input type="number" class="form-control" value="{{$booking->people}}" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
              <div class="form-group mt-3">
                <textarea class="form-control" value="{{$booking->message}}" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="col-md-12 text-center">
                {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </form>

        </div>
      </section><!-- End Booking Section -->

@endsection
