document.addEventListener("DOMContentLoaded",()=>{const n=document.querySelectorAll("[data-tab-target]"),a=document.querySelectorAll("[data-tab-content]");n.forEach(e=>{e.addEventListener("click",()=>{const r=document.querySelector(e.dataset.tabTarget);a.forEach(t=>{t.classList.add("hidden")}),n.forEach(t=>{t.classList.remove("bg-fpiGreen","text-white"),t.classList.add("border-fpiGreen","text-fpiGreen","hover:text-white","hover:bg-fpiGreen")}),e.classList.add("bg-fpiGreen","text-white"),e.classList.remove("border-fpiGreen","text-fpiGreen"),r.classList.remove("hidden")})}),n[0].click()});const s=document.getElementById("hamburger"),i=document.getElementById("nav-menu"),d=document.getElementById("close");s.addEventListener("click",()=>{i.classList.remove("hidden"),s.classList.add("hidden"),d.classList.remove("hidden")});d.addEventListener("click",()=>{i.classList.add("hidden"),s.classList.remove("hidden"),d.classList.add("hidden")});var c=new c(".slide-content",{slidesPerView:1,spaceBetween:30,loop:!0,pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});