@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
<nav class="navbar fixed-top navbar-expand-lg navbar-transparent h-auto">
      <div class="container">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
          <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ url('frontend/images/logo_pentorch14.png') }}" alt="">
          </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
          <li>
            <span class="text-muted">
              | &nbsp; Beyond the explorer of the world
            </span>
          </li>
        </ul>
      </nav>
    </div>
    <main>
      <div class="section-success d-flex align-items-center pt-5">
        <div class="col text-center">
          <img src="{{ url('frontend/images/ic_mail – 1@2x.png') }}" alt="" data-aos="fade-right" data-aos-duration="800" data-aos-delay="250">
          <h1 data-aos="fade-up" data-aos-duration="100" data-aos-delay="250">Yay! Success</h1>
          <p data-aos="fade-up" data-aos-duration="100" data-aos-delay="250">We've sent you email to trip instruction
            <br>
            please read it as well
          </p>
          <a href="{{ url('/') }}" class="btn btn-home-page mt3 px-5" data-aos="fade-up" data-aos-duration="100" data-aos-delay="250">
            Home Page
          </a>
        </div>
      </div>
    </main>
@endsection
