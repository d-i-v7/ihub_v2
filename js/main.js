// menu hide and show

var btn=document.querySelector(".menu-btn");
var i=document.querySelector(".menu-btn i");

var menu= document.querySelector("nav");

btn.addEventListener("click",function(){

    if(i.classList.contains("fa-bars")){

        menu.classList.toggle("active");
        i.classList.replace("fa-bars", "fa-xmark");

    }else{

       
        i.classList.replace("fa-xmark", "fa-bars");
 menu.classList.remove("active");
    }

})

// LIGTH AND DARK MODE

const lightmode = document.querySelector("#light-mode");
const light_i = document.querySelector("#light-mode i");
const light_span = document.querySelector("#light-mode span");
const body = document.querySelector("body");

function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); // Convert days to milliseconds
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function getCookie(name) {
    const cookieName = name + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const cookieArray = decodedCookie.split(';');
    for (let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(cookieName) === 0) {
            return cookie.substring(cookieName.length, cookie.length);
        }
    }
    return null;
}

function applyMode(mode) {
    if (mode === "dark") {
        body.classList.add("l-mode");
        light_i.classList.replace("fa-sun", "fa-moon");
        light_span.innerText = "Dark Mode";
    } else {
        body.classList.remove("l-mode");
        light_i.classList.replace("fa-moon", "fa-sun");
        light_span.innerText = "Light Mode";
    }
}

window.addEventListener("load", function() {
    const modePreference = getCookie("modePreference");
    if (modePreference === "dark" || modePreference === "light") {
        applyMode(modePreference);
        window.matchMedia("(prefers-color-scheme: dark)").removeEventListener("change", systemPreferenceHandler);
    } else {
        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        applyMode(prefersDark ? "dark" : "light");
    }
});

lightmode.addEventListener("click", function() {
    const newMode = body.classList.contains("l-mode") ? "light" : "dark";

    // Remove old mode preference cookie
    const oldModePreference = getCookie("modePreference");
    if (oldModePreference === "dark" || oldModePreference === "light") {
        setCookie("modePreference", "", -1); // Remove old cookie by setting it to expire in the past
    }

    applyMode(newMode);
    setCookie("modePreference", newMode, 365); // Set user's mode preference for 1 year

    window.matchMedia("(prefers-color-scheme: dark)").removeEventListener("change", systemPreferenceHandler);
});

const systemPreferenceHandler = (e) => {
    const newColorScheme = e.matches ? "dark" : "light";
    if (getCookie("modePreference") !== newColorScheme) {
        applyMode(newColorScheme);
        setCookie("modePreference", newColorScheme, 365); // Set new color scheme preference for 1 year
    }
};

window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", systemPreferenceHandler);


// image slider

let slideIndex = 0;

function showSlides() {
  const slides = document.querySelectorAll('.slider img');
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  } else if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.transform = `translateX(-${slideIndex * 100}%)`;
  }
}

function prvSlide() {
  slideIndex--;
  showSlides();
}

function nxtSlide() {
  slideIndex++;
  showSlides();
}

// Autoplay
let autoplayInterval;

function startAutoplay() {
  autoplayInterval = setInterval(() => {
    slideIndex++;
    showSlides();
  }, 3000); // Change slide every 3 seconds
}

function stopAutoplay() {
  clearInterval(autoplayInterval);
}
startAutoplay();

// SCROLL FIXED FUNCTION

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');

    if (window.scrollY > 50) {
      header.classList.add('scroll');
    } else {
      header.classList.remove('scroll');
    }
  });

  // subscribtion form

  const sub=document.querySelector(".sub-body");
  const closesub=document.querySelector(".close-sub");

  function opensub(){

    sub.classList.add("show");

  }

  // hide
  closesub.addEventListener("click",function(){
sub.classList.remove("show");

  })
  
  // Comment form

  const com = document.querySelector(".com-body");
  const closecom = document.querySelector(".close-com");
  const textarea = document.getElementById('myTextArea');
  
  function opencom() {
    com.classList.add("show");
  }
  
  textarea.addEventListener('input', function(event) {
    const maxLength = 250;
    const currentLength = textarea.value.length;
  
    if (currentLength > maxLength) {
      textarea.value = textarea.value.substring(0, maxLength); // Trim excess characters
      textarea.style.border = '1px solid red';
  
      // Using Alertify for the alert
      alertify.error('Your Write Only 250 Characters');
    } else {
      textarea.style.border = ''; // Reset border if characters are within limit
    }
  });
  
  closecom.addEventListener("click", function() {
    com.classList.remove("show");
  });

 // Event form

const eventiga = document.querySelector(".event-body");
const closeeventButton = document.querySelector(".close-event");
const textbox = document.getElementById('myTextArea'); // Corrected ID name

function openevent() {
  eventiga.classList.add("show");
}

textbox.addEventListener('input', function(event) {
  const maxLength = 250;
  const currentLength = textbox.value.length;

  if (currentLength > maxLength) {
    textbox.value = textbox.value.substring(0, maxLength); // Trim excess characters
    textbox.style.border = '1px solid red';

    // Using Alertify for the alert
    alertify.error('Your Write Only 250 Characters');
  } else {
    textbox.style.border = ''; // Reset border if characters are within limit
  }
});

// Ensure closeeventButton is not null
if (closeeventButton) {
  closeeventButton.addEventListener("click", function() {
    eventiga.classList.remove("show");
  });
} else {
  console.error("closeeventButton not found");
}

  
 
  

// current year
  function updateCopyrightYear() {
    var currentYear = new Date().getFullYear();
    document.getElementById('currentYear').textContent = currentYear;
}

// Call the function to update the year when the page loads
window.onload = function() {
    updateCopyrightYear();
};


// back to online code

// offline.js
document.addEventListener('DOMContentLoaded', function () {
  window.addEventListener('online', function () {
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "You Are Back Online!",
      showConfirmButton: false,
      timer: 1500
    });
      
      // Play a sound when the user comes back online
      playNotificationSound();
  });

  function playNotificationSound() {
      // You can replace the sound file URL with your own sound file
      var audio = new Audio('../on.mp3');
      audio.play();
  }
});


// Numberada Ordaayo

// function animateNumber(element, end, duration) {
//   let current = 0;
//   const range = end - 0;
//   const increment = end > 0 ? 1 : -1;
//   const stepTime = Math.abs(Math.floor(duration / range));
//   const timer = setInterval(function() {
//       current += increment;
//       element.innerHTML = numberWithCommas(current) + '<span class="plus">+</span>';
//       if (current === end) {
//           clearInterval(timer);
//       }
//   }, stepTime);
// }

// function numberWithCommas(x) {
//   return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
// }

// document.addEventListener("DOMContentLoaded", function () {
//     // ... Your existing code

//     // Animate numbers on page load
//     animateNumber(document.getElementById('number1'), 1000, 1000); // start from 0, end at 1000
//     animateNumber(document.getElementById('number2'), 300, 2000);  // start from 0, end at 300
//     animateNumber(document.getElementById('number3'), 15, 2000);   // start from 0, end at 15
//     animateNumber(document.getElementById('number4'), 10, 2000);   // start from 0, end at 10
// });




