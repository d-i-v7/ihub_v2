
//  =============START TASTIMONIAL JS==============
// Testimonial Slider
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');
const my_n_slides = document.querySelectorAll('.my_n_slide');
const my_n_slidermy_n_container = document.querySelector('.my_n_container');
const my_n_slider = document.querySelector('.my_n_slider');

let index = 0;
let automy_n_slideInterval; // Variable to store the interval for auto sliding

function display(index) {
  my_n_slides.forEach((my_n_slide) => {
    my_n_slide.style.display = 'none';
  });
  my_n_slides[index].style.display = 'flex';
}

function nextmy_n_slide() {
  index++;
  if (index > my_n_slides.length - 1) {
    index = 0;
  }
  display(index);
}

function prevmy_n_slide() {
  index--;
  if (index < 0) {
    index = my_n_slides.length - 1;
  }
  display(index);
}

function startAutomy_n_slide() {
  automy_n_slideInterval = setInterval(() => {
    nextmy_n_slide();
  }, 3000); // Adjust the interval (in milliseconds) as needed
}

function stopAutomy_n_slide() {
  clearInterval(automy_n_slideInterval);
}

// Event listeners for next and previous buttons
next.addEventListener('click', () => {
  nextmy_n_slide();
  // Do not stop auto sliding when user interacts with the buttons
});

prev.addEventListener('click', () => {
  prevmy_n_slide();
  // Do not stop auto sliding when user interacts with the buttons
});

// Auto my_n_slide functionality
my_n_slider.addEventListener('mouseover', stopAutomy_n_slide); // Stop auto sliding on hover
my_n_slider.addEventListener('mouseleave', startAutomy_n_slide); // Resume auto sliding on mouseout

// Touch screen my_n_slide functionality
let touchStartX;

my_n_slidermy_n_container.addEventListener('touchstart', (e) => {
  touchStartX = e.touches[0].clientX;
});

my_n_slidermy_n_container.addEventListener('touchmove', (e) => {
  if (touchStartX - e.touches[0].clientX > 50) {
    nextmy_n_slide();
    touchStartX = null;
  } else if (touchStartX - e.touches[0].clientX < -50) {
    prevmy_n_slide();
    touchStartX = null;
  }
});

// Start auto sliding initially
startAutomy_n_slide();
// Set a random initial index to avoid displaying two testimonials on load
index = Math.floor(Math.random() * my_n_slides.length);
display(index);

//  =============END TASTIMONIAL JS================
