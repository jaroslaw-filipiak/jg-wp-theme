import"./modulepreload-polyfill.js";import{S as t}from"./swiper-bundle.js";import{L as d,A as r}from"./accordion.min.js";const i=new d;function a(e){i.raf(e),requestAnimationFrame(a)}requestAnimationFrame(a);const p=()=>{const e=document.querySelector(".hamburger"),s=document.querySelector("#side-menu");e.addEventListener("click",()=>{e.classList.toggle("is-active"),s.classList.toggle("hidden")})},w=()=>{const e=document.querySelectorAll(".parent");Array.from(e).map(o=>{o.addEventListener("click",()=>{o.nextElementSibling.classList.toggle("h-0")})})},u=()=>{i.on("scroll",e=>{const s=document.querySelector(".top-bar"),o=document.querySelector(".desktop-menu"),n=document.querySelector(".desktop-menu__right"),l=e.animatedScroll,c=e.direction===-1?"up":"down";l>10&&c==="down"?(o.classList.add("on-scroll-down"),n.classList.add("on-scroll-down"),s.classList.add("top-bar--transparent")):(o.classList.remove("on-scroll-down"),n.classList.remove("on-scroll-down"),s.classList.remove("top-bar--transparent"))})};window.addEventListener("DOMContentLoaded",()=>{p(),w(),u(),new t(".swiper--notification",{speed:9400,centeredSlides:!1,slidesPerView:1,spaceBetween:30,loop:!0,autoplay:{delay:0,disableOnInteraction:!1}}),new t(".slider-row__swiperWebsitesPortfolio",{spaceBetween:24,speed:300,loop:!0,centeredSlides:!1,slidesPerView:"auto",scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--portfolio--next"}}),new t(".slider-row__swiper-projects",{spaceBetween:24,speed:300,loop:!0,centeredSlides:!1,slidesPerView:"auto",scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--portfolio--next"}}),new t(".slider-row__swiper--testimonials",{spaceBetween:24,loop:!0,centeredSlides:!0,slidesPerView:"auto",breakpoints:{320:{slidesPerView:1},480:{slidesPerView:1},720:{slidesPerView:"auto"}},navigation:{nextEl:".swiper--testimonials--next"}}),new t(".logos-slider",{speed:9400,loop:!0,centeredSlides:!1,spaceBetween:17,slidesPerView:2,autoplay:{delay:0,disableOnInteraction:!1},breakpoints:{320:{slidesPerView:2,spaceBetween:17},480:{slidesPerView:3,spaceBetween:24},1024:{slidesPerView:"auto",spaceBetween:24}}}),new r(".accordion-container",{duration:130}),new r(".accordion-container__2",{duration:130}),new r(".accordion-container__3",{duration:130})});
