@extends('includes.app')
@section('content') 
    <!-- ======= About Section ======= -->
    <section id="services" class="services  ">
      <div class="container" data-aos="fade-up">
        <div class="section-title1">
          <h2>Our Astrologers</h2>
          <img class="imgheadercnt" src="{{ asset('public/assets/img/aboutframe.png') }}">
        </div>
        <div class="row">
          <div class="main srch">
          <form action="{{ route('astrologer') }}" method="get">
          {{ csrf_field() }}
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
          </form>
          </div>  
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row cards">
            @foreach($astrologers as $astro)
              <div class="astrodiv col-md-4 ">
                <div class="row astrocard">
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-1">
                        <img class="statusimg1" src="{{ asset('public/assets/img/status.png') }}">
                      </div>
                      <div class="col-md-11">
                        <img class="astroimg1" src="{{ asset('public/'.$astro->image) }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <p class="astrodetail_title">
                      <a href="#">
                        <a href="{{ route('astrologer.details',$astro->id)}}">{{ $astro->title }}</a></a>
                    </p>
                    <p class="astrodetail_cnt">
                      <i class="fa fa-book text-warning"></i>{{ $astro->address }}
                    </p>
                    <p class="astrodetail_lang">
                      <i class="fa fa-language text-warning"></i>{{ $astro->language }}
                    </p>
                    <p class="astrodetail_cnt">
                      <i class="fa fa-clock-o  text-warning"></i>&#8377;9/min &nbsp;&nbsp;
                      <i class="fa fa-graduation-cap text-warning"></i>{{ $astro->experience }} Exp.
                    </p>
                    <p class="astrodetail_cnt">
                     <i class="fa fa-star text-warning"></i>
                     <i class="fa fa-star text-warning"></i>
                     <i class="fa fa-star text-warning"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>(10 review)
                    </p>
                  </div>
                </div>             
              </div>
            @endforeach
             
            </div>
            
          </div> 
        </div>
         
      </div>
    </section><!-- End Services Section -->
  @endsection