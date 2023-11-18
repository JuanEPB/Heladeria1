<!DOCTYPE html>
<html lang="esh">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/styleshome.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/fontawesome.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/owl.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/lightbox.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} ">




      <title>Heladeria OrO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  <div style="background-color: plum;" class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p style="font-style: oblique; font-size: large; color: green;"> REDES </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a style="color: greenyellow;" href="index.html" class="logo"> Heladeria OrO </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active"> Home </a></li>
                          <li class="has-sub">
                          <a href="javascript:void(0)">Soy vendedor!!</a>
                              <ul class="sub-menu">
                                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif                              </ul>
                          <li class="scroll-to-section"><a href="#contact">Contactanos</a></li>
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>

                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/Ice cream video product - helados artesanales.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6 style="color: yellow;">Helados de calidad </h6>
              <h2 style="color: goldenrod;">Siempre con una sonrisa sabor helado</h2>
              <p style="color: goldenrod; font-size: x-large; "> Descubre el arte de los helados en nuestra exquisita Heladería OrO. Deliciosos sabores y una experiencia única te esperan en nuestro acogedor local. ¡Ven y disfruta</p>
              </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Mision</h4>
                <p>Nuestra misión es deleitar y sorprender a nuestros clientes con helados de la más alta calidad. Nos esforzamos por crear experiencias inolvidables, brindando sabores auténticos y texturas irresistibles.</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Visiòn</h4>
                <p> Es convertirnos en una heladería reconocida por la excelencia en la calidad de nuestros helados y la creatividad de nuestras creaciones.
                    Nos esforzamos por ser un destino gastronómico de renombre, donde los amantes del helado encuentren una experiencia única e inigualable. </p>
              </div>
            </div>

              <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4> Proyecto </h4>
                <p> Proyecto basado en un punto de venta asi teniendo un sistema computacional registrador </p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4> Historia </h4>
                <p> Se desea crear un sistema para facilitar la vista de las ganancias en sus ventas </p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>




  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <p>  <br>      </br>   </p>
            <p>  <br>      </br>   </p>
            <h2>NUESTROS SABORES!</h2>
          </div>
        </div>
        <div class="col-lg-11">
          <div class="row">
            <div class="col-lg-11">
              <div class="row">
                  @foreach ($products as $product)
                      <div class="col-lg-4">
                          <div class="meeting-item">
                              <div class="thumb">
                                  <div class="price">
                                      <span>Por bolita</span>
                                  </div>
                                  <img src="{{ asset('assets/images/' . $product->img)}}" width="100"> <!-- Se corrigió 'widht' a 'width' -->
                              </div>
                              <div class="down-content">
                                  <div class="date">
                                      <h6>Precio <span>${{$product->pre}}</span></h6>
                                  </div>
                                  <a><h4> {{$product->sab}} </h4></a>
                                  <p>{{$product->desc}}<br></p>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
    </div>
  </section>
  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Comentanos</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Nombre(s)...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Correo..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Asunto...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Tu mensaje..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Enviar</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Numero de contacto</h6>
                <span>722 126 4578</span>
              </li>
              <li>
                <h6>Correo de contacto</h6>
                <span>HeladosOro
                  @gmail.com</span>
              </li>
              <li>
                <h6>Direccion de establecimiento </h6>
                <span>Calle Las palmas #s/n </span>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
          <br>Design: <a href="http://localhost/erickchavez/Santiago1.html" target="_parent" title="free css templates">Erick Santiago </a></p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
  <!-- Bootstrap core JavaScript -->
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>
