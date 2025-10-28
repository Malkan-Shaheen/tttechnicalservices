<section class="hero" id="hero">
  <div class="hero-overlay"></div>
  <div class="hero-content" id="hero-content">
    <h1 id="hero-title">We Provide Quality of Works</h1>
    <p id="hero-desc">We are committed to delivering exceptional quality in everything we do. Our team prioritizes precision, innovation, and attention to detail, ensuring that every project meets the highest standards.</p>
    <a href="servicespage.php" class="cta-btn">VIEW MORE SERVICES</a>
  </div>

  <div class="arrow" id="next">&#10095;</div>
  <!-- Wavy Bottom -->
<svg class="hero-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" preserveAspectRatio="none">
  <path fill="white" fill-opacity="1"
    d="M0,64L48,69.3C96,75,192,85,288,101.3C384,117,480,139,576,144C672,149,768,139,864,117.3C960,96,1056,64,1152,64C1248,64,1344,96,1392,112L1440,128L1440,150L1392,150C1344,150,1248,150,1152,150C1056,150,960,150,864,150C768,150,672,150,576,150C480,150,384,150,288,150C192,150,96,150,48,150L0,150Z">
  </path>
</svg>

</section>

<style>
 .hero {
  background: url('images/slide1a.jpg') no-repeat center center/cover;
  height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-align: center;
  transition: background-image 0.6s ease-in-out;
  overflow: hidden;

 
}



.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    rgba(0, 28, 58, 0.6), 
    rgba(0, 43, 91, 0.7)
  );
  z-index: 1;
}

/* Ensure content appears above tint overlay */
.hero > * {
  position: relative;
  z-index: 2;
}

.hero h1 {
  font-family: 'Oswald', sans-serif;
  font-size: 4rem;
  font-weight: 600;
  letter-spacing: -1px;
  text-transform: uppercase;
  line-height: 1.2;
  color: white;
  margin-bottom: 20px;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  animation: fadeIn 0.8s ease-in-out;
}

.hero p {
  font-size: 1.2rem;
  color: #e0eaf8;
  line-height: 1.6;
  width: 55%;
  margin: 0 auto 40px auto;
  animation: fadeIn 1s ease-in-out;
}

/* Fade-in animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.hero-content {
  text-align: center;
  animation: fadeUp 0.8s ease forwards;
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.cta-btn {
  background: transparent;
  color: white;
  border: 2px solid white;
  padding: 14px 32px;
  border-radius: 30px;
  font-weight: bold;
  font-size: 14px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(5px);
}

.cta-btn:hover {
  background: white;
  color: #001f3f;
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.3);
  transform: translateY(-2px);
}

/* Next Arrow */
.arrow {
  position: absolute;
  right: 30px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 3rem;
  color: #ffffff;
  cursor: pointer;
  z-index: 3;
  transition: transform 0.3s ease, color 0.3s ease;
}

.arrow:hover {
  transform: translateY(-50%) scale(1.15);
  color: #74d0fa;
}

/* Optional: Floating buttons (unchanged) */
.floating-btn {
  position: fixed;
  left: 10px;
  z-index: 999;
  display: flex;
  flex-direction: column;
}

.floating-btn a {
  background: #003366;
  color: white;
  text-decoration: none;
  padding: 12px 14px;
  margin: 5px 0;
  border-radius: 50%;
  text-align: center;
  font-size: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}
.hero-wave {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
  z-index: 2;
}
</style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const hero = document.getElementById('hero');
    const title = document.getElementById('hero-title');
    const desc = document.getElementById('hero-desc');
    const nextBtn = document.getElementById('next');

    const slides = [
      {
        image: 'images/slide1a.jpg',
        title: 'We Provide Quality of Works',
        desc: 'We are committed to delivering exceptional quality in everything we do. Our team prioritizes precision, innovation, and attention to detail, ensuring that every project meets the highest standards.'
      },
      {
        image: 'images/slide2a.jpg',
        title: 'High Quality Electrical Appliances Repair Services',
        desc: 'We offer expert repairs to keep your appliances running smoothly. Whether you are purchasing new appliances or seeking maintenance, we prioritize excellence, efficiency, and customer satisfaction.'
      },
      {
        image: 'images/slide3a.jpg',
        title: 'Service Guarantee',
        desc: 'We stand behind our work with a commitment to excellence and a reliable service guarantee. Your satisfaction is our priority. If you are not fully satisfied, we are here to make it right.'
      },
      {
        image: 'images/slide4a.jpg',
        title: 'Air Condition Services',
        desc: 'Comprehensive air conditioning services, including installation, repair, and maintenance. Ensure optimal cooling and efficiency with our expert solutions for all AC brands.'
      }
    ];

    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
      const slide = slides[index];
      hero.style.backgroundImage = `url('${slide.image}')`;

      // Optional fade effect
      title.style.opacity = 0;
      desc.style.opacity = 0;

      setTimeout(() => {
        title.textContent = slide.title;
        desc.textContent = slide.desc;
        title.style.opacity = 1;
        desc.style.opacity = 1;
      }, 200);
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetInterval();
    });

    function startInterval() {
      slideInterval = setInterval(nextSlide, 7000);
    }

    function resetInterval() {
      clearInterval(slideInterval);
      startInterval();
    }

    // Initial display
    showSlide(currentSlide);
    startInterval();
  });
</script>
