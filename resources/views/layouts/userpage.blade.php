<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META http-equiv="expires" content="0">
    <title>BigWood</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/style_user.css">
    <script src="https://kit.fontawesome.com/c63fd74e85.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="menu" id="navbar">
        <div class="navbar">
            <nav class="navbar navbar-expand-lg container">
                <img src="bigwood_images/logo.png" alt="" class="logo-position" style="margin-right: 50px; border-radius: 100%; background-color: rgba(255, 255, 255, 0.8) ;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="top: auto; bottom: auto;"><i class="fas fa-bars" id="i-menu"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown" style="width: 50%;border-radius: 25px; text-align: left;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="{{ url('') }}">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="{{ url('productandservice') }}">สินค้าและบริการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="{{ url('shipping') }}">บริการส่งออก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="{{ url('contact') }}">ช่องทางการติดต่อ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="{{ url('askmore') }}">สอบถามเพิ่มเติม</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="slideshow-container">

        <div class="mySlides fade">
            @if($images1->image_name!=null)
                <img src="/images/{{ $images1->image_name }}" id="index-cover1" style="width:100%;">
            @else
                <img src="/images/images.jpg" id="index-cover1" style="width:100%;">
            @endif
        </div>
        
        <div class="mySlides fade">
            @if($images2->image_name!=null)
                <img src="/images/{{ $images2->image_name }}" id="index-cover2" style="width:100%;">
            @else
                <img src="/images/images.jpg" id="index-cover2" style="width:100%;">
            @endif
        </div>
        
        <div class="mySlides fade">
            @if($images3->image_name!=null)
                <img src="/images/{{ $images3->image_name }}" id="index-cover3" style="width:100%;">
            @else
                <img src="/images/images.jpg" id="index-cover3" style="width:100%;">
            @endif
        </div>
        
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

    @yield('content')
     
    <div class="col-md-12 footer">
        <div class="container">
            <p class="text-center">
            </p>
            <div class="row">
                <div class="col-md-4 icon">
                    <div class="d-flex justify-content-around">
                        <div class="col d-flex align-items-center">
                            <i class="fa-2x fab fa-whatsapp"></i>&emsp; <span id="tel_company_foot">{{$phonenum1->value}} <br>
                                {{$phonenum2->value}} <br> {{$phonenum3->value}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 icon">
                    <div class="d-flex justify-content-around">
                        <div class="col d-flex align-items-center">
                            <i class="fa-2x far fa-envelope"></i>&emsp; <span id="email_company_foot"> {{$email->value}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 icon">
                    <div class="d-flex justify-content-around">
                        <div class="col d-flex align-items-center">
                            <i class="fa-2x fab fa-line"></i></i>&emsp; <a href="{{$contact_link->value}}" id="line_company_foot">{{$contact->value}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p id="copyright"> copyright@2020 bigwoodphuket & gallery</p>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 10000); // Change image every 2 seconds
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="/menu.js"></script> -->
    <!-- <script type="text/javascript " src="plugins/jquery/jquery.min.js "></script> -->
    <!-- <script src="controller_display.js"></script> -->
    <!-- automatic slide -->
   
</body>
</html>