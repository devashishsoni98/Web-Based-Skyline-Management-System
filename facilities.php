<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skyline - Facilities</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- <div id="links"></div> -->
    <?php require('links.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>
  </head>

  <body class="bg-light">
    <!-- Navbar -->
    <!-- <div id="header"></div> -->
    <?php require('header.php'); ?>

  <div class="my-5 px-4 top-space">
    <h2 class="fw-bold h-font text-center">
      Our Facilities
    </h2>
    <div class="h-line" style="background-color: #147667;"></div>
    <p class="text-center mt-3 mx-auto" style="width: 60%;">
      Experience the epitome of comfort and convenience at Skyline Hotel. We've thoughtfully crafted our amenities to enhance your stay, ensuring every moment is enjoyable and stress-free. From the moment you arrive, you'll discover a world of relaxation and luxury awaiting you.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop smooth min-h-cards">
          <div class="d-flex align-items-center mb-2">

            <img src="./Images/Facilities/wifi.svg" width="40px">
            <h5 class="m-0 ms-3">Wifi</h5>
          </div>
          <p>Stay connected seamlessly with our high-speed WiFi, ensuring you're always in touch.</p>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop smooth min-h-cards">
          <div class="d-flex align-items-center mb-2">

            <img src="./Images/Facilities/ac.svg" width="40px">
            <h5 class="m-0 ms-3">AC</h5>
          </div>
          <p>Experience ultimate comfort with our state-of-the-art AC units, providing a cool retreat on hot days.</p>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop smooth min-h-cards">
          <div class="d-flex align-items-center mb-2">

            <img src="./Images/Facilities/geyser.svg" width="40px">
            <h5 class="m-0 ms-3">Geyser</h5>
          </div>
          <p>Enjoy a refreshing and invigorating start to your day with hot water from our efficient geysers.</p>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop smooth min-h-cards">
          <div class="d-flex align-items-center mb-2">

            <img src="./Images/Facilities/heater.svg" width="40px">
            <h5 class="m-0 ms-3">Heater</h5>
          </div>
          <p>Beat the chill with our cozy room heaters, providing warmth and comfort on cold nights.</p>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop smooth min-h-cards">
          <div class="d-flex align-items-center mb-2">

            <img src="./Images/Facilities/spa.svg" width="40px">
            <h5 class="m-0 ms-3">SPA</h5>
          </div>
          <p>Treat yourself to a rejuvenating spa experience, where relaxation and pampering await you.</p>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop smooth min-h-cards">
          <div class="d-flex align-items-center mb-2">

            <img src="./Images/Facilities/tv.svg" width="40px">
            <h5 class="m-0 ms-3">Television</h5>
          </div>
          <p>Stay entertained with a wide selection of channels on our flat-screen TVs, perfect for downtime.</p>
        </div>

      </div>
    </div>
  </div>

    <!-- <div id="footer"></div> -->
    <?php require('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".swiper-container", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        keyboard: {
          enabled: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          320: {
            slidesPerView: "1",
          },
          640: {
            slidesPerView: "1",
          },
          768: {
            slidesPerView: "2",
          },
          1024: {
            slidesPerView: "3",
          },
        },
      });
    </script>

    <!-- <script>
      $(function () {
        $("#header").load("header.html");
        $("#footer").load("footer.html");
        $("#links").load("links.html");
      });
    </script> -->
  </body>
</html>
