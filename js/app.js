(()=>{var e,t={988:()=>{document.addEventListener("DOMContentLoaded",(function(){var e,t=document.querySelector(".login-signup-popup"),o=document.querySelector(".login-signup-close");function n(){t&&(t.classList.add("opacity-0"),setTimeout((function(){t.classList.add("pointer-events-none")}),300),sessionStorage.setItem("loginPopupClosed","true"))}sessionStorage.getItem("loginPopupClosed")||setTimeout((function(){t&&!sessionStorage.getItem("loginPopupClosed")&&(t.classList.remove("pointer-events-none"),t.classList.remove("opacity-0"),setTimeout(n,5e3))}),500),window.addEventListener("scroll",(function(){!t||t.classList.contains("opacity-0")||sessionStorage.getItem("loginPopupClosed")||(clearTimeout(e),e=setTimeout(n,150))}),{passive:!0}),o&&o.addEventListener("click",(function(e){e.preventDefault(),n()})),document.addEventListener("keydown",(function(e){"Escape"===e.key&&t&&!t.classList.contains("opacity-0")&&n()}))}))},547:()=>{},566:()=>{}},o={};function n(e){var s=o[e];if(void 0!==s)return s.exports;var i=o[e]={exports:{}};return t[e](i,i.exports,n),i.exports}n.m=t,e=[],n.O=(t,o,s,i)=>{if(!o){var r=1/0;for(u=0;u<e.length;u++){for(var[o,s,i]=e[u],a=!0,c=0;c<o.length;c++)(!1&i||r>=i)&&Object.keys(n.O).every((e=>n.O[e](o[c])))?o.splice(c--,1):(a=!1,i<r&&(r=i));if(a){e.splice(u--,1);var l=s();void 0!==l&&(t=l)}}return t}i=i||0;for(var u=e.length;u>0&&e[u-1][2]>i;u--)e[u]=e[u-1];e[u]=[o,s,i]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={847:0,992:0,252:0};n.O.j=t=>0===e[t];var t=(t,o)=>{var s,i,[r,a,c]=o,l=0;if(r.some((t=>0!==e[t]))){for(s in a)n.o(a,s)&&(n.m[s]=a[s]);if(c)var u=c(n)}for(t&&t(o);l<r.length;l++)i=r[l],n.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return n.O(u)},o=self.webpackChunktailpress=self.webpackChunktailpress||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})(),n.O(void 0,[992,252],(()=>n(988))),n.O(void 0,[992,252],(()=>n(547)));var s=n.O(void 0,[992,252],(()=>n(566)));s=n.O(s)})();