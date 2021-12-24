@extends('includes.app')
@section('content') 
    <!-- ======= About Section ======= -->
    <section id="services" class="services  ">
      <div class="container" data-aos="fade-up">
        <div class="section-title1">
          <h2>Our Services</h2>
          <img class="imgheadercnt" src="{{ asset('public/assets/img/aboutframe.png') }}">
        </div>
        <div class="row">
          <div class="main srch">
          <form action="{{ route('services') }}" method="get">
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
            @if(!empty($services))
              @foreach($services as $service)
              <div class="srvsdiv col-md-4 ">
                <div class="row srvscard">
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <img class="srvsimg1" src="{{ asset('public/'.$service->image) }}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <p class="srvs_title">{{ $service->title }}
                    </p>
                    <p class="srvs_txt">{{ $service->description }}</p>
                  </div>
                </div>             
              </div>
              @endforeach
              @endif 
            </div>
          </div> 
        </div>
      </div>
    </section><!-- End Services Section -->
  @endsection