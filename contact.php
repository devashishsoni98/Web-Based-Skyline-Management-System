<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skyline - Contact</title>

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
  </head>

  <body class="bg-light">
    <!-- Navbar -->
    <!-- <div id="header"></div> -->
    <?php require('header.php'); ?>

    <div class="my-5 px-4 top-space">
      <h2 class="fw-bold h-font text-center">Contact Us</h2>
      <div class="h-line" style="background-color: #147667;"></div>
      <p class="text-center mt-3 mx-auto" style="width: 60%;">
        Have questions or need assistance? Contact Skyline Hotel today. Our dedicated team is available 24/7 to assist you with reservations, inquiries, and any special requests. Reach us at contact@skylinehotel.com or reach us with the contact form below. Your satisfaction is our priority.
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe
              class="w-100 rounded mb-4"
              height="450"
              src="<?php echo $contact_r['iframe'] ?>"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>

            <h5>Address</h5>
            <div class="effect">
            <i class="bi bi-geo-alt-fill"></i
            ><a
              href="<?php echo $contact_r['gmap'] ?>"
              target="_blank"
              class="d-inline-block text-decoration-none text-dark mb-2"
            >
            <?php echo $contact_r['address'] ?>
            </a>
          </div>

            <h5 class="mt-2">Call Us</h5>
            <div class="effect">
            <a
              href="tel: +<?php echo $contact_r['pn1'] ?>"
              class="d-inline-block mb-2 text-decoration-none text-dark"
              ><i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?></a
            ></div>
            <?php 
              if($contact_r['pn2']!=''){
                echo<<<data
                <div class="effect"><a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a></div>
                data;
              }
            ?>

          <h5 class="mt-4">Email</h5>
          <div class="effect">
            <i class="bi bi-envelope-fill"></i>
            <a
              href="mailto: <?php echo $contact_r['email'] ?>"
              class="d-inline-block mb-2 text-decoration-none text-dark"
              ><?php echo $contact_r['email'] ?></a
            >
          </div>

            <h5 class="mt-2">Follow Us</h5>
            <?php 
              if($contact_r['tw']!=''){
                echo<<<data
                <a href="$contact_r[tw]" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2 hover-effect"
                    ><i class="bi bi-twitter"></i
                  ></span>
                </a>
                data;
              }
            ?>
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2 hover-effect"
                ><i class="bi bi-facebook"></i
              ></span>
            </a>
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2 hover-effect"
                ><i class="bi bi-instagram"></i
              ></span>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form action="">
              <h5>Send a Message</h5>
              <img class="contact-img" src="iMAGES/about/9.jpg" alt="">
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500">Name</label>
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500">Email</label>
                <input type="email" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500"
                  >Subject</label
                >
                <input type="text" class="form-control shadow-none" />
              </div>
              <div class="mt-3">
                <label class="form-label" style="font-weight: 500"
                  >Message</label
                >
                <textarea
                  class="form-control shadow-none"
                  rows="5"
                  style="resize: none"
                ></textarea>
              </div>
              <button type="submit" class="btn text-white custom-bg mt-3 custom-btn-g">
                SEND
              </button>
            </form>
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
