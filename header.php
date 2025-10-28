<!-- TOP HEADER -->
<div class="top-header">
  <div class="header-box logo-box">
    <img src="images/logo1.png" alt="Logo" />
  </div>
  <div class="header-box contact-box">
    <div class="contact-item">
      <div class="icon"><img src="images/telephone.png" alt="Phone" /></div>
      <div class="text">
        <strong>PHONE</strong>
        <a href="tel:+971-54-509-2893">+971 54 509 2893</a>
      </div>
  </div>
  <div class="header-box contact-box">
    <div class="contact-item">
      <div class="icon"><img src="images/mail.png" alt="Email" /></div>
      <div class="text">
        <strong>EMAIL</strong>
        <a href="mailto:support@totaltouch.com">support@totaltouch.com</a>
      </div>
    </div>
 
  </div>
</div>
</div>
  </div>
</div>

<!-- NAVIGATION -->
<nav class="main-nav">
  <div class="nav-left">
    <ul class="nav-links">
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="servicespage.php">Services</a></li>
      <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
  </div>
  <div class="nav-right">
    <div class="social-icons">
      <a href="https://www.instagram.com/totaltouch__technicalservices?igsh=MXA4eGhudWpmcWFiYQ=="><i class="fab fa-instagram"></i></a>
      <a href="https://www.facebook.com/share/1AwVDLCsQc/"><i class="fab fa-facebook-f"></i></a>
      <a href="https://wa.me/+971 50 150 7037" target="_blank" class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
    <div id="google_translate_element" class="translate-container"></div>
  </div>
</nav>


<style>
  .top-header {
    background-color: #002147; /* Navy Blue */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 50px;
    flex-wrap: wrap;
    color: white;
    font-family: 'Segoe UI', sans-serif;
    animation: slideInTop 0.5s ease;
  }

  .header-box {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 5px 0;
  }

  .logo-box img {
    height: 60px;
    max-width: 100%;
  }

  .contact-item {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .contact-item .icon {
    background: white;
    padding: 6px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .contact-item .icon img {
    width: 16px;
    height: 16px;
  }

  .contact-item .text {
    display: flex;
    flex-direction: column;
  }

  .contact-item strong {
    font-size: 10px;
    text-transform: uppercase;
    color: #aad4ff;
  }

  .contact-item a {
    color: #e6f2ff;
    font-size: 13px;
    text-decoration: none;
    font-weight: 500;
  }

  .contact-item a:hover {
    color: #66ccff;
  }

  /* ===== NAVIGATION ===== */
  .main-nav {
    background-color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 50px;
    font-family: 'Segoe UI', sans-serif;
    box-shadow: 0 3px 6px rgba(0,0,0,0.06);
    animation: slideFade 0.6s ease;
    flex-wrap: wrap;
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 18px;
    margin: 0;
    padding: 0;
    flex-wrap: wrap;
  }

  .nav-links li a {
    position: relative;
    padding: 6px 14px;
    border-radius: 20px;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    color: #004080;
    transition: all 0.3s ease;
  }

  .nav-links a.active,
  .nav-links a:hover {
    background: #d0e7ff;
    color: #0073e6;
  }

  .nav-links a::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #0073e6;
    transition: 0.3s;
  }

  .nav-links a:hover::after {
    width: 100%;
  }

  .nav-right {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
  }

  /* Social icons */
  .social-icons a {
    background-color: #0073e6;
    color: white;
    font-size: 13px;
    padding: 6px 8px;
    border-radius: 5px;
    transition: 0.3s;
  }

  .social-icons a:hover {
    background-color: #3399ff;
  }

  /* Translate dropdown */
  .translate-container select {
    padding: 5px;
    font-size: 14px;
    border-radius: 4px;
    border: 1px solid #0073e6;
    background-color: white;
    color: #003366;
  }

  /* Animations */
  @keyframes slideInTop {
    from {
      opacity: 0;
      transform: translateY(-15px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideFade {
    from {
      opacity: 0;
      transform: translateY(10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .top-header {
      padding: 12px 30px;
      justify-content: center;
    }
    
    .main-nav {
      padding: 14px 30px;
    }
    
    .nav-links {
      gap: 12px;
    }
  }

  @media (max-width: 768px) {
    .top-header {
      flex-direction: column;
      text-align: center;
      padding: 12px 20px;
    }
    
    .header-box {
      justify-content: center;
      width: 100%;
      margin: 5px 0;
    }
    
    .main-nav {
      flex-direction: column;
      padding: 14px 20px;
    }
    
    .nav-left, .nav-right {
      width: 100%;
      justify-content: center;
      margin: 5px 0;
    }
    
    .nav-links {
      justify-content: center;
    }
    
    .nav-right {
      margin-top: 10px;
    }
  }

  @media (max-width: 480px) {
    .top-header {
      padding: 10px 15px;
    }
    
    .logo-box img {
      height: 50px;
    }
    
    .main-nav {
      padding: 10px 15px;
    }
    
    .nav-links {
      gap: 8px;
    }
    
    .nav-links li a {
      padding: 6px 10px;
      font-size: 12px;
    }
    
    .social-icons a {
      padding: 5px 7px;
      font-size: 12px;
    }
    
    .translate-container select {
      font-size: 12px;
    }
  }
</style>