<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skyline - About</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <!-- <div id="links"></div> -->
    <?php require('links.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
      .box {
        border-top-color: var(--teal) !important;
      }
    </style>
  </head>

  <body class="bg-light">
    <!-- Navbar -->
    <!-- <div id="header"></div> -->
    <?php require('header.php'); ?>

    <div class="my-5 px-4 top-space">
      <h2 class="fw-bold h-font text-center">About Us</h2>
      <div class="h-line" style="background-color: #147667;"></div>
      <p class="text-center mt-3 mx-auto fs-4" style="width: 60%;">
        At Skyline Hotel, we're dedicated to providing unparalleled hospitality. Our passion for service drives us to create memorable experiences for our guests, making every stay exceptional.
      </p>
    </div>

    <div class="container">
      <div class="row justify-content-between align-items-center mb-5">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
          <h3 class="mb-3">Skyline Hotel: Where Elegance Meets Excellence in Every Stay.</h3>
          <p class="fs-5">
            Founded on a commitment to excellence, Skyline Hotel is a beacon of luxury in the heart of the city. With a rich history of hosting travelers from around the world, we have perfected the art of hospitality. Our team of dedicated professionals works tirelessly to ensure your comfort and satisfaction. We invite you to experience the warmth and sophistication that define us at Skyline Hotel, where your journey becomes our privilege.
          </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 hover-effect-sm">
          <img src="./Images/about/ladycalling.jpg" class="w-100 rounded" />
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box hover-effect-md"
          >
            <img src="./Images/about/hotel.svg" width="70px" />
            <h4 class="mt-3">100+ Rooms</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box hover-effect-md"
          >
            <img src="./Images/about/customer.png" width="70px" />
            <h4 class="mt-3">200+ Customers</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box hover-effect-md"
          >
            <img src="./Images/about/review.svg" width="70px" />
            <h4 class="mt-3">150+ Reviews</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
          <div
            class="bg-white rounded shadow p-4 border-top border-4 text-center box hover-effect-md"
          >
            <img src="./Images/about/staff.svg" width="70px" />
            <h4 class="mt-3">150+ Staffs</h4>
          </div>
        </div>
      </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <?php 
            $about_r = selectAll('team_details');
            $path=ABOUT_IMG_PATH;

            while($row = mysqli_fetch_assoc($about_r)){
              echo<<<data
              <div
                class="swiper-slide bg-white text-center overflow-hidden rounded border-effect"
              >
                <img src="$path$row[picture]" class="w-100" />
                <h5 class="mt-2">$row[name]</h5>
              </div>
              data;
            }
          ?>

         
        </div>
        <br /><br />
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- <div id="footer"></div> -->
    <?php require('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
        loop:true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
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
