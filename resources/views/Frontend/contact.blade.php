@extends('includes.app')
@section('content') 

    <!-- ======= About Section ======= -->
    <section id="services" class="services  ">
      <div class="container" data-aos="fade-up">
        <div class="section-title1">
          <h2>Contact Us</h2>
          <img class="imgheadercnt" src="{{ asset('public/assets/img/aboutframe.png') }}">
        </div>
        <div class="row">
        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
          <div class="col-md-6 cntmainblk">
            <div class="cntblk col-md-12 ">
              <div class="row cntblkcard">
                <div class="col-md-12">
                    <div class="row">
                      <p class="cntblk_head">GET IN TOUCH</p>
                      <p class="cntblk_txt">We ideally respond in 24 hours, drop your query and one of our team member will get in touch with you..</p>
                    </div>
                </div>
                <form class="frmcnt" id="contact-data" action="{{ route('contact.store')}}" method="post" >
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                          <label for="inputname">Name</label>
                          <input type="text" name="name" id="name" class="form-control" id="inputName4" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class=" col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" name="email" id="email" class="form-control" id="inputEmail4" value="{{ old('email') }}">
                          @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <label for="inputSubject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" id="inputSubject" value="{{ old('subject') }}">
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="inputMobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" id="inputMobile" value="{{ old('mobile') }}">
                        @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Message</label>
                        <textarea name="message" id="message" class="form-control"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning sub col-md-12" style="margin-top: 10px; ">Send
                        </button>
                    </div>
                </form>
              </div>             
            </div>
          </div>
          <div class="col-md-6 cntmainblk1">
            <div class="row">
              <div class="cntblk1 col-md-12 ">
                <div class="row cntblkcard">
                  <div class="col-md-12">
                    <div class="row">
                      <p class="cntblk_head">Contact Details and Map
                      </p>
                    </div>
                    <div class="row">
                      <div class="col-md-2 cntlogo">
                        <i class="fa fa-lg fa-map text-warning"></i>
                      </div>
                      <div class="col-md-10">
                        <p <?php if (empty($general_settings[1]['field_value'])){?>style="display:none"<?php } ?>>
                          <strong>Noida Office:</strong><br>
                          {{ $general_settings[1]['field_value'] }}
                         </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 cntlogo">
                        <i class="fa fa-lg fa-user-circle-o text-warning"></i>
                      </div>
                      <div class="col-md-10">
                        <p   <?php if (empty($general_settings[3]['field_value'])){?>style="display:none"<?php } ?>>
                          <strong>Customer Care Team</strong><br>
                          {{ $general_settings[3]['field_value'] }}
                         </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 cntlogo">
                        <i class="fa fa-lg fa-envelope text-warning"></i>
                      </div>
                      <div class="col-md-10">
                        <p <?php if (empty($general_settings[2]['field_value'])){?>style="display:none"<?php } ?>>
                          <strong>Email</strong><br>
                          {{ $general_settings[2]['field_value'] }}
                         </p>
                      </div>
                    </div>
                  </div> 
                </div>            
              </div>
            </div>
            <div class="row">
              <div class="cntmapblk col-md-12 ">
                <div class="row cntblkcard">
                  <div class="col-md-12">
                    <div class="row cntblk_map">
                      <!--Google map-->
                      <div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 300px">
                        <iframe src="https://maps.google.com/maps?q=Barcelona&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe> 
                      </div>
                    </div>
                  </div> 
                </div>            
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

  @endsection
  @section('js') 
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <script>
        $(document).ready(function() {
            $("#contact-data").validate({
                rules: {
                    name: "required",
                    email: "required",
                    mobile: {
                      required:true,
                      number:true,
                      maxlength:10,
                    },
                   subject: "required",
                   message: "required",
                },
                messages: {
                    name: "First name is required",
                    email: "Email is required",
                    mobile:{
                        required: "Mobile number is required",
                          number:  "only 10 digits required",
                   },
                    subject: "Subject is required",
                    message: "Message is required",
                }
            });
        });
    </script>

@endsection