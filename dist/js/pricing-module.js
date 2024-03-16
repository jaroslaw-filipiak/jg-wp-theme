(function(){const l=document.createElement("link").relList;if(l&&l.supports&&l.supports("modulepreload"))return;for(const d of document.querySelectorAll('link[rel="modulepreload"]'))u(d);new MutationObserver(d=>{for(const r of d)if(r.type==="childList")for(const m of r.addedNodes)m.tagName==="LINK"&&m.rel==="modulepreload"&&u(m)}).observe(document,{childList:!0,subtree:!0});function g(d){const r={};return d.integrity&&(r.integrity=d.integrity),d.referrerPolicy&&(r.referrerPolicy=d.referrerPolicy),d.crossOrigin==="use-credentials"?r.credentials="include":d.crossOrigin==="anonymous"?r.credentials="omit":r.credentials="same-origin",r}function u(d){if(d.ep)return;d.ep=!0;const r=g(d);fetch(d.href,r)}})();function j(c){return c&&c.__esModule&&Object.prototype.hasOwnProperty.call(c,"default")?c.default:c}var y={exports:{}};(function(c){(function(l){var g=0,u=function d(r,m){var f=this,v=this,_=!1;if(Array.isArray(r))return!!r.length&&r.map(function(e){return new d(e,m)});var i={init:function(){this.options=Object.assign({duration:600,ariaEnabled:!0,collapse:!0,showMultiple:!1,onlyChildNodes:!0,openOnInit:[],elementClass:"ac",triggerClass:"ac-trigger",panelClass:"ac-panel",activeClass:"is-active",beforeOpen:function(){},onOpen:function(){},beforeClose:function(){},onClose:function(){}},m);var e=typeof r=="string";this.container=e?document.querySelector(r):r,this.createDefinitions(),v.attachEvents()},createDefinitions:function(){var e=this,t=this.options,o=t.elementClass,s=t.openOnInit,a=t.onlyChildNodes?this.container.childNodes:this.container.querySelectorAll(h(o));this.elements=Array.from(a).filter(function(n){return n.classList&&n.classList.contains(o)}),this.firstElement=this.elements[0],this.lastElement=this.elements[this.elements.length-1],this.elements.filter(function(n){return!n.classList.contains("js-enabled")}).forEach(function(n){n.classList.add("js-enabled"),e.generateIDs(n),e.setARIA(n),e.setTransition(n);var p=e.elements.indexOf(n);g++,s.includes(p)?e.showElement(n,!1):e.closeElement(n,!1)})},setTransition:function(e){var t=arguments.length>1&&arguments[1]!==void 0&&arguments[1],o=this.options,s=o.duration,a=o.panelClass,n=e.querySelector(h(a)),p=E("transitionDuration");n.style[p]=t?null:"".concat(s,"ms")},generateIDs:function(e){var t=this.options,o=t.triggerClass,s=t.panelClass,a=e.querySelector(h(o)),n=e.querySelector(h(s));e.setAttribute("id",e.id||"ac-".concat(g)),a.setAttribute("id",a.id||"ac-trigger-".concat(g)),n.setAttribute("id",n.id||"ac-panel-".concat(g))},removeIDs:function(e){var t=this.options,o=t.triggerClass,s=t.panelClass,a=e.querySelector(h(o)),n=e.querySelector(h(s));e.id.startsWith("ac-")&&e.removeAttribute("id"),a.id.startsWith("ac-")&&a.removeAttribute("id"),n.id.startsWith("ac-")&&n.removeAttribute("id")},setARIA:function(e){var t=this.options,o=t.ariaEnabled,s=t.triggerClass,a=t.panelClass;if(o){var n=e.querySelector(h(s)),p=e.querySelector(h(a));n.setAttribute("role","button"),n.setAttribute("aria-controls",p.id),n.setAttribute("aria-disabled",!1),n.setAttribute("aria-expanded",!1),p.setAttribute("role","region"),p.setAttribute("aria-labelledby",n.id)}},updateARIA:function(e,t){var o=t.ariaExpanded,s=t.ariaDisabled,a=this.options,n=a.ariaEnabled,p=a.triggerClass;if(n){var w=e.querySelector(h(p));w.setAttribute("aria-expanded",o),w.setAttribute("aria-disabled",s)}},removeARIA:function(e){var t=this.options,o=t.ariaEnabled,s=t.triggerClass,a=t.panelClass;if(o){var n=e.querySelector(h(s)),p=e.querySelector(h(a));n.removeAttribute("role"),n.removeAttribute("aria-controls"),n.removeAttribute("aria-disabled"),n.removeAttribute("aria-expanded"),p.removeAttribute("role"),p.removeAttribute("aria-labelledby")}},focus:function(e,t){e.preventDefault();var o=this.options.triggerClass;t.querySelector(h(o)).focus()},focusFirstElement:function(e){this.focus(e,this.firstElement),this.currFocusedIdx=0},focusLastElement:function(e){this.focus(e,this.lastElement),this.currFocusedIdx=this.elements.length-1},focusNextElement:function(e){var t=this.currFocusedIdx+1;if(t>this.elements.length-1)return this.focusFirstElement(e);this.focus(e,this.elements[t]),this.currFocusedIdx=t},focusPrevElement:function(e){var t=this.currFocusedIdx-1;if(t<0)return this.focusLastElement(e);this.focus(e,this.elements[t]),this.currFocusedIdx=t},showElement:function(e){var t=!(arguments.length>1&&arguments[1]!==void 0)||arguments[1],o=this.options,s=o.panelClass,a=o.activeClass,n=o.collapse,p=o.beforeOpen;t&&p(e);var w=e.querySelector(h(s)),S=w.scrollHeight;e.classList.add(a),requestAnimationFrame(function(){requestAnimationFrame(function(){w.style.height=t?"".concat(S,"px"):"auto"})}),this.updateARIA(e,{ariaExpanded:!0,ariaDisabled:!n})},closeElement:function(e){var t=!(arguments.length>1&&arguments[1]!==void 0)||arguments[1],o=this.options,s=o.panelClass,a=o.activeClass,n=o.beforeClose,p=e.querySelector(h(s)),w=p.scrollHeight;e.classList.remove(a),t?(n(e),requestAnimationFrame(function(){p.style.height="".concat(w,"px"),requestAnimationFrame(function(){p.style.height=0})})):p.style.height=0,this.updateARIA(e,{ariaExpanded:!1,ariaDisabled:!1})},toggleElement:function(e){var t=this.options,o=t.activeClass,s=t.collapse,a=e.classList.contains(o);if(!a||s)return a?this.closeElement(e):this.showElement(e)},closeElements:function(){var e=this,t=this.options,o=t.activeClass;t.showMultiple||this.elements.forEach(function(s,a){s.classList.contains(o)&&a!==e.currFocusedIdx&&e.closeElement(s)})},handleClick:function(e){var t=this,o=e.currentTarget;this.elements.forEach(function(s,a){s.contains(o)&&e.target.nodeName!=="A"&&(t.currFocusedIdx=a,t.closeElements(),t.focus(e,s),t.toggleElement(s))})},handleKeydown:function(e){switch(e.key){case"ArrowUp":return this.focusPrevElement(e);case"ArrowDown":return this.focusNextElement(e);case"Home":return this.focusFirstElement(e);case"End":return this.focusLastElement(e);default:return null}},handleFocus:function(e){var t=e.currentTarget,o=this.elements.find(function(s){return s.contains(t)});this.currFocusedIdx=this.elements.indexOf(o)},handleTransitionEnd:function(e){if(e.stopPropagation(),e.propertyName==="height"){var t=this.options,o=t.onOpen,s=t.onClose,a=e.currentTarget,n=parseInt(a.style.height),p=this.elements.find(function(w){return w.contains(a)});n>0?(a.style.height="auto",o(p)):s(p)}}};this.attachEvents=function(){if(!_){var e=i.options,t=e.triggerClass,o=e.panelClass;i.handleClick=i.handleClick.bind(i),i.handleKeydown=i.handleKeydown.bind(i),i.handleFocus=i.handleFocus.bind(i),i.handleTransitionEnd=i.handleTransitionEnd.bind(i),i.elements.forEach(function(s){var a=s.querySelector(h(t)),n=s.querySelector(h(o));a.addEventListener("click",i.handleClick),a.addEventListener("keydown",i.handleKeydown),a.addEventListener("focus",i.handleFocus),n.addEventListener("webkitTransitionEnd",i.handleTransitionEnd),n.addEventListener("transitionend",i.handleTransitionEnd)}),_=!0}},this.detachEvents=function(){if(_){var e=i.options,t=e.triggerClass,o=e.panelClass;i.elements.forEach(function(s){var a=s.querySelector(h(t)),n=s.querySelector(h(o));a.removeEventListener("click",i.handleClick),a.removeEventListener("keydown",i.handleKeydown),a.removeEventListener("focus",i.handleFocus),n.removeEventListener("webkitTransitionEnd",i.handleTransitionEnd),n.removeEventListener("transitionend",i.handleTransitionEnd)}),_=!1}},this.toggle=function(e){var t=i.elements[e];t&&i.toggleElement(t)},this.open=function(e){var t=i.elements[e];t&&i.showElement(t)},this.openAll=function(){var e=i.options,t=e.activeClass,o=e.onOpen;i.elements.forEach(function(s){s.classList.contains(t)||(i.showElement(s,!1),o(s))})},this.close=function(e){var t=i.elements[e];t&&i.closeElement(t)},this.closeAll=function(){var e=i.options,t=e.activeClass,o=e.onClose;i.elements.forEach(function(s){s.classList.contains(t)&&(i.closeElement(s,!1),o(s))})},this.destroy=function(){f.detachEvents(),f.openAll(),i.elements.forEach(function(e){i.removeIDs(e),i.removeARIA(e),i.setTransition(e,!0)}),_=!0},this.update=function(){i.createDefinitions(),f.detachEvents(),f.attachEvents()};var E=function(e){return typeof document.documentElement.style[e]=="string"?e:(e=A(e),e="webkit".concat(e))},A=function(e){return e.charAt(0).toUpperCase()+e.slice(1)},h=function(e){return".".concat(CSS.escape(e))};i.init()};c.exports!==void 0?c.exports=u:l.Accordion=u})(window)})(y);var P=y.exports;const L=j(P);var D={ALLUSERSPROFILE:"C:\\ProgramData",ANDROID_HOME:"C:\\Users\\jarek\\AppData\\Local\\Android\\Sdk",APPDATA:"C:\\Users\\jarek\\AppData\\Roaming",ChocolateyInstall:"C:\\ProgramData\\chocolatey",ChocolateyLastPathUpdate:"133523182576967005",CHROME_CRASHPAD_PIPE_NAME:"\\\\.\\pipe\\crashpad_732_HVPHJLWISABFIJRW",COLOR:"1",COLORTERM:"truecolor",CommonProgramFiles:"C:\\Program Files\\Common Files","CommonProgramFiles(x86)":"C:\\Program Files (x86)\\Common Files",CommonProgramW6432:"C:\\Program Files\\Common Files",COMPUTERNAME:"JAREK",ComSpec:"C:\\Windows\\system32\\cmd.exe",DriverData:"C:\\Windows\\System32\\Drivers\\DriverData",EDITOR:"C:\\Windows\\notepad.exe",EFC_7852:"1",GIT_ASKPASS:"c:\\Users\\jarek\\AppData\\Local\\Programs\\Microsoft VS Code\\resources\\app\\extensions\\git\\dist\\askpass.sh",HOME:"C:\\Users\\jarek",HOMEDRIVE:"C:",HOMEPATH:"\\Users\\jarek",INIT_CWD:"C:\\laragon\\www\\grafikonline\\wp-content\\themes\\grafikonline\\_front",JAVA_HOME:"C:\\Program Files\\Microsoft\\jdk-17.0.10.7-hotspot\\",LANG:"en_US.UTF-8",LOCALAPPDATA:"C:\\Users\\jarek\\AppData\\Local",LOGONSERVER:"\\\\JAREK",NODE:"C:\\Program Files\\nodejs\\node.exe",NODE_ENV:"production",NODE_EXE:"C:\\Program Files\\nodejs\\\\node.exe",NPM_CLI_JS:"C:\\Program Files\\nodejs\\node_modules\\npm\\bin\\npm-cli.js",npm_command:"run-script",npm_config_cache:"C:\\Users\\jarek\\AppData\\Local\\npm-cache",npm_config_globalconfig:"C:\\Program Files\\nodejs\\etc\\npmrc",npm_config_global_prefix:"C:\\Program Files\\nodejs",npm_config_init_module:"C:\\Users\\jarek\\.npm-init.js",npm_config_local_prefix:"C:\\laragon\\www\\grafikonline\\wp-content\\themes\\grafikonline\\_front",npm_config_node_gyp:"C:\\Users\\jarek\\AppData\\Roaming\\nvm\\v20.11.0\\node_modules\\npm\\node_modules\\node-gyp\\bin\\node-gyp.js",npm_config_noproxy:"",npm_config_npm_version:"10.2.4",npm_config_prefix:"C:\\Program Files\\nodejs",npm_config_userconfig:"C:\\Users\\jarek\\.npmrc",npm_config_user_agent:"npm/10.2.4 node/v20.11.0 win32 x64 workspaces/false",npm_execpath:"C:\\Users\\jarek\\AppData\\Roaming\\nvm\\v20.11.0\\node_modules\\npm\\bin\\npm-cli.js",npm_lifecycle_event:"build",npm_lifecycle_script:"vite build",npm_node_execpath:"C:\\Program Files\\nodejs\\node.exe",npm_package_json:"C:\\laragon\\www\\grafikonline\\wp-content\\themes\\grafikonline\\_front\\package.json",npm_package_name:"vite-project",npm_package_version:"0.0.0",NPM_PREFIX_NPM_CLI_JS:"C:\\Program Files\\nodejs\\node_modules\\npm\\bin\\npm-cli.js",NUMBER_OF_PROCESSORS:"12",NVM_HOME:"C:\\Users\\jarek\\AppData\\Roaming\\nvm",NVM_SYMLINK:"C:\\Program Files\\nodejs",OneDrive:"C:\\Users\\jarek\\OneDrive",OneDriveConsumer:"C:\\Users\\jarek\\OneDrive",ORIGINAL_XDG_CURRENT_DESKTOP:"undefined",OS:"Windows_NT",Path:"C:\\laragon\\www\\grafikonline\\wp-content\\themes\\grafikonline\\_front\\node_modules\\.bin;C:\\laragon\\www\\grafikonline\\wp-content\\themes\\grafikonline\\node_modules\\.bin;C:\\laragon\\www\\grafikonline\\wp-content\\themes\\node_modules\\.bin;C:\\laragon\\www\\grafikonline\\wp-content\\node_modules\\.bin;C:\\laragon\\www\\grafikonline\\node_modules\\.bin;C:\\laragon\\www\\node_modules\\.bin;C:\\laragon\\node_modules\\.bin;C:\\node_modules\\.bin;C:\\Users\\jarek\\AppData\\Roaming\\nvm\\v20.11.0\\node_modules\\npm\\node_modules\\@npmcli\\run-script\\lib\\node-gyp-bin;C:\\Program Files\\Microsoft\\jdk-17.0.10.7-hotspot\\bin;C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;C:\\Windows\\System32\\OpenSSH\\;C:\\Users\\jarek\\AppData\\Roaming\\nvm;C:\\Program Files\\nodejs;C:\\Program Files\\Git\\cmd;C:\\ProgramData\\chocolatey\\bin;C:\\Program Files\\dotnet\\;C:\\laragon\\bin;C:\\laragon\\bin\\apache\\httpd-2.4.54-win64-VS16\\bin;C:\\laragon\\bin\\composer;C:\\laragon\\bin\\git\\bin;C:\\laragon\\bin\\git\\cmd;C:\\laragon\\bin\\git\\mingw64\\bin;C:\\laragon\\bin\\git\\usr\\bin;C:\\laragon\\bin\\laragon\\utils;C:\\laragon\\bin\\mysql\\mysql-8.0.30-winx64\\bin;C:\\laragon\\bin\\nginx\\nginx-1.22.0;C:\\laragon\\bin\\ngrok;C:\\laragon\\bin\\nodejs\\node-v18;C:\\laragon\\bin\\notepad++;C:\\laragon\\bin\\php\\php-8.1.10-Win32-vs16-x64;C:\\laragon\\bin\\php\\php-8.3.3-nts-Win32-vs16-x64;C:\\laragon\\bin\\python\\python-3.10;C:\\laragon\\bin\\python\\python-3.10\\Scripts;C:\\laragon\\bin\\redis\\redis-x64-5.0.14.1;C:\\laragon\\bin\\telnet;C:\\laragon\\usr\\bin;C:\\Users\\jarek\\AppData\\Local\\Yarn\\config\\global\\node_modules\\.bin;C:\\Users\\jarek\\AppData\\Roaming\\Composer\\vendor\\bin;C:\\Users\\jarek\\AppData\\Roaming\\npm;C:\\Users\\jarek\\.console-ninja\\.bin;C:\\Users\\jarek\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\jarek\\AppData\\Roaming\\nvm;C:\\Program Files\\nodejs;C:\\Users\\jarek\\AppData\\Local\\Programs\\Microsoft VS Code\\bin;C:\\Users\\jarek\\.dotnet\\tools;",PATHEXT:".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.CPL",PROCESSOR_ARCHITECTURE:"AMD64",PROCESSOR_IDENTIFIER:"Intel64 Family 6 Model 165 Stepping 3, GenuineIntel",PROCESSOR_LEVEL:"6",PROCESSOR_REVISION:"a503",ProgramData:"C:\\ProgramData",ProgramFiles:"C:\\Program Files","ProgramFiles(x86)":"C:\\Program Files (x86)",ProgramW6432:"C:\\Program Files",PROMPT:"$P$G",PSModulePath:"C:\\Users\\jarek\\OneDrive\\Dokumenty\\WindowsPowerShell\\Modules;C:\\Program Files\\WindowsPowerShell\\Modules;C:\\Windows\\system32\\WindowsPowerShell\\v1.0\\Modules",PUBLIC:"C:\\Users\\Public",SESSIONNAME:"Console",SystemDrive:"C:",SystemRoot:"C:\\Windows",TEMP:"C:\\Users\\jarek\\AppData\\Local\\Temp",TERM_PROGRAM:"vscode",TERM_PROGRAM_VERSION:"1.87.2",TMP:"C:\\Users\\jarek\\AppData\\Local\\Temp",USERDOMAIN:"JAREK",USERDOMAIN_ROAMINGPROFILE:"JAREK",USERNAME:"jarek",USERPROFILE:"C:\\Users\\jarek",VSCODE_GIT_ASKPASS_EXTRA_ARGS:"",VSCODE_GIT_ASKPASS_MAIN:"c:\\Users\\jarek\\AppData\\Local\\Programs\\Microsoft VS Code\\resources\\app\\extensions\\git\\dist\\askpass-main.js",VSCODE_GIT_ASKPASS_NODE:"C:\\Users\\jarek\\AppData\\Local\\Programs\\Microsoft VS Code\\Code.exe",VSCODE_GIT_IPC_HANDLE:"\\\\.\\pipe\\vscode-git-5e56d1d991-sock",VSCODE_INJECTION:"1",windir:"C:\\Windows",VITE_APP_URL:"j-filipiak.pl/clients/grafikonline"};let C=0;const b=c=>{C+=c,x()},k=c=>{C-=c,x()},x=()=>{document.querySelector(".pricing__count .val").textContent=C,document.querySelector(".pricing__total-value").textContent=C;const c=document.querySelector(".pricing__footer"),l=document.querySelector(".pricing__total--mobile");window.innerWidth>1024&&(C?c.classList.add("lg:flex"):c.classList.remove("lg:flex")),window.innerWidth<1024&&(C?l.classList.add("flex"):l.classList.remove("flex"),C?l.classList.remove("hidden"):l.classList.add("hidden"))},O=async()=>{console.log("fetchPricing");const l=await(await fetch(`https://${D.VITE_APP_URL}/wp-json/options/pricing`)).json(),g=document.querySelector(".pricing__items"),u=l.map(r=>`
    <div class="ac" data-selected="false">
    <div
      class="ac-header  pl-5 pr-5 flex items-center justify-between dark:bg-dark dark:lg:bg-darkMain bg-light pt-[9px] pb-[9px]">
      <button type="button" class="ac-trigger pricing__area-title max-lg:w-full">
        <span class="text-light text-[16px] lg:text-[20px] flex">${r.title}</span>
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
      <span>${r.price}</span> ,-
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
      <div class="text-light text-[16px] lg:hidden">${r.price},-</div>
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
    `);console.log(l),console.log(u),g.innerHTML+=u.join("")},R=()=>{console.log("handlePricingAccordions"),new L(".pricing__items",{duration:130,triggerClass:"pricing__trigger",beforeOpen:function(c){console.log(c);const l=c.querySelector(".pricing__trigger");c.querySelector(".accordion__pricing-trigger-wrapper").classList.add("accordion-bg-dark3"),l.textContent="Zwiń"},onClose:function(c){console.log(c);const l=c.querySelector(".pricing__trigger");c.querySelector(".accordion__pricing-trigger-wrapper").classList.remove("accordion-bg-dark3"),l.textContent="Szczegóły usługi"}})},M=()=>{if(window.innerWidth>1024){const l=document.querySelectorAll(".pricing__area-icon--desktop"),g=Array.from(l);console.log(g),g.map(u=>{u.addEventListener("click",d=>{const r=d.target.closest(".ac");console.log(r);const m=r.querySelector(".pricing__area-icon--plus--desktop"),f=r.querySelector(".pricing__area-icon--check--desktop");console.log(f);const v=Number(r.querySelector(".pricing__area-price span").innerText);r.dataset.selected==="true"?(r.dataset.selected="false",k(v),f.classList.toggle("hidden"),m.classList.toggle("hidden"),window.setTimeout(()=>{},200)):(r.dataset.selected="true",b(v),f.classList.toggle("hidden"),m.classList.toggle("hidden"),window.setTimeout(()=>{},200))})})}if(window.innerWidth<1024){const l=document.querySelectorAll(".pricing__area-icon--mobile"),g=Array.from(l);console.log(g),g.map(u=>{u.addEventListener("click",d=>{const r=d.target.closest(".ac");console.log(r);const m=r.querySelector(".pricing__area-icon--plus--mobile"),f=r.querySelector(".pricing__area-icon--check--mobile");console.log(f);const v=Number(r.querySelector(".pricing__area-price span").innerText);console.log(v),r.dataset.selected==="true"?(r.dataset.selected="false",k(v),f.classList.toggle("hidden"),m.classList.toggle("hidden"),window.setTimeout(()=>{},200)):(r.dataset.selected="true",b(v),f.classList.toggle("hidden"),m.classList.toggle("hidden"),window.setTimeout(()=>{},200))})})}console.log(0)},I=()=>{document.querySelector(".pricing__searchbox").addEventListener("input",l=>{const g=document.querySelectorAll(".pricing__items .ac"),u=Array.from(g);u.map(m=>{const f=m.querySelector(".pricing__area-title").textContent.toLowerCase(),v=l.target.value.toLowerCase(),_=f.includes(v);console.log(_),_?m.classList.remove("ac-hidden"):m.classList.add("ac-hidden")});const d=u.filter(m=>!m.classList.contains("ac-hidden")),r=document.querySelector(".no-results");d.length?r.classList.add("no-results__hidden"):r.classList.remove("no-results__hidden"),console.log(d)})},F=()=>{const c=document.querySelector("#pricing"),l=document.querySelector(".pricing__trigger");document.querySelector(".pricing__close-icon").addEventListener("click",u=>{u.preventDefault(),document.body.classList.remove("is-popup"),document.documentElement.classList.remove("is-popup"),c.classList.remove("is-pricing-active")}),l.addEventListener("click",u=>{u.preventDefault(),document.body.classList.add("is-popup"),document.documentElement.classList.add("is-popup"),console.log("pricing trigger clicked"),c.classList.add("is-pricing-active")})};function T(){window.addEventListener("DOMContentLoaded",()=>{O().then(()=>{R()}).then(()=>{M(),I(),F()})})}export{L as A,T as p};
