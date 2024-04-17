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
          t.classList.remove("bg-fpiGreen", "text-white"); // Remove active styles
          t.classList.add("border-fpiGreen", "text-fpiGreen", "hover:text-white", "hover:bg-fpiGreen"); // Add inactive styles
        });
        tab.classList.add("bg-fpiGreen", "text-white"); // Active styles
        tab.classList.remove("border-fpiGreen", "text-fpiGreen"); // Remove inactive styles
        target.classList.remove("hidden"); // Show the clicked tab content
      });
    });

    // Trigger click on the first tab to make it active on page load
    tabs[0].click();
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

  function toggleDropdown() {
    var dropdown = document.getElementById('authorsDropdown');
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
    } else {
        dropdown.classList.remove('hidden');
    }
}
