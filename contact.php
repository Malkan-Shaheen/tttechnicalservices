<!-- Contact Banner Section -->
<div class="contact-banner">
  <h2>NEED A REPAIR? CALL TotalTouch TEAM TODAY!</h2>
  
  <div class="contact-info">
     <div class="divider"></div>
    <!-- Phone -->
    <div class="contact-item">
      <i class="fas fa-headset"></i>
      <a href="tel:+971 54 509 2893">+971 54 509 2893</a>
    </div>

    <div class="divider"></div>

    <!-- Email -->
    <div class="contact-item">
      <i class="fas fa-envelope"></i>
      <a href="mailto:Totaltouch786@gmail.com">Totaltouch786@gmail.com</a>
    </div>

    <div class="divider"></div>

    <!-- Location -->
    <div class="contact-item">
      <i class="fas fa-map-marker-alt"></i>
      <span>24/7 — </span>
      <a href="https://maps.google.com/?q=Dubai+International+City+England+Cluster" target="_blank">
        Dubai, UAE
      </a>
    </div>
     <div class="divider"></div>

   


  </div>
</div>

<!-- FontAwesome (if not already added) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
.contact-banner {
  background: linear-gradient(to right, #001f3f, #003366);
  color: white;
  text-align: center;
  padding: 40px 20px;
  font-family: 'Segoe UI', sans-serif;
  box-shadow: 0 8px 20px rgba(0, 31, 63, 0.2);
  animation: fadeInUp 1s ease forwards;
  border-bottom: 4px solid #74d0fa;
  border-top: 4px solid #74d0fa;
}

.contact-banner h2 {
  margin-bottom: 30px;
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: 1px;
}

.contact-info {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 25px;
}

.contact-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1.1rem;
  font-weight: 500;
  transition: all 0.3s ease-in-out;
  padding: 10px 20px;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 10px;
}

.contact-item i {
  color: #74d0fa;
  font-size: 1.4rem;
}

.contact-item a {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.contact-item:hover a,
.contact-item:hover {
  color: #74d0fa;
}

.divider {
  height: 40px;
  width: 2px;
  background-color: rgba(255, 255, 255, 0.3);
}

@media (max-width: 768px) {
  .contact-info {
    flex-direction: column;
    gap: 15px;
  }
  .divider {
    display: none;
  }
  .contact-banner h2 {
    font-size: 1.5rem;
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
