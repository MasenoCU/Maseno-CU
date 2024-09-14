// Copyright 2024 licenser.author
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
// 
//     https://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// FROM SCRIPT.JS
function toggleMenu(){
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".humberger-icon");
    
    menu.classList.toggle("open");
    icon.classList.toggle("open");
  }


// Check if the URL contains the logout query parameter

const urlParams = new URLSearchParams(window.location.search);
const logoutSuccess = urlParams.get('logout');

if (logoutSuccess === 'success') {
    // Display the notification
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


//========== Javascript for header Scrollspy==========//

// get the header
var header = document.getElementById("header");
var lastScrollTop = 0;

// on scroll down, hide the header; on scroll up, show the header
window.addEventListener("scroll", function(){
    var currentScroll = window.scrollY || this.document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop){
        // downscroll code
        header.style.top = "-140px"; //change this value as needed
    } else {
        // upscroll code
        header.style.top = 0;
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // for mobile or negative scrolling
}, false);


//========== Javascript for active nav-link==========//
const navLinks = document.querySelectorAll('.nav-link, .dropdown-item');

navLinks.forEach(link => {
  if (link.href === window.location.href) {
    link.classList.add('active');
    link.setAttribute('aria-current', 'page'); // Or 'aria-selected="true"' if applicable
  } else {
    link.classList.remove('active');
    link.removeAttribute('aria-current'); // Or remove 'aria-selected' attribute
  }
});


//========== Javascript for tab navigation horizontal scroll buttons ==========//
const btnLeft = document .querySelector(".left-btn");
const btnRight = document .querySelector(".right-btn");
const tabMenu = document .querySelector(".tab-menu");

const IconVisibility = () => {
    let scrollLeftValue = Math.ceil(tabMenu.scrollLeft);
    // console.log("1.", scrollLeftValue);
    let scrollableWidth = tabMenu.scrollWidth - tabMenu.clientWidth;
    // console.log("2.", scrollableWidth);

    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
    btnRight.style.display = scrollableWidth > scrollLeftValue ? "block" : "none";
}

btnRight.addEventListener("click", () => {
    tabMenu.scrollLeft += 102;
    // IconVisibility();
    setTimeout(() => IconVisibility(), 50);
});

btnLeft.addEventListener("click", () => {
    tabMenu.scrollLeft -= 102;
    // IconVisibility();
    setTimeout(() => IconVisibility(), 50);
});

window.onload = function(){
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnLeft.style.display = tabMenu.scrollwidth >= window.innerWidth ? "" : "none";
}

window.onresize = function(){
    btnRight.style.display = tabMenu.scrollWidth > tabMenu.clientWidth || tabMenu.scrollWidth >= window.innerWidth ? "block" : "none";
    btnLeft.style.display = tabMenu.scrollwidth >= window.innerWidth ? "" : "none";

    let scrollLeftValue = Math.round(tabMenu.scrollLeft);

    btnLeft.style.display = scrollLeftValue > 0 ? "block" : "none";
}

//========== Javascript to make the navigation draggable ==========//
let activeDrag = false;

tabMenu.addEventListener("mousemove", (drag) => {
    if(!activeDrag) return;
    tabMenu.scrollLeft -= DragEvent.movementX;
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

//========== Javascript to view tab contents on click tab buttons ==========//
const tabs = document.querySelectorAll(".tab");
const tabBtns = document.querySelectorAll(".tab-btn");

const tab_Nav = function(tabBtnClick){
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
    tabBtn.addEventListener("click", () =>{
        tab_Nav(i);
    });
});

// logout functionality

// if (logoutSuccess === 'success') {
//     // Display the notification
//     const notification = document.getElementById('logoutNotification');
//     notification.style.display = 'block';

//     // Automatically hide the notification after 3 seconds
//     setTimeout(() => {
//         notification.style.display = 'none';
//     }, 3000);
// }
