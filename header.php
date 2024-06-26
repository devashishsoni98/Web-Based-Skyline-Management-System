<?php
  require('admin/db_config.php');
  require('admin/essentials.php');

  $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no.`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>

<nav
class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 nav-shadow sticky"
id="nav-bar"
>
<div class="container-fluid">
  <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"
    >SkyLine</a
  >
  <button
    class="navbar-toggler shadow-none"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link me-2 n-hover" href="index.php"
          >Home</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link me-2  n-hover" href="rooms.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2  n-hover" href="facilities.php">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2  n-hover" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2  n-hover" href="about.php">About</a>
      </li>
    </ul>
    <div class="d-flex" role="search">
      <button
        type="button"
        class="btn btn-outline-dark shadow-none me-lg-3 me-2 custom-btn"
        data-bs-toggle="modal"
        data-bs-target="#loginModal"
      >
        Login
      </button>
      <button
        type="button"
        class="btn btn-outline-dark shadow-none custom-btn"
        data-bs-toggle="modal"
        data-bs-target="#registerModal"
      >
        Register
      </button>
    </div>
  </div>
</div>
</nav>

<div
class="modal fade"
id="loginModal"
data-bs-backdrop="static"
data-bs-keyboard="false"
tabindex="-1"
aria-labelledby="staticBackdropLabel"
aria-hidden="true"
>
<div class="modal-dialog">
  <div class="modal-content">
    <form>
      <div class="modal-header">
        <h1 class="modal-title fs-5 d-flex align-items-center">
          <i class="bi bi-person-circle fs-3 me-2"></i> User Login
        </h1>
        <button
          type="reset"
          class="btn-close shadow-none"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <label class="form-label">Email address</label>
          <input
            type="email"
            class="form-control shadow-none"
            aria-describedby="emailHelp"
          />
        </div>
        <div class="mb-4">
          <label class="form-label">Password</label>
          <input
            type="password"
            class="form-control shadow-none"
            aria-describedby="emailHelp"
          />
        </div>
        <div
          class="d-flex align-items-center justify-content-between mb-4"
        >
          <a
            href="javascript: void(0)"
            class="text-secondary text-decoration-none"
            >Forgot Password?</a
          >
          <button type="submit" class="btn shadow-none custom-btn">
            LOGIN
          </button>
        </div>
        <div class="d-flex align-item-center justify-content-center mb-2">
          Login with:
        </div>
        <div class="d-flex align-item-center justify-content-center mb-2">
          <a href="#">
            <i class="fa-brands fa-google px-3 text-black"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-facebook-f px-3 text-black"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-twitter px-3 text-black"></i>
          </a>
        </div>

        <div class="d-flex align-item-center justify-content-center mb-2">
          <p>
            Don't have an account?
            <a
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#registerModal"
              class="text-decoration-none"
            >
              Register</a
            >
          </p>
        </div>
      </div>
    </form>
  </div>
</div>
</div>

<div
class="modal fade"
id="registerModal"
data-bs-backdrop="static"
data-bs-keyboard="false"
tabindex="-1"
aria-labelledby="staticBackdropLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <form>
      <div class="modal-header">
        <h1 class="modal-title fs-5 d-flex align-items-center">
          <i class="bi bi-person-lines-fill fs-3 me-2"></i> User
          Registration
        </h1>
        <button
          type="reset"
          class="btn-close shadow-none"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <span class="badge text-bg-light mb-3 text-wrap lh-base">
          Note: Your details must match your Id (Govt. ID Card) that will
          be required during check-in
        </span>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Name</label>
              <input
                type="text"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">E-Mail</label>
              <input
                type="email"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Phone Number</label>
              <input
                type="number"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Profile Picture</label>
              <input
                type="file"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-12 p-0 mb-3">
              <label class="form-label">Address</label>
              <textarea
                class="form-control shadow-none"
                rows="1"
              ></textarea>
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Pin-Code</label>
              <input
                type="number"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Date of Birth</label>
              <input
                type="date"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label class="form-label">Password</label>
              <input
                type="password"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="col-md-6 p-0 mb-3">
              <label class="form-label">Confirm Password</label>
              <input
                type="password"
                class="form-control shadow-none"
                aria-describedby="emailHelp"
              />
            </div>
          </div>
        </div>
        <div class="text-center my-1">
          <button type="submit" class="btn shadow-none custom-btn">
            Register
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>