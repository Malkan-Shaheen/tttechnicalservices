<!-- ABOUT US PAGE - Updated -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Total Touch Technical Service</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background-color: #f5faff;
      color: #333;
    }

    /* Hero Section */
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

    /* Experience Section */
    .experience-section {
      padding: 80px 30px;
      display: flex;
      flex-wrap: wrap;
      gap: 60px;
      align-items: center;
      background: white;
    }

    .text-area {
      flex: 1;
      min-width: 300px;
    }

    .text-area h4 {
      color: #001f3f;
      font-weight: 600;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .text-area h1 {
      font-size: 2.5rem;
      color: #003366;
      margin-bottom: 20px;
    }

    .text-area p {
      font-size: 1rem;
      color: #444;
      line-height: 1.7;
      margin-bottom: 30px;
    }

    .call-button {
      background: #001f3f;
      color: white;
      padding: 12px 24px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .call-button:hover {
      background: #003366;
    }

    .image-area {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
      align-items: center;
    }

    .image-area img {
      width: 50%;
      height:auto;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Mission Vision */
    .mission-vision {
      background: linear-gradient(to right, #001f3f, #003366);
      color: white;
      padding: 100px 30px;
      clip-path: ellipse(150% 100% at 50% 0%);
    }

    .mission-vision .content {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 50px;
      max-width: 1200px;
      margin: auto;
    }

    .image-area {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 30px;
  align-items: center;
  justify-content: center;
}

.image-card {
  position: relative;
  width: 90%;
  max-width: 1500px;
  height:auto;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 31, 63, 0.2);
  transition: transform 0.4s ease;
  background-color: #fff;
}

.image-card:hover {
  transform: translateY(-8px);
}

.image-card img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.4s ease;
}

.image-card:hover img {
  transform: scale(1.05);
}

    .left-text {
      flex: 1;
      min-width: 300px;
    }

    .left-text h5 {
      font-size: 0.9rem;
      color: #00d4ff;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .left-text h1 {
      font-size: 2rem;
      margin: 10px 0;
    }

    .left-text p {
      line-height: 1.7;
      color: #e0f7ff;
      margin-bottom: 30px;
    }

    .left-text hr {
      border: none;
      height: 2px;
      background: #00d4ff;
      margin: 30px 0;
      width: 60%;
    }

    .right-img {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .right-img img {
      max-width: 100%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
   .white-wave {
  position: relative;
  width: 100%;
  height: 80px;
  overflow: hidden;
  line-height: 0;
}

.white-wave svg {
  display: block;
  width: 100%;
  height: 100%;
}

.white-wave.inverted svg {
  transform: rotate(180deg);
}


.white-wave + .experience-section {
  margin-top: -10px;
}
.image-composition {
  position: relative;
  flex: 1;
  min-width: 300px;
  height: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px;
  top:-50px;
}

.image-composition .image-back,
.image-composition .image-front {
  position: absolute;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease;
}

.image-composition .image-back {
  top: -150px;
  left: 0px;
  width: 300px;
  height: 400px;
  z-index: 1;
  background: white;
}

.image-composition .image-front {
  top: 0;
  left: 40;
  width: 300px;
  height: 400px;
  z-index: 2;
  background: white;
  transform: translate(-30px, -30px);
}

.image-composition img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Optional hover effect */
.image-composition:hover .image-front {
  transform: translate(-40px, -40px) scale(1.02);
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .image-composition {
    flex-direction: column;
    gap: 20px;
    position: static;
  }

  .image-composition .image-back,
  .image-composition .image-front {
    position: static;
    transform: none;
    width: 100%;
    height: auto;
  }

  .image-composition:hover .image-front {
    transform: none;
  }
}


    @media (max-width: 768px) {
      .experience-section,
      .mission-vision .content {
        flex-direction: column;
        text-align: center;
      }

      .right-img {
        margin-top: 30px;
      }
    }
  </style>
</head>

<body>

  <!-- Top Header -->
  <?php include 'header.php'; ?>

  <!-- Hero Banner -->
  <section class="servicepage-banner">
    <h1>ABOUT US</h1>
  </section>


<div class="white-wave inverted">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" d="M0,40 C180,80 360,0 540,40 C720,80 900,0 1080,40 C1260,80 1440,20 1440,20 L1440,0 L0,0 Z"></path>
  </svg>
</div>



  <!-- Experience Section -->
  <section class="experience-section">
    <div class="text-area">
      <h4>WELCOME TO TOTAL TOUCH TECHNICAL SERVICES</h4>
      <h1>OUR EXPERIENCE IN HELP<br>SUCCEED SERVICE!</h1>
      <p>With years of expertise, we have a proven track record of helping our clients achieve success through dedicated service. Our team combines knowledge, innovation, and personalized support to deliver solutions that meet your unique needs. Partner with us to turn challenges into opportunities and ensure your success every step of the way.</p>
      <a href="tel:0545092893" class="call-button">
        <i class="fas fa-phone-volume"></i> CALL NOW
      </a>
    </div>
   <div class="image-composition">
  <div class="image-back">
    <img src="images/Worker11.jpg" alt="Worker fixing appliance">
  </div>
  <div class="image-front">
    <img src="images/Worker12.jpg" alt="Technician at work">
  </div>
</div>

  </section>

  <!-- Why Choose Us Section -->
  <?php include 'why-choose-us.php'; ?>

  <!-- Mission & Vision -->
  <section class="mission-vision">
    <div class="content">
      <div class="left-text">
        <h5>OUR</h5>
        <h1>MISSIONS</h1>
        <p>Total Touch Technical Service is dedicated to providing comprehensive, high-quality repair and maintenance services that prioritize customer satisfaction and convenience. Our mission is to deliver reliable, efficient, and affordable solutions for homes and businesses, ensuring seamless functionality and peace of mind.</p>
        <hr />
        <h5>OUR</h5>
        <h1>VISION</h1>
        <p>Our vision is to redefine the standard of handyman and technical services by becoming a trusted, innovative, and customer-centric leader in the industry. We aspire to enhance the quality of life for our clients by delivering sustainable solutions and fostering long-term relationships.</p>
      </div>
      <div class="right-img">
        <img src="images/mission.png" alt="Our Mission" />
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <?php include 'contact.php'; ?>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

</body>
</html>
