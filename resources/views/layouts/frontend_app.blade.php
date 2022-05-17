<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Embeded</title>
  <link rel="icon" href="{{ asset('uploads/favicon.png') }}" type="image" sizes="16x16">
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

<body data-spy="scroll" data-target=".navbar" data-offset="50">

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
              <a class="dropdown-item " href="{{ route('index') }}#category_{{ $category->id }}">{{ $category->name }}</a>
              @endforeach
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0"action="{{ route('book.filter') }}" method="get">
          <input class="form-control mr-sm-2" type="text" class="SearchInput" placeholder="Search" aria-label="Search" name="filter[name]">
          <button class="btn  my-2 my-sm-0" type="submit">Search</button>

          <div class="search-preview">
            
          </div>
          
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar ends -->


@yield('frontent_content')
  
 <!--========== footer part stert ==============-->

 <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <a href="{{ route('index') }}" class="footer-logo"><img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="{{ $logo->logo }}"></a>
          <p>Copyright  ©<span id="year"></span> Template has been designed by <a href="https://www.sohanthink.com/">Sohanthink</a></p>
          <ul>
            <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
            <li><a href="{{ route('terms.and.condition') }}">Terms and Conditions</a></li>
          </ul>
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