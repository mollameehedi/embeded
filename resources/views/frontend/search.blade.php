<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Embeded</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- Favicon Link -->
  <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/plugins/wow/css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/plugins/slick-slider/css/slick.css">
  <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/footer.css">
  <link rel="stylesheet" href="{{ asset('frontendAsset') }}/assets/css/style.css">
</head>

<body data-spy="scroll">

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


  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="{{ $logo->logo }}">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($categories as $category)
              <a class="dropdown-item" href="#{{ $category->name }}">{{ $category->name }}</a>
              @endforeach
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0"action="{{ route('book.filter') }}" method="get">
          <input class="form-control mr-sm-2" type="search" class="SearchInput" placeholder="Search" aria-label="Search" name="filter[name]">
          <button class="btn  my-2 my-sm-0" type="submit">Search</button>

          <div class="search-preview">
          
          </div>
          
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar ends -->

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





 <!--========== footer part stert ==============-->

 <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <a href="index" class="footer-logo"><img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="{{ $logo->logo }}"></a>
        <p>Copyright  ©<span id="year"></span> Template has been designed by <a href="https://www.sohanthink.com/">Sohanthink</a></p>
      </div>
    </div>
  </div>
</footer>
<!--========== fotter part ends ==============-->
  <!-- Scroll To Top Button -->
  <!-- <div class="scroll-top position-fixed">
    <span class="scroll-top__btn d-inline-flex align-items-center justify-content-center"><i
        class="fas fa-chevron-up"></i></span>
  </div> -->
  <!-- All Scripts -->
  <script src="{{ asset('frontendAsset') }}/assets/js/jquery-1.12.4.min.js"></script>
  <script src="{{ asset('frontendAsset') }}/assets/plugins/bootstrap/popper.min.js"></script>
  <script src="{{ asset('frontendAsset') }}/assets/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="{{ asset('frontendAsset') }}/assets/plugins/fontawesome/js/all.min.js"></script>
  <script src="{{ asset('frontendAsset') }}/assets/plugins/slick-slider/js/slick.js"></script>
  <script src="{{ asset('frontendAsset') }}/assets/plugins/wow/js/wow.min.js" defer></script>
  <script src="{{ asset('frontendAsset') }}/assets/js/script.js"></script>
  <script src="{{ asset('frontendAsset') }}/assets/js/Delevopment.js"></script>
</body>

</html>