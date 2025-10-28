<section class="why-choose-us">
  <h4 class="sub-heading">TOTAL TOUCH TECHNICAL SERVICE.</h4>
  <h2 class="main-heading">WHY CHOOSE US</h2>
  <p class="description">
    Choose us for reliable, professional services that you can trust. Our skilled team is dedicated to delivering top-notch workmanship for every project, big or small. We pride ourselves on punctuality, attention to detail, and customer satisfaction. With affordable pricing, transparent communication, and a commitment to quality, we ensure your home or business is in the best hands. Experience hassle-free solutions with a team that gets the job done right the first time!
  </p>

  <div class="card-container">
    <div class="card">
      <img src="images/icon1.png" alt="Skilled Professionals">
      <h3>SKILLED PROFESSIONALS</h3>
      <p>Experienced and highly trained handymen for all types of tasks.</p>
    </div>
    <div class="card">
      <img src="images/icon2.png" alt="Quality Workmanship">
      <h3>QUALITY WORKMANSHIP</h3>
      <p>Attention to detail ensures every job is done to perfection.</p>
    </div>
    <div class="card">
      <img src="images/icon3.png" alt="No Upfront Payment">
      <h3>NO UPFRONT PAYMENT</h3>
      <p>Pay only after your repair or maintenance is completed to your satisfaction.</p>
    </div>
    <div class="card">
      <img src="images/icon4.png" alt="Wide Range of Services">
      <h3>WIDE RANGE OF SERVICES</h3>
      <p>From repairs to installations, we've got you covered.</p>
    </div>
    <div class="card">
      <img src="images/icon5.png" alt="Reliability">
      <h3>RELIABILITY</h3>
      <p>On-time service with a commitment to meeting deadlines.</p>
    </div>
    <div class="card">
      <img src="images/icon6.png" alt="Customer Satisfaction">
      <h3>CUSTOMER SATISFACTION</h3>
      <p>Your satisfaction is our top priority.</p>
    </div>
    <div class="card">
      <img src="images/icon7.png" alt="Convenience">
      <h3>CONVENIENCE</h3>
      <p>Flexible schedule to suit your needs.</p>
    </div>
    <div class="card">
      <img src="images/icon8.png" alt="Trusted Reputation">
      <h3>TRUSTED REPUTATION</h3>
      <p>Backed by positive reviews and a history of excellent service.</p>
    </div>
    <div class="card">
      <img src="images/icon9.png" alt="Service Guarantee">
      <h3>SERVICE GUARANTEE</h3>
      <p>We stand behind our work for your peace of mind.</p>
    </div>
  </div>
</section>

<style>
.why-choose-us {
  background: linear-gradient(to right, #001f3f, #003f7d);
  padding: 80px 30px;
  font-family: 'Montserrat', sans-serif;
  color: #ffffff;
  border-top: 6px solid #74d0fa;
  border-bottom: 6px solid #005588;
}

.sub-heading {
  font-size: 16px;
  text-align: center;
  color: #74d0fa;
  margin-bottom: 12px;
  text-transform: uppercase;
  font-weight: bold;
}

.main-heading {
  font-size: 36px;
  text-align: center;
  margin-bottom: 25px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 1px;
  color: white;
}

.description {
  max-width: 1100px;
  margin: 0 auto 50px;
  font-size: 17px;
  line-height: 1.7;
  color: #e3eefd;
  text-align: center;
}

.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.card {
  background-color: #ffffff;
  padding: 30px 25px;
  border: 2px solid #74d0fa;
  border-radius: 12px;
  text-align: center;
  transition: all 0.4s ease;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

.card img {
  height: 50px;
  margin-bottom: 15px;
  transition: filter 0.3s ease;
}

.card h3 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #001f3f;
  text-transform: uppercase;
  font-weight: 700;
}

.card p {
  font-size: 15px;
  color: #333;
  line-height: 1.6;
}

.card:hover {
  background-color: #003f7d;
  transform: translateY(-6px);
  border-color: #ffffff;
}

.card:hover h3,
.card:hover p {
  color: #ffffff;
}

.card:hover img {
  filter: brightness(0) invert(1);
}

@media (max-width: 768px) {
  .main-heading {
    font-size: 28px;
  }

  .description {
    font-size: 15px;
  }

  .card h3 {
    font-size: 18px;
  }

  .card p {
    font-size: 14px;
  }
}
</style>
