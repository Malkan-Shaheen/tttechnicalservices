<section class="quote-section">
  <div class="quote-wrapper">
    <!-- Left Content -->
    <div class="left">
      <div class="top-banner">
        <div class="text">
          <h4>WE HELPED CUSTOMERS SUCCEED WITH CONFIDENCE!</h4>
        </div>
        <img src="images/quote.jpg" alt="Technician">
      </div>

      <h2 class="main-heading">GET A FREE QUOTE</h2>
      <p class="sub-text">
        Request a free quote today! Share your project details or service requirements, and we’ll provide a customized, no-obligation estimate. Our expert team is ready to help you achieve your goals with tailored solutions designed to fit your needs and budget.
      </p>

      <a href="contact-us.php" class="btn-theme">CONTACT US →</a>
      <p class="call-text">OR GIVE US A CALL AT</p>
     <a href="tel:+971 54 509 2893" style="text-decoration: none; color: inherit;">
  <h3 class="phone">+971 54 509 2893</h3>
</a>

    </div>

    <!-- Right Form -->
    <div class="right" id="contact">
      <div class="form-header">Contact & Hire Us</div>
      <form id="quoteForm">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone No." required>
        <textarea name="message" rows="5" placeholder="Message" required></textarea>
        <button type="submit" class="btn-theme">SEND MESSAGE →</button>
      </form>
      <div id="popup" class="popup-message">Message submitted successfully!</div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('#quoteForm').on('submit', function (e) {
      e.preventDefault(); // stop default form submission

      $.ajax({
        url: 'submit_form.php',
        method: 'POST',
        data: $(this).serialize(),
        success: function (response) {
          $('#popup').fadeIn();        // Show thank you message
          $('#quoteForm')[0].reset();  // Clear the form

          // Hide message after 5 seconds
          setTimeout(() => {
            $('#popup').fadeOut();
          }, 5000);
        },
        error: function () {
          alert('There was an error submitting the form. Please try again.');
        }
      });
    });
  });
</script>


<style>
.quote-section {
  background: linear-gradient(to right, #ffffff, #f5faff);
  padding: 80px 30px;
  font-family: 'Segoe UI', sans-serif;
}

.quote-wrapper {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  justify-content: space-between;
  max-width: 1300px;
  margin: 0 auto;
  align-items: stretch;
}

.left {
  flex: 1;
  min-width: 320px;
}

.right {
  flex: 1;
  min-width: 320px;
  background: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 31, 63, 0.1);
  backdrop-filter: blur(12px);
  border-radius: 16px;
  padding: 35px 30px;
  box-shadow: 0 10px 40px rgba(0, 31, 63, 0.15);
  animation: slide-up 0.8s ease forwards;
}

@keyframes slide-up {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.top-banner {
  display: flex;
  align-items: center;
  background: #001f3f;
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 25px;
  box-shadow: 0 4px 20px rgba(0, 31, 63, 0.2);
}

.top-banner .text {
  padding: 20px;
  flex: 1;
  color: #fff;
}

.top-banner h4 {
  font-size: 1rem;
  font-weight: 600;
  letter-spacing: 1px;
}

.top-banner img {
  width: 140px;
  height: auto;
  object-fit: cover;
}

.main-heading {
  font-size: 2.5rem;
  color: #001f3f;
  margin-bottom: 15px;
  font-weight: 700;
  line-height: 1.2;
}

.sub-text {
  font-size: 1rem;
  color: #333;
  margin-bottom: 25px;
  line-height: 1.7;
}

.btn-theme {
  background-color: #001f3f;
  color: #fff;
  padding: 14px 26px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  display: inline-block;
}

.btn-theme:hover {
  background-color: #003366;
  transform: translateY(-2px);
}

.call-text {
  margin-top: 30px;
  font-weight: 600;
  color: #444;
}

.phone {
  font-size: 24px;
  font-weight: bold;
  color: #001f3f;
  margin-top: 8px;
}

.form-header {
  background: #001f3f;
  color: #fff;
  padding: 15px 0;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 1rem;
  border-radius: 8px;
  margin-bottom: 20px;
  box-shadow: 0 4px 10px rgba(0, 31, 63, 0.1);
}

form input,
form textarea {
  width: 100%;
  padding: 14px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 15px;
  transition: all 0.3s ease;
  background: #f9f9f9;
}

form input:focus,
form textarea:focus {
  border-color: #001f3f;
  outline: none;
  background: #fff;
  box-shadow: 0 0 0 2px rgba(0, 31, 63, 0.2);
}

form textarea {
  resize: none;
}

.popup-message {
  display: none;
  background-color: #28a745;
  color: white;
  padding: 15px 25px;
  border-radius: 10px;
  margin-top: 20px;
  text-align: center;
  font-weight: 600;
  animation: fadeIn 0.6s ease forwards;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .quote-wrapper {
    flex-direction: column;
  }

  .main-heading {
    font-size: 2rem;
  }

  .form-header {
    font-size: 0.95rem;
  }
}
</style>
