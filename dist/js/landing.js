import{p as r,A as s}from"./pricing-module.js";import{s as t,S as n}from"./global-module.js";r();t();const l=()=>new n(".slider-row__swiper",{slidesPerView:1,spaceBetween:12,centeredSlides:!0,speed:300,loop:!0,scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--landing--next"},breakpoints:{720:{centeredSlides:!1,spaceBetween:24,slidesPerView:"auto"}}}),a=()=>(console.log("testimonials swiper on landing page"),new n(".slider-row__swiper--testimonials",{spaceBetween:24,loop:!0,centeredSlides:!0,slidesPerView:"auto",breakpoints:{320:{slidesPerView:1},480:{slidesPerView:1},1024:{slidesPerView:1},1280:{slidesPerView:"auto",centeredSlides:!1,loop:!0}},navigation:{nextEl:".swiper--testimonials--next"}})),c=()=>{const e=document.querySelectorAll(".landing-accordions-row .accordion-container"),o=document.querySelectorAll(".landing-accordions-row .accordion-container").length;console.log("accordions length:",o),console.log(e),e.forEach((d,i)=>{new s(`.accordion-container-${i+1}`,{duration:130})})};window.addEventListener("DOMContentLoaded",()=>{l(),a(),c()});
