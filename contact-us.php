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
      <h1>CONTACT US</h1>

    </div>

     
  </section>
 
 <section class="quote-section">
  <div class="quote-wrapper">
  <div class="left">
        <div class="form-header">REQUEST A QUOTE</div>
      <form id="quoteForm" action="submit_form.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone No." required>
        <textarea name="message" rows="5" placeholder="Message" required></textarea>
        <button type="submit" class="btn-red">SEND MESSAGE →</button>
      </form>
      <div id="popup" style="display: none;" class="popup-message">
   Thank you! Your message has been submitted.
</div>
    </div>

    <div class="right" id="contact">
        <div class="find-us-card">
 <h2>FIND US</h2>
  <h4>IN THE REAL WORLD</h4>
  <p>
    Choose us for reliable, professional services that you can trust. Our skilled team is dedicated to delivering top-notch workmanship for every project, big or small. We pride ourselves on punctuality, attention to detail, and customer satisfaction. With affordable pricing, transparent communication, and a commitment to quality, we ensure your home or business is in the best hands.
  </p>

  <div class="contact-info">
    <p><span class="icon">📧</span>
      <a href="mailto:Totaltouch786@gmail.com">Totaltouch786@gmail.com</a>
    </p>
    <p><span class="icon">📍</span>
      <a href="https://www.google.com/maps/place/Dubai+International+City+England+Cluster" target="_blank">
        Dubai International City England Cluster 
      </a>
    </p>
    <p><span class="icon">📞</span>
      <a href="tel:050 1507037">050 1507037</a>
    </p>
  </div>
</div>
  </div>
</section>

<div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.563671897543!2d55.417979015415365!3d25.16743748390996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5b810fb6c089%3A0xf68c82f737ae8fcf!2sInternational%20City%20-%20England%20Cluster%20-%20X%2019%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sus!4v1720512345678"
      width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<!-- contact section -->

<?php include 'contact.php' ;?>

<!-- footer section -->

<?php include 'footer.php' ;?>

  <style>
.quote-section {
  background-color: #001f3f;
  padding: 60px 30px;
  color:white;
  font-family: 'Montserrat', sans-serif;
}

.quote-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 40px;
}

.left {
  flex: 1;
  min-width: 300px;
}

.right {
  flex: 1;
  min-width: 300px;
  background: #fff;
  padding: 10px;
}

.top-banner {
  display: flex;
  background: #c62828; /* red background */
  color: #fff;
  align-items: center;
  margin-bottom: 20px;
}

.top-banner .text {
  padding: 20px;
  flex: 1;
}

.top-banner img {
  width: 150px;
  height: auto;
}

.main-heading {
  font-size: 36px;
  color: #001f54;
  margin-bottom: 15px;
}

.sub-text {
  font-size: 16px;
  color: #555;
  margin-bottom: 20px;
}

.btn-red {
  background: #008080;
  color: #fff;
  padding: 15px 25px;
  display: inline-block;
  text-decoration: none;
  margin-top: 10px;
  font-weight: bold;
  transition: 0.3s;
  border: none;
  cursor: pointer;
  margin-left:65px;
}

.btn-red:hover {
  background: #74d0fa;
}

.call-text {
  margin-top: 20px;
  font-weight: 600;
  color: #555;
}

.phone {
  font-size: 26px;
  color: #001f54;
  margin-top: 5px;
}

.form-header {
  /* background: #c62828; */
  color: white;
  padding: 15px;
  font-weight: bold;
  /* text-align: center; */
  text-transform: uppercase;
  margin-bottom: 10px;
  font-size: 32px;
  margin-left:65px;
}

form input,
form textarea {
  width: 80%;
  padding: 12px;
  margin-bottom: 15px;
  border: none;
  background: #eee;
  font-size: 15px;
  margin-left:65px;
  border:2px solid rgb(2, 70, 138);
  border-radius:30px;
}

form textarea {
  resize: none;
}

.popup-message {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background-color: #28a745;
  color: white;
  padding: 15px 25px;
  border-radius: 8px;
  font-weight: bold;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  z-index: 9999;
  transition: opacity 0.4s ease;
}
.find-us-card {
  background-color: #008080;
  color: white;
  padding: 30px;
  width: 100%;
  height:100%
  font-family: 'Segoe UI', sans-serif;
  border: 5px solid white;
  line-height: 1.6;
}

.find-us-card h2 {
  font-size: 28px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 5px;
}

.find-us-card h4 {
  font-size: 16px;
  font-weight: 500;
  text-transform: uppercase;
  color: #b0c4ff;
  margin-bottom: 20px;
}

.find-us-card p {
  font-size: 14px;
  margin-bottom: 15px;
}

.contact-info .icon {
  margin-right: 8px;
  font-size: 16px;
}

.find-us-card a {
  color: white;
  text-decoration: underline;
}

.find-us-card a:hover {
  color: #ffcccb;
}
.map-container {
  margin-top: 20px;
  border: 5px solid white;
}

    </style>

    <script src="totaltouch.js"></script>