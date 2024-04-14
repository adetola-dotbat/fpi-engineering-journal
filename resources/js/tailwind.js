document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll("[data-tab-target]");
    const tabContents = document.querySelectorAll("[data-tab-content]");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabContents.forEach((tc) => {
          tc.classList.add("hidden");
        });
        tabs.forEach((t) => {
          t.classList.remove("border-blue-500"); // Remove the active class from all tabs
          t.classList.add("border-transparent"); // Add back the transparent border to non-active tabs
        });
        tab.classList.add("border-blue-500"); // Add the active class to the clicked tab
        tab.classList.remove("border-transparent"); // Remove the transparent border from the active tab
        target.classList.remove("hidden"); // Show the clicked tab content
      });
    });

  });


const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');
const Close = document.getElementById('close');

hamburger.addEventListener('click', ()=>{
    navMenu.classList.remove('hidden');
    hamburger.classList.add('hidden');
    Close.classList.remove('hidden')
});

Close.addEventListener('click', ()=>{
    navMenu.classList.add('hidden');
    hamburger.classList.remove('hidden');
    Close.classList.add('hidden');
});

var swiper = new swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
