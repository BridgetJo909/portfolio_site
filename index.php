<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Online Music Marketing</title>

<!-- Bootstrap css file -->
<link rel="stylesheet" href="./css/bootstrap.min.css">

<!-- font awesome icons -->
<link rel="stylesheet" href="./css/all.min.css">

<!-- custom css -->
<link rel="stylesheet" href="./css/style.css">

</head>
<body>

<!-- ==================Start Header =================== -->

<header class="header_area">
  <div class="main-menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./img/logo.jpeg" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="me-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!-- ==================End Header =================== -->

<!-- ==================Start Main Area ============== -->
<main class="site-main">

  <!-- ==================Start Banner Area ============ -->
  <section class="site-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 site-title">
          <h1 class="title-text">Tofu Music Marketing</h1>
          <h4 class="title-text text-lowercase">Artist promotions for the 21st century</h4>
          <div class="site-buttons">
            <div class="d-flex flex-row flex-wrap">
              <button type="button" class="btn button primary-button mr-4 text-uppercase" href="#contact_form">Contact us for a free consultation
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <img src="https://www.fillmurray.com/g/600/300" alt="banner-img" class="img-fluid">
        </div>
      </div>
  </section>

  <!-- =================About Area ================= -->
<section class="about-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-2">
        <div class="about-image">
          <img src="https://www.fillmurray.com/g/300/100" alt="About us" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-12 about-title">
        <h2 class="pt-5">
          <span>Here's what</span>
          <span>we're all</span>
          <span>about.</span>
          </h2>
          <div class="paragraph py-4 w-75">
            <p class="para">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
          <button type="button" class="btn button primary-button text-uppercase">Contact us</button>
      </div>
  </div>
</section>
  <!-- =================About area ============= -->
  <!-- =================Contact form area ============== -->

<section id="#contact_form">
  <div class="col">
  <?php include './php/contact_form.php';?>
    <form action="/contact_form.php" method="post" class="contact_form">
      <h2>Contact us for a free consultation</h2>

      <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
      <div class="mb-3">
        <label for="contactInputName" class="form-label">Artist Name:</label>
        <input name="name" type="text" id="contactInputName" value=""/>
      </div>
      <p>
        <label>Email Address:</label>
        <input style="cursor: pointer;" name="email" value="" type="text"/>
      </p>
      <p>
        <label>Message:</label>
        <textarea name="message"></textarea>
      </p>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1"><small>Subscribe to our newsletter for exclusive offers and DIY marketing guides</small></label>
      </div>
      <div class="d-flex flex-row flex-wrap"><p>
        <input type="submit" value="Send" class="btn button primary-button"/>
      </p></div>
    </form>
    <div>
    <!-- js form validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script>
        const constraints = {
            name: {
                presence: { allowEmpty: false }
            },
            email: {
                presence: { allowEmpty: false },
                email: true
            },
            message: {
                presence: { allowEmpty: false }
            }
        };

        const form = document.getElementById('contact-form');

        form.addEventListener('submit', function (event) {
            const formValues = {
                name: form.elements.name.value,
                email: form.elements.email.value,
                message: form.elements.message.value
            };

            const errors = validate(formValues, constraints);

            if (errors) {
                event.preventDefault();
                const errorMessage = Object
                    .values(errors)
                    .map(function (fieldValues) {
                        return fieldValues.join(', ')
                    })
                    .join("\n");

                alert(errorMessage);
            }
        }, false);
    </script>
    </div>
  </div>
</section>

  <!-- =================End contact form area ========= -->

</main>

<!-- ==================End Main Area ================ -->

<!-- Jquery js file -->
<script src="./js/jquery.3.4.1.js"></script>
  <!-- bootstrap js file -->
  <script src="./js/bootstrap.min.js"></script>

</body>
</html>
