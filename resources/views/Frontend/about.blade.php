@extends('includes.app')
@section('content') 
    <!-- ======= About Section ======= -->
    <section id="services" class="services mt-5">
      <div class="container" data-aos="fade-up">
        <div class="section-title1">
          <h2>{{ $cms[0]['meta_title'] }}</h2>
          <img class="imgheadercnt" src="{{ asset('public/assets/img/aboutframe.png') }}">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            @if(!empty($side_image))
              <img src="{{ asset('public/'.$side_image[0]['image']) }}" class="aboutimages">
              @endif
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="sidebar" data-aos="fade-up" data-aos-delay="200">
              <h1 class="abhd">{{ $cms[0]['title'] }}</h1>
                <div class="abouttext">
                  <p>{{ $cms[0]['content'] }}</p>
                </div>
            </div>
            <div class="content-back">
                <div class="content-btn">
                    <p class="content-text">{{ $cms[0]['meta_keyword'] }}</p>
                </div>
            </div>
        </div>
        <div class="row abtcnt">
          <p>{{ $cms[4]['content']}}</p>
        </div>
      </div>
    </section>
  @endsection