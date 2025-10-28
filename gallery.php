<section class="gallery-section">
  <div class="gallery-text-content">
    <h5>TOTAL TOUCH TECHNICAL SERVICES.</h5>
    <h1>EXPERIENCE QUALITY WORK</h1>
    <p>
      Experience top-notch craftsmanship with FixTechBros Services. Our skilled professionals provide reliable, efficient, and affordable solutions for all your repair and maintenance needs, ensuring long-lasting results and complete customer satisfaction.
    </p>
    <p>
      Our team delivers reliable, efficient, and affordable repairs and maintenance for all your home and business needs. From plumbing to electrical work, we ensure quality results and complete satisfaction with every job.
    </p>
    <a href="servicespage.php" class="view-all">VIEW ALL SERVICES →</a>
  </div>
  <div class="gallery-image-content">
    <img src="images/gallery.png" alt="Technician at work" />
  </div>
</section>

<style>
.gallery-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: linear-gradient(to right, #001f3f, #004080);
  padding: 80px 60px;
  position: relative;
  top:20px;
  color: white;
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
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
  border-top: 6px solid #74d0fa;
  border-bottom: 6px solid #005588;
}

.gallery-text-content {
  flex: 1;
  max-width: 55%;
  padding-right: 40px;
}

.gallery-text-content h5 {
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #74d0fa;
  margin-bottom: 12px;
}

.gallery-text-content h1 {
  font-size: 2.7rem;
  line-height: 1.3;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 25px;
}

.gallery-text-content p {
  font-size: 1.1rem;
  line-height: 1.7;
  color: #e3eefd;
  margin-bottom: 20px;
}

.view-all {
  display: inline-block;
  padding: 12px 28px;
  background-color: #74d0fa;
  color: #001f3f;
  font-weight: bold;
  text-decoration: none;
  border-radius: 30px;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.view-all:hover {
  background-color: #ffffff;
  color: #004080;
  transform: translateY(-2px);
}

.gallery-image-content {
  flex: 1;
  display: flex;
  justify-content: center;
}

.gallery-image-content img {
  max-width: 480px;
  height: auto;
  border-radius: 14px;
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease;
}

.gallery-image-content img:hover {
  transform: scale(1.03);
}

@media (max-width: 992px) {
  .gallery-section {
    flex-direction: column-reverse;
    text-align: center;
    padding: 60px 20px;
  }

  .gallery-text-content {
    max-width: 100%;
    padding: 0;
  }

  .gallery-image-content {
    margin-bottom: 30px;
  }

  .gallery-text-content h1 {
    font-size: 2rem;
  }

  .gallery-text-content p {
    font-size: 1rem;
  }

  .gallery-image-content img {
    max-width: 100%;
  }
}
</style>
