import"./modulepreload-polyfill.js";import{S as d}from"./swiper-bundle.js";import{L as x,A as w}from"./accordion.min.js";import"./clamp.js";const g=new x({smoothWheel:!1});function m(t){g.raf(t),requestAnimationFrame(m)}requestAnimationFrame(m);const _=()=>{const t=document.querySelector(".hamburger"),e=document.querySelector("#side-menu");t.addEventListener("click",()=>{t.classList.toggle("is-active"),e.classList.toggle("hidden")})},k=()=>{document.querySelector(".back-to-top").addEventListener("click",()=>{g.scrollTo(0)})},y=()=>{const t=document.querySelectorAll(".parent");Array.from(t).map(i=>{i.addEventListener("click",()=>{i.nextElementSibling.classList.toggle("h-0")})})},f=()=>{g.on("scroll",t=>{const e=document.querySelector(".top-bar");document.querySelector(".desktop-menu"),document.querySelector(".desktop-menu__right");const i=t.animatedScroll,n=t.direction===-1?"up":"down";i>10&&n==="down"?e.classList.add("on-scroll-down"):e.classList.remove("on-scroll-down")})};class b{constructor(e){this.options=e,this.testimonials=document.querySelectorAll(".testimonials .testimonial"),this.testimonialsArray=Array.from(this.testimonials),this.content=this.testimonialsArray.map(i=>i.querySelector(".testimonial__content").innerText)}init(){this.handleExcerpt(),this.handleBtnToAll()}handleBtn(){const e=document.querySelector(".testimonials__more-btn");e.addEventListener("click",()=>{const i=document.querySelector(".testimonials .swiper-slide-active"),n=i.querySelector(".testimonials__more"),s=i.querySelector(".testimonial__dots");n.classList.toggle("hidden"),s.classList.toggle("hidden"),n.classList.contains("hidden")?e.innerText="Rozwiń opis":e.innerText="Schowaj opis"})}handleBtnToAll(){const e=document.querySelector(".testimonials__more-btn");e.addEventListener("click",()=>{const i=document.querySelectorAll(".testimonials .testimonials__more"),n=document.querySelectorAll(".testimonials .testimonial__dots");i.forEach(s=>{s.classList.toggle("hidden")}),n.forEach(s=>{s.classList.toggle("hidden")}),i.forEach(s=>{s.classList.contains("hidden")?e.innerText="Rozwiń opis":e.innerText="Schowaj opis"})})}handleExcerpt(){const e=this.content.map(n=>n.substring(0,this.options.excerpt)),i=this.content.map(n=>n.substring(this.options.excerpt,n.length));this.testimonialsArray.map((n,s)=>{n.querySelector(".testimonial__content").innerHTML=`<span class=' inline'>${e[s]}</span><span class='text-red inline testimonial__dots'>(...)</span><span class="testimonials__more hidden">${i[s]}</span>`})}}const S=()=>{if(window.innerWidth<1024){const t=document.querySelector(".testimonial__next--mobile"),e=document.querySelector(".testimonial__prev--mobile"),i=document.querySelector(".slider-row__swiper--testimonials").swiper;t.addEventListener("click",()=>{i.slideNext()}),e.addEventListener("click",()=>{i.slidePrev()})}else return},L=()=>{new d(".swiper--notification",{speed:9400,centeredSlides:!1,slidesPerView:"auto",spaceBetween:30,loop:!0,autoplay:{delay:0,disableOnInteraction:!1}}),new d(".slider-row__swiper",{slidesPerView:1,spaceBetween:12,centeredSlides:!0,speed:300,loop:!0,scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--portfolio--next"},breakpoints:{720:{centeredSlides:!1,spaceBetween:24,slidesPerView:"auto"}}}),new d(".slider-row__swiper-projects",{spaceBetween:24,speed:300,loop:!0,centeredSlides:!1,slidesPerView:"auto",scrollbar:{el:".swiper-scrollbar"},navigation:{nextEl:".swiper--portfolio--next"}}),new d(".slider-row__swiper--testimonials",{spaceBetween:24,loop:!0,centeredSlides:!0,slidesPerView:"auto",breakpoints:{320:{slidesPerView:1},480:{slidesPerView:1},1024:{slidesPerView:"auto"}},navigation:{nextEl:".swiper--testimonials--next"}}),new d(".logos-slider",{speed:9400,loop:!0,centeredSlides:!1,spaceBetween:17,slidesPerView:2,autoplay:{delay:0,disableOnInteraction:!1},breakpoints:{320:{slidesPerView:2,spaceBetween:17},480:{slidesPerView:3,spaceBetween:24},1024:{slidesPerView:"auto",spaceBetween:24}}})};let a=0;const u=t=>{a+=t,v()},h=t=>{a-=t,v()},v=()=>{console.log("updateUI"),document.querySelector(".pricing__count .val").textContent=a,document.querySelector(".pricing__total-value").textContent=a;const t=document.querySelector(".pricing__footer"),e=document.querySelector(".pricing__total--mobile");console.log(a),window.innerWidth>1024&&(a?t.classList.add("lg:flex"):t.classList.remove("lg:flex")),window.innerWidth<1024&&(a?e.classList.add("flex"):e.classList.remove("flex"),a?e.classList.remove("hidden"):e.classList.add("hidden"))},j=()=>{const t=document.querySelector("#pricing"),e=document.querySelector(".pricing__trigger");document.querySelector(".pricing__close-icon").addEventListener("click",n=>{n.preventDefault(),document.body.classList.remove("is-popup"),document.documentElement.classList.remove("is-popup"),t.classList.remove("is-pricing-active")}),e.addEventListener("click",n=>{n.preventDefault(),document.body.classList.add("is-popup"),document.documentElement.classList.add("is-popup"),console.log("pricing trigger clicked"),t.classList.add("is-pricing-active")})},z=()=>{document.querySelector(".pricing__searchbox").addEventListener("input",e=>{const i=document.querySelectorAll(".pricing__items .ac"),n=Array.from(i);n.map(r=>{const c=r.querySelector(".pricing__area-title").textContent.toLowerCase(),l=e.target.value.toLowerCase(),p=c.includes(l);console.log(p),p?r.classList.remove("ac-hidden"):r.classList.add("ac-hidden")});const s=n.filter(r=>!r.classList.contains("ac-hidden")),o=document.querySelector(".no-results");s.length?o.classList.add("no-results__hidden"):o.classList.remove("no-results__hidden"),console.log(s)})},q=async()=>{console.log("fetchPricing");const e=await(await fetch("http://grafikonline.test/wp-json/options/pricing")).json(),i=document.querySelector(".pricing__items"),n=e.map(o=>`
    <div class="ac" data-selected="false">
    <div
      class="ac-header  pl-5 pr-5 flex items-center justify-between dark:bg-dark dark:lg:bg-darkMain bg-light pt-[9px] pb-[9px]">
      <button type="button" class="ac-trigger pricing__area-title max-lg:w-full">
        <span class="text-light text-[16px] lg:text-[20px] flex">${o.title}</span>
      </button>
      <div class="pricing__area-icon pricing__area-icon--mobile cursor-pointer max-lg:w-[40px]  lg:hidden transition-all">
      <div class="pricing__area-icon--plus pricing__area-icon--plus--mobile w-[40px] h-[40px] hiden flex items-center justify-center rounded-full bg-red text-light ">
        +
      </div>
      <div>
          <div class="pricing__area-icon--check pricing__area-icon--check--mobile hidden w-[40px] h-[40px] flex items-center justify-center rounded-full bg-dark3 text-light ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] border-[1px] rounded-full h-[14px] border-green icon icon-tabler icon-tabler-check stroke-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                </div>
        </div>
    </div>
      
    </div>
    <div class="pricing__area-icon pricing__area-icon--desktop cursor-pointer hidden lg:flex lg:items-center lg:justify-center transition-all">
      <div class="pricing__area-icon--plus pricing__area-icon--plus--desktop w-[40px] h-[40px] hiden flex items-center justify-center rounded-full bg-red text-light ">
        +
      </div>
      <div>
          <div
                  class="pricing__area-icon--check pricing__area-icon--check--desktop hidden w-[40px] h-[40px] flex items-center justify-center rounded-full bg-dark3 text-light ">
                  <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-[14px] border-[1px] rounded-full h-[14px] border-green icon icon-tabler icon-tabler-check stroke-green"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                </div>
        </div>
    </div>
    <div
      class="text-light text-[16px] pricing__area-price hidden lg:flex items-center justify-center  bg-darkMain ">
      <span>${o.price}</span> ,-
    </div>
    <div
      class="bg-dark3 lg:bg-darkMain pl-5 xl:pl-2  xl:pr-2 pr-5 pt-2 pb-2 flex items-center justify-between lg:justify-center accordion__pricing-trigger-wrapper">
      <div class="flex items-center justify-start gap-[17px] pricing__area-details">
        <div
          class="underline text-light text-[12px] pt-2 pb-2 pricing__trigger  select-none lg:text-red lg:no-underline lg:hover:underline lg:hover:text-light">
          <span> Szczegóły usługi</span>
        </div>
        <div><svg class="rotate-0" xmlns="http://www.w3.org/2000/svg" width="12.437" height="7.603"
            viewBox="0 0 12.437 7.603">
            <path id="Dropdown" d="M10.346,0,5.511,4.834h0L.676,0,0,.677,5.511,6.188,11.022.677Z"
              transform="translate(0.708 0.707)" fill="#ef4123" stroke="#ef4123" stroke-width="1" />
          </svg>
        </div>
      </div>
      <div class="text-light text-[16px] lg:hidden">${o.price},-</div>
    </div>
    <div class="ac-panel text-light pl-5 pr-5 bg-dark3 pricing__area-content">
      <div class="text-[14px] text-green lg:mb-3">W cenie naszej usługi otrzymujesz:</div>

      <div class="flex items-start gap-5 pt-5 pb-5 pricing__item-content">
        <div class="check ">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check stroke-green"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l5 5l10 -10" />
          </svg>
        </div>

        <div class="text-[14px] lg:text-[16px]"> Jedną indywidualnie przygotowaną koncepcję projektu. <span
            class="text-dark2">Jeśli przedstawiona
            propozycja nie
            trafi w
            twój
            gust, otrzymasz kolejną zupełnie nową propozycję, w oparciu o nowe wytyczne.</span></div>
      </div>

      <div class="flex items-start gap-5 pt-5 pb-5 pricing__item-content">
        <div class="check ">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check stroke-green"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l5 5l10 -10" />
          </svg>
        </div>
        <div class="text-[14px] lg:text-[16px]"> Jedną indywidualnie przygotowaną koncepcję projektu. <span
            class="text-dark2">Jeśli przedstawiona
            propozycja nie
            trafi w
            twój
            gust, otrzymasz kolejną zupełnie nową propozycję, w oparciu o nowe wytyczne.</span></div>
      </div>

      <div class="flex items-start gap-5 pt-5 pb-5 pricing__item-content">
        <div class="check ">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check stroke-green"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l5 5l10 -10" />
          </svg>
        </div>
        <div class="text-[14px] lg:text-[16px]"> Jedną indywidualnie przygotowaną koncepcję projektu. <span
            class="text-dark2">Jeśli przedstawiona
            propozycja nie
            trafi w
            twój
            gust, otrzymasz kolejną zupełnie nową propozycję, w oparciu o nowe wytyczne.</span></div>
      </div>

      <div class="flex items-start gap-5 pt-5 pb-5 pricing__item-content">
        <div class="check ">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check stroke-green"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l5 5l10 -10" />
          </svg>
        </div>
        <div class="text-[14px] lg:text-[16px]"> Jedną indywidualnie przygotowaną koncepcję projektu. <span
            class="text-dark2">Jeśli przedstawiona
            propozycja nie
            trafi w
            twój
            gust, otrzymasz kolejną zupełnie nową propozycję, w oparciu o nowe wytyczne.</span></div>
      </div>
    </div>
  </div>
    `);console.log(e),console.log(n),i.innerHTML+=n.join("")},A=()=>{console.log("handlePricingAccordions"),new w(".pricing__items",{duration:130,triggerClass:"pricing__trigger",beforeOpen:function(t){console.log(t);const e=t.querySelector(".pricing__trigger");t.querySelector(".accordion__pricing-trigger-wrapper").classList.add("accordion-bg-dark3"),e.textContent="Zwiń"},onClose:function(t){console.log(t);const e=t.querySelector(".pricing__trigger");t.querySelector(".accordion__pricing-trigger-wrapper").classList.remove("accordion-bg-dark3"),e.textContent="Szczegóły usługi"}})},T=()=>{if(window.innerWidth>1024){const e=document.querySelectorAll(".pricing__area-icon--desktop"),i=Array.from(e);console.log(i),i.map(n=>{n.addEventListener("click",s=>{const o=s.target.closest(".ac");console.log(o);const r=o.querySelector(".pricing__area-icon--plus--desktop"),c=o.querySelector(".pricing__area-icon--check--desktop");console.log(c);const l=Number(o.querySelector(".pricing__area-price span").innerText);o.dataset.selected==="true"?(o.dataset.selected="false",h(l),c.classList.toggle("hidden"),r.classList.toggle("hidden"),window.setTimeout(()=>{},200)):(o.dataset.selected="true",u(l),c.classList.toggle("hidden"),r.classList.toggle("hidden"),window.setTimeout(()=>{},200))})})}if(window.innerWidth<1024){const e=document.querySelectorAll(".pricing__area-icon--mobile"),i=Array.from(e);console.log(i),i.map(n=>{n.addEventListener("click",s=>{const o=s.target.closest(".ac");console.log(o);const r=o.querySelector(".pricing__area-icon--plus--mobile"),c=o.querySelector(".pricing__area-icon--check--mobile");console.log(c);const l=Number(o.querySelector(".pricing__area-price span").innerText);console.log(l),o.dataset.selected==="true"?(o.dataset.selected="false",h(l),c.classList.toggle("hidden"),r.classList.toggle("hidden"),window.setTimeout(()=>{},200)):(o.dataset.selected="true",u(l),c.classList.toggle("hidden"),r.classList.toggle("hidden"),window.setTimeout(()=>{},200))})})}console.log(0)};window.addEventListener("DOMContentLoaded",()=>{L(),_(),y(),f(),k(),S(),q().then(()=>{A()}).then(()=>{T(),z(),j()}),window.innerWidth<1024&&new b({excerpt:276}).init(),new w(".accordion-container",{duration:130})});
