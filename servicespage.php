<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Total Touch Technical Service</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="style.css" />
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>


<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Translate -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en'},
        'google_translate_element'
      );
    }
  </script>
  <script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
  

</head>
<body>


<!-- Top Header Bar -->
<?php include 'header.php'; ?>

<section class="servicepage-banner">
    <div class="servicepage-banner-overlay"></div>
    <div class="servicepage-banner-content">
      <h1>OUR SERVICES</h1>
    </div>
  </section>



<!-- Our Services Section -->

<?php include 'services.php'; ?>

<!-- Gallery section -->

<section class="gallery-section">
    <div class="gallery-text-content">
      <h5>TOTAL TOUCH TECHNICAL SERVICES.</h5>
      <h1>EXPERIENCE QUALITY WORK</h1>
      <p>
        Experience top-notch craftsmanship with FixTechBros Services. Our skilled professionals provide reliable, efficient, and affordable solutions for all your repair and maintenance needs, ensuring long-lasting results and complete customer satisfaction.
      </p>
      <p>Our team delivers reliable, efficient, and affordable repairs and maintenance for all your home and business needs. From plumbing to electrical work, we ensure quality results and complete satisfaction with every job.</p>
    </div>
    <div class="gallery-image-content">
      <img src="images/about1.png" alt="washing machine">
    </div>
  </section>

<!-- Why choose us section -->

<?php include 'why-choose-us.php' ;?>



<!-- quote section -->

<?php include 'quote.php' ;?>

<!-- contact section -->

<?php include 'contact.php' ;?>

<!-- footer section -->

<?php include 'footer.php' ;?>

<script src="totaltouch.js"></script>

</body>

</html>

<style>
  
.gallery-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #008080; /* or any background you prefer */
  padding: 60px 80px;
  position: relative;
  color: white;

  /* Torn TOP edge using clip-path (flipped version) */
  clip-path: polygon(
    0 10%, 
    5% 12%, 
    15% 9%, 
    25% 13%, 
    35% 10%, 
    45% 14%, 
    55% 9%, 
    65% 12%, 
    75% 8%, 
    85% 11%, 
    95% 9%, 
    100% 10%, 
    100% 100%, 
    0 100%
  );
}

.servicepage-banner {
      background: linear-gradient(rgba(0, 31, 63, 0.6), rgba(0, 31, 63, 0.6)),
                  url('images/services-banner11.jpg') no-repeat center center/cover;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      position: relative;
      text-align: center;

    }

    .servicepage-banner h1 {
      font-size: 3rem;
      font-weight: 800;
      letter-spacing: 2px;
      animation: slideIn 1s ease-out forwards;
    }

    @keyframes slideIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

.gallery-text-content {
  flex: 1;
  max-width: 55%;
  color: white;
}

.gallery-text-content h5 {
  color: white;
  font-size: 1.2rem;
  margin-bottom: 10px;
  text-transform: uppercase;
  padding-top:45px;
}

.gallery-text-content h1 {
  color: white;
  font-size: 2.7rem;
  margin-bottom: 20px;
  line-height: 1.2;
  font-weight: bold;
  
}

.gallery-text-content p {
  font-size: 1.1rem;
  word-spacing: 1;
  color: white;
  margin-bottom: 25px;
}

.view-all {
  background-color: #e6c200;
  color: black;
  padding: 15px 25px;
  margin-top: 40px;
  display: inline-block;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s;
}

.view-all:hover {
  background-color:rgb(247, 222, 81);
  color:#e6c200;
}

.gallery-image-content {
  flex: 1;
  display: flex;
  justify-content: center;
  padding-top: 45px;
}

.gallery-image-content img {
  max-width: 100%;
  height: auto;
}

@media (max-width: 768px) {
  .gallery-section {
    flex-direction: column;
    padding: 40px 20px;
  }

  .gallery-text-content, .gallery-image-content {
    max-width: 100%;
    text-align: center;
  }

  .gallery-text-content h1 {
    font-size: 2rem;
  }

  .gallery-text-content p {
    font-size: 0.95rem;
  }
}
    </style>