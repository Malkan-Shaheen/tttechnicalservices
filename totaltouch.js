document.getElementById('quoteForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  fetch('submit_form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.ok ? response.json() : Promise.reject('Failed'))
  .then(data => {
    if (data.status === 'success') {
      const popup = document.getElementById('popup');
      popup.innerText = data.message;
      popup.style.display = 'block';

      form.reset();

      setTimeout(() => {
        popup.style.display = 'none';
      }, 3000);
    } else {
      alert("Error: " + data.message);
    }
  })
  .catch(error => {
    alert('Submission failed. Please try again.');
    console.error(error);
  });
});



  let currentSlide = 0;
  const testimonials = document.querySelectorAll(".testimonial");
  const dots = document.querySelectorAll(".dot");

  function showSlide(index) {
    testimonials.forEach((t, i) => {
      t.classList.toggle("active", i === index);
      dots[i].classList.toggle("active", i === index);
    });
    currentSlide = index;
  }

  function autoSlide() {
    currentSlide = (currentSlide + 1) % testimonials.length;
    showSlide(currentSlide);
  }

  setInterval(autoSlide, 5000); // 5 seconds



 

  let current = 0;

  nextBtn.addEventListener('click', () => {
    current = (current + 1) % slides.length;
    hero.style.backgroundImage = `url('${slides[current].image}')`;

    // Animate text
    heroContent.style.opacity = 0;
    heroContent.style.transform = 'translateY(50px)';
    setTimeout(() => {
      title.textContent = slides[current].title;
      desc.textContent = slides[current].desc;
      heroContent.style.animation = 'none';
      void heroContent.offsetWidth; // reflow
      heroContent.style.animation = 'fadeUp 0.8s forwards';
    }, 200);
  });
