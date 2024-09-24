
document.addEventListener('DOMContentLoaded', () => {
    let currentSlide = 0;
    const testimonials = document.querySelectorAll('.testimonial');
  
    function showSlide(index) {
      testimonials.forEach((testimonial, idx) => {
        testimonial.classList.remove('active');
        if (idx === index) {
          testimonial.classList.add('active');
        }
      });
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % testimonials.length;
      showSlide(currentSlide);
    }
  
    function prevSlide() {
      currentSlide = (currentSlide - 1 + testimonials.length) % testimonials.length;
      showSlide(currentSlide);
    }
  
    // Initialize the first slide
    showSlide(currentSlide);
  
    // Expose the functions to the global scope (for the buttons to work)
    window.nextSlide = nextSlide;
    window.prevSlide = prevSlide;
  });
  

let currentIndex = 0;

function updateTestimonial() {
    const testimonial = document.getElementById('testimonial');
    testimonial.querySelector('p').innerText = testimonials[currentIndex].text;
    testimonial.querySelector('footer').innerText = `- ${testimonials[currentIndex].customer}`;
}

function nextTestimonial() {
    currentIndex = (currentIndex + 1) % testimonials.length;
    updateTestimonial();
}

function prevTestimonial() {
    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
    updateTestimonial();
}

function orderMedications() {
    alert('Order medications feature coming soon!');
}

// function submitContact(event) {
//     event.preventDefault();
//     const formData = new FormData(event.target);
//     const data = Object.fromEntries(formData);

//     // Send data to PHP script (using Fetch API)
//     fetch('contact.php', {
//         method: 'POST',
//         body: JSON.stringify(data),
//         headers: {
//             'Content-Type': 'application/json'
//         }
//     })
//     .then(response => response.json())
//     .then(data => alert(data.message))
//     .catch(error => console.error('Error:', error));
// }

// Initialize the first testimonial
updateTestimonial();
