
  @extends('layouts.frontend_app')
  @section('frontent_content')
      

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
    @foreach ($categories as $category)
    <div class="slider-div">
      <div class="slider-title" id="category_{{ $category->id }}">
        <h3>{{ $category->name }}</h3>
      </div>
      <div class="top-slider">


        @foreach ($category->allbooks as $item)
        <div class="nav-slide-box">
          <div class="slide-content">
            <img src="{{ asset('uploads/book') }}/{{ $item->thumbnail }}" class="img-fluid" alt="{{ $item->thumbnail }}">
            <div class="overlay">
              <h4>{{ $item->name }}</h4>
              <a href="{{ $item->link }}" target="_blank">Learn More</a>
            </div>
          </div>
        </div>
        @endforeach



        {{-- <div class="nav-slide-box">
          <div class="slide-content">
            <img src="{{ asset('frontendAsset') }}/assets/images/episodes/bbt2.jpg" class="img-fluid" alt="Top part Image">
            <div class="overlay">
              <h4>War</h4>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="nav-slide-box">
          <div class="slide-content">
            <img src="{{ asset('frontendAsset') }}/assets/images/episodes/bbt3.jpg" class="img-fluid" alt="Top part Image">
            <div class="overlay">
              <h4>War</h4>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="nav-slide-box">
          <div class="slide-content">
            <img src="{{ asset('frontendAsset') }}/assets/images/episodes/bbt4.jpg" class="img-fluid" alt="Top part Image">
            <div class="overlay">
              <h4>War</h4>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div>
        <div class="nav-slide-box">
          <div class="slide-content">
            <img src="{{ asset('frontendAsset') }}/assets/images/episodes/bbt5.jpg" class="img-fluid" alt="Top part Image">
            <div class="overlay">
              <h4>War</h4>
              <a href="#">Learn More</a>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
    @endforeach





  </section>
  <!-- slider-part ends -->

@endsection