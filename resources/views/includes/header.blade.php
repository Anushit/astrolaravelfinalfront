<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        @if (empty($general_settings[0]['field_value']))
        <img src="{{ asset('public/assets/img/default.png') }}" alt="No photo" width="200" height="100">
        @else
        <span class="logo me-auto"><a href="{{ route('index') }}"><img src="{{ asset('public/'.$general_settings[0]['field_value']) }}"></a></span>
        @endif
        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ (request()->is('index')) ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ (request()->is('about')) ? 'active' : '' }}" href="{{ route('about')}}">About US</a></li>
          <li><a class="nav-link scrollto {{ (request()->is('astrologer')) ? 'active' : '' }}" href="{{ route('astrologer') }}">Astrologers</a></li>
          <li><a class="nav-link scrollto {{ (request()->is('services')) ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
          <li><a class="nav-link scrollto {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
