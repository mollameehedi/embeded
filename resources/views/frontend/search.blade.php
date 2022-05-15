
  @extends('layouts.frontend_app')
  @section('frontend_contnet')

  <!-- banner-part start -->
  <section id="banner-part">
    <div class="row slider-for" style="margin: 0;">
      @foreach ($banners as $banner)
      <div class="slide-bg first-slider" style="background-image: url({{ asset('uploads/banner') }}/{{ $banner->banner }})">
        <div class="container">
          <div class="row text-content">
            <div class="col-lg-6">
             <h2><a href="{{ $banner->link }}" target="_blank">{{ $banner->heading }}</a></h2>
              <p>{{ $banner->description }}</p>
              <p class="category"> <span>Category : </span>{{ $banner->category }}</p>
              {{-- <p class="category"> <span>the Author
                  :</span> {{ $banner->author }}</p>
              <p class="category"> <span>Price
                  :</span>
                {{ $banner->price }}</p> --}}
              {{-- <p class="category"> <span>Publisher
                  :</span>
                {{ $banner->publisher }}</p> --}}
                <p><a href="{{ $banner->link }}" target="_blank">Learn More</a></p>
            
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="slider-nav" style="margin: 0;">
      @foreach ($banners as $banner)
      <div class="nav-slide-box">
        <img src="{{ asset('uploads/banner') }}/{{ $banner->banner }}" class="img-fluid" alt="{{ $banner->banner }}">

      </div>
      @endforeach
    </div>
    </div>
  </section>
  <!-- banner-part ends -->


  <!-- slider-part start -->
  <section id="slider-part">

    <!-- first slider -->
    <div class="slider-div">
      <div class="slider-title">
        <h3>Search Book</h3>
      </div>
      <div class="top-slider">
  
        
        @forelse ($books as $item)
        <div class="nav-slide-box">
          <div class="slide-content">
            <img src="{{ asset('uploads/book') }}/{{ $item->thumbnail }}" class="img-fluid" alt="{{ $item->thumbnail }}">
            <div class="overlay">
              <h4>{{ $item->name }}</h4>
              <a href="{{ $item->link }}" target="_blank">Learn More</a>
            </div>
          </div>
        </div>
        @empty
        <h5  class="text-danger"> Book Not Found</h5>
        @endforelse


      </div>
    </div>




  </section>
  <!-- slider-part ends -->
  @endsection