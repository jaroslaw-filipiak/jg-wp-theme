import"./modulepreload-polyfill.js";import{S as e}from"./swiper-bundle.js";import{A as i}from"./accordion.min.js";import{s as p}from"./global-module.js";import{p as a}from"./pricing-module.js";import"./lenis.js";const l=function(){document.querySelectorAll(".open-person").forEach(o=>{o.addEventListener("click",t=>{const n=t.target.parentElement.closest(".person").dataset.person,s=document.getElementById(n),r=s.querySelector(".popup__close");s.classList.toggle("popup--active"),r.addEventListener("click",()=>{s.classList.remove("popup--active")})})})};function d(){window.addEventListener("DOMContentLoaded",()=>{l()})}a();p();d();window.addEventListener("DOMContentLoaded",()=>{new e(".swiper--notification",{speed:9400,centeredSlides:!1,slidesPerView:1,spaceBetween:30,loop:!0,autoplay:{delay:0,disableOnInteraction:!1}}),new e(".slider-row__persons",{spaceBetween:24,speed:300,loop:!0,centeredSlides:!0,slidesPerView:1,breakpoints:{1024:{slidesPerView:"auto",centeredSlides:!1}},scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--portfolio--next"}}),new e(".slider-row__swiper-projects",{spaceBetween:24,speed:300,loop:!0,centeredSlides:!1,slidesPerView:"auto",scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--portfolio--next"}}),new e(".logos-slider",{speed:9400,loop:!0,centeredSlides:!1,spaceBetween:17,slidesPerView:2,autoplay:{delay:0,disableOnInteraction:!1},breakpoints:{320:{slidesPerView:2,spaceBetween:17},480:{slidesPerView:3,spaceBetween:24},1024:{slidesPerView:"auto",spaceBetween:24}}}),new i(".accordion-container",{duration:130})});
