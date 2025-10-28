<section class="testimonial-section">
  <div class="testimonial-container">
    <div class="testimonial active">
      <img src="images/user3.jpg" alt="Customer 1">
      <p class="quote">“Total Touch really impressed me! My AC was up and running within hours. Very professional and polite team.”</p>
      <h3>Charlotte Hayes</h3>
      <span>Dibba Al Fujairah</span>
    </div>

    <div class="testimonial">
      <img src="images/user1.jpg" alt="Customer 2">
      <p class="quote">“Fantastic service! The technician arrived on time, fixed our dishwasher quickly, and explained everything clearly.”</p>
      <h3>James Whitmore</h3>
      <span>Abu Dhabi</span>
    </div>

    <div class="testimonial">
      <img src="images/user2.jpg" alt="Customer 3">
      <p class="quote">“I’ve used them for plumbing and electrical work. Both times they delivered excellent results. Highly recommended!”</p>
      <h3>Amelia Clarke</h3>
      <span>Dubai</span>
    </div>

    <div class="testimonial">
      <img src="images/user4.jpg" alt="Customer 4">
      <p class="quote">“Their CCTV installation was quick and affordable. I feel so much safer now. Great work, Total Touch!”</p>
      <h3>Edward Bennett</h3>
      <span>Sharjah</span>
    </div>

    <div class="dots">
      <span class="dot active" onclick="showSlide(0)"></span>
      <span class="dot" onclick="showSlide(1)"></span>
      <span class="dot" onclick="showSlide(2)"></span>
      <span class="dot" onclick="showSlide(3)"></span>
    </div>
  </div>
</section>

<style>
.testimonial-section {
  background: gray;
  background-image: url("images/worldmap.png");
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  padding: 30px 20px;
  font-family: 'Montserrat', sans-serif;
  text-align: center;
  color:black;
  /* border-top: 6px solid #74d0fa; */
  border-bottom: 6px solid #005588;
}

.testimonial-container {
  max-width: 850px;
  margin: auto;
  position: relative;
}

.testimonial {
  display: none;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.testimonial.active {
  display: block;
  opacity: 1;
}

.testimonial img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid #74d0fa;
  margin-bottom: 25px;
  background-color: #ffffff;
}

.quote {
  font-size: 18px;
  font-style: italic;
  line-height: 1.8;
  max-width: 700px;
  margin: 0 auto 25px;
  color: black;
}

.testimonial h3 {
  font-size: 20px;
  margin: 0;
  color: #74d0fa;
  letter-spacing: 1px;
  font-weight: 700;
  text-transform: uppercase;
}

.testimonial span {
  display: block;
  font-size: 15px;
  color: #ccc;
  margin-top: 5px;
}

.dots {
  margin-top: 35px;
}

.dot {
  height: 14px;
  width: 14px;
  margin: 0 6px;
  background-color: #ffffff55;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.3s ease, transform 0.3s ease;
  cursor: pointer;
}

.dot.active,
.dot:hover {
  background-color: #74d0fa;
  transform: scale(1.2);
}

@media (max-width: 768px) {
  .testimonial img {
    width: 80px;
    height: 80px;
  }

  .quote {
    font-size: 16px;
  }

  .testimonial h3 {
    font-size: 18px;
  }

  .testimonial span {
    font-size: 14px;
  }
}
</style>

<script>
  let currentSlide = 0;
  const testimonials = document.querySelectorAll('.testimonial');
  const dots = document.querySelectorAll('.dot');

  function showSlide(index) {
    testimonials.forEach((t, i) => {
      t.classList.remove('active');
      dots[i].classList.remove('active');
    });
    testimonials[index].classList.add('active');
    dots[index].classList.add('active');
    currentSlide = index;
  }

  setInterval(() => {
    currentSlide = (currentSlide + 1) % testimonials.length;
    showSlide(currentSlide);
  }, 6000);
</script>
