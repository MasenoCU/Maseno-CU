// Toggle Menu
function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".humberger-icon");
    
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

// Initialize Bootstrap Carousel
var myCarousel = document.querySelector('#myCarousel');
if (myCarousel) {
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5000,  // Change slide every 5 seconds
        ride: 'carousel' // Start the carousel automatically
    });

    // Listen for slide events
    myCarousel.addEventListener('slide.bs.carousel', function (event) {
        console.log('Slide from: ', event.from);
        console.log('Slide to: ', event.to);
    });
}

// Logout Notification Handling
const urlParams = new URLSearchParams(window.location.search);
const logoutSuccess = urlParams.get('logout');
if (logoutSuccess === 'success') {
    const notification = document.getElementById('logoutNotification');
    notification.style.display = 'block';

    // Automatically hide the notification after 3 seconds
    setTimeout(() => {
        notification.style.display = 'none';

        // Remove the 'logout' query parameter from the URL without reloading the page
        const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
        window.history.replaceState({}, document.title, newUrl);
    }, 2000);
}

// Header Scrollspy
var header = document.getElementById("header");
var lastScrollTop = 0;
window.addEventListener("scroll", function () {
    var currentScroll = window.scrollY || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        header.style.top = "-140px"; // Hide header on scroll down
    } else {
        header.style.top = "0"; // Show header on scroll up
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Avoid negative scroll values
}, false);

// Active Nav-link Highlighting
const navLinks = document.querySelectorAll('.nav-link, .dropdown-item');
navLinks.forEach(link => {
    if (link.href === window.location.href) {
        link.classList.add('active');
        link.setAttribute('aria-current', 'page');
    } else {
        link.classList.remove('active');
        link.removeAttribute('aria-current');
    }
});

// Horizontal Scroll for Tab Navigation
const btnLeft = document.querySelector(".left-btn");
const btnRight = document.querySelector(".right-btn");
const tabMenu = document.querySelector(".tab-menu");

const IconVisibility = () => {
    let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);
    let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;

    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
    btnRight.style.display = scrollableWidth > scrollLeftValue ? "block" : "none";
}

btnRight.addEventListener("click", () => {
    tabMenu.scrollLeft += 102;
    setTimeout(() => IconVisibility(), 50);
});

btnLeft.addEventListener("click", () => {
    tabMenu.scrollLeft -= 102;
    setTimeout(() => IconVisibility(), 50);
});

window.onload = function () {
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? "" : "none";
};

window.onresize = function () {
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnLeft.style.display = tabMenu.scrollWidth >= window.innerWidth ? "" : "none";

    let scrollLeftValue = Math.round(tabMenu.scrollLeft);
    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
};

// Navigation Draggable
let activeDrag = false;
tabMenu.addEventListener("mousemove", (drag) => {
    if (!activeDrag) return;
    tabMenu.scrollLeft -= drag.movementX;
    IconVisibility();
    tabMenu.classList.add("dragging");
});

document.addEventListener("mouseup", () => {
    activeDrag = false;
    tabMenu.classList.remove("dragging");
});

tabMenu.addEventListener("mousedown", () => {
    activeDrag = true;
});

// Tab Navigation on Click
const tabs = document.querySelectorAll(".tab");
const tabBtns = document.querySelectorAll(".tab-btn");

const tab_Nav = function (tabBtnClick) {
    tabBtns.forEach((tabBtn) => {
        tabBtn.classList.remove("active");
    });
    tabs.forEach((tab) => {
        tab.classList.remove("active");
    });

    tabBtns[tabBtnClick].classList.add("active");
    tabs[tabBtnClick].classList.add("active");
}

tabBtns.forEach((tabBtn, i) => {
    tabBtn.addEventListener("click", () => {
        tab_Nav(i);
    });
});

// Readmore Button Handling (for modals)
document.querySelectorAll('.btn-readmore').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        var myModal = new bootstrap.Modal(document.getElementById('comingSoonModal'));
        myModal.show();
    });
});

// Custom Carousel Controls with Auto-slide
document.addEventListener('DOMContentLoaded', function () {
    const carouselInner = document.querySelector('.carousel-inner');
    const slides = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const totalSlides = slides.length;

    // Manually control the next and previous buttons
    const prevButton = document.getElementById('prevSlide');
    const nextButton = document.getElementById('nextSlide');

    // Show the first slide initially
    showSlide(currentIndex);

    // Handle 'Next' button click
    nextButton.addEventListener('click', function () {
        clearInterval(autoSlideInterval); // Stop the auto-slide
        currentIndex = (currentIndex + 1) % totalSlides; // Go to next slide
        showSlide(currentIndex);
        autoSlideInterval = setInterval(autoSlideFunction, 8000); // Restart auto-slide
    });

    // Handle 'Previous' button click
    prevButton.addEventListener('click', function () {
        clearInterval(autoSlideInterval); // Stop the auto-slide
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Go to previous slide
        showSlide(currentIndex);
        autoSlideInterval = setInterval(autoSlideFunction, 8000); // Restart auto-slide
    });

    // Auto-slide every 8 seconds
    let autoSlideInterval = setInterval(autoSlideFunction, 8000);

    function autoSlideFunction() {
        currentIndex = (currentIndex + 1) % totalSlides; // Move to the next slide
        showSlide(currentIndex);
    }

    // Show the slide based on the current index
    function showSlide(index) {
        slides.forEach((slide, idx) => {
            if (idx === index) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }
});
