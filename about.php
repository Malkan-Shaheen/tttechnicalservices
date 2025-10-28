<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Section </title>
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f0f4fa;
    }

    .about-section {
      position: relative;
      overflow: hidden;
      padding: 80px 60px;
      /* background: linear-gradient(to right, #001f3f, #004080); */
      background:white;
      color: #001f3f;
  z-index: 2; /* Lower than wave's z-index */
  margin-top: -1px;
    }

    .particle-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 1;
    }

    #particles-js {
      width: 100%;
      height: 100%;
    }

    .about-content {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .text-content {
      flex: 1;
      max-width: 55%;
      padding-right: 40px;
    }

    .text-content h5 {
      /* color: #74d0fa; */
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 10px;
    }

    .text-content h1 {
      font-size: 2.7rem;
      margin-bottom: 20px;
      line-height: 1.3;
      font-weight: 700;
      /* color: #ffffff; */
    }

    .text-content p {
      font-size: 1.05rem;
      /* color: #e3eefd; */
      margin-bottom: 25px;
      line-height: 1.7;
    }

    .read-more {
      background: #74d0fa;
      color: #001f3f;
      padding: 12px 30px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 30px;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .read-more:hover {
      background: #001f3f;
      color: white;
      transform: translateY(-2px);
    }

    .image-content {
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .image-content img {
      max-width: 400px;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 992px) {
      .about-content {
        flex-direction: column-reverse;
        text-align: center;
      }

      .text-content,
      .image-content {
        max-width: 100%;
        padding: 0;
      }

      .text-content h1 {
        font-size: 2rem;
      }

      .text-content p {
        font-size: 1rem;
      }

      .image-content {
        margin-bottom: 30px;
       
      }
    }

    .repair-banner {
    background: linear-gradient(135deg, #003366 0%, #005588 100%);
    /* background:white; */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 40px;
    font-size: 24px;
    width: 90%;
    margin: 50px auto;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 51, 102, 0.3);
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    overflow: hidden;
    z-index: 1;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  }

  .repair-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    transform: rotate(30deg);
    z-index: -1;
    animation: shine 6s infinite linear;
  }

  @keyframes shine {
    0% { transform: translateX(-100%) rotate(30deg); }
    100% { transform: translateX(100%) rotate(30deg); }
  }

  .repair-text {
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1.5px;
    position: relative;
    padding-left: 20px;
  }

  .repair-text::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 60%;
    width: 4px;
    background: #74d0fa;
    border-radius: 2px;
  }

  .repair-contact {
    display: flex;
    align-items: center;
    gap: 20px;
    background: rgba(255,255,255,0.1);
    padding: 15px 25px;
    border-radius: 50px;
    transition: all 0.3s ease;
  }

  .repair-contact:hover {
    background: rgba(255,255,255,0.2);
    transform: translateY(-2px);
  }

  .headset-icon {
    font-size: 28px;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
  }

  .phone-number {
    font-size: 26px;
    font-weight: 700;
    color: white;
    text-decoration: none;
    position: relative;
  }

  .phone-number::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: #74d0fa;
    transition: width 0.3s ease;
  }

  .phone-number:hover::after {
    width: 100%;
  }

  /* Responsive Adjustments */
  @media (max-width: 992px) {
    .repair-banner {
      flex-direction: column;
      text-align: center;
      padding: 30px 20px;
      width: 85%;
    }
    
    .repair-text {
      padding-left: 0;
      margin-bottom: 20px;
    }
    
    .repair-text::before {
      display: none;
    }
    
    .repair-contact {
      padding: 12px 20px;
    }
  }

  @media (max-width: 768px) {
    .repair-banner {
      font-size: 16px;
      width: 90%;
    }
    
    .phone-number {
      font-size: 18px;
    }
    
    .headset-icon {
      font-size: 24px;
    }
  }

  </style>
</head>
<body>


</div>
<section class="about-section">
 
  <div class="particle-wrapper">
    <div id="particles-js"></div>
  </div>
  <div class="about-content">
    <div class="text-content">
      <h5>Welcome to Total Touch</h5>
      <h1>Our Experience in Help Succeed Service!</h1>
      <p>
        With years of expertise, we have a proven track record of helping our clients achieve success through dedicated service.
        Our team combines knowledge, innovation, and personalized support to deliver solutions that meet your unique needs.
        Partner with us to turn challenges into opportunities and ensure your success every step of the way.
      </p>
      <a href="aboutus.php" class="read-more">Read More →</a>
    </div>
    <div class="image-content">
      <img src="images/about11.png" alt="Technician Illustration" />
    </div>
  </div>
</section>

<div class="repair-banner">
  <div class="repair-text">
    <strong>Need a repair? Call TotalTouch Technical Services Today!</strong>
  </div>
  <div class="repair-contact">
    <span class="headset-icon">🎧</span>
    <a href="tel:+971545092893" class="phone-number">+971 54 509 2893</a>
  </div>
</div>

<!-- Load Particle JS -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<!-- Initialize Particle JS -->
<script>
  particlesJS("particles-js", {
    particles: {
      number: {
        value: 40,
        density: { enable: true, value_area: 800 }
      },
      color: { value: "#001f3f" },
      shape: {
        type: "circle",
        stroke: { width: 0, color: "#001f3f" }
      },
      opacity: {
        value: 0.3,
        random: true
      },
      size: {
        value: 3,
        random: true
      },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#001f3f",
        opacity: 0.2,
        width: 1
      },
      move: {
        enable: true,
        speed: 1.2,
        direction: "none",
        out_mode: "out"
      }
    },
    interactivity: {
      events: {
        onhover: { enable: true, mode: "repulse" },
        onclick: { enable: true, mode: "push" },
        resize: true
      },
      modes: {
        repulse: { distance: 100, duration: 0.4 },
        push: { particles_nb: 4 }
      }
    },
    retina_detect: true
  });
</script>

</body>
</html>
