@extends('includes.app')
@section('content') 
<section id="hero" class="d-flex align-items-center">
  <div id="carouselExampleControls" class="carousel slide w-100" data-bs-ride="carousel">
  <div class="carousel-inner ">
  @if(!empty($banners))
 @foreach($banners as $key => $banner)
    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
      <img src="{{ asset('public/'.$banner->image) }}"  class="cor-img d-block carousel-img" alt="...">
    </div>
    @endforeach
    @endif
 <!-- <div class="carousel-item">
      <img src="{{ asset('public/assets/img/finalastro-img2.jpg') }}"   class="cor-img d-block carousel-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('public/assets/img/astroSlider21 m.jpg') }}"   class="cor-img d-block carousel-img" alt="...">
    </div>
  </div>  -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
   <!-- ======= Hero Section ======= -->

<!-- ======= About Section ======= -->
<section id="services" class="services  ">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>{{ $cms[0]['meta_title'] }}</h2>

      <img class="imgheadercnt" src="{{ asset('public/assets/img/aboutframe.png') }}">
    
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
        @if(!empty($side_image))
          <img src="{{ asset('public/'.$side_image[0]['image']) }}" class="aboutimages">
          @endif
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="sidebar" data-aos="fade-up" data-aos-delay="200">
          <h1 class="abhd">{{ $cms[0]['title'] }}</h1>
            <div class="abouttext">
              <p>{{ $cms[0]['content'] }}</p>
              <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p> -->
            </div>
        </div>
        <div class="content-back">
            <div class="content-btn">
                <p class="content-text">{{ $cms[0]['meta_keyword'] }}</p>
            </div>
        </div>
       <a href="{{ route('about') }}">
          <div class="read">
           <p class="text-center mt-2 readtext" >Read More<i class="fal fa-arrow-to-right"></i></p>
          </div>
        </a>    
     
         </div>
        </div> 
    <div class="row ourservice">
      <div class="col-md-6 col-sm-6 col-xs-12 item2" style="background:#EE600D;">
        <div class="section-title data-aos=">
          <h2 style="color:white;padding-top: 80px; ">{{ $cms[1]['title']}}</h2>
          <img class="imgabtcnt" src="{{ asset('public/assets/img/whiteframe.png') }}">
          <p>{{ $cms[1]['content']}}</p>
          <a href="{{ route('services') }}">
            <div class="oursee">
          <p class="text-center d-flex-justify-content" style="  color: black;font-size: 19px;padding: 10px;">See All</p>
         </div>
        </a>
        </div>   
      </div>
      
      <div class="col-md-6 col-sm-6 col-xs-12 items">
      <!-- <img class="abtgrp" src="{{ asset('public/assets/img/abtGroup.png') }}">  -->
      <div class="container">
           <div class="row">
             @if(!empty($services))
             @foreach($services as $servicedata)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="services-block-three">
                            <a href="#">
                                <div class="padding-15px-bottom">
                                   <img src="{{asset('public/'.$servicedata->image)}}" width="50"height="50">
                                </div>
                                <h4>{{ $servicedata->title }}</h4>
                                <!-- <p class="xs-font-size13 xs-line-height-22">image1</p> -->
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="services-block-three">
                            <a href="javascript:void(0)">
                                <div class="padding-15px-bottom">
                                <img src="{{asset('public/assets/img/004-book-1 1.png')}}" width="50"height="50">
                                </div>
                                <h4>KP System</h4>   
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="services-block-three">
                            <a href="javascript:void(0)">
                                <div class="padding-15px-bottom">
                                <img src="{{asset('public/assets/img/002-book 1.png')}}" width="50"height="50">
                                </div>
                                <h4>Lal Kitab</h4>
                               
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="services-block-three">
                            <a href="javascript:void(0)">
                                <div class="padding-15px-bottom">
                                <img src="{{asset('public/assets/img/005-numerology 1.png')}}" width="50"height="50">
                                </div>
                                <h4>Numerology</h4>
                                
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                        <div class="services-block-three">
                            <a href="javascript:void(0)">
                                <div class="padding-15px-bottom">
                                <img src="{{asset('public/assets/img/001-tarot 1.png')}}" width="50"height="50">
                                </div>
                                <h4>Tarot Reading</h4>
                                
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="services-block-three">
                            <a href="javascript:void(0)">
                                <div class="padding-15px-bottom">
                                <img src="{{asset('public/assets/img/006-jigsaw 1.png')}}" width="50"height="50">
                                </div>
                                <h4>Marriage Matching</h4>  
                            </a>
                        </div>
                    </div> -->
                    <!-- end -->
                </div>
  </div>
      </div>
    </div>
  </div>
</section>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>{{ $cms[2]['title'] }}</h2>
      <img class="imgheadercnt" src="{{ asset('public/assets/img/aboutframe.png') }}">
      <p class="astroht">{{ $cms[2]['content'] }}</p>
    </div>
    <div class="row"> 
      <div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
      @if(!empty($side_image))
        <img class="img-fluid" src="{{ asset('public/'.$side_image[1]['image']) }}">
      @endif
      </div>
      <div class="col-lg-12 col-xl-8 col-md-12 col-sm-6 col-xs-12">
        <div class="row cards justify-content-lg-center ">
          @foreach($astrologers as $astro)
          <div class="astrodiv col-md-6 ">
            <div class="row astrocard ">
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-1 col-sm-6 col-xs-12"><img class="statusimg11" src="{{ asset('public/assets/img/status.png') }}"></div>
                  <div class="col-md-11 col-sm-6 col-xs-12"><img class="astroimg1" src="{{ asset('public/'.$astro->image) }}"></div>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <p class="astrodetail_title">{{ $astro->name }}
                </p>
                <p class="astrodetail_cnt"><i class="fa fa-book text-warning"></i> {{ $astro->address }}</p>
                <p class="astrodetail_lang"><i class="fa fa-language text-warning"></i> {{ $astro->language }}</p>
                <p class="astrodetail_cnt"><i class="fa fa-clock-o  text-warning"></i>&#8377;9/min &nbsp;&nbsp;<i class="fa fa-graduation-cap text-warning"></i>{{ $astro->experience }}Exp.</p>
                <p class="astrodetail_cnt">
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star text-warning"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>(10 review)</p>
              </div>
            </div>             
          </div>
          @endforeach
        </div>
       
        <div class="row">
        <a class="img-fluid" href="{{ route('astrologer') }}">
        <div class="astrobtn">
        <p class="text-center moreastro" style="">View More Astrologer</p>
        </div>
      </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="mobilesection">
  <div class="container" data-aos="fade-up">
    <div class="row"> 
      <div class="col-md-6 col-sm-6 col-xs-12 ">
        <img class="img-fluid" src="{{ asset('public/'.$side_image[2]['image']) }}">
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 ">
        <div class="row">
        <p class="dwnldheading">{{ $cms[3]['meta_title'] }}</p>
        <p class="dwnldtitle">{{ $cms[3]['title'] }}</p>
        <p class="dwnldtext">{{ $cms[3]['content']}}</p>
        </div>
        <div class="row iconpsrw">
          <img src="{{ asset('public/assets/img/Android .png') }}" class="playstoreicon" align="center">
          <img src="{{ asset('public/assets/img/iphone.png') }}" class="playstoreicon1">
        </div>
        <div class="row pimgrw">
        <img class="panditimg" src="{{ asset('public/'.$side_image[3]['image']) }}">
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection

 
  