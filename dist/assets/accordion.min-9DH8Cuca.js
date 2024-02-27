var x=Object.defineProperty;var z=(f,t,s)=>t in f?x(f,t,{enumerable:!0,configurable:!0,writable:!0,value:s}):f[t]=s;var w=(f,t,s)=>(z(f,typeof t!="symbol"?t+"":t,s),s);function C(f,t,s){return Math.max(f,Math.min(t,s))}class M{advance(t){var E;if(!this.isRunning)return;let s=!1;if(this.lerp)this.value=(a=this.value,c=this.to,u=60*this.lerp,S=t,function(p,m,n){return(1-n)*p+n*m}(a,c,1-Math.exp(-u*S))),Math.round(this.value)===this.to&&(this.value=this.to,s=!0);else{this.currentTime+=t;const p=C(0,this.currentTime/this.duration,1);s=p>=1;const m=s?1:this.easing(p);this.value=this.from+(this.to-this.from)*m}var a,c,u,S;(E=this.onUpdate)==null||E.call(this,this.value,s),s&&this.stop()}stop(){this.isRunning=!1}fromTo(t,s,{lerp:a=.1,duration:c=1,easing:u=p=>p,onStart:S,onUpdate:E}){this.from=this.value=t,this.to=s,this.lerp=a,this.duration=c,this.easing=u,this.currentTime=0,this.isRunning=!0,S==null||S(),this.onUpdate=E}}class _{constructor({wrapper:t,content:s,autoResize:a=!0}={}){w(this,"resize",()=>{this.onWrapperResize(),this.onContentResize()});w(this,"onWrapperResize",()=>{this.wrapper===window?(this.width=window.innerWidth,this.height=window.innerHeight):(this.width=this.wrapper.clientWidth,this.height=this.wrapper.clientHeight)});w(this,"onContentResize",()=>{this.scrollHeight=this.content.scrollHeight,this.scrollWidth=this.content.scrollWidth});if(this.wrapper=t,this.content=s,a){const c=function(u,S){let E;return function(){let p=arguments,m=this;clearTimeout(E),E=setTimeout(function(){u.apply(m,p)},S)}}(this.resize,250);this.wrapper!==window&&(this.wrapperResizeObserver=new ResizeObserver(c),this.wrapperResizeObserver.observe(this.wrapper)),this.contentResizeObserver=new ResizeObserver(c),this.contentResizeObserver.observe(this.content)}this.resize()}destroy(){var t,s;(t=this.wrapperResizeObserver)==null||t.disconnect(),(s=this.contentResizeObserver)==null||s.disconnect()}get limit(){return{x:this.scrollWidth-this.width,y:this.scrollHeight-this.height}}}class A{constructor(){this.events={}}emit(t,...s){let a=this.events[t]||[];for(let c=0,u=a.length;c<u;c++)a[c](...s)}on(t,s){var a;return(a=this.events[t])!=null&&a.push(s)||(this.events[t]=[s]),()=>{var c;this.events[t]=(c=this.events[t])==null?void 0:c.filter(u=>s!==u)}}off(t,s){var a;this.events[t]=(a=this.events[t])==null?void 0:a.filter(c=>s!==c)}destroy(){this.events={}}}class k{constructor(t,{wheelMultiplier:s=1,touchMultiplier:a=2,normalizeWheel:c=!1}){w(this,"onTouchStart",t=>{const{clientX:s,clientY:a}=t.targetTouches?t.targetTouches[0]:t;this.touchStart.x=s,this.touchStart.y=a,this.lastDelta={x:0,y:0},this.emitter.emit("scroll",{deltaX:0,deltaY:0,event:t})});w(this,"onTouchMove",t=>{const{clientX:s,clientY:a}=t.targetTouches?t.targetTouches[0]:t,c=-(s-this.touchStart.x)*this.touchMultiplier,u=-(a-this.touchStart.y)*this.touchMultiplier;this.touchStart.x=s,this.touchStart.y=a,this.lastDelta={x:c,y:u},this.emitter.emit("scroll",{deltaX:c,deltaY:u,event:t})});w(this,"onTouchEnd",t=>{this.emitter.emit("scroll",{deltaX:this.lastDelta.x,deltaY:this.lastDelta.y,event:t})});w(this,"onWheel",t=>{let{deltaX:s,deltaY:a}=t;this.normalizeWheel&&(s=C(-100,s,100),a=C(-100,a,100)),s*=this.wheelMultiplier,a*=this.wheelMultiplier,this.emitter.emit("scroll",{deltaX:s,deltaY:a,event:t})});this.element=t,this.wheelMultiplier=s,this.touchMultiplier=a,this.normalizeWheel=c,this.touchStart={x:null,y:null},this.emitter=new A,this.element.addEventListener("wheel",this.onWheel,{passive:!1}),this.element.addEventListener("touchstart",this.onTouchStart,{passive:!1}),this.element.addEventListener("touchmove",this.onTouchMove,{passive:!1}),this.element.addEventListener("touchend",this.onTouchEnd,{passive:!1})}on(t,s){return this.emitter.on(t,s)}destroy(){this.emitter.destroy(),this.element.removeEventListener("wheel",this.onWheel,{passive:!1}),this.element.removeEventListener("touchstart",this.onTouchStart,{passive:!1}),this.element.removeEventListener("touchmove",this.onTouchMove,{passive:!1}),this.element.removeEventListener("touchend",this.onTouchEnd,{passive:!1})}}class q{constructor({wrapper:t=window,content:s=document.documentElement,wheelEventsTarget:a=t,eventsTarget:c=a,smoothWheel:u=!0,syncTouch:S=!1,syncTouchLerp:E=.075,touchInertiaMultiplier:p=35,duration:m,easing:n=l=>Math.min(1,1.001-Math.pow(2,-10*l)),lerp:y=!m&&.1,infinite:g=!1,orientation:d="vertical",gestureOrientation:e="vertical",touchMultiplier:i=1,wheelMultiplier:o=1,normalizeWheel:r=!1,autoResize:h=!0}={}){w(this,"onVirtualScroll",({deltaX:t,deltaY:s,event:a})=>{if(a.ctrlKey)return;const c=a.type.includes("touch"),u=a.type.includes("wheel");if(this.options.syncTouch&&c&&a.type==="touchstart")return void this.reset();const S=t===0&&s===0,E=this.options.gestureOrientation==="vertical"&&s===0||this.options.gestureOrientation==="horizontal"&&t===0;if(S||E)return;let p=a.composedPath();if(p=p.slice(0,p.indexOf(this.rootElement)),p.find(g=>{var d,e,i,o;return((d=g.hasAttribute)==null?void 0:d.call(g,"data-lenis-prevent"))||c&&((e=g.hasAttribute)==null?void 0:e.call(g,"data-lenis-prevent-touch"))||u&&((i=g.hasAttribute)==null?void 0:i.call(g,"data-lenis-prevent-wheel"))||((o=g.classList)==null?void 0:o.contains("lenis"))}))return;if(this.isStopped||this.isLocked)return void a.preventDefault();if(this.isSmooth=this.options.syncTouch&&c||this.options.smoothWheel&&u,!this.isSmooth)return this.isScrolling=!1,void this.animate.stop();a.preventDefault();let m=s;this.options.gestureOrientation==="both"?m=Math.abs(s)>Math.abs(t)?s:t:this.options.gestureOrientation==="horizontal"&&(m=t);const n=c&&this.options.syncTouch,y=c&&a.type==="touchend"&&Math.abs(m)>5;y&&(m=this.velocity*this.options.touchInertiaMultiplier),this.scrollTo(this.targetScroll+m,{programmatic:!1,...n?{lerp:y?this.options.syncTouchLerp:1}:{lerp:this.options.lerp,duration:this.options.duration,easing:this.options.easing}})});w(this,"onNativeScroll",()=>{if(!this.__preventNextScrollEvent&&!this.isScrolling){const t=this.animatedScroll;this.animatedScroll=this.targetScroll=this.actualScroll,this.velocity=0,this.direction=Math.sign(this.animatedScroll-t),this.emit()}});window.lenisVersion="1.0.34",t!==document.documentElement&&t!==document.body||(t=window),this.options={wrapper:t,content:s,wheelEventsTarget:a,eventsTarget:c,smoothWheel:u,syncTouch:S,syncTouchLerp:E,touchInertiaMultiplier:p,duration:m,easing:n,lerp:y,infinite:g,gestureOrientation:e,orientation:d,touchMultiplier:i,wheelMultiplier:o,normalizeWheel:r,autoResize:h},this.animate=new M,this.emitter=new A,this.dimensions=new _({wrapper:t,content:s,autoResize:h}),this.toggleClass("lenis",!0),this.velocity=0,this.isLocked=!1,this.isStopped=!1,this.isSmooth=S||u,this.isScrolling=!1,this.targetScroll=this.animatedScroll=this.actualScroll,this.options.wrapper.addEventListener("scroll",this.onNativeScroll,{passive:!1}),this.virtualScroll=new k(c,{touchMultiplier:i,wheelMultiplier:o,normalizeWheel:r}),this.virtualScroll.on("scroll",this.onVirtualScroll)}destroy(){this.emitter.destroy(),this.options.wrapper.removeEventListener("scroll",this.onNativeScroll,{passive:!1}),this.virtualScroll.destroy(),this.dimensions.destroy(),this.toggleClass("lenis",!1),this.toggleClass("lenis-smooth",!1),this.toggleClass("lenis-scrolling",!1),this.toggleClass("lenis-stopped",!1),this.toggleClass("lenis-locked",!1)}on(t,s){return this.emitter.on(t,s)}off(t,s){return this.emitter.off(t,s)}setScroll(t){this.isHorizontal?this.rootElement.scrollLeft=t:this.rootElement.scrollTop=t}resize(){this.dimensions.resize()}emit(){this.emitter.emit("scroll",this)}reset(){this.isLocked=!1,this.isScrolling=!1,this.animatedScroll=this.targetScroll=this.actualScroll,this.velocity=0,this.animate.stop()}start(){this.isStopped=!1,this.reset()}stop(){this.isStopped=!0,this.animate.stop(),this.reset()}raf(t){const s=t-(this.time||t);this.time=t,this.animate.advance(.001*s)}scrollTo(t,{offset:s=0,immediate:a=!1,lock:c=!1,duration:u=this.options.duration,easing:S=this.options.easing,lerp:E=!u&&this.options.lerp,onComplete:p=null,force:m=!1,programmatic:n=!0}={}){if(!this.isStopped&&!this.isLocked||m){if(["top","left","start"].includes(t))t=0;else if(["bottom","right","end"].includes(t))t=this.limit;else{let y;if(typeof t=="string"?y=document.querySelector(t):t!=null&&t.nodeType&&(y=t),y){if(this.options.wrapper!==window){const d=this.options.wrapper.getBoundingClientRect();s-=this.isHorizontal?d.left:d.top}const g=y.getBoundingClientRect();t=(this.isHorizontal?g.left:g.top)+this.animatedScroll}}if(typeof t=="number"){if(t+=s,t=Math.round(t),this.options.infinite?n&&(this.targetScroll=this.animatedScroll=this.scroll):t=C(0,t,this.limit),a)return this.animatedScroll=this.targetScroll=t,this.setScroll(this.scroll),this.reset(),void(p==null?void 0:p(this));if(!n){if(t===this.targetScroll)return;this.targetScroll=t}this.animate.fromTo(this.animatedScroll,t,{duration:u,easing:S,lerp:E,onStart:()=>{c&&(this.isLocked=!0),this.isScrolling=!0},onUpdate:(y,g)=>{this.isScrolling=!0,this.velocity=y-this.animatedScroll,this.direction=Math.sign(this.velocity),this.animatedScroll=y,this.setScroll(this.scroll),n&&(this.targetScroll=y),g||this.emit(),g&&(this.reset(),this.emit(),p==null||p(this),this.__preventNextScrollEvent=!0,requestAnimationFrame(()=>{delete this.__preventNextScrollEvent}))}})}}}get rootElement(){return this.options.wrapper===window?document.documentElement:this.options.wrapper}get limit(){return this.dimensions.limit[this.isHorizontal?"x":"y"]}get isHorizontal(){return this.options.orientation==="horizontal"}get actualScroll(){return this.isHorizontal?this.rootElement.scrollLeft:this.rootElement.scrollTop}get scroll(){return this.options.infinite?(t=this.animatedScroll,s=this.limit,(t%s+s)%s):this.animatedScroll;var t,s}get progress(){return this.limit===0?1:this.scroll/this.limit}get isSmooth(){return this.__isSmooth}set isSmooth(t){this.__isSmooth!==t&&(this.__isSmooth=t,this.toggleClass("lenis-smooth",t))}get isScrolling(){return this.__isScrolling}set isScrolling(t){this.__isScrolling!==t&&(this.__isScrolling=t,this.toggleClass("lenis-scrolling",t))}get isStopped(){return this.__isStopped}set isStopped(t){this.__isStopped!==t&&(this.__isStopped=t,this.toggleClass("lenis-stopped",t))}get isLocked(){return this.__isLocked}set isLocked(t){this.__isLocked!==t&&(this.__isLocked=t,this.toggleClass("lenis-locked",t))}get className(){let t="lenis";return this.isStopped&&(t+=" lenis-stopped"),this.isLocked&&(t+=" lenis-locked"),this.isScrolling&&(t+=" lenis-scrolling"),this.isSmooth&&(t+=" lenis-smooth"),t}toggleClass(t,s){this.rootElement.classList.toggle(t,s),this.emitter.emit("className change",this)}}function R(f){return f&&f.__esModule&&Object.prototype.hasOwnProperty.call(f,"default")?f.default:f}var L={exports:{}};(function(f){(function(t){var s=0,a=function c(u,S){var E=this,p=this,m=!1;if(Array.isArray(u))return!!u.length&&u.map(function(e){return new c(e,S)});var n={init:function(){this.options=Object.assign({duration:600,ariaEnabled:!0,collapse:!0,showMultiple:!1,onlyChildNodes:!0,openOnInit:[],elementClass:"ac",triggerClass:"ac-trigger",panelClass:"ac-panel",activeClass:"is-active",beforeOpen:function(){},onOpen:function(){},beforeClose:function(){},onClose:function(){}},S);var e=typeof u=="string";this.container=e?document.querySelector(u):u,this.createDefinitions(),p.attachEvents()},createDefinitions:function(){var e=this,i=this.options,o=i.elementClass,r=i.openOnInit,h=i.onlyChildNodes?this.container.childNodes:this.container.querySelectorAll(d(o));this.elements=Array.from(h).filter(function(l){return l.classList&&l.classList.contains(o)}),this.firstElement=this.elements[0],this.lastElement=this.elements[this.elements.length-1],this.elements.filter(function(l){return!l.classList.contains("js-enabled")}).forEach(function(l){l.classList.add("js-enabled"),e.generateIDs(l),e.setARIA(l),e.setTransition(l);var v=e.elements.indexOf(l);s++,r.includes(v)?e.showElement(l,!1):e.closeElement(l,!1)})},setTransition:function(e){var i=arguments.length>1&&arguments[1]!==void 0&&arguments[1],o=this.options,r=o.duration,h=o.panelClass,l=e.querySelector(d(h)),v=y("transitionDuration");l.style[v]=i?null:"".concat(r,"ms")},generateIDs:function(e){var i=this.options,o=i.triggerClass,r=i.panelClass,h=e.querySelector(d(o)),l=e.querySelector(d(r));e.setAttribute("id",e.id||"ac-".concat(s)),h.setAttribute("id",h.id||"ac-trigger-".concat(s)),l.setAttribute("id",l.id||"ac-panel-".concat(s))},removeIDs:function(e){var i=this.options,o=i.triggerClass,r=i.panelClass,h=e.querySelector(d(o)),l=e.querySelector(d(r));e.id.startsWith("ac-")&&e.removeAttribute("id"),h.id.startsWith("ac-")&&h.removeAttribute("id"),l.id.startsWith("ac-")&&l.removeAttribute("id")},setARIA:function(e){var i=this.options,o=i.ariaEnabled,r=i.triggerClass,h=i.panelClass;if(o){var l=e.querySelector(d(r)),v=e.querySelector(d(h));l.setAttribute("role","button"),l.setAttribute("aria-controls",v.id),l.setAttribute("aria-disabled",!1),l.setAttribute("aria-expanded",!1),v.setAttribute("role","region"),v.setAttribute("aria-labelledby",l.id)}},updateARIA:function(e,i){var o=i.ariaExpanded,r=i.ariaDisabled,h=this.options,l=h.ariaEnabled,v=h.triggerClass;if(l){var b=e.querySelector(d(v));b.setAttribute("aria-expanded",o),b.setAttribute("aria-disabled",r)}},removeARIA:function(e){var i=this.options,o=i.ariaEnabled,r=i.triggerClass,h=i.panelClass;if(o){var l=e.querySelector(d(r)),v=e.querySelector(d(h));l.removeAttribute("role"),l.removeAttribute("aria-controls"),l.removeAttribute("aria-disabled"),l.removeAttribute("aria-expanded"),v.removeAttribute("role"),v.removeAttribute("aria-labelledby")}},focus:function(e,i){e.preventDefault();var o=this.options.triggerClass;i.querySelector(d(o)).focus()},focusFirstElement:function(e){this.focus(e,this.firstElement),this.currFocusedIdx=0},focusLastElement:function(e){this.focus(e,this.lastElement),this.currFocusedIdx=this.elements.length-1},focusNextElement:function(e){var i=this.currFocusedIdx+1;if(i>this.elements.length-1)return this.focusFirstElement(e);this.focus(e,this.elements[i]),this.currFocusedIdx=i},focusPrevElement:function(e){var i=this.currFocusedIdx-1;if(i<0)return this.focusLastElement(e);this.focus(e,this.elements[i]),this.currFocusedIdx=i},showElement:function(e){var i=!(arguments.length>1&&arguments[1]!==void 0)||arguments[1],o=this.options,r=o.panelClass,h=o.activeClass,l=o.collapse,v=o.beforeOpen;i&&v(e);var b=e.querySelector(d(r)),T=b.scrollHeight;e.classList.add(h),requestAnimationFrame(function(){requestAnimationFrame(function(){b.style.height=i?"".concat(T,"px"):"auto"})}),this.updateARIA(e,{ariaExpanded:!0,ariaDisabled:!l})},closeElement:function(e){var i=!(arguments.length>1&&arguments[1]!==void 0)||arguments[1],o=this.options,r=o.panelClass,h=o.activeClass,l=o.beforeClose,v=e.querySelector(d(r)),b=v.scrollHeight;e.classList.remove(h),i?(l(e),requestAnimationFrame(function(){v.style.height="".concat(b,"px"),requestAnimationFrame(function(){v.style.height=0})})):v.style.height=0,this.updateARIA(e,{ariaExpanded:!1,ariaDisabled:!1})},toggleElement:function(e){var i=this.options,o=i.activeClass,r=i.collapse,h=e.classList.contains(o);if(!h||r)return h?this.closeElement(e):this.showElement(e)},closeElements:function(){var e=this,i=this.options,o=i.activeClass;i.showMultiple||this.elements.forEach(function(r,h){r.classList.contains(o)&&h!==e.currFocusedIdx&&e.closeElement(r)})},handleClick:function(e){var i=this,o=e.currentTarget;this.elements.forEach(function(r,h){r.contains(o)&&e.target.nodeName!=="A"&&(i.currFocusedIdx=h,i.closeElements(),i.focus(e,r),i.toggleElement(r))})},handleKeydown:function(e){switch(e.key){case"ArrowUp":return this.focusPrevElement(e);case"ArrowDown":return this.focusNextElement(e);case"Home":return this.focusFirstElement(e);case"End":return this.focusLastElement(e);default:return null}},handleFocus:function(e){var i=e.currentTarget,o=this.elements.find(function(r){return r.contains(i)});this.currFocusedIdx=this.elements.indexOf(o)},handleTransitionEnd:function(e){if(e.stopPropagation(),e.propertyName==="height"){var i=this.options,o=i.onOpen,r=i.onClose,h=e.currentTarget,l=parseInt(h.style.height),v=this.elements.find(function(b){return b.contains(h)});l>0?(h.style.height="auto",o(v)):r(v)}}};this.attachEvents=function(){if(!m){var e=n.options,i=e.triggerClass,o=e.panelClass;n.handleClick=n.handleClick.bind(n),n.handleKeydown=n.handleKeydown.bind(n),n.handleFocus=n.handleFocus.bind(n),n.handleTransitionEnd=n.handleTransitionEnd.bind(n),n.elements.forEach(function(r){var h=r.querySelector(d(i)),l=r.querySelector(d(o));h.addEventListener("click",n.handleClick),h.addEventListener("keydown",n.handleKeydown),h.addEventListener("focus",n.handleFocus),l.addEventListener("webkitTransitionEnd",n.handleTransitionEnd),l.addEventListener("transitionend",n.handleTransitionEnd)}),m=!0}},this.detachEvents=function(){if(m){var e=n.options,i=e.triggerClass,o=e.panelClass;n.elements.forEach(function(r){var h=r.querySelector(d(i)),l=r.querySelector(d(o));h.removeEventListener("click",n.handleClick),h.removeEventListener("keydown",n.handleKeydown),h.removeEventListener("focus",n.handleFocus),l.removeEventListener("webkitTransitionEnd",n.handleTransitionEnd),l.removeEventListener("transitionend",n.handleTransitionEnd)}),m=!1}},this.toggle=function(e){var i=n.elements[e];i&&n.toggleElement(i)},this.open=function(e){var i=n.elements[e];i&&n.showElement(i)},this.openAll=function(){var e=n.options,i=e.activeClass,o=e.onOpen;n.elements.forEach(function(r){r.classList.contains(i)||(n.showElement(r,!1),o(r))})},this.close=function(e){var i=n.elements[e];i&&n.closeElement(i)},this.closeAll=function(){var e=n.options,i=e.activeClass,o=e.onClose;n.elements.forEach(function(r){r.classList.contains(i)&&(n.closeElement(r,!1),o(r))})},this.destroy=function(){E.detachEvents(),E.openAll(),n.elements.forEach(function(e){n.removeIDs(e),n.removeARIA(e),n.setTransition(e,!0)}),m=!0},this.update=function(){n.createDefinitions(),E.detachEvents(),E.attachEvents()};var y=function(e){return typeof document.documentElement.style[e]=="string"?e:(e=g(e),e="webkit".concat(e))},g=function(e){return e.charAt(0).toUpperCase()+e.slice(1)},d=function(e){return".".concat(CSS.escape(e))};n.init()};f.exports!==void 0?f.exports=a:t.Accordion=a})(window)})(L);var O=L.exports;const F=R(O);export{F as A,q as L};
