@extends('includes.app')
@section('content') 

    <!-- ======= About Section ======= -->
    <section id="services" class="services  ">
      <div class="container" data-aos="fade-up">
        <div class="astrodetail_header">
          <div class="row col-md-12">
            <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-4 hdr">
                    <div class="row">
                      <div class="col-md-1">
                        <img class="statusimg" src="{{ asset('public/assets/img/status.png') }}">
                      </div>
                      <div class="col-md-11">
                        <img class="astrodtlimg1" src="{{ asset('public/'.$data->image) }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 hdr1">
                    <p class="astrod_title">{{ $data->name }}
                    </p>
                    <p class="astrod_cnt">
                      <i class="fa fa-book"></i>{{ $data->address }}
                    </p>
                    <p class="astrod_lang">
                      <i class="fa fa-language"></i>{{ $data->language }}
                    </p>
                    <p class="astrod_cnt">
                      <i class="fa fa-clock-o"></i>&#8377;9/min &nbsp;&nbsp;
                      <i class="fa fa-graduation-cap"></i>{{ $data->experience }}Exp.
                    </p>
                  </div>
                </div>             
            </div>
            <div class="col-md-4">
              <img src="{{ asset('public/assets/img/rtngstr.png') }}" class="dtlrating">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="dtlhd">{{ $data->name }}</p>
          </div>
          <div class="col-md-12">
            <p class="dtltxt">{{ $data->description }}
            </p>
            
          </div>
          <div class="col-md-12">
            <p class="dltimptxt">Available Time :{{ $data->time }}</p>
          </div>
          <div class="col-md-12 dtlblktxt">
            <p class="dtlhdtxt">Education</p>
            <ul class="dtllicnt">
              <li>Karmakand and Jyotish from Chardham Mandir & Sandipani Ashram.</li>
              <li>Learned Jyotish Viidya from 2010 to 2012.</li>
              <li>Shashtri in Astrology from Maharshi Panini Sanskrit and Vedic Vishwavidyalaya.</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


  @endsection